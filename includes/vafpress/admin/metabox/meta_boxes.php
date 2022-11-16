<?php
$options = array();
 

/** SEO fields for custom posts and pages */
$options[] = array(
	'id'          => '_sh_layout_settings',
	'types'       => array('post', 'page', 'product', 'sh_services', 'sh_coupons' ),
	'title'       => __('Layout Settings', 'theme_support_comre'),
	'priority'    => 'high',
	'template'    => 
			array(
					
					array(
						'type' => 'radioimage',
						'name' => 'layout',
						'label' => __('Page Layout', 'theme_support_comre'),
						'description' => __('Choose the layout for blog pages', 'theme_support_comre'),
						'items' => array(
							array(
								'value' => 'left',
								'label' => __('Left Sidebar', 'theme_support_comre'),
								'img' => SH_TH_URL.'/includes/vafpress/public/img/2cl.png',
							),
							array(
								'value' => 'right',
								'label' => __('Right Sidebar', 'theme_support_comre'),
								'img' => SH_TH_URL.'/includes/vafpress/public/img/2cr.png',
							),
							array(
								'value' => 'full',
								'label' => __('Full Width', 'theme_support_comre'),
								'img' => SH_TH_URL.'/includes/vafpress/public/img/1col.png',
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
$options[] = array(
	'id'          => '_sh_header_settings',
	'types'       => array('post', 'page', 'product', 'sh_portfolio', 'sh_coupons'),
	'title'       => __('Header Settings', 'theme_support_comre'),
	'priority'    => 'high',
	'template'    => 
			array(
					
					
					array(
						'type' => 'upload',
						'name' => 'bg_image',
						'label' => __('Header Background Image', 'theme_support_comre'),
						'description' => __('Choose the header background image to show on each page', 'theme_support_comre'),
					),
					array(
						'type' => 'textbox',
						'name' => 'header_title',
						'label' => __('Header Title', 'theme_support_comre'),
						'description' => __('Enter header title', 'theme_support_comre'),
					),
					
					array(
					'type' => 'toggle',
					'name' => 'bread_crumb',
					'label' => __('Show Breadcrumb', 'theme_support_comre'),
					'description' => __('Show/hide breadcrumb on the page.', 'theme_support_comre'),
				),
				

				),
);
$options[] =  array(
	'id'          => _WSH()->set_meta_key('post'),
	'types'       => array('post'),
	'title'       => __('Post Settings', 'theme_support_comre'),
	'priority'    => 'high',
	'template'    => 
			array(		
					array(
						'type' => 'toggle',
						'name' => 'top_posts',
						'label' => __('Show/Hide top posts', 'theme_support_comre'),
						'description' => __('Enable / disable seo Top post', 'theme_support_comre'),
					),
					array(
							 'type'      => 'group',
							 'repeating' => true,
							 'length'    => 1,
							 'name'      => 'sh_gallery_imgs',
							 'title'     => __('Gallery images', 'theme_support_comre'),
							 'fields'    => array(
								array(
							   'type' => 'upload',
							   'name' => 'gallery_image',
							   'label' => __('Gallery Image', 'theme_support_comre'),
							   'description' => __('Choose the Gallery images', 'theme_support_comre'),
							  ),
							 ),
							), 
					array(
						'type' => 'textarea',
						'name' => 'video',
						'label' => __('Video Embed Code', 'theme_support_comre'),
						'default' => '',
						'description' => __('If post format is video then this embed code will be used in content', 'theme_support_comre')
					),
					array(
						'type' => 'textarea',
						'name' => 'audio',
						'label' => __('Audio Embed Code', 'theme_support_comre'),
						'default' => '',
						'description' => __('If post format is AUDIO then this embed code will be used in content', 'theme_support_comre')
					),
					array(
						'type' => 'textarea',
						'name' => 'quote',
						'label' => __('Quote', 'theme_support_comre'),
						'default' => '',
						'description' => __('If post format is quote then the content in this textarea will be displayed', 'theme_support_comre')
					),
							
					
			),
);
/* Page options */
/** Team Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('sh_team'),
	'types'       => array('sh_team'),
	'title'       => __('Team Options', 'theme_support_comre'),
	'priority'    => 'high',
	'template'    => array(
	
						
				array(
					'type' => 'textbox',
					'name' => 'designation',
					'label' => __('Designation', 'theme_support_comre'),
					'default' => '',
				),
				array(
					'type'      => 'group',
					'repeating' => true,
					'length'    => 1,
					'name'      => 'sh_team_social',
					'title'     => __('Social Profile', 'theme_support_comre'),
					'fields'    => array(
						
						array(
							'type' => 'fontawesome',
							'name' => 'social_icon',
							'label' => __('Social Icon', 'theme_support_comre'),
							'default' => '',
						),
						
						array(
							'type' => 'textbox',
							'name' => 'social_link',
							'label' => __('Link', 'theme_support_comre'),
							'default' => '',
							
						),
						
						
					),
				),
	),
);
/** Testimonial Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('sh_testimonials'),
	'types'       => array('sh_testimonials'),
	'title'       => __('Testimonials Options', 'theme_support_comre'),
	'priority'    => 'high',
	'template'    => array(
				array(
					'type' => 'textbox',
					'name' => 'designation',
					'label' => __('Designation', 'theme_support_comre'),
					'default' => 'Enter Designation',
				)
				),
	
);
/** Projects Options*/
$options[] =  array(
	'id'          => _WSH()->set_meta_key('sh_portfolio'),
	'types'       => array('sh_portfolio'),
	'title'       => __('Projects Options', 'theme_support_comre'),
	'priority'    => 'high',
	'template'    => array(
				array(
					'type' => 'textbox',
					'name' => 'project_detail_title',
					'label' => __('Project Detail Section Title', 'theme_support_comre'),
					'default' => '',
					'description' => __('Project Details', 'theme_support_comre')
				),
				
				array(
					'type'      => 'group',
					'repeating' => true,
					'sortable'  => true,
					'name'      => 'extra_detail',
					'title'     => __('Extra Portfolio Details', 'theme_support_comre'),
					'fields'    => array(
						array(
							'type'  => 'textbox',
							'name'  => 'label',
							'label' => __('Label', 'theme_support_comre'),
						),
						array(
							'type'  => 'textbox',
							'name'  => 'value',
							'label' => __('Value', 'theme_support_comre'),
						),
						
					),
				
				),
				array(
					'type'      => 'group',
					'repeating' => true,
					'sortable'  => true,
					'name'      => 'accordion',
					'title'     => __('Services Accordion', 'theme_support_comre'),
					'fields'    => array(
						array(
							'type'  => 'textbox',
							'name'  => 'title',
							'label' => __('Title', 'theme_support_comre'),
						),
						
						array(
							'type'                       => 'textarea',
							'label'                      => __('Content', 'theme_support_comre'),
							'name'                       => 'content',
							'use_external_plugins'       => 1,
							'disabled_externals_plugins' => 'vp_sc_button',
							'disabled_internals_plugins' => '',
							'validation'                 => 'required',
						),
					),
				
				),
				array(
					'type'      => 'group',
					'repeating' => true,
					'sortable'  => true,
					'name'      => 'portfolio_images',
					'title'     => __('Portfolio Images', 'theme_support_comre'),
					'fields'    => array(
						array(
							'type'  => 'upload',
							'name'  => 'image',
							'label' => __('Image', 'theme_support_comre'),
						),
						
					),
				
				),
			    array(
					'type' => 'textarea',
					'name' => 'video',
					'label' => __('Video Embed Code', 'theme_support_comre'),
					'default' => '',
					'description' => __('If Project Type is video then this embed code will be used in content', 'theme_support_comre'),
				),
			    array(
					'type' => 'textarea',
					'name' => 'audio',
					'label' => __('Audio Embed Code', 'theme_support_comre'),
					'default' => '',
					'description' => __('If Project Type is AUDIO then this embed code will be used in content', 'theme_support_comre'),
				),
				
									
	),
);
$options[] =  array(
	'id'          => _WSH()->set_meta_key('sh_gallery'),
	'types'       => array('sh_gallery'),
	'title'       => __('Image Gallery Settings', 'theme_support_comre'),
	'priority'    => 'high',
	'template'    => array(
		array(
			'name'  => 'use_image',
			'label' => 'Use Image Gallery',
			'type'  => 'toggle',
		),
		
				array(
					'type'      => 'group',
					'repeating' => true,
					'sortable'  => true,
					'name'      => 'column',
					'title'     => __('Images', 'theme_support_comre'),
					'fields'    => array(
						array(
							'type'  => 'textbox',
							'name'  => 'image_title',
							'label' => __('Title', 'theme_support_comre'),
						),
						array(
							'type'                       => 'upload',
							'label'                      => __('Image', 'theme_support_comre'),
							'name'                       => 'image',
							'use_external_plugins'       => 1,
							'validation'                 => 'required',
						),
						array(
							'type'                       => 'textarea',
							'label'                      => __('Content', 'theme_support_comre'),
							'name'                       => 'content',
							'use_external_plugins'       => 1,
							'disabled_externals_plugins' => 'vp_sc_button',
							'disabled_internals_plugins' => '',
							'validation'                 => 'required',
						),
					),
				
		),
	),
);
 $options[] =  array(
	'id'          => _WSH()->set_meta_key('sh_gallery'),
	'types'       => array('sh_gallery'),
	'title'       => __('Video Gallery Settings', 'theme_support_comre'),
	'priority'    => 'high',
	'template'    => array(
		array(
			'name'  => 'use_video',
			'label' => 'Use Videos',
			'type'  => 'toggle',
		),
		
				array(
					'type'      => 'group',
					'repeating' => true,
					'sortable'  => true,
					'name'      => 'column',
					'title'     => __('Video', 'theme_support_comre'),
					'fields'    => array(
						array(
							'type'  => 'textbox',
							'name'  => 'video_title',
							'label' => __('Title', 'theme_support_comre'),
						),
						array(
							'type'                       => 'textbox',
							'label'                      => __('Video Link', 'theme_support_comre'),
							'name'                       => 'link',
							'use_external_plugins'       => 1,
							'validation'                 => 'required',
						),
						array(
							'type'                       => 'textarea',
							'label'                      => __('Content', 'theme_support_comre'),
							'name'                       => 'v_content',
							'use_external_plugins'       => 1,
							'disabled_externals_plugins' => 'vp_sc_button',
							'disabled_internals_plugins' => '',
							'validation'                 => 'required',
						),
					),
				
		),
	),
);
$options[] =  array(
	'id'          => _WSH()->set_meta_key('sh_services'),
	'types'       => array( 'sh_services' ),
	'title'       => __('Services Settings', 'theme_support_comre'),
	'priority'    => 'high',
	'template'    => 
			array(
				
				array(
					'type' => 'fontawesome',
					'name' => 'fontawesome',
					'label' => __('Service Icon', 'theme_support_comre'),
					'default' => '',
				),
				array(
					'type' => 'upload',
					'name' => 'service_image',
					'label' => __('Services Image', 'theme_support_comre'),
					'description' => __('Add Another image to services', 'theme_support_comre'),
				),
			    
				array(
					'type' => 'textbox',
					'name' => 'single_link',
					'label' => __('Read More Link', 'theme_support_comre'),
					'description' => __('Enter the URL to redirect user for further reading', 'theme_support_comre'),
				),
			),
);
// Sh_Coupons
$options[] =  array(
	'id'          => _WSH()->set_meta_key('sh_coupons'),
	'types'       => array( 'sh_coupons' ),
	'title'       => __('Coupon Settings', 'theme_support_comre'),
	'priority'    => 'high',
	'template'    => 
			array(
			
				array(
					'type' => 'toggle',
					'name' => 'is_purchaseable',
					'label' => __('Is Purchaseable?', 'theme_support_comre'),
					'description' => __('If its a shopable coupon, you need to fill in the shopping info at the bottom of the page', 'theme_support_comre'),
					'help' => __('If its a shopable coupon, you need to fill in the shopping info at the bottom of the page', 'theme_support_comre'),
				),
				array(
					'type' => 'textbox',
					'name' => 'banner',
					'label' => __('Banner Title', 'theme_support_comre'),
					'description' => __('It is a banner text which you can see on great deals shortcode eg. Coupon or Deal', 'theme_support_comre'),
				),
				array(
					'type' => 'upload',
					'name' => 'small_image',
					'label' => __('Small Image', 'theme_support_comre'),
					'description' => __('It is an image which you can see the tabs on Homepage 2', 'theme_support_comre'),
				),
				array(
						'type' => 'textbox',
						'name' => 'buttons_title',
						'label' => __('Button Title', 'theme_support_comre'),
						'description' => __('Enter get a coupon button text eg. "Get a Coupon"', 'theme_support_comre'),
					),
				array(
					'type' => 'textbox',
					'name' => 'cashback',
					'label' => __('Cash Back text', 'theme_support_comre'),
					'description' => __('It is a text which you want to show on coupon shortcodes above Get a Coupon button eg. CASHBACK', 'theme_support_comre'),
				),
				
				array(
					'type' => 'date',
					'name' => 'expires_date',
					'label' => __('Expires Date', 'theme_support_comre'),
					'description' => __('Enter coupon expiry date, it may not formatted as per your country but You can see a formatted date on frontend', 'theme_support_comre'),
					//'format' => 'dd-mm-yy'
				),
				/*array(
					'type' => 'select',
					'name' => 'coupon_display_type',
					'label' => __( 'Coupon coppied or popup', 'theme_support_comre' ),
					'description' => __( 'On click on "Get a Coupon" button what do you want. Either code is copied to clipboard or a popup is being displayed to show the coupon', 'theme_support_comre' ),
					'items' => array(
						 array(
							 'value' => 'coupon_copied',
							'label' => __( 'Coupon Copied', 'theme_support_comre' ),
						),
						array(
							 'value' => 'coupon_popup',
							'label' => __( 'Coupon Popup', 'theme_support_comre' ),
						) 
					),
					'default' => 'coupon_copied' 
				),*/
				array(
					'type' => 'textbox',
					'name' => 'coupon_code',
					'label' => __('Coupon Code', 'theme_support_comre'),
					'description' => __('Enter coupon code for this coupon', 'theme_support_comre'),
				),
				array(
					'type' => 'textbox',
					'name' => 'coupon_link',
					'label' => __('Coupon External Link', 'theme_support_comre'),
					'description' => __('Enter referrer URL to be opened after clicking on "Get a Coupon" button ', 'theme_support_comre'),
				),
				array(
						'type' => 'toggle',
						'name' => 'verified',
						'label' => __('Verified Status', 'theme_support_comre'),
						'description' => __('Check this box if you want to show it as verified', 'theme_support_comre'),
					),
					
				array(
						'type' => 'toggle',
						'name' => 'safe',
						'label' => __('Safe', 'theme_support_comre'),
						'description' => __('Check this box if you want to this coupon as safe', 'theme_support_comre'),
					),
					
				array(
						'type' => 'toggle',
						'name' => 'share',
						'label' => __('Share', 'theme_support_comre'),
						'description' => __('Check this box if allow users to share this coupon on social media.', 'theme_support_comre'),
					),
					
				array(
						'type' => 'toggle',
						'name' => 'discuss',
						'label' => __('Discuss', 'theme_support_comre'),
						'description' => sprintf( __('Check this box if you want to a "Disqus" button, on click on this button a popup will be opened which will display Disqus discussions on this coupon. First you have to configure Disqus <a href="%s" target="_blank"> here</a>', 'theme_support_comre'), admin_url( 'themes.php?page=wp_comre_option') ),
					),
				
			),
);


$options[] = array(
	'id'          => _WSH()->set_meta_key('product'),
	'types'       => array('product'),
	'title'       => __('Product Settings', 'theme_support_comre'),
	'priority'    => 'high',
	'template'    => 
			array(
					
					
					array(
						'type' => 'textbox',
						'name' => 'cashback',
						'label' => __('Cashback Text', 'theme_support_comre'),
						'description' => __('Enter cashback text to show on products listing page', 'theme_support_comre'),
					),
					array(
						'type' => 'textbox',
						'name' => 'upto',
						'label' => __('Cashback Up to', 'theme_support_comre'),
						'description' => __('Enter percentage of cashback with text eg. UP TO 2.5%', 'theme_support_comre'),
					),
					
				),
);

/**
 * EOF
 */
 
 
 return $options;