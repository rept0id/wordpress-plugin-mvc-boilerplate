<?php

require_once __DIR__ . '/../tpl/tplUser.php';

if (!defined('ABSPATH')) {
    die;
}
if (!class_exists('viewUserCookie')) {

    class viewUserCookieClass
    {
		
        public static function init()
        {

        }

        public static function viewUserCookie()
        {
            global $wpdb;
            $query = "SELECT `option_value` FROM `{$wpdb->prefix}options` WHERE option_name = 'cookieplate_enabled'";
            $value = $wpdb->get_results($query);
            if($value[0]->option_value == 1){
                tplUser();
            }
        }

    }

}