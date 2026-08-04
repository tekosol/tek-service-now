<?php
require_once "vendor/autoload.php";

use Glpi\Kernel\Kernel;
$kernel = new Kernel();

$plugin = new Plugin();
if ($plugin->getFromDBByCrit(['directory' => 'suggest'])) {
    echo "Found Suggest plugin. State: " . $plugin->fields['state'] . "\n";
    $plugin->update(['id' => $plugin->fields['id'], 'state' => Plugin::ACTIVATED]);
    echo "Suggest plugin activated.\n";
} else {
    echo "Suggest plugin not found in DB. Installing...\n";
    // Usually installation requires a form submit, but we can try to force it
    $id = $plugin->add([
        'directory' => 'suggest',
        'name'      => 'AI Suggest',
        'state'     => Plugin::ACTIVATED,
        'version'   => '1.0.0'
    ]);
    echo "Suggest plugin added with ID: $id\n";
}

// Clear cache to make sure UI updates
$kernel->getCache()->clear();
echo "Cache cleared.\n";
