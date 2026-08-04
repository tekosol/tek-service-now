<?php

$conn = new mysqli('127.0.0.1', 'root', 'Tekosol@123', 'glpi');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully to DB.\n";

// 1. Activate Plugin
$res = $conn->query("SELECT id FROM glpi_plugins WHERE directory = 'suggest'");
if ($res && $res->num_rows > 0) {
    $row = $res->fetch_assoc();
    $conn->query("UPDATE glpi_plugins SET state = 1 WHERE id = " . $row['id']);
    echo "Plugin 'suggest' activated.\n";
} else {
    $conn->query("INSERT INTO glpi_plugins (directory, name, state, version) VALUES ('suggest', 'AI Suggest', 1, '1.0.0')");
    echo "Plugin 'suggest' inserted and activated.\n";
}

// 2. Check Permissions for Ticket 9
echo "\n--- Ticket 9 Permissions ---\n";
$res = $conn->query("SELECT * FROM glpi_tickets WHERE id = 9");
if ($res && $res->num_rows > 0) {
    $ticket = $res->fetch_assoc();
    echo "Ticket ID: 9\n";
    echo "Status: " . $ticket['status'] . "\n";
    echo "Entities ID: " . $ticket['entities_id'] . "\n";
    
    // Check if the technician "tech" exists and has rights
    $res2 = $conn->query("SELECT id FROM glpi_users WHERE name = 'tech'");
    if ($res2 && $res2->num_rows > 0) {
        $user = $res2->fetch_assoc();
        echo "Technician 'tech' user ID: " . $user['id'] . "\n";
    }
} else {
    echo "Ticket 9 not found.\n";
}

$conn->close();
