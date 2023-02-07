<?php
/**
 * Epsilon Enhancements
 *
 * @package     cookieplate
 * @author      Rantouan Achmet
 * @copyright   2022 Rantouan Achmet
 * @license     GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: cookiePlate
 * Plugin URI:  https://www.simplecode.gr
 * Description: Boilerplate MVC plugin for wordpress
 * Version:     1.0.1
 * Author:      Rantouan Achmet
 * Author URI:  https://www.simplecode.gr
 * Text Domain: cookieplate
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

require_once __DIR__ . '/controller/admin_menu.class.php';
require_once __DIR__ . '/view/user_cookie.class.php';

function cookieplate_admin_menu_callback() {
  controllerAdminMenu::controllerDisplayMenu();
}
function cookieplate_admin_menu_main() {
  add_menu_page(
        'Cookieplate', //page title
        'Cookieplate', //menu title
        'manage_options', //capability
        'cookieplate', //menu slug
        'cookieplate_admin_menu_callback', //callback function
        'dashicons-smiley'
    );
}

function user_cookie_callback(){
  viewUserCookieClass::viewUserCookie();
}

add_action('admin_init', array('controllerAdminMenu', 'init'));

add_action('admin_menu', 'cookieplate_admin_menu_main');

add_action('wp_print_footer_scripts', 'user_cookie_callback');