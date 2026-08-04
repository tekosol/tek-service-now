<?php
$mysqli = new mysqli("localhost", "root", "", "glpi");
$res = $mysqli->query("SELECT d.filepath, d.filename FROM glpi_knowbaseitems k 
                       JOIN glpi_documents_items di ON di.items_id = k.id AND di.itemtype = 'KnowbaseItem'
                       JOIN glpi_documents d ON d.id = di.documents_id");
while ($row = $res->fetch_assoc()) {
    print_r($row);
    echo "Content:\n" . file_get_contents("d:/php/htdocs/tek-service-now/files/" . $row['filepath']) . "\n";
}
