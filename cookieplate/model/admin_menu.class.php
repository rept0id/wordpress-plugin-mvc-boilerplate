<?php
if (!defined('ABSPATH')) {
    die;
}
if (!class_exists('controllerAdminMenu')) {

    class modelAdminMenu {

        /**
         * Init hooks.
         */
        public static function init() {
            global $wpdb;
            $cookie_sql_result = $wpdb->get_results("SELECT COUNT(*) AS COOKIE_COUNT FROM `{$wpdb->prefix}options` WHERE option_name = 'cookieplate_enabled'");
            if ( intval($cookie_sql_result[0]->COOKIE_COUNT) < 1 ) {
                $cookie_sql_result = $wpdb->get_results("INSERT INTO {$wpdb->prefix}options(option_name, option_value) VALUES  ('cookieplate_enabled', '1')");
            }
        }

    }
    
}