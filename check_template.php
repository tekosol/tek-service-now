<?php

$conn = new mysqli('127.0.0.1', 'root', 'Tekosol@123', 'glpi');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "--- Ticket 9 Template Check ---\n";
// In GLPI 10+, template ID is in itiltemplates_id or similar
// For Tickets, it's usually itiltemplates_id
$res = $conn->query("SELECT id, itiltemplates_id, entities_id FROM glpi_tickets WHERE id = 9");
if ($res && $res->num_rows > 0) {
    $row = $res->fetch_assoc();
    $tpl_id = $row['itiltemplates_id'];
    echo "Ticket ID: 9\n";
    echo "Template ID: $tpl_id\n";
    echo "Entity ID: " . $row['entities_id'] . "\n";
    
    if ($tpl_id > 0) {
        echo "Fetching Template $tpl_id details...\n";
        // Check for readonly fields in glpi_itiltemplatereadonlys
        $res2 = $conn->query("SELECT * FROM glpi_itiltemplatereadonlys WHERE itiltemplates_id = $tpl_id");
        while ($row2 = $res2->fetch_assoc()) {
            echo "  Readonly Field: " . $row2['num'] . " (Name: " . $row2['name'] . ")\n";
        }
    }
}

$conn->close();
