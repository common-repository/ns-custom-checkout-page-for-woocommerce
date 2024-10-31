<?php
/*
Plugin Name: NS Custom Checkout Page for WooCommerce
Plugin URI: https://wordpress.org/plugins/ns-custom-checkout-page-for-woocommerce/
Description: This plugin allow to choose the fields to show in the checkout page
Version: 1.2.5
Author: NsThemes
Author URI: http://www.nsthemes.com
Text Domain: ns-custom-checkout-page-for-woocommerce
Domain Path: /i18n
License: GNU General Public License v2.0
License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** 
 * @author        PluginEye
 * @copyright     Copyright (c) 2019, PluginEye.
 * @version         1.0.0
 * @license       https://www.gnu.org/licenses/gpl-3.0.html GNU General Public License Version 3
 * PLUGINEYE SDK
*/

require_once('plugineye/plugineye-class.php');
$plugineye = array(
    'main_directory_name'       => 'ns-custom-checkout-page-for-woocommerce',
    'main_file_name'            => 'ns-custom-checkout-page.php',
    'redirect_after_confirm'    => 'admin.php?page=ns-custom-checkout-page-for-woocommerce%2Fns-admin-options%2Fns_admin_option_dashboard.php',
    'plugin_id'                 => '240',
    'plugin_token'              => 'NWNmZjllMWM0MGJjNmRhNTY3YjVmMDlmMDU1YTY0NmRmMGU3NGM2MDE0Nzg1OTMwYThkMjA3YjIyOTY0ODY4MTUzZjg3MmI5YmY5Y2Y=',
    'plugin_dir_url'            => plugin_dir_url(__FILE__),
    'plugin_dir_path'           => plugin_dir_path(__FILE__)
);

$plugineyeobj240 = new pluginEye($plugineye);
$plugineyeobj240->pluginEyeStart();      


/* *** plugin options *** */
require_once( plugin_dir_path(__FILE__).'/ns-custom-checkout-page-options.php');


require_once( plugin_dir_path(__FILE__).'/ns-admin-options/ns-admin-options-setup.php');


add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields_page' );
  
function custom_override_checkout_fields_page($fields) {

	if(get_option('ns-code-checkout-name', '') )
		unset($fields['billing']['billing_first_name']);
	
	if(get_option('ns-code-checkout-last-name', ''))
		unset($fields['billing']['billing_last_name']);
	
	if(get_option('ns-code-checkout-company-name', ''))
		unset($fields['billing']['billing_company']);
	
	if(get_option('ns-code-checkout-address', '')){
		unset($fields['billing']['billing_address_1']);
		unset($fields['billing']['billing_address_2']);
	}
		
	
	if(get_option('ns-code-checkout-town', ''))
		unset($fields['billing']['billing_city']);
	
	if(get_option('ns-code-checkout-postcode', ''))
		unset($fields['billing']['billing_postcode']);
	
	if(get_option('ns-code-checkout-country', ''))
		unset($fields['billing']['billing_country']);
	
	if(get_option('ns-code-checkout-phone', ''))
		unset($fields['billing']['billing_phone']);
	
	if(get_option('ns-code-checkout-email', ''))
		unset($fields['billing']['billing_email']);
	
	if(get_option('ns-code-checkout-prov', ''))
		unset($fields['billing']['billing_state']);
	
		
	return $fields;
}
/******************** TEXT DOMAIN ********************/
function ns_ccp_translate(){

    load_plugin_textdomain('ns-custom-checkout-page',false, basename( dirname( __FILE__ ) ) .'/i18n/');
}
add_action('plugins_loaded','ns_ccp_translate');

/******************* add link premium *****************/
add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'nscustomcheckoutpage_add_action_links' );

function nscustomcheckoutpage_add_action_links ( $links ) {	
 	$mylinks = array('<a id="nsccplinkpremium" href="https://www.nsthemes.com/product/custom-checkout-fields-for-woocommerce/?ref-ns=2&campaign=CCP-linkpremium" target="_blank">'.__( 'Premium Version', 'ns-custom-checkout-page-for-woocommerce' ).'</a>');
	return array_merge( $links, $mylinks );
}
?>