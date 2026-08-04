<?php
// Simulate GLPI environment for direct test without Apache timeouts
$_SERVER['REQUEST_METHOD'] = 'POST';
$_POST['query'] = "I have mssql server there 1 db went offline how to bring it";
$_POST['tickets_id'] = 9;

// Mock session
$_SESSION['glpicookietest'] = 'test';
require_once "d:/php/htdocs/tek-service-now/inc/includes.php";
$_POST['_glpi_csrf_token'] = \Session::getNewCSRFToken();

echo "Starting direct execution of ajax/chat.php logic...\n";

// Let's capture the buffer
ob_start();
try {
    require "d:/php/htdocs/tek-service-now/plugins/suggest/ajax/chat.php";
} catch (\Throwable $e) {
    echo "\n\nCRITICAL EXCEPTION CAUGHT: " . $e->getMessage() . "\n";
    echo $e->getTraceAsString() . "\n";
}
$output = ob_get_clean();

echo "--- OUTPUT BEGIN ---\n";
echo $output;
echo "\n--- OUTPUT END ---\n";
