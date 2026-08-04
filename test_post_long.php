<?php
$url = "http://127.0.0.1:11434/api/generate";
$data = [
   "model" => "llama3:latest",
   "prompt" => "Hi",
   "stream" => false
];

echo "Testing POST to $url with no timeout...\n";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_TIMEOUT, 120); // 2 minutes
curl_setopt($ch, CURLOPT_PROXY, '');
$start = time();
$res = curl_exec($ch);
$duration = time() - $start;
if ($res === FALSE) {
    echo "  Result: FAILED (" . curl_error($ch) . ") after {$duration}s\n";
} else {
    echo "  Result: SUCCESS! after {$duration}s\n";
    $json = json_decode($res, true);
    echo "Response: " . substr($res, 0, 200) . "\n";
}
curl_close($ch);
