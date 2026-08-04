<?php
define('GLPI_ROOT', __DIR__);
require_once "vendor/autoload.php";
use Glpi\Kernel\Kernel;
$kernel = new Kernel();


$ticket = new Ticket();
if ($ticket->getFromDB(9)) {
    echo "Ticket ID: 9\n";
    echo "Status: " . $ticket->fields['status'] . "\n";
    echo "Can Edit: " . ($ticket->canUpdateItem() ? "Yes" : "No") . "\n";
    
    $options = ['id' => 9];
    echo "Can Update Assigned To: " . (Session::haveRight("ticket", Ticket::ASSIGN) ? "Yes" : "No") . "\n";
    echo "Can Own Ticket: " . (Session::haveRight("ticket", Ticket::OWN) ? "Yes" : "No") . "\n";
    
    // Check if any plugin is making it readonly
    $PLUGIN_HOOKS = $GLOBALS['PLUGIN_HOOKS'] ?? [];
    echo "Active Plugins: " . implode(", ", array_keys($PLUGIN_HOOKS['csrf_compliant'] ?? [])) . "\n";
} else {
    echo "Ticket 9 not found\n";
}
