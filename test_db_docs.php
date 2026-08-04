<?php
require 'd:/php/htdocs/tek-service-now/inc/includes.php';
global $DB;
$iterator = $DB->request([
    'SELECT' => ['glpi_knowbaseitems.id', 'glpi_documents.filepath', 'glpi_documents.filename'],
    'FROM'   => 'glpi_knowbaseitems',
    'INNER JOIN' => [
        'glpi_documents_items' => [
            'ON' => [
                'glpi_documents_items' => 'items_id',
                'glpi_knowbaseitems'   => 'id',
                [
                    'AND' => ['glpi_documents_items.itemtype' => 'KnowbaseItem']
                ]
            ]
        ],
        'glpi_documents' => [
            'ON' => [
                'glpi_documents'       => 'id',
                'glpi_documents_items' => 'documents_id'
            ]
        ]
    ]
]);

foreach ($iterator as $row) {
    print_r($row);
    if (!empty($row['filepath'])) {
        $full_path = GLPI_DOC_DIR . "/" . $row['filepath'];
        echo "PATH: " . $full_path . "\n";
        echo file_get_contents($full_path) . "\n\n";
    }
}
