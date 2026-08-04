<?php
$ips = ["127.0.0.1", "localhost", "10.1.24.25"];
foreach ($ips as $ip) {
    $url = "http://$ip:11434/api/tags";
    echo "Testing $url...\n";
    
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 3);
    curl_setopt($ch, CURLOPT_PROXY, '');
    $res = curl_exec($ch);
    if ($res === FALSE) {
        echo "  Result: FAILED (" . curl_error($ch) . ")\n";
    } else {
        echo "  Result: SUCCESS!\n";
    }
    curl_close($ch);
}
