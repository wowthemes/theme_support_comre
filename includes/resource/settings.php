<?php

//include(get_template_directory().'/includes/resource/awesom_icons.php');

$settings = array();



$settings['post']['sidebar'] =  array(

													'type' => 'select', //builtin fields include:

													'id' => 'sidebar',

													'title' => __('Sidebar', 'theme_support_comre'),

													'desc' => __('Choose an sidebar for this deal', 'theme_support_comre'),

													'options' => sh_get_sidebars(),

													'attributes' => array('style' => 'width:40%'),

												);

$settings['page']['sidebar'] =  array(

													'type' => 'select', //builtin fields include:

													'id' => 'sidebar',

													'title' => __('Sidebar', 'theme_support_comre'),

													'desc' => __('Choose an sidebar for this deal', 'theme_support_comre'),

													'options' => sh_get_sidebars(),

													'attributes' => array('style' => 'width:40%'),

												);



$settings['bistro_service']['font_awesome'] =  array(

													'type' => 'select', //builtin fields include:

													'id' => 'font_awesome',

													'title' => __('Choos Font Awesome Icon', 'theme_support_comre'),

													'desc' => __('Choose an icon fron the font icons list', 'theme_support_comre'),

													'options' => array_values(array_map(create_function('$v', 'return ucwords($v);'), $GLOBALS['_font_awesome'])),

													'attributes' => array('style' => 'width:40%'),

												);

												

$settings['bistro_service']['sidebar'] =  array(

													'type' => 'select', //builtin fields include:

													'id' => 'sidebar',

													'title' => __('Sidebar', 'theme_support_comre'),

													'desc' => __('Choose an sidebar for this service', 'theme_support_comre'),

													'options' => sh_get_sidebars(),

													'attributes' => array('style' => 'width:40%'),

												);



$settings['bistro_deal']['start_date'] =  array(

													'type' => 'date', //builtin fields include:

													'id' => 'start_date',

													'title' => __('Start Date', 'theme_support_comre'),

													'desc' => __('Choose start date of the deal', 'theme_support_comre'),

													'attributes' => array('style' => 'width:30%'),

												);

$settings['bistro_deal']['end_date'] =  array(

													'type' => 'date', //builtin fields include:

													'id' => 'end_date',

													'title' => __('End Date', 'theme_support_comre'),

													'desc' => __('Choose end date of the deal', 'theme_support_comre'),

													'attributes' => array('style' => 'width:30%'),

												);



$settings['bistro_deal']['products'] =  array(

													'type' => 'select', //builtin fields include:																	 

													'title' => __('Select Product', 'theme_support_comre'),

													'id' => 'products',

													'desc' => __('Choose the products for this deal', 'theme_support_comre'),

													'options' => sh_get_posts_array('wpsc-product'),

													'attributes' => array('style' => 'width:45%'),



												);

$settings['bistro_deal']['sidebar'] =  array(

													'type' => 'select', //builtin fields include:

													'id' => 'sidebar',

													'title' => __('Sidebar', 'theme_support_comre'),

													'desc' => __('Choose an sidebar for this deal', 'theme_support_comre'),

													'options' => sh_get_sidebars(),

													'attributes' => array('style' => 'width:40%'),

												);

$settings['bistro_team']['designation'] =  array(

													'type' => 'text', //builtin fields include:																	 

													'title' => __('Designation', 'theme_support_comre'),

													'id' => 'designation',

													'desc' => __('Enter the designation of the member', 'theme_support_comre'),

													'attributes' => array('style' => 'width:45%'),



												);

$settings['bistro_team']['facebook'] =  array(

													'type' => 'text', //builtin fields include:																	 

													'title' => __('Facebook', 'theme_support_comre'),

													'id' => 'facebook',

													'desc' => __('Enter the facebook url', 'theme_support_comre'),

													'attributes' => array('style' => 'width:45%'),

												);

$settings['bistro_team']['twitter'] =  array(

													'type' => 'text', //builtin fields include:																	 

													'title' => __('Twitter', 'theme_support_comre'),

													'id' => 'twitter',

													'desc' => __('Enter the twitter url', 'theme_support_comre'),

													'attributes' => array('style' => 'width:45%'),

												);

$settings['bistro_team']['google_plus'] =  array(

													'type' => 'text', //builtin fields include:																	 

													'title' => __('Google Plus', 'theme_support_comre'),

													'id' => 'google_plus',

													'desc' => __('Enter the google Plus url', 'theme_support_comre'),

													'attributes' => array('style' => 'width:45%'),

												);

$settings['bistro_portfolio']['project_url'] =  array(

													'type' => 'text', //builtin fields include:																	 

													'title' => __('Project URL', 'theme_support_comre'),

													'id' => 'project_url',

													'desc' => __('Enter the project url', 'theme_support_comre'),

													'attributes' => array('style' => 'width:45%'),

												);



$settings['bistro_portfolio']['video_url'] =  array(

													'type' => 'multi_text', //builtin fields include:																	 

													'title' => __('Videos URL', 'theme_support_comre'),

													'id' => 'video_url',

													'attributes' => array('style' => 'width:45%'),

												);

























												