<?php
/**
 * Islamic Archive For Islam and Hinduism
 *
 * Plugin Name: Islamic Archive For Islam and Hinduism
 * Plugin URI:  https://wordpress.org/plugins/islamic-archive-for-islam-and-hinduism/
 * Description: Islam-hinduism.com intends to be one of the main online sources of information about Hindu-Muslim interaction.
 * Version:     1.3.4
 * Author:      EDC TEAM (E-Dawah Committee)
 * Author URI:  https://edc.org.kw
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Requires at least: 5.0
 * Requires PHP: 7.4
*/

define('OPICIFH_PLUGIN_PATH',plugin_dir_path( __FILE__ ));
define('OPICIFH_PLUGIN_URL',plugin_dir_url( __FILE__ ));
define('OPICIFH_Page_SLUG','Islamic_Archive_For_Islam_and_Hinduism');
define('OPICIFH_Input_SLUG','opicifh_');
define('IFHLIB','lib');
define('IFHDS','/');
define('IFHCONTROLLERS','controllers');
define('IFHMODELS','models');
define('IFHDBTable', 'opicifh_categories');
define('IFHBootstrappath',OPICIFH_PLUGIN_PATH.'style'.IFHDS);
define('IFHLogourl',OPICIFH_PLUGIN_URL.'style'.IFHDS.'images'.IFHDS.'logo'.IFHDS);
define('IFHIconpath',OPICIFH_PLUGIN_PATH.'style'.IFHDS.'images'.IFHDS.'icons'.IFHDS);
define('IFHIconurl',OPICIFH_PLUGIN_URL.'style'.IFHDS.'images'.IFHDS.'icons'.IFHDS);
define('IFHFlagspath',OPICIFH_PLUGIN_PATH.'style'.IFHDS.'images'.IFHDS.'flags'.IFHDS);
define('IFHFlagsurl',OPICIFH_PLUGIN_URL.'style'.IFHDS.'images'.IFHDS.'flags'.IFHDS);

define('IFHControlerspath',OPICIFH_PLUGIN_PATH.'controllers'.IFHDS);
define('IFHModelspath',OPICIFH_PLUGIN_PATH.'models'.IFHDS);
define('IFHViewspath',OPICIFH_PLUGIN_PATH.'views'.IFHDS);
define('IFHLayoutpath',OPICIFH_PLUGIN_PATH.'views'.IFHDS.'layout'.IFHDS);
define('IFHLangpath',OPICIFH_PLUGIN_PATH.'views'.IFHDS.'lang'.IFHDS);

function OPICIFH_plugin_install(){
	$default_lang = 'eng';
	$source = 'Soucre Link';
	add_option(OPICIFH_Input_SLUG.'language', $default_lang);
	add_option(OPICIFH_Input_SLUG.'source', $source);
	add_option(OPICIFH_Input_SLUG.'cronjobtime', 'everyhour');
	add_option(OPICIFH_Input_SLUG.'version', '1.1');
}
function OPICIFH_plugin_uninstall(){

	$options = get_option(OPICIFH_Input_SLUG.'language');
 	if( is_array($options) && $options['uninstall'] === true){
		delete_option(OPICIFH_Input_SLUG.'language');
		delete_option(OPICIFH_Input_SLUG.'source');
		delete_option(OPICIFH_Input_SLUG.'cronjobtime');
		delete_option(OPICIFH_Input_SLUG.'version');
	}
}
register_activation_hook(plugin_basename(__FILE__),'OPICIFH_plugin_install');
register_deactivation_hook(plugin_basename(__FILE__), 'OPICIFH_plugin_uninstall');

include_once(OPICIFH_PLUGIN_PATH.'load.php');
?>
