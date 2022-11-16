<?php
/**
Plugin Name: Theme Support Comre
Plugin URI: http://themeforest.net/user/JollyThemes
Description: This plugin is compatible with all wow_themes wordpress themes.
Author: Shahbaz Ahmed
Author URI: http://wow-themes.com
Version: 1.6.9
Text Domain: theme_support_comre

 * @package theme_support_comre
 */

if ( ! defined( 'SH_TH_ROOT' ) ) {
	define( 'SH_TH_ROOT', plugin_dir_path( __FILE__ ) );
}
if ( ! defined( 'SH_TH_URL' ) ) {
	define( 'SH_TH_URL', plugins_url( '', __FILE__ ) );
}
if ( ! defined( 'SH_NAME' ) ) {
	define( 'SH_NAME', 'wp_comre' );
}

/**
 * [theme_support_comre_plugin_load_plugin_textdomain description]
 *
 * @return void [description]
 */
function theme_support_comre_plugin_load_plugin_textdomain() {
	load_plugin_textdomain( 'theme_support_comre', false, basename( dirname( __FILE__ ) ) . '/languages/' );
}

add_action( 'plugins_loaded', 'theme_support_comre_plugin_load_plugin_textdomain' );

add_action( 'after_setup_theme', 'theme_support_after_setup_theme' );

function theme_support_after_setup_theme() {

	include_once( 'includes/loader.php' );
	include_once( 'includes/library/batch-coupons.php' );

}

add_action( 'tgmpa_register', 'ts_comre_register_required_plugins' );

function ts_comre_register_required_plugins()
{
	if( ! function_exists('_WSH' ) ) {
		return;
	}

	$options = _WSH()->option('show_acountmanager');

	$account_array = array(
        'name'               => 'W Accounts Manager', // The plugin name.
        'slug'               => 'wt_account_manager', // The plugin slug (typically the folder name).
        'source'             => get_template_directory() . '/includes/thirdparty/tgm-plugin-activation/plugins/wt_account_manager.zip', // The plugin source.
        'required'           => true, // If false, the plugin is only 'recommended' instead of required.
        'version'            => '1.0.4', // E.g. 1.0.0. If set, the active plugin must be this version or higher.
        'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
        'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
        'external_url'       => '', // If set, overrides default API URL and points to an external URL.
    );

	$account_array = ( $options ) ? $account_array : '';
	
	$plugins = array(
		
		$account_array
	);
	// Change this to your theme text domain, used for internationalising strings
	$theme_text_domain = 'theme_support_comre';
	$config = array(
		'domain'       		=> $theme_text_domain,         	// Text domain - likely want to be the same as your theme.
		'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
		'parent_slug' 		=> 'themes.php', 				// Default parent menu and URL slug
		'menu'         		=> 'install-required-plugins', 	// Menu slug
		'has_notices'      	=> true,                       	// Show admin notices or not
		'is_automatic'    	=> true,					   	// Automatically activate plugins after installation or not
		'message' 			=> '',							// Message to output right before the plugins table
		
	);
	tgmpa($plugins, $config);
}