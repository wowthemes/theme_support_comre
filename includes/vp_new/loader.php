<?php 

global $pagenow;

// using core namespace

VP_AutoLoader::add_directories(SH_TH_ROOT.'includes/vp_new', 'VP_');

// using your own namespace

VP_AutoLoader::add_namespaces('MY_');

VP_AutoLoader::add_directories(SH_TH_ROOT.'includes/vp_new/classes', 'MY_');





add_filter( 'vp_field_type_from_class_prefix', 'MY_Class_Prefixes', null, 1 );

function MY_Class_Prefixes($prefixes)

{

    $prefixes[] = 'MY_';

    return $prefixes;

}

add_filter( 'vp_field_class_from_type_prefix', 'MY_Type_Prefixes', null, 2 );

function MY_Type_Prefixes($prefix, $type)

{

    if( $type === 'builder' )

        return 'MY_';

    return $prefix;

}



$vpfs = VP_FileSystem::instance();

$vpfs->add_directories('views'   , SH_TH_ROOT.'includes/vp_new/views');





add_filter( 'vp_alphabet_validatable', 'my_alphabet_validatable' );

function my_alphabet_validatable($validatable)

{

    // Use 'vp-' + your control name, not full class name.

    $validatable[] = 'vp-builder';

    return $validatable;

}



add_action('admin_print_scripts', 'sh_admin_custom_scripts', 2000 );



function sh_admin_custom_scripts()

{

	global $pagenow;

	

	if( ($pagenow == 'themes.php' && sh_set( $_GET, 'page' ) == SH_NAME.'_option') || sh_set( $_REQUEST, 'action' ) == 'vp_ajax_wp_genuine_theme_options_save' )			

	{

		wp_enqueue_script('vp-metabox', get_template_directory_uri() . '/includes/vafpress/public/js/metabox.min.js', '', '', true);

	}

}



add_filter( 'vp_dependencies_array', 'my_dependencies', 1000, 1 );

function my_dependencies($dependencies)

{

    

	$dependencies['rules']['builder'] = array(

        'js'  => array(),

        'css' => array('vp-metabox'),

    );

    return $dependencies;

}





if(!class_exists('VP_MetaBox_Alchemy1'))

{

	//if( ($pagenow == 'themes.php' && sh_set( $_GET, 'page' ) == SH_NAME.'_option') || sh_set( $_REQUEST, 'action' ) == 'vp_ajax_wp_genuine_theme_options_save' )

	require_once SH_TH_ROOT.'includes/vp_new/classes/alchemy.php';

}











