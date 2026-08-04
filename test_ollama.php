<?php
$url = "http://127.0.0.1:11434/api/tags";
echo "Testing connection to $url\n";

// Test 1: file_get_contents
echo "\nTest 1: file_get_contents\n";
if (ini_get('allow_url_fopen')) {
    $res = @file_get_contents($url);
    if ($res === FALSE) {
        $error = error_get_last();
        echo "Failed: " . ($error['message'] ?? 'Unknown error') . "\n";
    } else {
        echo "Success!\n";
    }
} else {
    echo "allow_url_fopen is disabled.\n";
}

// Test 2: cURL
echo "\nTest 2: cURL\n";
if (function_exists('curl_init')) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    $res = curl_exec($ch);
    if ($res === FALSE) {
        echo "Failed: " . curl_error($ch) . "\n";
    } else {
        echo "Success!\n";
    }
    curl_close($ch);
} else {
    echo "cURL extension is not installed.\n";
}
