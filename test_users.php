<?php
include('inc/includes.php');
global $DB;

echo "--- USERS ---\n";
$query = "SELECT u.id, u.name, u.realname, u.firstname 
          FROM glpi_users u 
          WHERE u.is_deleted = 0";
$result = $DB->query($query);
if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "User: " . $row['name'] . " (" . $row['firstname'] . " " . $row['realname'] . ")\n";
        // Get profiles for this user
        $prof_query = "SELECT p.name AS profile_name, p.interface 
                       FROM glpi_profiles_users pu 
                       JOIN glpi_profiles p ON pu.profiles_id = p.id 
                       WHERE pu.users_id = " . $row['id'];
        $prof_result = $DB->query($prof_query);
        if ($prof_result && $prof_result->num_rows > 0) {
            while ($p_row = $prof_result->fetch_assoc()) {
                echo "  -> Profile: " . $p_row['profile_name'] . " (Interface: " . $p_row['interface'] . ")\n";
            }
        } else {
            echo "  -> Profile: None\n";
        }
    }
}
echo "-------------\n";
