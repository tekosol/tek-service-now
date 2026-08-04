<?php
$ch = curl_init('http://localhost/tek-service-now/plugins/suggest/ajax/chat.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, "query=" . urlencode("I have mssql server there 1 db went offline how to bring it") . "&tickets_id=9");
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
$res = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
if ($res === FALSE) {
    echo "FAILED: " . curl_error($ch) . "\n";
} else {
    echo "HTTP CODE: $http_code\n";
    echo substr($res, 0, 1000) . "\n";
}
curl_close($ch);
