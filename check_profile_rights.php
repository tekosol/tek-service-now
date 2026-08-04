<?php

$conn = new mysqli('127.0.0.1', 'root', 'Tekosol@123', 'glpi');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check profiles for user tech (ID 4)
echo "--- Profiles for user tech (ID 4) ---\n";
$res = $conn->query("SELECT pu.*, p.name as profile_name 
                    FROM glpi_profiles_users pu 
                    JOIN glpi_profiles p ON p.id = pu.profiles_id 
                    WHERE pu.users_id = 4");

while ($row = $res->fetch_assoc()) {
    echo "Profile: " . $row['profile_name'] . " (ID: " . $row['profiles_id'] . ") in Entity: " . $row['entities_id'] . "\n";
    
    // Check ticket rights for this profile
    // In GLPI 10+, ticket rights are in glpi_profilerights
    $prof_id = $row['profiles_id'];
    $res2 = $conn->query("SELECT name, rights FROM glpi_profilerights WHERE profiles_id = $prof_id AND name LIKE 'ticket%'");
    while ($row2 = $res2->fetch_assoc()) {
        echo "  " . $row2['name'] . ": " . $row2['rights'] . "\n";
    }
}

$conn->close();
