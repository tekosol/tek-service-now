<?php

use Glpi\Plugin\Hooks;

if (!defined('SUGGEST_VERSION')) {
    define('SUGGEST_VERSION', '1.0.0');
}

// Manually include the class to avoid autoloader issues in GLPI 11
if (!class_exists('Glpi\Plugin\Suggest\Chat')) {
    require_once __DIR__ . '/src/Chat.php';
}

if (!function_exists('plugin_init_suggest')) {
    function plugin_init_suggest() {
       global $PLUGIN_HOOKS;

       // Use the static method for GLPI 10+ instead of the undefined constant
       \Glpi\Plugin\Suggest\Chat::registerStandardTab('Ticket', \Glpi\Plugin\Suggest\Chat::class);
       
       // CSRF compliance is still a hook name but maybe it's also a string now
       $PLUGIN_HOOKS['csrf_compliant']['suggest'] = true;
    }
}

if (!function_exists('plugin_version_suggest')) {
    function plugin_version_suggest() {
       return [
          'name'           => 'AI Suggestion',
          'version'        => SUGGEST_VERSION,
          'author'         => 'Antigravity',
          'license'        => 'GPLv2+',
          'homepage'       => '',
          'requirements'   => [
             'glpi' => [
                'min' => '10.0',
             ]
          ]
       ];
    }
}

if (!function_exists('plugin_suggest_check_prerequisites')) {
    function plugin_suggest_check_prerequisites() {
       return true;
    }
}

if (!function_exists('plugin_suggest_check_config')) {
    function plugin_suggest_check_config() {
       return true;
    }
}
