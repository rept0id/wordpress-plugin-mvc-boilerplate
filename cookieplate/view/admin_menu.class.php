<?php

require_once __DIR__ . '/../tpl/tplAdmin.php';

if (!defined('ABSPATH')) {
    die;
}
if (!class_exists('viewAdminMenu')) {

    class viewAdminMenu {

        public static function init() {

        }

        public static function viewDisplayMenu() {
		
        }

        public static function generateButton(){
            global $wpdb;
            $cookie_sql_result = $wpdb->get_results("SELECT * FROM `{$wpdb->prefix}options` WHERE option_name = 'cookieplate_enabled'");
			
			$tpl_options = (object)[];
			$tpl_options->settingsCookieChecked = intval($cookie_sql_result[0]->option_value) == 1 ? "checked" : "";
				
			tplAdmin($tpl_options);
        }
    }
}