<?php

$theme_option = get_option(SH_NAME.'_theme_options') ; 

$coupons_slug = sh_set($theme_option , 'coupons_permalink' , 'coupons') ;

$team_slug = sh_set($theme_option , 'team_permalink' , 'team') ;

$services_slug = sh_set($theme_option , 'services_permalink' , 'services') ;

$testimonial_slug = sh_set($theme_option , 'testimonial_permalink' , 'testimonials') ;



//$faqs_slug = sh_set($theme_option , 'faqs_permalink' , 'faqs') ;

$options = array();

$options['sh_coupons'] = array(

								'labels' => array(__('Coupon', 'theme_support_comre'), __('Coupons', 'theme_support_comre')),

								'slug' => $coupons_slug ,

								'label_args' => array('menu_name' => __('Coupons', 'theme_support_comre')),

								'supports' => array( 'title', 'editor' , 'thumbnail'),

								'label' => __('Coupons', 'theme_support_comre'),

								'args'=>array(

											'menu_icon'=>'dashicons-store' , 

											'taxonomies'=>array('coupons_category')

								)

							);

$options['sh_team'] = array(

								'labels' => array(__('Member', 'theme_support_comre'), __('Member', 'theme_support_comre')),

								'slug' => $team_slug ,

								'label_args' => array('menu_name' => __('Teams', 'theme_support_comre')),

								'supports' => array( 'title', 'editor' , 'thumbnail'),

								'label' => __('Member', 'theme_support_comre'),

								'args'=>array(

											'menu_icon'=>'dashicons-groups' , 

											'taxonomies'=>array('team_category')

								)

							);


$options['sh_services'] = array(

								'labels' => array(__('Service', 'theme_support_comre'), __('Service', 'theme_support_comre')),

								'slug' => $services_slug ,

								'label_args' => array('menu_name' => __('Services', 'theme_support_comre')),

								'supports' => array( 'title' , 'editor' , 'thumbnail' ),

								'label' => __('Service', 'theme_support_comre'),

								'args'=>array(

										'menu_icon'=>'dashicons-index-card' , 

										'taxonomies'=>array('services_category')

								)

							);

$options['sh_testimonials'] = array(

								'labels' => array(__('Testimonial', 'theme_support_comre'), __('Testimonial', 'theme_support_comre')),

								'slug' => $testimonial_slug ,

								'label_args' => array('menu_name' => __('Testimonials', 'theme_support_comre')),

								'supports' => array( 'title' , 'editor' , 'thumbnail' ),

								'label' => __('Testimonial', 'theme_support_comre'),

								'args'=>array(

										'menu_icon'=>'dashicons-testimonial' , 

										'taxonomies'=>array('testimonial_category')

								)

							);	

