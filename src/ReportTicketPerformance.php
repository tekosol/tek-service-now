<?php

/**
 * ---------------------------------------------------------------------
 *
 * GLPI - Gestionnaire Libre de Parc Informatique
 *
 * ---------------------------------------------------------------------
 */

use Glpi\Application\View\TemplateRenderer;
use Glpi\DBAL\QueryExpression;
use Glpi\DBAL\QueryFunction;

class ReportTicketPerformance extends CommonGLPI
{
    public static function getTypeName($nb = 0)
    {
        return __('Ticket Performance Report');
    }

    public static function showCriteria(bool $embeded): void
    {
        $twig_params = [
            'title' => __('Ticket Performance Report'),
            'btn_label' => __('Display report'),
            'embeded' => $embeded,
        ];

        // Ensure variables are properly set from $_GET
        $twig_params['filters'] = [
            'date1' => $_GET['date1'] ?? date('Y-m-01'), // Default to start of month
            'date2' => $_GET['date2'] ?? date('Y-m-t'),  // Default to end of month
            'users_id_requester' => $_GET['users_id_requester'] ?? 0,
            'users_id_assign' => $_GET['users_id_assign'] ?? 0,
            'groups_id_assign' => $_GET['groups_id_assign'] ?? 0,
            'itilcategories_id' => $_GET['itilcategories_id'] ?? 0,
            'priority' => $_GET['priority'] ?? 0,
            'status' => $_GET['status'] ?? 0,
            'entities_id' => $_GET['entities_id'] ?? $_SESSION['glpiactive_entity'],
            'locations_id' => $_GET['locations_id'] ?? 0,
            'slas_id' => $_GET['slas_id'] ?? 0,
            'resolution_status' => $_GET['resolution_status'] ?? '',
            'is_deleted' => $_GET['is_deleted'] ?? 0,
        ];

        // Render Priority dropdown HTML with an "All" option
        // Using showtype 'normal' hides non-standard priorities (-1 to -5)
        // We add the "All" option using display_emptychoice
        ob_start();
        CommonITILObject::dropdownPriority([
            'name'                => 'priority',
            'value'               => (int)($twig_params['filters']['priority']),
            'showtype'            => 'normal',
            'withmajor'           => true,
            'enable_filtering'    => false,
            'display_emptychoice' => true,
            'emptylabel'          => __('All'),
            'width'               => '100%',
        ]);
        $twig_params['priority_dropdown'] = ob_get_clean();


        // Render Status dropdown HTML with "All" as the first option (value=0)
        $status_value = (int)($twig_params['filters']['status']);
        $status_options = Ticket::getAllStatusArray(true);
        ob_start();
        Dropdown::showFromArray('status', $status_options, [
            'value'               => $status_value,
            'display_emptychoice' => true,
            'emptylabel'          => __('All'),
            'templateResult'      => 'templateItilStatus',
            'templateSelection'   => 'templateItilStatus',
            'width'               => '100%',
        ]);
        $twig_params['status_dropdown'] = ob_get_clean();


        $twig_params['export_url'] = 'report.ticketperformance.php?export=csv&' . http_build_query($_GET);

        // Render the criteria template
        TemplateRenderer::getInstance()->display('pages/tools/report/ticketperformance_criteria.html.twig', $twig_params);
    }

