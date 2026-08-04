<?php
define('GLPI_KEEP_CSRF_TOKEN', true); // Do not consume the CSRF token so users can send multiple messages

include_once "../../../inc/includes.php";

header('Content-Type: application/json');
set_time_limit(300); // Sync with Apache 300s global timeout

$query = $_POST['query'] ?? '';
$tickets_id = $_POST['tickets_id'] ?? 0;

if (empty($query)) {
   echo json_encode(['answer' => 'Please provide a question.']);
   exit;
}

// Check for existing cached AI inference for this ticket
if ($tickets_id > 0) {
    $cache_file = __DIR__ . "/../cache/ticket_{$tickets_id}.txt";
    if (file_exists($cache_file)) {
        echo json_encode(['answer' => file_get_contents($cache_file)]);
        exit;
    }
}

global $DB;
$context = "";

// 1. Fetch available KB Titles to let AI intelligently route the user
$available_kbs = [];
$iter_titles = $DB->request(['SELECT' => ['id', 'name'], 'FROM' => 'glpi_knowbaseitems', 'LIMIT' => 50]);
$doc_list_text = "";
foreach ($iter_titles as $row) {
    if (!empty(trim($row['name']))) {
        $doc_list_text .= "ID " . $row['id'] . ": " . $row['name'] . "\n";
    }
}

// 2. Ask Ollama to semantically match the Ticket Issue to the KB Titles
$ollama_url = "http://10.1.24.25:11434/api/generate";
$routing_prompt = "You are a STRICT AI IT Router. 
User Issue: '$query'

Available Documents:
$doc_list_text

CRITICAL RULES:
1. You MUST ONLY select a Document ID if the User Issue is clearly related to the Document's title. Be smart with synonyms (e.g. 'DB' = 'Database').
2. If the User Issue is gibberish (e.g. 'ert', 'asdf'), too short, or completely unrelated to any document, you MUST output '0'.
3. Output ONLY a comma-separated list of the matching IDs (e.g. '1, 4').
4. Output '0' if absolutely none match.
5. Do NOT output any words, explanations, or reasoning. Only numbers.";

$data = [
   "model" => "llama3:latest",
   "prompt" => $routing_prompt,
   "stream" => false,
   "options" => [
      "num_predict" => 15, // Extremely fast because it only outputs numbers
      "temperature" => 0.0 // Zero temperature for strict logic
   ]
];

// CRITICAL: Close the PHP session before waiting for the AI Router, otherwise GLPI completely freezes for this user!
session_write_close();

$ch = curl_init($ollama_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_TIMEOUT, 60); 
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
$result = curl_exec($ch);
curl_close($ch);

$matched_ids = [];
$ai_returned_zero = false;

if ($result !== FALSE) {
    $json = json_decode($result, true);
    if (isset($json['response'])) {
        $ai_out = trim($json['response']);
        
        if ($ai_out === '0' || strpos($ai_out, '0') === 0) {
            $ai_returned_zero = true;
        } else {
            // Parse numbers out of AI string
            preg_match_all('/\d+/', $ai_out, $matches);
            if (!empty($matches[0])) {
                foreach ($matches[0] as $match_id) {
                    if ($match_id > 0) $matched_ids[] = (int)$match_id;
                }
            }
        }
    }
}

if (empty($matched_ids) && !$ai_returned_zero) {
    // Fallback to strict SQL ONLY if AI routing failed/timed out (not if it explicitly rejected)
    $words = array_filter(explode(" ", strtolower($query)), function($w) {
        return strlen(trim($w)) > 3; 
    });
    if (empty($words)) $words = [strtolower(trim($query))];
    $or_matching = [];
    foreach ($words as $w) {
        $clean_w = $DB->escape(trim($w));
        $or_matching[] = ['glpi_knowbaseitems.name'   => ['LIKE', "%$clean_w%"]];
    }
    
    $iter_fallback = $DB->request([
        'SELECT' => ['id'], 'FROM' => 'glpi_knowbaseitems',
        'WHERE' => ['OR' => $or_matching], 'LIMIT' => 3
    ]);
    foreach ($iter_fallback as $f_row) {
        $matched_ids[] = $f_row['id'];
    }
}
$context = "";

// 3. Output the exact documents for those matched semantic IDs
if (!empty($matched_ids)) {
    $matched_ids_str = implode(",", array_unique($matched_ids));
    
    $iterator = $DB->request([
        'SELECT' => [
            'glpi_knowbaseitems.name AS kb_name', 
            'glpi_knowbaseitems.answer', 
            'glpi_documents.filename', 
            'glpi_documents.filepath'
        ],
        'FROM'   => 'glpi_knowbaseitems',
        'LEFT JOIN' => [
            'glpi_documents_items' => [
                'ON' => [
                    'glpi_documents_items' => 'items_id',
                    'glpi_knowbaseitems'   => 'id',
                    [
                        'AND' => ['glpi_documents_items.itemtype' => 'KnowbaseItem']
                    ]
                ]
            ],
            'glpi_documents' => [
                'ON' => [
                    'glpi_documents'       => 'id',
                    'glpi_documents_items' => 'documents_id'
                ]
            ]
        ],
        'WHERE'  => ['glpi_knowbaseitems.id' => array_unique($matched_ids)]
    ]);
    
    foreach ($iterator as $row) {
        $kb_content = trim(strip_tags($row['answer']));
        
        $context .= "\n📘 **" . $row['kb_name'] . "**:\n" . $kb_content . "\n";
        
        if (!empty($row['filepath'])) {
            $doc_path = GLPI_DOC_DIR . "/" . $row['filepath'];
            if (file_exists($doc_path) && str_ends_with(strtolower($row['filename']), '.txt')) {
                $doc_content = file_get_contents($doc_path);
                $context .= "\n📎 Attached Document (" . $row['filename'] . "):\n" . trim(strip_tags($doc_content)) . "\n";
            }
        }
        $context .= "\n";
    }
}

if (!empty(trim($context))) {
    $final_answer = "Here are the smart-matched Knowledge Base articles for your issue:\n" . $context;
} else {
    $final_answer = "No matching internal documents were found (tried synonyms and exact paths).";
}

// CACHE The result permanently, even if it's a "No Match", so the ticket loads instantly instead of re-searching!
if ($tickets_id > 0) {
    file_put_contents($cache_file, $final_answer);
}

echo json_encode(['answer' => $final_answer]);
exit;
