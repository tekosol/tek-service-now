<?php
// Simulate Browser Request properly with a large timeout!
$ch = curl_init('http://localhost/tek-service-now/plugins/suggest/ajax/chat.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
// We don't have a valid CSRF token in this standalone script.
// Wait! To get a valid CSRF token, we first need to hit a page to start a session!
// Let's just create a raw request bypassing CSRF by disabling the check temporarily in chat.php?
// No, I can't. 