    public static function getTicketPerformanceReportData(): array
    {
        global $DB;

        // Collect filters
        $date1 = $_GET['date1'] ?? date('Y-m-01');
        $date2 = $_GET['date2'] ?? date('Y-m-t');
        $users_id_requester = (int)($_GET['users_id_requester'] ?? 0);
        $users_id_assign = (int)($_GET['users_id_assign'] ?? 0);
        $groups_id_assign = (int)($_GET['groups_id_assign'] ?? 0);
        $itilcategories_id = (int)($_GET['itilcategories_id'] ?? 0);
        $priority = (int)($_GET['priority'] ?? 0);
        $status = (int)($_GET['status'] ?? 0);
        $entities_id = (int)($_GET['entities_id'] ?? $_SESSION['glpiactive_entity']);
        $locations_id = (int)($_GET['locations_id'] ?? 0);
        $slas_id = (int)($_GET['slas_id'] ?? 0);
        $resolution_status = $_GET['resolution_status'] ?? '';
        $is_deleted = (int)($_GET['is_deleted'] ?? 0);

        // Build Criteria
        $criteria = [
            'SELECT' => [
                'glpi_tickets.*',
                'glpi_entities.name AS entity_name',
                'glpi_itilcategories.name AS category_name',
                'glpi_locations.name AS location_name',
                'glpi_slas.name AS sla_name'
            ],
            'FROM' => 'glpi_tickets',
            'LEFT JOIN' => [
                'glpi_entities' => [
                    'ON' => [
                        'glpi_tickets' => 'entities_id',
                        'glpi_entities' => 'id'
                    ]
                ],
                'glpi_itilcategories' => [
                    'ON' => [
                        'glpi_tickets' => 'itilcategories_id',
                        'glpi_itilcategories' => 'id'
                    ]
                ],
                'glpi_locations' => [
                    'ON' => [
                        'glpi_tickets' => 'locations_id',
                        'glpi_locations' => 'id'
                    ]
                ],
                'glpi_slas' => [
                    'ON' => [
                        'glpi_tickets' => 'slas_id_ttr',
                        'glpi_slas' => 'id'
                    ]
                ]
            ],
            'WHERE' => [
                'glpi_tickets.is_deleted' => $is_deleted,
                'glpi_tickets.date' => ['>=', $date1 . ' 00:00:00'],
                'glpi_tickets.date' => ['<=', $date2 . ' 23:59:59']
            ]
        ];

        // Apply Entity Restriction
        if (isset($_GET['entities_id']) && $_GET['entities_id'] !== '') {
            $entities = getSonsOf('glpi_entities', $entities_id);
            $criteria['WHERE'] += getEntitiesRestrictCriteria('glpi_tickets', 'entities_id', $entities, false);
        } else {
            $criteria['WHERE'] += getEntitiesRestrictCriteria('glpi_tickets', 'entities_id', '', false);
        }

        if ($itilcategories_id > 0) {
            $criteria['WHERE']['glpi_tickets.itilcategories_id'] = $itilcategories_id;
        }

        if ($priority > 0) {
            $criteria['WHERE']['glpi_tickets.priority'] = $priority;
        }

        if ($status > 0) {
            $criteria['WHERE']['glpi_tickets.status'] = $status;
        }

        if ($locations_id > 0) {
            $criteria['WHERE']['glpi_tickets.locations_id'] = $locations_id;
        }

        if ($slas_id > 0) {
            $criteria['WHERE']['glpi_tickets.slas_id_ttr'] = $slas_id;
        }

        // Handles Requester, Assignee, Assigned Group
        if ($users_id_requester > 0 || $users_id_assign > 0 || $groups_id_assign > 0) {
            $join_users = false;
            if ($users_id_requester > 0) {
                $criteria['LEFT JOIN']['glpi_tickets_users AS req_users'] = [
                    'ON' => [
                        'req_users' => 'tickets_id',
                        'glpi_tickets' => 'id',
                        [
                            'AND' => ['req_users.type' => CommonITILActor::REQUESTER]
                        ]
                    ]
                ];
                $criteria['WHERE']['req_users.users_id'] = $users_id_requester;
            }

            if ($users_id_assign > 0) {
                $criteria['LEFT JOIN']['glpi_tickets_users AS assign_users'] = [
                    'ON' => [
                        'assign_users' => 'tickets_id',
                        'glpi_tickets' => 'id',
                        [
                            'AND' => ['assign_users.type' => CommonITILActor::ASSIGN]
                        ]
                    ]
                ];
                $criteria['WHERE']['assign_users.users_id'] = $users_id_assign;
            }

            if ($groups_id_assign > 0) {
                $criteria['LEFT JOIN']['glpi_groups_tickets AS assign_groups'] = [
                    'ON' => [
                        'assign_groups' => 'tickets_id',
                        'glpi_tickets' => 'id',
                        [
                            'AND' => ['assign_groups.type' => CommonITILActor::ASSIGN]
                        ]
                    ]
                ];
                $criteria['WHERE']['assign_groups.groups_id'] = $groups_id_assign;
            }
        }

        $iterator = $DB->request($criteria);
        
        $tickets = [];
        $summary = [
            'total' => 0,
            'opened' => 0,
            'assigned' => 0,
            'solved' => 0,
            'closed' => 0,
            'pending' => 0,
            'overdue' => 0,
            'sum_resolution_time' => 0,
            'sum_assignment_time' => 0,
            'sum_first_response_time' => 0,
            'count_resolution' => 0,
            'count_assignment' => 0,
            'count_first_response' => 0
        ];
        
        $technician_summary = [];
        $requester_summary = [];

        foreach ($iterator as $data) {
            // Map Status ID to string
            $data['status_name'] = Ticket::getStatus($data['status']);
            
            // Fetch Requesters
            $req_iterator = $DB->request([
                'SELECT' => ['glpi_users.firstname', 'glpi_users.realname', 'glpi_users.name'],
                'FROM'   => 'glpi_tickets_users',
                'INNER JOIN' => [
                    'glpi_users' => [
                        'ON' => [
                            'glpi_tickets_users' => 'users_id',
                            'glpi_users'         => 'id'
                        ]
                    ]
                ],
                'WHERE'  => [
                    'glpi_tickets_users.tickets_id' => $data['id'],
                    'glpi_tickets_users.type'       => CommonITILActor::REQUESTER
                ]
            ]);
            $requesters = [];
            foreach ($req_iterator as $req) { 
                $full = trim($req['firstname'] . ' ' . $req['realname']);
                $requesters[] = $full ?: $req['name']; 
            }
            $data['requester_name'] = implode(', ', $requesters);
            
            // Fetch Assignees
            $assign_iterator = $DB->request([
                'SELECT' => ['glpi_users.firstname', 'glpi_users.realname', 'glpi_users.name'],
                'FROM'   => 'glpi_tickets_users',
                'INNER JOIN' => [
                    'glpi_users' => [
                        'ON' => [
                            'glpi_tickets_users' => 'users_id',
                            'glpi_users'         => 'id'
                        ]
                    ]
                ],
                'WHERE'  => [
                    'glpi_tickets_users.tickets_id' => $data['id'],
                    'glpi_tickets_users.type'       => CommonITILActor::ASSIGN
                ]
            ]);
            $assignees = [];
            foreach ($assign_iterator as $asn) { 
                $full = trim($asn['firstname'] . ' ' . $asn['realname']);
                $assignees[] = $full ?: $asn['name'];
            }
            $data['assignee_name'] = implode(', ', $assignees);
            
            $tickets[] = $data;
            
            // Collect Summary Data
            $summary['total']++;
            
            switch($data['status']) {
                case CommonITILObject::INCOMING:
                    $summary['opened']++;
                    break;
                case CommonITILObject::ASSIGNED:
                case CommonITILObject::PLANNED:
                    $summary['assigned']++;
                    break;
                case CommonITILObject::SOLVED:
                    $summary['solved']++;
                    break;
                case CommonITILObject::CLOSED:
                    $summary['closed']++;
                    break;
                case CommonITILObject::WAITING:
                    $summary['pending']++;
                    break;
            }
        }

        // We will process Requesters and Assignees below in PHP to avoid crazy SQL grouping
        // For production, GLPI uses separate queries or group_concat for these

        return [
            'tickets' => $tickets,
            'summary' => $summary,
            'technician_summary' => $technician_summary,
            'requester_summary' => $requester_summary
        ];
    }
    
