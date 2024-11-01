<?php
/*
Plugin Name: vendor-wizard-setup
Plugin URI: http://www.wordpress.org
Description: vendor-wizard-setup - An integration with Dokan
Version: 1.0
Author: VTGroup
Author URI: http://www.vt-group.vn
License: Under Copy Rigth Licence
*/
global $wpdb, $vendor_setup_wizard_controller;
define('vendor_setup_wizard_path', plugin_dir_path(__FILE__));
define('vendor_setup_wizard_url', plugin_dir_url(__FILE__));
require_once(vendor_setup_wizard_path.'/classes/vendor_setup_wizard_controller.php');
$vendor_setup_wizard_controller = VendorSetupWizard_Controller::getInstance('global', $wpdb);
/**
 * Backend requests
 */
if (is_admin()){
}
/**
 * Front-end requests
 */
else
{
}

add_action('widgets_init', array(&$vendor_setup_wizard_controller, 'load_languages'));
?>