<?php

/**
 * ---------------------------------------------------------------------
 *
 * GLPI - Gestionnaire Libre de Parc Informatique
 *
 * ---------------------------------------------------------------------
 */

require_once(__DIR__ . '/_check_webserver_config.php');

Session::checkRight("reports", READ);

if (isset($_GET['export']) && $_GET['export'] === 'csv') {
    if (!class_exists('ReportTicketPerformance')) {
        $class_path = GLPI_ROOT . "/src/ReportTicketPerformance.php";
        if (file_exists($class_path)) {
            require_once($class_path);
        }
    }
    ReportTicketPerformance::exportCsv();
    exit;
}

Html::header(Report::getTypeName(Session::getPluralNumber()), '', "tools", "report");

Report::title();

// Make sure the new class is loaded (either by autoloader if we registered it properly, or include it)
if (!class_exists('ReportTicketPerformance')) {
    $class_path = GLPI_ROOT . "/src/ReportTicketPerformance.php";
    if (file_exists($class_path)) {
        require_once($class_path);
    }
}

ReportTicketPerformance::showCriteria(false);

ReportTicketPerformance::showReport();

Html::footer();
