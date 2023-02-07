<?php

require_once realpath(__DIR__ . '/..') . '/view/admin_menu.class.php';
require_once realpath(__DIR__ . '/..') . '/model/admin_menu.class.php';

if (!defined('ABSPATH')) {
    die;
}
if (!class_exists('controllerAdminMenu')) {

    class controllerAdminMenu {

        /**
         * Init hooks.
         */
        function __construct() {
            self::init();
        }

        public static function init() {
            modelAdminMenu::init();
        }

        public static function updateSettings() {
            global $wpdb;
            if (isset($_POST['submit'])) {
                if (isset($_POST['settingsCookie'])) {
                    $wpdb->get_results("UPDATE `{$wpdb->prefix}options` SET `option_value` = '1' WHERE option_name = 'cookieplate_enabled';");
                } else {
                    $wpdb->get_results("UPDATE `{$wpdb->prefix}options` SET `option_value` = '0' WHERE option_name = 'cookieplate_enabled';");
                }
            }
        }

        public static function controllerDisplayMenu() {
			self::updateSettings();
			
            viewAdminMenu::viewDisplayMenu();
            viewAdminMenu::generateButton();
        }

        public static function createCookie() {
            
        }

    }

}