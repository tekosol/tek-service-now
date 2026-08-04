<?php
$url = "http://127.0.0.1:11434/api/generate";
$data = [
   "model" => "llama3:latest",
   "prompt" => "Hi",
   "stream" => false
];

echo "Testing POST to $url...\n";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_PROXY, '');
$res = curl_exec($ch);
if ($res === FALSE) {
    echo "  Result: FAILED (" . curl_error($ch) . ")\n";
} else {
    echo "  Result: SUCCESS!\n";
    print_r(json_decode($res, true));
}
curl_close($ch);
