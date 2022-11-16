<?php

require_once SH_TH_ROOT . 'vendor/autoload.php';

add_action('init', '_sh_plugin_init');

add_filter( 'woocommerce_data_stores', 'comre_woocommerce_data_stores' );

/**
  * [studentwp_woocommerce_data_stores description]
  *
  * @param  [type] $stores [description]
  * @return [type]         [description]
  */
function comre_woocommerce_data_stores( $stores ) {

	require_once SH_TH_ROOT . '/includes/helpers/class-course-data-store-cpt.php';
	$stores['product'] = 'Comre_Product_Data_Store_CPT';

	return $stores;
}

if ( ! function_exists( 'sh_set' ) ) {

	/**
	 * [sh_set description]
	 *
	 * @param  array  $var [description].
	 * @param  string $key [description].
	 * @param  string $def [description].
	 * @return [type]      [description]
	 */
	function sh_set( $var, $key, $def = '' ) {

		if ( is_object( $var ) && isset( $var->$key ) ) {
			return $var->$key;
		} else if ( is_array( $var ) && isset( $var[ $key ] ) ) {
			return $var[ $key ];
		} else if ( $def ) {
			return $def;
		} else {
			return false;
		}
	}
}


function _load_plugins_class($class, $directory = 'libraries', $global = true, $prefix = 'SH_')

{

	$obj = &$GLOBALS['_sh_base'];

	$obj = is_object( $obj ) ? $obj : new stdClass;

	$name = FALSE;

	// Is the request a class extension?  If so we load it too

	$path = SH_TH_ROOT.'includes/'.$directory.'/'.$class.'.php';

	if( file_exists($path) )

	{

		$name = $prefix.ucwords( $class );

		if (class_exists($name) === FALSE)	require($path);

	}

	// Did we find the class?

	if ($name === FALSE) exit('Unable to locate the specified class: '.$class.'.php');

	if( $global ) $GLOBALS['_sh_base']->$class = new $name();

	else new $name();

}

if( isset( $_GET['sh_shortcode_editor_action'] ) ) {

	include_once('resource/shortcode_output.php');exit;

}

/**
 * Include Vafpress Framework
 */

require_once 'vafpress/bootstrap.php';

function _sh_plugin_admin_init()

{

	

	

}

function _sh_plugin_init()

{

	

	global $pagenow;

	

	include_once( 'library/functions.php' );

	_load_plugins_class( 'post_types', 'helpers', false );

	

	_load_plugins_class( 'taxonomies', 'helpers', false );

	_load_plugins_class( 'ajax', 'helpers', false );

	//_load_class( 'forms', 'helpers', false );

	

	//_load_class( 'validation', 'helpers', true );

	//_load_plugins_class( 'seo', 'helpers', false );

	_load_plugins_class( 'update_theme', 'update', false );

	_load_plugins_class( 'shortcodes', 'helpers', true );
	
	//_load_plugins_class( 'mega_menu', 'helpers', false );

	include_once 'helpers/woocommerce.php';

	/**
	 * Include Custom Data Sources
	 */

	require_once 'vafpress/admin/data_sources.php';

	

	/**
	 * Load options, metaboxes, and shortcode generator array templates.
	 */

	// metaboxes

	$tmpl_mb1  = include SH_TH_ROOT.'includes/vafpress/admin/metabox/meta_boxes.php';

	// * Create instances of Metaboxes

	foreach( $tmpl_mb1 as $tmb )  new VP_Metabox($tmb);

	

	$tmpl_mb1  = include SH_TH_ROOT.'includes/vafpress/admin/taxonomy/taxonomy.php';

	include_once( 'vp_new/taxonomy.php' );

	foreach( $tmpl_mb1 as $tmb )  new SH_Metabox($tmb);

	if( is_admin() ) {

		

		include_once( 'helpers/backup_class.php' );

		$backup = new SH_Backup_class;

		

		if( sh_set( $_GET, 'page' ) == SH_NAME.'_option' ) 

		{

			if( sh_set( $_GET, 'sh_dummydata_export' ) ){

				

				$backup->export();

			}

			

			/*if( sh_set( $_GET, 'sh_dummydata_import' ) ){ 

				include_once( 'helpers/backup_class.php' );

				$backup = new SH_Backup_class;

				$backup->import();

			}*/

			

		}

	}	

	

	if( function_exists( 'vc_map' )) 

	include_once( 'vc_map.php' );

	

	// options

	$tmpl_opt  = SH_TH_ROOT.'includes/vafpress/admin/option/option.php';

	

	

	/**

	 * Create instance of Options

	 */

	$theme_options = new VP_Option(array(

		'is_dev_mode'           => false,                                  // dev mode, default to false

		'option_key'            => SH_NAME.'_theme_options',                      // options key in db, required

		'page_slug'             => SH_NAME.'_option',                      // options page slug, required

		'template'              => $tmpl_opt,                              // template file path or array, required

		'menu_page'             => 'themes.php',                           // parent menu slug or supply `array` (can contains 'icon_url' & 'position') for top level menu

		'use_auto_group_naming' => true,                                   // default to true

		'use_util_menu'         => true,                                   // default to true, shows utility menu

		'minimum_role'          => 'edit_theme_options',                   // default to 'edit_theme_options'

		'layout'                => 'fluid',                                // fluid or fixed, default to fixed

		'page_title'            => __( 'Theme Options', 'theme_support_comre' ), // page title

		'menu_label'            => __( 'Theme Options', 'theme_support_comre' ), // menu label

	));

	

		_WSH()->user_extra( array('facebook'=>__('Facebook', 'theme_support_comre'), 'twitter'=>__('Twitter', 'theme_support_comre'), 'linkedin'=>__('Linkedin', 'theme_support_comre'), 'pinterest'=>__('Pinterest', 'theme_support_comre'),

	'tumblr'=>__('Tumblr', 'theme_support_comre'), 'google-plus'=>__('Google+', 'theme_support_comre')) );

	

	$sh_exlude_hooks = include_once( 'resource/remove_action.php' );

	foreach( $sh_exlude_hooks as $k => $v )

	{

		foreach( $v as $value )

		remove_action( $k, $value[0], $value[1] );

	}

	

		

	// shortocode generators

	 $tmpl_sg1  = SH_TH_ROOT.'includes/vafpress/admin/shortcode_generator/shortcodes1.php';

	 $tmpl_sg = array(

	  'name' => 'sg_1',

	  'template' => $tmpl_sg1,

	  'modal_title' => __( 'Bloxo Shortcodes', 'theme_support_comre'),

	  'button_title' => __('Bloxo', 'theme_support_comre'),

	  'types' => array(  'page' ),

	  'main_image' => SH_TH_URL . '/includes/vafpress/public/img/vp_shortcode_icon.png',

	  'sprite_image' => SH_TH_URL . '/includes/vafpress/public/img/vp_shortcode_icon_sprite.png',

	  'included_pages' => array( 'appearance_page_vpt_option' ),

	 );

	 //$sg = new VP_ShortcodeGenerator($tmpl_sg);

}

include_once( 'vp_new/loader.php' );