    public static function exportCsv(): void
    {
        $data = self::getTicketPerformanceReportData();
        
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename=ticket_performance_report_' . date('Y-m-d') . '.csv');
        
        $output = fopen('php://output', 'w');
        
        // Output UTF-8 BOM for Excel
        fputs($output, "\xEF\xBB\xBF");
        
        // Write headers
        fputcsv($output, [
            __('ID'),
            __('Title'),
            __('Requester'),
            __('Assigned To'),
            __('Status'),
            __('Entity'),
            __('Created Date'),
            __('Updated Date'),
            __('Resolved Date')
        ]);
        
        // Write rows
        foreach ($data['tickets'] as $ticket) {
            fputcsv($output, [
                $ticket['id'],
                $ticket['name'],
                $ticket['requester_name'],
                $ticket['assignee_name'],
                $ticket['status_name'],
                $ticket['entity_name'],
                $ticket['date'],
                $ticket['date_mod'],
                $ticket['solvedate']
            ]);
        }
        
        fclose($output);
    }

    public static function showReport(): void
    {
        $data = self::getTicketPerformanceReportData();
        $data['export_url'] = 'report.ticketperformance.php?export=csv&' . http_build_query($_GET);
        TemplateRenderer::getInstance()->display('pages/tools/report/ticketperformance_report.html.twig', $data);
    }
}
