<?php
$options = array();
$options[] =  array(
	'id'          => '_sh_tax_seo_settings',
	'types'       => array('category', 'post_tag'),
	'title'       => __('SEO Settings', 'theme_support_comre'),
	'priority'    => 'high',
	'template'    => 
			array(
					array(
						'type' => 'toggle',
						'name' => 'seo_status',
						'label' => __('Enable SEO', 'theme_support_comre'),
						//'description' => __('Enable / disable seo settings for this post', 'theme_support_comre'),
					),
					array(
						'type' => 'textbox',
						'name' => 'title',
						'label' => __('Meta Title', 'theme_support_comre'),
						//'description' => __('Enter meta title or leave it empty to use default title', 'theme_support_comre'),
					),
					
					array(
						'type' => 'textarea',
						'name' => 'description',
						'label' => __('Meta Description', 'theme_support_comre'),
						'default' => '',
						//'description' => __('Enter meta description', 'theme_support_comre'),
					),
					array(
						'type' => 'textarea',
						'name' => 'keywords',
						'label' => __('Meta Keywords', 'theme_support_comre'),
						'default' => '',
						//'description' => __('Enter meta keywords', 'theme_support_comre'),
					),
					
				),
);
$options[] =  array(
	'id'          => _WSH()->set_term_key('category'),
	'types'       => array('category', 'post_tag'),
	'title'       => __('Post Category Settings', 'theme_support_comre'),
	'priority'    => 'high',
	'template'    => 
			array(
					array(
						'type' => 'textbox',
						'name' => 'header_title',
						'label' => __( 'Header Title', 'theme_support_comre' ),
					),
					array(
						'type' => 'upload',
						'name' => 'header_img',
						'label' => __( 'Header image', 'theme_support_comre' ),
					),
					array(
						'type' => 'radioimage',
						'name' => 'view',
						'label' => __('Page View', 'theme_support_comre'),
						//'description' => __('Choose the layout for blog pages', 'theme_support_comre'),
						'items' => array(
							array(
								'value' => 'grid',
								'label' => __('Grid View', 'theme_support_comre'),
								'img' => get_template_directory_uri().'/includes/vafpress/public/img/grid-alt.png',
							),
							array(
								'value' => 'list',
								'label' => __('List View', 'theme_support_comre'),
								'img' => get_template_directory_uri().'/includes/vafpress/public/img/list3.png',
							),
							
						),
					),
					
					array(
						'type' => 'radioimage',
						'name' => 'layout',
						'label' => __('Page Layout', 'theme_support_comre'),
						//'description' => __('Choose the layout for blog pages', 'theme_support_comre'),
						'items' => array(
							array(
								'value' => 'left',
								'label' => __('Left Sidebar', 'theme_support_comre'),
								'img' => get_template_directory_uri().'/includes/vafpress/public/img/2cl.png',
							),
							array(
								'value' => 'right',
								'label' => __('Right Sidebar', 'theme_support_comre'),
								'img' => get_template_directory_uri().'/includes/vafpress/public/img/2cr.png',
							),
							array(
								'value' => 'full',
								'label' => __('Full Width', 'theme_support_comre'),
								'img' => get_template_directory_uri().'/includes/vafpress/public/img/1col.png',
							),
							
						),
					),
					
					array(
						'type' => 'select',
						'name' => 'sidebar',
						'label' => __('Sidebar', 'theme_support_comre'),
						'default' => '',
						'items' => sh_get_sidebars(true)	
					),
					
				),
);
$options[] =  array(
	'id'          => _WSH()->set_term_key('coupons_category'),
	'types'       => array('coupons_category'),
	'title'       => __('Coupons Category Settings', 'theme_support_comre'),
	'priority'    => 'high',
	'template'    => 
			array(
	
					array(
							'type' => 'fontawesome',
							'name' => 'coupon_icon',
							'label' => __('Coupon Icon', 'theme_support_comre'),
							'default' => '',
						),
						array(
							'type'  => 'upload',
							'name'  => 'bg_image',
							'label' => __('Category Image', 'theme_support_comre'),
						),
						
					
				),
);
$options[] =  array(
	'id'          => _WSH()->set_term_key('coupons_store_category'),
	'types'       => array('coupons_store_category'),
	'title'       => __('Store Category Settings', 'theme_support_comre'),
	'priority'    => 'high',
	'template'    => 
			array(
					array(
						'type' => 'textbox',
						'name' => 'cashback',
						'label' => __('CashBack text', 'theme_support_comre'),
						'description' => __('CashBack text', 'theme_support_comre'),
					),
					array(
						'type' => 'textbox',
						'name' => 'web_link',
						'label' => __('Website Link', 'theme_support_comre'),
						'description' => __('Store Website Link', 'theme_support_comre'),
					),
	
					array(
						'type'  => 'upload',
						'name'  => 'bg_image',
						'label' => __('Category Image', 'theme_support_comre'),
					),
					array(
						'type'      => 'group',
						'repeating' => true,
						'length'    => 1,
						'name'      => 'cashback_table',
						'title'     => __('Cashback Table', 'theme_support_comre'),
						'fields'    => array(
							array(
								'type' => 'textbox',
								'name' => 'label',
								'label' => __('Label', 'theme_support_comre'),
								'description' => __('Enter label to show on store page in cash table', 'theme_support_comre'),
							),
							array(
								'type' => 'textbox',
								'name' => 'value',
								'label' => __('Percentage', 'theme_support_comre'),
								'description' => __('Enter percentage to show in cashback table', 'theme_support_comre'),
							),
						),
					),
					
			),
);
$options[] =  array(
	'id'          => _WSH()->set_term_key('product_cat'),
	'types'       => array('product_cat'),
	'title'       => __('Product Category Settings', 'theme_support_comre'),
	'priority'    => 'high',
	'template'    => 
			array(
	
					array(
							'type' => 'fontawesome',
							'name' => 'product_icon',
							'label' => __('Product Icon', 'theme_support_comre'),
							'default' => '',
						),
						
				),
);
 return $options;
/**
 * EOF
 */
 
 
