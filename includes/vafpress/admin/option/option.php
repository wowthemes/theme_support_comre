<?php
$comre_options = array(
    'title' => __( 'Comre Theme Options', 'theme_support_comre' ),
    'logo' => get_template_directory_uri() . '/images/logo.png',
    'menus' => array(
        // General Settings
         array(
             'title' => __( 'General Settings', 'theme_support_comre' ),
            'name' => 'general_settings',
            'icon' => 'font-awesome:fa fa-cogs',
            'menus' => array(
                 
                array(
                    'title' => __( 'general Settings', 'theme_support_comre' ),
                    'name' => 'general_sub_settings',
                    'icon' => 'font-awesome:fa fa-dashboard',
                    'controls' => array(
                         array(
                            'type' => 'textbox',
                            'name' => 'map_api',
                            'label' => __( 'Google Map API', 'arkitekt' ),
                            'description' => __( 'Enter Google Map API key Here.', 'arkitekt' ),
                            'default' => '' 
                        ),
                        array(
                             'type' => 'section',
                            'repeating' => true,
                            'sortable' => true,
                            'title' => __( 'RTL Support', 'theme_support_comre' ),
                            'name' => 'rtl_support',
                            'description' => __( 'This section is used for RTL settings', 'theme_support_comre' ),
                            'fields' => array(
                                 
                                array(
                                    'type' => 'toggle',
                                    'name' => 'rtl',
                                    'label' => __( 'RTL', 'theme_support_comre' ),
                                    'description' => __( 'Turn RTL on or off', 'theme_support_comre' ),
                                    'default' => '',
                                    
                                ),
                            )
                        ),
                        array(
                            'type' => 'toggle',
                            'name' => 'show_acountmanager',
                            'label' => __( 'Show Account Manager Plugin', 'theme_support_comre' ),
                            'description' => __( 'Show or hide Account Manager Plugin', 'theme_support_comre' ),
                            'default' => 0
                        ),
                        array(
                             'type' => 'section',
                            'repeating' => true,
                            'sortable' => true,
                            'title' => __( 'Color Scheme', 'theme_support_comre' ),
                            'name' => 'color_schemes',
                            'description' => __( 'This section is used for theme color settings', 'theme_support_comre' ),
                            'fields' => array(
                                 
                                array(
                                    'type' => 'color',
                                    'name' => 'main_color_scheme',
                                    'label' => __( 'Yellow Color Scheme', 'theme_support_comre' ),
                                    'description' => __( 'Choose the Custom color scheme for the theme.', 'theme_support_comre' ),
                                    'default' => '#ffdd00',
                                    
                                ),
                                array(
                                    'type' => 'color',
                                    'name' => 'hover_color_scheme',
                                    'label' => __( 'Blue Color Scheme', 'theme_support_comre' ),
                                    'description' => __( 'Choose the Custom color scheme for the theme when hover different options.', 'theme_support_comre' ),
                                    'default' => '#002b5e',
                                    
                                ),
                            ) 
                        ),
                        
                        array(
                             'type' => 'section',
                            'repeating' => true,
                            'sortable' => true,
                            'title' => __( 'Purchase Information', 'theme_support_comre' ),
                            'name' => 'purchase_information',
                            'description' => __( 'To get the auto theme updates provide purchase information', 'theme_support_comre' ),
                            'fields' => array(
                                 
                                array(
                                    'type' => 'textbox',
                                    'name' => 'sh_purchase_code',
                                    'label' => __( 'Purchase Code', 'theme_support_comre' ),
                                    'description' => __( 'To find the purchase code to TF downloads tab click on Download then choose "License and Purchase code"', 'theme_support_comre' ),
                                    'default' => '',
                                ),
                                array(
                                    'type' => 'textbox',
                                    'name' => 'sh_purchase_user',
                                    'label' => __( 'Themeforest Username', 'theme_support_comre' ),
                                    'description' => __( 'Enter your themeforest username', 'theme_support_comre' ),
                                    'default' => '',
                                ),
                                
                            ) 
                        ),
                        
                        
                        array(
                             'type' => 'radioimage',
                            'name' => 'stores_page_layout',
                            'label' => __( 'Stores Layout', 'theme_support_comre' ),
                            'description' => __( 'Choose the Store layout whether Products cateogries or Coupons Categories', 'theme_support_comre' ),
                            'item_max_width' => 600,
                            'items' => array(
                                 array(
                                     'value' => 'layout-woo',
                                    'label' => __( 'Woocommerce Products Categories', 'theme_support_comre' ),
                                    'img' => get_template_directory_uri() . '/images/admin/layout-woo.png' 
                                ),
                                
                                array(
                                     'value' => 'layout-coupons',
                                    'label' => __( 'Coupons Categories', 'theme_support_comre' ),
                                    'img' => get_template_directory_uri() . '/images/admin/layout-coupons.png' 
                                ),
                                
                            ),
                            'default' => 'layout-woo'
                        ),
                        
                        array(
                            'type' => 'textbox',
                            'name' => 'disqus_idetifier',
                            'label' => __( 'DisQus Unique Identifier', 'theme_support_comre' ),
                            'description' => __( 'Get unique identifier from <a href="https://disqus.com/profile/signup/">Disqus</a>', 'theme_support_comre' ),
                            'default' => 'example'
                        ),
                    ),
                    
                    
                    
                ),
                /** Submenu for heading settings */
                array(
                     'title' => __( 'Header Settings', 'theme_support_comre' ),
                    'name' => 'header_settings',
                    'icon' => 'font-awesome:fa fa-dashboard',
                    'controls' => array(
                        
                        array(
                            'type' => 'toggle',
                            'name' => 'show_cart_in_header',
                            'label' => __( 'Show Cart in Header', 'theme_support_comre' ),
                            'description' => __( 'Enable to show cart in header', 'theme_support_comre' ),
                            'default' => 0
                        ),

                        array(
                             'type' => 'upload',
                            'name' => 'site_favicon',
                            'label' => __( 'Favicon', 'theme_support_comre' ),
                            'description' => __( 'Upload the favicon, should be 16x16', 'theme_support_comre' ),
                            'default' => '' 
                        ),
                        array(
                                'type' => 'sorter',
                                'name' => 'search_post_types',
                                'max_selection' => 10,
                                'label' => __('Choose search box filters', 'theme_support_comre'),
                                'description' => __('Choose search box filters', 'theme_support_comre'),
                                'items' => array(                               
                                        array(
                                            'value' => 'post',
                                            'label' => __( 'Posts', 'theme_support_comre' ),
                                        ),
                                        array(
                                             'value' => 'product',
                                            'label' => __( 'Products', 'theme_support_comre' ),
                                        ),
                                        array(
                                             'value' => 'sh_coupons',
                                            'label' => __( 'Coupons', 'theme_support_comre' ),
                                        ),
                                ),
                            ),
                        array(
                            'type' => 'upload',
                            'name' => 'site_logo',
                            'label' => __( 'Logo', 'theme_support_comre' ),
                            'description' => __( 'Upload the Logo, should be 159x25', 'theme_support_comre' ),
                            'default' => '' 
                        ),
                        array(
                            'type' => 'toggle',
                            'name' => 'topbarstatus',
                            'label' => __( 'Show Top Bar', 'theme_support_comre' ),
                            'description' => __( 'Show or hide top bar', 'theme_support_comre' ),
                            'default' => 0
                        ),
                        array(
                            'type' => 'section',
                            
                            'title' => __('Top bar settings', 'theme_support_comre'),
                            'name' => 'top_bar',
                            'description' => __('This section is used for top bar area', 'theme_support_comre'),
                            'dependency' => array(
                                'field' => 'topbarstatus',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                               array(
                                    'type' => 'select',
                                    'name' => 'login_page',
                                    'label' => __('Login Page', 'theme_support_comre'),
                                    'description' => __('choose Login page to show in header area', 'theme_support_comre'),
                                    'items' => array(
                                        'data' => array(
                                            array(
                                                'source' => 'function',
                                                'value' => 'vp_get_pages',
                                                ),
                                            ),
                                        )
                                ),
                               array(
                                    'type' => 'select',
                                    'name' => 'register_page',
                                    'label' => __('Register Page', 'theme_support_comre'),
                                    'description' => __('choose register page to show in header area', 'theme_support_comre'),
                                    'items' => array(
                                        'data' => array(
                                            array(
                                                'source' => 'function',
                                                'value' => 'vp_get_pages',
                                                ),
                                            ),
                                        )
                                ),
                                array(
                                    'type' => 'select',
                                    'name' => 'account_page',
                                    'label' => __('Account Page', 'theme_support_comre'),
                                    'description' => __('choose Account page to show in header area', 'theme_support_comre'),
                                    'items' => array(
                                        'data' => array(
                                            array(
                                                'source' => 'function',
                                                'value' => 'vp_get_pages',
                                                ),
                                            ),
                                        )
                                ),
                                array(
                                    'type' => 'select',
                                    'name' => 'favourites_page',
                                    'label' => __('Favourites Page', 'theme_support_comre'),
                                    'description' => __('choose favourite page to show in header area', 'theme_support_comre'),
                                    'items' => array(
                                        'data' => array(
                                            array(
                                                'source' => 'function',
                                                'value' => 'vp_get_pages',
                                                ),
                                            ),
                                        )
                                ),
                                array(
                                    'type' => 'select',
                                    'name' => 'coupon_page',
                                    'label' => __('Coupon Page', 'theme_support_comre'),
                                    'description' => __('choose Coupon page to show in header area', 'theme_support_comre'),
                                    'items' => array(
                                        'data' => array(
                                            array(
                                                'source' => 'function',
                                                'value' => 'vp_get_pages',
                                                ),
                                            ),
                                        )
                                ),
                                array(
                                    'type' => 'toggle',
                                    'name' => 'show_social_icons',
                                    'label' => __( 'Show header social icons', 'theme_support_comre' ),
                                    'description' => __( 'Show or hide header social icons', 'theme_support_comre' ),
                                    'default' => 0
                                ),
                            
                                
                            ),
                        ),
                        
                        array(
                                'type' => 'toggle',
                                'name' => 'show_sticky_menu',
                                'label' => __( 'Show Sticky Menu', 'theme_support_comre' ),
                                'description' => __( 'Show or hide Sticky Menu', 'theme_support_comre' ),
                                'default' => 0
                        ),  
                                
                            
                                
                        
                        
                        // Custom HEader Style End
                      array(
                             'type' => 'codeeditor',
                            'name' => 'custom_js',
                            'label' => __( 'Custom Scripts', 'theme_support_comre' ),
                            'description' => __( 'You can insert your custom scripts in this area.', 'theme_support_comre' ),
                            'theme' => 'twilight',
                            'mode' => 'javascript' 
                        ), 
                        array(
                             'type' => 'codeeditor',
                            'name' => 'header_css',
                            'label' => __( 'Header CSS', 'theme_support_comre' ),
                            'description' => __( 'Write your custom css to include in header.', 'theme_support_comre' ),
                            'theme' => 'github',
                            'mode' => 'css' 
                        )   
                    ) 
                    
                ),
                
                
                
                /** Submenu for footer area */
                array(
                     'title' => __( 'Footer Settings', 'theme_support_comre' ),
                    'name' => 'sub_footer_settings',
                    'icon' => 'font-awesome:fa fa-edit',
                    'controls' => array(
                    
                        array(
                            'type' => 'toggle',
                            'name' => 'toggle_footer_top',
                            'label' => __( 'Show or hide footer top', 'theme_support_comre' ),
                            'label' => __( 'Show or hide footer top', 'theme_support_comre' ),
                            'description' => __( 'Show or hide footer top', 'theme_support_comre' ),
                            'default' => 0
                        ),
                        array(
                            'type' => 'toggle',
                            'name' => 'toggle_footer_bottom',
                            'label' => __( 'Show or hide footer bottom', 'theme_support_comre' ),
                            'label' => __( 'Show or hide footer bottom', 'theme_support_comre' ),
                            'description' => __( 'Show or hide footer bottom', 'theme_support_comre' ),
                            'default' => 0
                        ),
                        
                        array(
                            'type' => 'color',
                            'name' => 'footer_color_scheme',
                            'label' => __( 'Footer Background Color', 'theme_support_comre' ),
                            'description' => __( 'Choose the Custom color scheme for footer', 'theme_support_comre' ),
                            'default' => '#111111',
                            
                        ),
                        array(
                            'type' => 'upload',
                            'name' => 'footer_background_img',
                            'label' => __( 'Footer Bacckground image', 'theme_support_comre' ),
                            'description' => __( 'Choose the image you want to show on the background of footer', 'theme_support_comre' ),
                            
                        ),  
                        
                        array(
                            'type' => 'textarea',
                            'name' => 'copy_right',
                            'label' => __( 'Copy Right Text', 'theme_support_comre' ),
                            'description' => __( 'Enter the Copy Right Text', 'theme_support_comre' ),
                            'default' => 'Ideas and designed BY WPMINES'
                        ),
                        array(
                             'type' => 'codeeditor',
                            'name' => 'footer_analytics',
                            'label' => __( 'Footer Analytics / Scripts', 'theme_support_comre' ),
                            'description' => __( 'In this area you can put Google Analytics Code or any other Script that you want to be included in the footer before the Body tag.', 'theme_support_comre' ),
                            'theme' => 'twilight',
                            'mode' => 'javascript' 
                        ) 
                        
                        
                        
                    ) 
                ), //End of submenu
                
                array(
                     'title' => __( 'Twitter Settings', 'theme_support_comre' ),
                    'name' => 'sub_twitter_settings',
                    'icon' => 'font-awesome:fa fa-twitter',
                    'controls' => array(
                        
                         array(
                             'type' => 'textbox',
                            'name' => 'twitter_api',
                            'label' => __( 'API', 'theme_support_comre' ),
                            'description' => __( 'Enter Twitter API key Here. to get twitter api <a href="http://dev.twitter.com">Go To</a> and create a new app', 'theme_support_comre' ),
                            'default' => 'EAVuZPOFDqh6YJRoIUn4danY8' 
                        ),
                        
                        array(
                             'type' => 'textbox',
                            'name' => 'twitter_api_secret',
                            'label' => __( 'API Secret', 'theme_support_comre' ),
                            'description' => __( 'Enter Twitter API Secret Here.', 'theme_support_comre' ),
                            'default' => 'HZ5lBxAooSWbLIyva9SioNbzLoPfzk9yKxLscMUGRwGt5XzIyv' 
                        ),
                        array(
                             'type' => 'textbox',
                            'name' => 'twitter_token',
                            'label' => __( 'Token', 'theme_support_comre' ),
                            'description' => __( 'Enter Twitter Token here.', 'theme_support_comre' ),
                            'default' => '2595337447-sQiBf41a0BYokzTyULmP6LDpC28MU6ajCtllgHq' 
                        ),
                        array(
                             'type' => 'textbox',
                            'name' => 'twitter_token_Secret',
                            'label' => __( 'Token Secret', 'theme_support_comre' ),
                            'description' => __( 'Enter Token Secret', 'theme_support_comre' ),
                            'default' => 'tjeQG0UiRZLJLua9phO0eVMv5ZpQRvx4Z0dS4b3dwEpk7' 
                        ) 
                    ) 
                ), //End of submenu*/

                array(
                     'title' => __( 'Permalinks Settings', 'theme_support_comre' ),
                    'name' => 'permalinks_settings',
                    'icon' => 'font-awesome:fa fa-link',
                    'controls' => array(
                         array(
                             'type' => 'section',
                            'name' => 'post_type_permalink_section',
                            'title' => 'Post Type Permalinks',
                            'fields' => array(
                                 array(
                                     'type' => 'textbox',
                                    'name' => 'team_permalink',
                                    'label' => __( 'Team Permalink', 'theme_support_comre' ),
                                    'description' => __( 'Enter Slug for Team Post Type.', 'theme_support_comre' ),
                                    'default' => '' 
                                ),
                                
                                array(
                                     'type' => 'textbox',
                                    'name' => 'services_permalink',
                                    'label' => __( 'Services Permalink', 'theme_support_comre' ),
                                    'description' => __( 'Enter Slug for Services Post Type.', 'theme_support_comre' ),
                                    'default' => '' 
                                ),
                                array(
                                     'type' => 'textbox',
                                    'name' => 'projects_permalink',
                                    'label' => __( 'Projects Permalink', 'theme_support_comre' ),
                                    'description' => __( 'Enter Permalink for Projects Post Type.', 'theme_support_comre' ),
                                    'default' => '' 
                                ),
                                array(
                                     'type' => 'textbox',
                                    'name' => 'testimonial_permalink',
                                    'label' => __( 'Testimonial Permalink', 'theme_support_comre' ),
                                    'description' => __( 'Enter Permalink for Testimonial Post Type.', 'theme_support_comre' ),
                                    'default' => '' 
                                ),

                                array(
                                     'type' => 'textbox',
                                    'name' => 'coupons_permalink',
                                    'label' => __( 'Coupons Permalink', 'theme_support_comre' ),
                                    'description' => __( 'Enter Permalink for Couopons Post Type.', 'theme_support_comre' ),
                                    'default' => '' 
                                ),
                                 
                            ) 
                        ),
                        array(
                             'type' => 'section',
                            'name' => 'category_permalink_section',
                            'title' => 'Category Permalinks',
                            'fields' => array(
                                 array(
                                     'type' => 'textbox',
                                    'name' => 'team_category_permalink',
                                    'label' => __( 'Team Category Permalink', 'theme_support_comre' ),
                                    'description' => __( 'Enter Slug for Team Taxonomy.', 'theme_support_comre' ),
                                    'default' => '' 
                                ),
                                
                                array(
                                     'type' => 'textbox',
                                    'name' => 'services_category_permalink',
                                    'label' => __( 'Services Category Permalink', 'theme_support_comre' ),
                                    'description' => __( 'Enter Slug for Services Taxonomy.', 'theme_support_comre' ),
                                    'default' => '' 
                                ),
                                array(
                                     'type' => 'textbox',
                                    'name' => 'projects_category_permalink',
                                    'label' => __( 'Projects Category Permalink', 'theme_support_comre' ),
                                    'description' => __( 'Enter Permalink for Projects Taxonomy.', 'theme_support_comre' ),
                                    'default' => '' 
                                ),
                                array(
                                     'type' => 'textbox',
                                    'name' => 'testimonial_category_permalink',
                                    'label' => __( 'Testimonial Category Permalink', 'theme_support_comre' ),
                                    'description' => __( 'Enter Permalink for Testimonial Taxonomy.', 'theme_support_comre' ),
                                    'default' => '' 
                                ),
                                array(
                                     'type' => 'textbox',
                                    'name' => 'coupons_category_permalink',
                                    'label' => __( 'Coupons Category Permalink', 'theme_support_comre' ),
                                    'description' => __( 'Enter Permalink for Coupons Taxonomy.', 'theme_support_comre' ),
                                    'default' => 'coupons_category' 
                                ),
                                array(
                                     'type' => 'textbox',
                                    'name' => 'coupons_store_category_permalink',
                                    'label' => __( 'Coupons Store Permalink', 'theme_support_comre' ),
                                    'description' => __( 'Enter Permalink for Coupon Stores.', 'theme_support_comre' ),
                                    'default' => 'stores' 
                                ) 
                            ) 
                        ) 
                    ) 
                ) //End of submenu
                
                
            ) 
        ),
        
        // SEO General settings Settings
        
        array(
            'title' => __( 'Typography Settings', 'theme_support_comre' ),
            'name' => 'typography_settings',
            'icon' => 'font-awesome:fa fa-font',
            'menus' => array(
                
                // Search Page Settings 
                 array(
                    'title' => __( 'Typogrphy options', 'theme_support_comre' ),
                    'name' => 'typogrphy_options_settings',
                    'icon' => 'font-awesome:fa fa-font',
                    'controls' => array(
                        
                            array(
                                'type' => 'toggle',
                                'name' => 'show_topbar_typogrphy',
                                'label' => esc_html__( 'Show Topbar Typogrphy Options', 'theme_support_comre' ),
                                'description' => esc_html__( 'Enable to show Topbar Typogrphy Options', 'theme_support_comre' ),
                                'default' => false,
                            ),
                            array(
                                'type' => 'toggle',
                                'name' => 'show_header_typogrphy',
                                'label' => esc_html__( 'Show Header Typogrphy Options', 'theme_support_comre' ),
                                'description' => esc_html__( 'Enable to show  Header Typogrphy Options', 'theme_support_comre' ),
                                'default' => false,
                            ),
                             array(
                                'type' => 'toggle',
                                'name' => 'show_footer_typogrphy',
                                'label' => esc_html__( 'Show Footer Typogrphy Options', 'theme_support_comre' ),
                                'description' => esc_html__( 'Enable to Footer Top Typogrphy Options', 'theme_support_comre' ),
                                'default' => false,
                            ),
                      
                    ) 
                ), // End of submenu

                // Search Page Settings 
                 array(
                    'title' => __( 'Topbar Typogrphy', 'theme_support_comre' ),
                    'name' => 'typogrphy_topbar_settings',
                    'icon' => 'font-awesome:fa fa-bold',
                    'controls' => array(
                        
                            array(
                                'type' => 'slider',
                                'name' => 'topbar_height',
                                'label' => __('Topbar Height', 'theme_support_comre'),
                                'description' => __('Topbar Height.', 'theme_support_comre'),
                                'min' => '10',
                                'max' => '200',
                                'step' => '10',
                                'default' => '50',
                            ),
                            array(
                                'type' => 'background',
                                'name' => 'topbar_bg_color',
                                'label' => __( 'Topbar  Background Color', 'theme_support_comre' ),  
                                'bgrepeat' => false,
                                'bgposition' => false,
                                'bgscroll' => false,
                                'image' => false,

                            ),
                            array(
                                'type' => 'typography',
                                'name' => 'topbar_text_color',
                                'label' => __( 'Topbar  Typography', 'theme_support_comre' ),
                                'size'  => true,  
                                'height'  => true, 
                                'color'  => true,  
                                'alighnment'  => true, 
                                'transform'  => true,  
                                'spacing'  => true,
                                'family'  => false,  
                                'variant'  => false, 

                            ),
                            array(
                                'type' => 'typography',
                                'name' => 'topbar_link_color',
                                'label' => __( 'Topbar  link color', 'theme_support_comre' ),
                                 'size'  => false,  
                                'height'  => false, 
                                'color'  => true,  
                                'alighnment'  => false, 
                                'transform'  => false,  
                                'spacing'  => false,
                                'family'  => false,  
                                'variant'  => false,  
                                'width'  => false,  
                            ),
                            array(
                                'type' => 'background',
                                'name' => 'topbar_link_bg',
                                'label' => __( 'Topbar Link background Color', 'theme_support_comre' ),
                                'bgrepeat' => false,
                                'bgposition' => false,
                                'bgscroll' => false,
                                'image' => false,
                            ),
                         
                            array(
                                'type' => 'background',
                                'name' => 'topbar_icon_bg',
                                'label' => __( 'Topbar Social Icons background Color', 'theme_support_comre' ),
                                'description' => __( 'Choose the Topbar Social Icons background Color.', 'theme_support_comre' ),
                                'bgrepeat' => false,
                                'bgposition' => false,
                                'bgscroll' => false,
                                'image' => false,
                            ),
                            array(
                                'type' => 'typography',
                                'name' => 'topbar_border_color',
                                'label' => __( 'Topbar Border Color', 'theme_support_comre' ),
                                'description' => __( 'Choose the Topbar Border Color.', 'theme_support_comre' ),
                                 'size'  => false,  
                                'height'  => false, 
                                'color'  => true,  
                                'alighnment'  => false, 
                                'transform'  => false,  
                                'spacing'  => false,
                                'family'  => false,  
                                'variant'  => false, 
                                'width'  => false, 

                            ),
                    ) 
                ), // End of submenu
                
                // Search Page Settings 
                 array(
                    'title' => __( 'Header Typogrphy', 'theme_support_comre' ),
                    'name' => 'typogrphy_header_settings',
                    'icon' => 'font-awesome:fa fa-bold',
                    'controls' => array(
                        array(
                            'type' => 'background',
                            'name' => 'logo_bg_color',
                            'label' => __( 'Logo background Color', 'theme_support_comre' ),
                            'description' => __( 'Choose the Logo Background Color.', 'theme_support_comre' ),
                            'bgrepeat' => false,
                            'bgposition' => false,
                            'bgscroll' => false,
                            'image'  => false, 
                            'color' => true,
                        ),
                        array(
                            'type' => 'typography',
                            'name' => 'logo_txet_color',
                            'label' => __( 'Logo Text Color', 'theme_support_comre' ),
                            'description' => __( 'Choose the Logo Text Color.', 'theme_support_comre' ),
                            'size'  => false,  
                            'height'  => false, 
                            'color'  => true,  
                            'alighnment'  => false, 
                            'transform'  => false,  
                            'spacing'  => false,
                            'family'  => false,  
                            'variant'  => false, 
                            'width'  => false,
                        ),
                         array(
                            'type' => 'slider',
                            'name' => 'menubar_height',
                            'label' => __('Menu bar Height', 'theme_support_comre'),
                            'description' => __('Menu bar Height.', 'theme_support_comre'),
                            'min' => '10',
                            'max' => '200',
                            'step' => '10',
                            'default' => '50',
                        ),
                        array(
                            'type' => 'background',
                            'name' => 'menu_bg_color',
                            'label' => __( 'Menu bar background Color', 'theme_support_comre' ),
                            'description' => __( 'Choose the Menu Bar background Color.', 'theme_support_comre' ),
                            'bgrepeat' => false,
                            'bgposition' => false,
                            'bgscroll' => false,
                            'image' => false,

                        ),
                        
                        array(
                            'type' => 'background',
                            'name' => 'active_menu_bg',
                            'label' => __( 'Active Menu background Color', 'theme_support_comre' ),
                            'description' => __( 'Choose the Active Menu background Color.', 'theme_support_comre' ),
                             'bgrepeat' => false,
                            'bgposition' => false,
                            'bgscroll' => false,
                            'image' => false,
                            'size' => false,
                        ),
                        array(
                            'type' => 'typography',
                            'name' => 'active_menu_color',
                            'label' => __( 'Active Menu  Color', 'theme_support_comre' ),
                            'description' => __( 'Choose the Active Menu  Color.', 'theme_support_comre' ),
                            'size'  => true,  
                            'height'  => false, 
                            'color'  => true,  
                            'alighnment'  => false, 
                            'transform'  => false,  
                            'spacing'  => false,
                            'family'  => false,  
                            'variant'  => false, 
                        ),
                          array(
                            'type' => 'typography',
                            'label' => __( 'Menu Typography Options', 'theme_support_comre' ),
                            'name' => 'menu_custom_typography_options',
                            'size'  => true,  
                            'height'  => true, 
                            'color'  => true,
                            'alighnment'  => false, 
                            'transform'  => true,  
                            'spacing'  => false,
                            'family'  => true,  
                            'variant'  => false,   
                         ),
                        array(
                            'type' => 'background',
                            'name' => 'submenu_bg_color',
                            'label' => __( 'Submenu background Color', 'theme_support_comre' ),
                            'description' => __( 'Choose the submenu background Color.', 'theme_support_comre' ),
                             'bgrepeat' => false,
                            'bgposition' => false,
                            'bgscroll' => false,
                            'image' => false,
                        ),
                        array(
                            'type' => 'typography',
                            'name' => 'submenu_color',
                            'label' => __( 'Submenu typography', 'theme_support_comre' ),
                            'size'  => true,  
                            'height'  => false, 
                            'color'  => true,
                            'alighnment'  => false, 
                            'transform'  => false,  
                            'spacing'  => false,
                            'family'  => true,  
                            'variant'  => false, 
                        ),
                         array(
                            'type' => 'typography',
                            'name' => 'submenu_border_color',
                            'label' => __( 'Submenu Border Color', 'theme_support_comre' ),
                            'color'  => true,
                            'family'  => false,  
                            'variant'  => false, 
                        ),
                            array(
                            'type' => 'typography',
                            'name' => 'submenu_border_bottom',
                            'label' => __( 'Submenu Border Bottom Color', 'theme_support_comre' ),
                            'color'  => true,
                            'family'  => false,  
                            'variant'  => false,
                        ),
                          array(
                            'type' => 'typography',
                            'name' => 'submenu_hover_color',
                            'label' => __( 'Submenu Hover Color', 'theme_support_comre' ),      
                            'color'  => true,
                            'family'  => false,  
                            'variant'  => false, 
                        ),
                     
                    ) 
                ), // End of submenu

                // Search Page Settings 
                 array(
                    'title' => __( 'Footer Typogrphy options', 'theme_support_comre' ),
                    'name' => 'typogrphy_footer_settings',
                    'icon' => 'font-awesome:fa fa-italic',
                    'controls' => array(
                        array(
                            'type' => 'background',
                            'name' => 'footer_top_img',
                            'label' => __( 'Footer Top Background image', 'theme_support_comre' ),
                            'description' => __( 'Choose the Footer Top Background image', 'theme_support_comre' ),
                            'bgrepeat' => false,
                            'bgposition' => false,
                            'bgscroll' => false,
                            
                                    //'default' => 'Search Results' 
                        ),
                              
                          array(
                            'type' => 'typography',
                            'label' => __( 'Footer top Heading typography', 'theme_support_comre' ),
                            'name' => 'h1_font_family_custom_custom',
                            'size'  => true,  
                            'height'  => false, 
                            'color'  => true,  
                            'alighnment'  => true, 
                            'transform'  => true,  
                            'spacing'  => false,
                            'family'  => true,  
                            'variant'  => true,   
                         ),
                         array(
                            'type' => 'typography',
                            'label' => __( 'Footer top Text typography', 'theme_support_comre' ),
                            'name' => 'text_typography_options',
                            'size'  => false,  
                            'height'  => true, 
                            'color'  => true,  
                            'alighnment'  => true, 
                            'transform'  => true,  
                            'spacing'  => false,
                            'family'  => true,  
                            'variant'  => true,   
                         ),

                     
                    ) 
                ), // End of submenu
              ) 
        ),     
               
        
        // SEO General settings Settings
        array(
             'title' => __( 'SEO Settings', 'theme_support_comre' ),
            'name' => 'seo_settings',
            'icon' => 'font-awesome:fa fa-search',
            
            'controls' => array(
                
                array(
                     'type' => 'toggle',
                    'name' => '_enable_seo',
                    'label' => __( 'Enable SEO', 'theme_support_comre' ),
                    'description' => __( 'Enable or disable seo settings', 'theme_support_comre' ),
                    'default' => 0 
                ),
                array( 
                        'type' => 'section',
                        'title' => __( 'Homepage Settings', 'theme_support_comre' ),
                        'name' => '_seo_homepage_settings',
                        'description' => __( 'homepage meta title, meta description and meta keywords', 'theme_support_comre' ),
                        'fields' => array(
                                array(
                                     'type' => 'textbox',
                                    'name' => '_seo_home_meta_title',
                                    'label' => __( 'Meta Title', 'theme_support_comre' ),
                                    'description' => __( 'Enter the Title you want to show on home page', 'theme_support_comre' ),
                                    'default' => ''
                                ),
                                array(
                                    'type' => 'textarea',
                                    'name' => '_seo_home_meta_description',
                                    'label' => __( 'Meta Description', 'theme_support_comre' ),
                                    'description' => __( 'Enter the meta description for homepage', 'theme_support_comre' ),
                                    'default' => ''
                                ),
                                array(
                                    'type' => 'textarea',
                                    'name' => '_seo_home_meta_keywords',
                                    'label' => __( 'Meta Keywords', 'theme_support_comre' ),
                                    'description' => __( 'Enter the comma separated keywords for homepage', 'theme_support_comre' ),
                                    'default' => ''
                                ),
                        ),
                 ), /** End of homepage seo settings */
                 
                 array( 
                        'type' => 'section',
                        'title' => __( 'Archive Pages Settings', 'theme_support_comre' ),
                        'name' => '_seo_archive_settings',
                        'description' => __( 'archive pages meta title, meta description and meta keywords', 'theme_support_comre' ),
                        'fields' => array(
                                array(
                                     'type' => 'textbox',
                                    'name' => '_seo_archive_meta_title',
                                    'label' => __( 'Meta Title', 'theme_support_comre' ),
                                    'description' => __( 'Enter the Title you want to show on home page', 'theme_support_comre' ),
                                    'default' => ''
                                ),
                                array(
                                    'type' => 'textarea',
                                    'name' => '_seo_archive_meta_description',
                                    'label' => __( 'Meta Description', 'theme_support_comre' ),
                                    'description' => __( 'Enter the meta description for homepage', 'theme_support_comre' ),
                                    'default' => ''
                                ),
                                array(
                                    'type' => 'textarea',
                                    'name' => '_seo_archive_meta_keywords',
                                    'label' => __( 'Meta Keywords', 'theme_support_comre' ),
                                    'description' => __( 'Enter the comma separated keywords for homepage', 'theme_support_comre' ),
                                    'default' => ''
                                ),
                        ),
                 ),/** End of archive page settings */
                
            ), /** End of controls */
                
        ), /** End of seo page settings */
        
        // Pages , Blog Pages Settings
        array(
             'title' => __( 'Page Settings', 'theme_support_comre' ),
            'name' => 'general_settings',
            'icon' => 'font-awesome:fa fa-file',
            'menus' => array(
                
                // Search Page Settings 
                 array(
                     'title' => __( 'Search Page', 'theme_support_comre' ),
                    'name' => 'search_page_settings',
                    'icon' => 'font-awesome:fa fa-search',
                    'controls' => array(
                        
                        array(
                            'type' => 'textbox',
                            'name' => 'search_page_title',
                            'label' => __( 'Page Title', 'theme_support_comre' ),
                            'description' => __( 'Enter the Title you want to show on search page', 'theme_support_comre' ),
                            'default' => 'Search Results' 
                        ),
                        array(
                            'type' => 'upload',
                            'name' => 'search_page_header_img',
                            'label' => __( 'Header image', 'theme_support_comre' ),
                            'description' => __( 'Choose the image you want to show on search page', 'theme_support_comre' ),
                            //'default' => 'Search Results' 
                        ),
                        array(
                             'type' => 'select',
                            'name' => 'search_page_sidebar',
                            'label' => __( 'Sidebar', 'theme_support_comre' ),
                            'items' => array(
                                 'data' => array(
                                     array(
                                         'source' => 'function',
                                        'value' => 'sh_get_sidebars_2' 
                                    ) 
                                ) 
                            ),
                            'default' => array(
                                 '{{first}}' 
                            ) 
                        ),
                        array(
                             'type' => 'radioimage',
                            'name' => 'search_page_layout',
                            'label' => __( 'Page Layout', 'theme_support_comre' ),
                            'description' => __( 'Choose the layout for blog pages', 'theme_support_comre' ),
                            
                            'items' => array(
                                 array(
                                     'value' => 'left',
                                    'label' => __( 'Left Sidebar', 'theme_support_comre' ),
                                    'img' => SH_TH_URL . '/includes/vafpress/public/img/layout-left.png' 
                                ),
                                
                                array(
                                     'value' => 'right',
                                    'label' => __( 'Right Sidebar', 'theme_support_comre' ),
                                    'img' => SH_TH_URL . '/includes/vafpress/public/img/layout-right.png' 
                                ),
                                array(
                                     'value' => 'full',
                                    'label' => __( 'Full Width', 'theme_support_comre' ),
                                    'img' => SH_TH_URL . '/includes/vafpress/public/img/layout-full.png' 
                                ) 
                                
                            ) 
                        ),
                    ) 
                ), // End of submenu
                
                // Archive Page Settings 
                array(
                     'title' => __( 'Archive Page', 'theme_support_comre' ),
                    'name' => 'archive_page_settings',
                    'icon' => 'font-awesome:fa fa-archive',
                    'controls' => array(
                        array(
                             'type' => 'textbox',
                            'name' => 'archive_page_title',
                            'label' => __( 'Page Title', 'theme_support_comre' ),
                            'description' => __( 'Enter the Title you want to show on archive page', 'theme_support_comre' ),
                            'default' => 'Archive' 
                        ),
                        array(
                             'type' => 'upload',
                            'name' => 'archive_page_header_img',
                            'label' => __( 'Header image', 'theme_support_comre' ),
                            'description' => __( 'Choose the image you want to show on archive page', 'theme_support_comre' ),
                            //'default' => 'Search Results' 
                        ),
                        array(
                             'type' => 'select',
                            'name' => 'archive_page_sidebar',
                            'label' => __( 'Sidebar', 'theme_support_comre' ),
                            'items' => array(
                                 'data' => array(
                                     array(
                                         'source' => 'function',
                                        'value' => 'sh_get_sidebars_2' 
                                    ) 
                                ) 
                            ),
                            'default' => array(
                                 '{{first}}' 
                            ) 
                        ),
                        array(
                             'type' => 'radioimage',
                            'name' => 'archive_page_layout',
                            'label' => __( 'Page Layout', 'theme_support_comre' ),
                            'description' => __( 'Choose the layout for blog pages', 'theme_support_comre' ),
                            
                            'items' => array(
                                 array(
                                     'value' => 'left',
                                    'label' => __( 'Left Sidebar', 'theme_support_comre' ),
                                    'img' => SH_TH_URL . '/includes/vafpress/public/img/layout-left.png' 
                                ),
                                
                                array(
                                     'value' => 'right',
                                    'label' => __( 'Right Sidebar', 'theme_support_comre' ),
                                    'img' => SH_TH_URL . '/includes/vafpress/public/img/layout-right.png' 
                                ),
                                array(
                                     'value' => 'full',
                                    'label' => __( 'Full Width', 'theme_support_comre' ),
                                    'img' => SH_TH_URL . '/includes/vafpress/public/img/layout-full.png' 
                                ) 
                                
                            ) 
                        ) 
                        
                        
                    ) 
                ),
                // Category Page Settings 
                array(
                     'title' => __( 'Category Page', 'theme_support_comre' ),
                    'name' => 'category_page_settings',
                    'icon' => 'font-awesome:fa fa-archive',
                    'controls' => array(
                        array(
                             'type' => 'textbox',
                            'name' => 'category_page_title',
                            'label' => __( 'Page Title', 'theme_support_comre' ),
                            'description' => __( 'Enter the Title you want to show on category page', 'theme_support_comre' ),
                            'default' => 'Archive' 
                        ),
                        array(
                             'type' => 'upload',
                            'name' => 'category_header_img',
                            'label' => __( 'Header image', 'theme_support_comre' ),
                            'description' => __( 'Choose the image you want to show on category page', 'theme_support_comre' ),
                            //'default' => 'Search Results' 
                        ),
                        array(
                             'type' => 'select',
                            'name' => 'category_page_sidebar',
                            'label' => __( 'Sidebar', 'theme_support_comre' ),
                            'items' => array(
                                 'data' => array(
                                     array(
                                         'source' => 'function',
                                        'value' => 'sh_get_sidebars_2' 
                                    ) 
                                ) 
                            ),
                            'default' => array(
                                 '{{first}}' 
                            ) 
                        ),
                        array(
                             'type' => 'radioimage',
                            'name' => 'category_page_layout',
                            'label' => __( 'Page Layout', 'theme_support_comre' ),
                            'description' => __( 'Choose the layout for blog pages', 'theme_support_comre' ),
                            
                            'items' => array(
                                 array(
                                     'value' => 'left',
                                    'label' => __( 'Left Sidebar', 'theme_support_comre' ),
                                    'img' => SH_TH_URL . '/includes/vafpress/public/img/layout-left.png' 
                                ),
                                
                                array(
                                     'value' => 'right',
                                    'label' => __( 'Right Sidebar', 'theme_support_comre' ),
                                    'img' => SH_TH_URL . '/includes/vafpress/public/img/layout-right.png' 
                                ),
                                array(
                                     'value' => 'full',
                                    'label' => __( 'Full Width', 'theme_support_comre' ),
                                    'img' => SH_TH_URL . '/includes/vafpress/public/img/layout-full.png' 
                                ) 
                                
                            ) 
                        ) 
                        
                        
                    ) 
                ),
                // End of category page settings
                // Author Page Settings 
                array(
                     'title' => __( 'Author Page', 'theme_support_comre' ),
                    'name' => 'author_page_settings',
                    'icon' => 'font-awesome:fa fa-user',
                    'controls' => array(
                        
                        array(
                             'type' => 'textbox',
                            'name' => 'author_page_title',
                            'label' => __( 'Page Title', 'theme_support_comre' ),
                            'description' => __( 'Enter the Title you want to show on author page', 'theme_support_comre' ),
                            'default' => 'Author' 
                        ),
                        array(
                             'type' => 'upload',
                            'name' => 'author_page_header_img',
                            'label' => __( 'Header image', 'theme_support_comre' ),
                            'description' => __( 'Choose the image you want to show on author page', 'theme_support_comre' ),
                            //'default' => 'Search Results' 
                        ),
                        array(
                             'type' => 'select',
                            'name' => 'author_page_sidebar',
                            'label' => __( 'Sidebar', 'theme_support_comre' ),
                            'items' => array(
                                 'data' => array(
                                     array(
                                         'source' => 'function',
                                        'value' => 'sh_get_sidebars_2' 
                                    ) 
                                ) 
                            ),
                            'default' => array(
                                 '{{first}}' 
                            ) 
                        ),
                        array(
                             'type' => 'radioimage',
                            'name' => 'author_page_layout',
                            'label' => __( 'Page Layout', 'theme_support_comre' ),
                            'description' => __( 'Choose the layout for blog pages', 'theme_support_comre' ),
                            
                            'items' => array(
                                 array(
                                     'value' => 'left',
                                    'label' => __( 'Left Sidebar', 'theme_support_comre' ),
                                    'img' => SH_TH_URL . '/includes/vafpress/public/img/layout-left.png' 
                                ),
                                
                                array(
                                     'value' => 'right',
                                    'label' => __( 'Right Sidebar', 'theme_support_comre' ),
                                    'img' => SH_TH_URL . '/includes/vafpress/public/img/layout-right.png' 
                                ),
                                array(
                                     'value' => 'full',
                                    'label' => __( 'Full Width', 'theme_support_comre' ),
                                    'img' => SH_TH_URL . '/includes/vafpress/public/img/layout-full.png' 
                                ) 
                                
                            ) 
                        ) 
                        
                    ) 
                ),
                
                // 404 Page Settings 
               /* array(
                     'title' => __( '404 Page Settings', 'theme_support_comre' ),
                    'name' => '404_page_settings',
                    'icon' => 'font-awesome:fa fa-exclamation-triangle',
                    'controls' => array(
                         array(
                             'type' => 'textbox',
                            'name' => '404_page_title',
                            'label' => __( 'Page Title', 'theme_support_comre' ),
                            'description' => __( 'Enter the Title you want to show on 404 page', 'theme_support_comre' ),
                            'default' => '404 Page not Found' 
                        ),
                        array(
                             'type' => 'textbox',
                            'name' => '404_page_heading',
                            'label' => __( 'Page Heading', 'theme_support_comre' ),
                            'description' => __( 'Enter the Heading you want to show on 404 page', 'theme_support_comre' ),
                            'default' => '404 Page not Found' 
                        ),
                        array(
                             'type' => 'textbox',
                            'name' => '404_page_tag_line',
                            'label' => __( 'Page Tagline', 'theme_support_comre' ),
                            'description' => __( 'Enter the Tagline you want to show on 404 page', 'theme_support_comre' ),
                            'default' => '404 Page not Found' 
                        ),
                        array(
                             'type' => 'textarea',
                            'name' => '404_page_text',
                            'label' => __( '404 Page Text', 'theme_support_comre' ),
                            'description' => __( 'Enter the Text you want to show on 404 page', 'theme_support_comre' ),
                            'default' => '' 
                        ),
                        array(
                             'type' => 'select',
                            'name' => '404_page_sidebar',
                            'label' => __( 'Sidebar', 'theme_support_comre' ),
                            'items' => array(
                                 'data' => array(
                                     array(
                                         'source' => 'function',
                                        'value' => 'sh_get_sidebars_2' 
                                    ) 
                                ) 
                            ),
                            'default' => array(
                                 '{{first}}' 
                            ) 
                        ),
                        array(
                             'type' => 'radioimage',
                            'name' => 'layout',
                            'label' => __( 'Page Layout', 'theme_support_comre' ),
                            'description' => __( 'Choose the layout for blog pages', 'theme_support_comre' ),
                            
                            'items' => array(
                                 array(
                                     'value' => 'left',
                                    'label' => __( 'Left Sidebar', 'theme_support_comre' ),
                                    'img' => SH_TH_URL . '/includes/vafpress/public/img/2cl.png' 
                                ),
                                
                                array(
                                     'value' => 'right',
                                    'label' => __( 'Right Sidebar', 'theme_support_comre' ),
                                    'img' => SH_TH_URL . '/includes/vafpress/public/img/2cr.png' 
                                ),
                                array(
                                     'value' => 'full',
                                    'label' => __( 'Full Width', 'theme_support_comre' ),
                                    'img' => SH_TH_URL . '/includes/vafpress/public/img/1col.png' 
                                ) 
                                
                            ) 
                        ),
                        array(
                             'type' => 'upload',
                            'name' => '404_page_bg',
                            'label' => __( 'Background  Image', 'theme_support_comre' ),
                            'description' => __( 'Upload Image for 404 Page Background', 'theme_support_comre' ),
                            'default' => SH_TH_URL . '/images/logo.png' 
                        ) 
                    ) 
                ) */
            ) 
        ),
        
        // Sidebar Creator
        array(
             'title' => __( 'Sidebar Settings', 'theme_support_comre' ),
            'name' => 'sidebar-settings',
            'icon' => 'font-awesome:fa fa-bars',
            'controls' => array(
                 array(
                     'type' => 'builder',
                    'repeating' => true,
                    'sortable' => true,
                    'label' => __( 'Dynamic Sidebar', 'theme_support_comre' ),
                    'name' => 'dynamic_sidebar',
                    'description' => __( 'This section is used for theme color settings', 'theme_support_comre' ),
                    'fields' => array(
                         array(
                             'type' => 'textbox',
                            'name' => 'sidebar_name',
                            'label' => __( 'Sidebar Name', 'theme_support_comre' ),
                            'description' => __( 'Choose the default color scheme for the theme.', 'theme_support_comre' ),
                            'default' => __( 'Dynamic Sidebar', 'theme_support_comre' ) 
                        ) 
                    ) 
                ) 
            ) 
        ),
        
        
        
        // Coupon Settings
        array(
             'title' => __( 'Coupon Settings', 'theme_support_comre' ),
            'name' => 'coupon_settings',
            'icon' => 'font-awesome:fa fa-file-o',
            'controls' => array(
            
                array(
                    'type' => 'toggle',
                    'name' => 'expiredcoupons',
                    'label' => __( 'Hide Expired Coupons', 'theme_support_comre' ),
                    'description' => __( 'Show or hide expired coupons', 'theme_support_comre' ),
                    'default' => 0
                ),
                
                array(
                    'type' => 'textbox',
                    'name' => 'global_referer',
                    'label' => __( 'Coupons Referer', 'theme_support_comre' ),
                    'description' => __( 'Add referer to all coupons referer links like "ref=wow_themes"', 'theme_support_comre' ),
                    'default' => ''
                ),
                
                array(
                    'type' => 'select',
                    'name' => 'coupon_popup',
                    'label' => __('Coupon Popup Title', 'theme_support_comre'),
                    'description' => __('Choose Popup Title', 'theme_support_comre'),
                    'items' => array( array('value'=>'title', 'label'=>'Coupon Title'), array('value'=>'custom', 'label'=>'Custom Title'), ),
                    'default' => 'Get Coupon Code'
                ),
                array(
                    'type' => 'section',
                    'title' => __('Custom Popup Title', 'theme_support_comre'),
                    'name' => 'section_custom_popup_title',
                    'dependency' => array(
                        'field' => 'coupon_popup',
                        'function' => 'coupon_popup_title',
                    ),
                    'fields' => array(
                        array(
                            'type' => 'textbox',
                            'name' => 'custom_title',
                            'label' => __('Custom Popup Title', 'theme_support_comre'),
                            'description' => __('Enter the custom popup title.', 'theme_support_comre'),
                            'default' => 'Get Coupon Code'
                        ),
                        
                    ),
                ),
                
                //Default Coupon Image.
                array(
                    'type' => 'select',
                    'name' => 'coupon_image',
                    'label' => __('Default Coupon Image', 'theme_support_comre'),
                    'description' => __('Select the deafault coupon image.', 'theme_support_comre'),
                    'items' => array( array('value'=>'coupon_category', 'label'=>'Coupon Category'), array('value'=>'coupon_store', 'label'=>'Coupon Store'), array('value'=>'custom_image', 'label'=>'Custom Image'), ),
                    'default' => 'Get Coupon Code'
                ),

                // Coupon referrer behaviour.
                array(
                    'type' => 'select',
                    'name' => 'coupon_ref_style',
                    'label' => esc_html__( 'Coupon Referer Style', 'theme_support_comre' ),
                    'description' => esc_html__( 'On click on "Get Coupon Code" button, the behaviour should be', 'theme_support_comre' ),
                    'items' => array(
                                    array( 'value' => 'none', 'label' => esc_html__( 'Only Show Popup', 'theme_support_comre' ) ),
                                    array( 'value' => 'same_tab', 'label' => esc_html__( 'Open Referrer Link in same tab' ,'theme_support_comre' ) ),
                                    array( 'value' => 'new_tab', 'label' => esc_html__( 'Open Referrer in new tab', 'theme_support_comre' ) ),
                                ),
                    'default' => 'same_tab',
                ),

                // Show popup on coupon detail page.
                array(
                    'type' => 'toggle',
                    'name' => 'show_popup_detail_page',
                    'label' => esc_html__( 'Show Popup on Detail page', 'theme_support_comre' ),
                    'description' => esc_html__( 'Enable to show coupon code popup on coupon detail page', 'theme_support_comre' ),
                    'default' => false,
                ),

                // Copy copuon to clipboard.
                array(
                    'type' => 'toggle',
                    'name' => 'copy_coupon_code_clipboard',
                    'label' => esc_html__( 'Copy Code to Clipboard', 'theme_support_comre' ),
                    'description' => esc_html__( 'Enable to copy coupon code to clipboard whenever user click on "Get Coupon Code" button', 'theme_support_comre' ),
                    'default' => false,
                ),

                array(
                    'type' => 'section',
                    'title' => __('Custom Coupon Image', 'theme_support_comre'),
                    'name' => 'section_custom_coupon_image',
                    'dependency' => array(
                        'field' => 'coupon_image',
                        'function' => 'coupon_default_image',
                    ),
                    'fields' => array(
                        array(
                            'type' => 'upload',
                            'name' => 'custom_coupon_image',
                            'label' => __( 'Default Coupon Image', 'theme_support_comre' ),
                            'description' => __( 'Upload the deafault coupon image.', 'theme_support_comre' ),
                            'default' => '' 
                        ),
                        
                    ),
                ),
                
                array(
                    'type' => 'toggle',
                    'name' => 'btn_like',
                    'label' => __( 'Show/Hide Like Button', 'theme_support_comre' ),
                    'description' => __( 'Show/Hide Like Button on Single coupon.', 'theme_support_comre' ),
                    'default' => 0
                ),
                array(
                            'type' => 'section',
                            
                            'title' => __('Like Button Styles', 'theme_support_comre'),
                            'name' => 'like_styles',
                            'description' => __('This section is used for Like Button Styles.', 'theme_support_comre'),
                            'dependency' => array(
                                'field' => 'btn_like',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                               array(
                                    'type' => 'select',
                                    'name' => 'like_style',
                                    'label' => __('Like Button Style', 'theme_support_comre'),
                                    'description' => __('choose Like Button Style to show in single coupon.', 'theme_support_comre'),
                                    'items' => array(
                                        'data' => array(
                                            array(
                                                'source' => 'function',
                                                'value' => 'like_styles',
                                                ),
                                            ),
                                        )
                                ),
                            ),
                        ),
                    
                    array(
                        'type' => 'toggle',
                        'name' => 'btn_expired',
                        'label' => __( 'Show/Hide Expired Coupon Button', 'theme_support_comre' ),
                        'description' => __( 'This button is shown on coupon detail page. When user click on this button, an email is shouted to the Admin to notify that the coupon is expired.', 'theme_support_comre' ),
                        'default' => 0
                    ),
                    array(
                            'type' => 'section',
                            
                            'title' => __('Expired Button Email Template', 'theme_support_comre'),
                            'name' => 'expire_email_sec',
                            'description' => __('This section is used for Expired Button Email Template.', 'theme_support_comre'),
                            'dependency' => array(
                                'field' => 'btn_expired',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                               array(
                                    'type' => 'textarea',
                                    'name' => 'expire_email',
                                    'label' => __('Expired Button Email Template.', 'theme_support_comre'),
                                    'description' => __('Enter the Expired Button Email Template.', 'theme_support_comre'),
                                    'default' => 'Hi Admin,'."\n\n".' Someone has marked the following deal as expired.'."\n\n".'{{deal_url}}'
                                ),
                            ),
                        ),
                        
                        array(
                            'type' => 'toggle',
                            'name' => 'btn_goto_shop',
                            'label' => __( 'Hide GoTo Shop Button', 'theme_support_comre' ),
                            'description' => __( 'This button hides the goto shop button on popup.', 'theme_support_comre' ),
                            'default' => 0
                        ),
                        
                        array(
                            'type' => 'toggle',
                            'name' => 'btn_newsletter',
                            'label' => __( 'Show/Hide Newsletter.', 'theme_support_comre' ),
                            'description' => __( 'This button shows/hides the newsletter on popup.', 'theme_support_comre' ),
                            'default' => 0
                        ),
                        array(
                            'type' => 'section',
                            
                            'title' => __('Popup Newsletter Section', 'theme_support_comre'),
                            'name' => 'newsletter_sec',
                            'description' => __('This section is used for Newsletter on Popup.', 'theme_support_comre'),
                            'dependency' => array(
                                'field' => 'btn_newsletter',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                array(
                                    'type' => 'textbox',
                                    'name' => 'news_title',
                                    'label' => __('Newsletter Title', 'theme_support_comre'),
                                    'description' => __('Enter the Newsletter Title.', 'theme_support_comre'),
                                    'default' => 'Subscribe'
                                ),
                                
                               array(
                                    'type' => 'Textbox',
                                    'name' => 'news_form_url',
                                    'label' => __('Newsletter Form URL', 'theme_support_comre'),
                                    'description' => __('Enter the Newsletter Form URL.', 'theme_support_comre'),
                                    'default' => ''
                                ),
                            ),
                        ),
                    
            ) 
        ),
        
        
        
        // Dynamic Social Media Creator
        array(
             'title' => __( 'Social Media ', 'theme_support_comre' ),
            'name' => 'social_media',
            'icon' => 'font-awesome:fa fa-share-square',
            'controls' => array(
                
                 array(
                     'type' => 'builder',
                    'repeating' => true,
                    'sortable' => true,
                    'label' => __( 'Social Media', 'theme_support_comre' ),
                    'name' => 'social_media',
                    'description' => __( 'This section is used to add Social Media.', 'theme_support_comre' ),
                    'fields' => array(
                          array(
                                'type' => 'color',
            
                                'name' => 'hover_color',
            
                                'label' => __( 'Social media hover colour', 'theme_support_comre' ),
            
                                'description' => __( 'Choose the Custom color for social media hover.', 'theme_support_comre' ),
            
                                'default' => '#f4c212',
            
                                
            
                        ),
                         array(
                             'type' => 'textbox',
                            'name' => 'title',
                            'label' => __( 'Title', 'theme_support_comre' ),
                            'description' => __( 'Enter the title of the social media.', 'theme_support_comre' ), 
                        ),
                         array(
                             'type' => 'textbox',
                            'name' => 'social_link',
                            'label' => __( 'Link', 'theme_support_comre' ),
                            'description' => __( 'Enter the Link for Social Media.', 'theme_support_comre' ),
                            'default' => '#'
                        ),
                        array(
                            'type' => 'select',
                            'name' => 'social_icon',
                            'label' => __( 'Icon', 'theme_support_comre' ),
                            'description' => __( 'Choose Icon for Social Media.', 'theme_support_comre' ),
                            'items' => array(
                                'data' => array(
                                    array(
                                        'source' => 'function',
                                        'value' => 'vp_get_social_medias',
                                    ),
                                ),
                            ),
                        )  
                    ) 
                ) 
            ) 
        ),
        
        
        /* Font settings */
        array(
             'title' => __( 'Font Settings', 'theme_support_comre' ),
            'name' => 'font_settings',
            'icon' => 'font-awesome:fa fa-font',
            'menus' => array(
                /** heading font settings */
                 array(
                     'title' => __( 'Heading Font', 'theme_support_comre' ),
                    'name' => 'heading_font_settings',
                    'icon' => 'font-awesome:fa fa-text-height',
                    
                    'controls' => array(
                        
                         array(
                             'type' => 'toggle',
                            'name' => 'use_custom_font',
                            'label' => __( 'Use Custom Font', 'theme_support_comre' ),
                            'description' => __( 'Use custom font or not', 'theme_support_comre' ),
                            'default' => 0 
                        ),
                        array(
                            'type' => 'section',
                            'title' => __( 'H1 Settings', 'theme_support_comre' ),
                            'name' => 'h1_settings',
                            'description' => __( 'heading 1 font settings', 'theme_support_comre' ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', 'theme_support_comre' ),
                                    'name' => 'h1_font_family',
                                    'description' => __( 'Select the font family to use for h1', 'theme_support_comre' ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                
                                array(
                                     'type' => 'color',
                                    'name' => 'h1_font_color',
                                    'label' => __( 'Font Color', 'theme_support_comre' ),
                                    'description' => __( 'Choose the font color for heading h1', 'theme_support_comre' ),
                                    'default' => '#98ed28' 
                                ) 
                            ) 
                        ),
                        array(
                             'type' => 'section',
                            'title' => __( 'H2 Settings', 'theme_support_comre' ),
                            'name' => 'h2_settings',
                            'description' => __( 'heading h2 font settings', 'theme_support_comre' ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', 'theme_support_comre' ),
                                    'name' => 'h2_font_family',
                                    'description' => __( 'Select the font family to use for h2', 'theme_support_comre' ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                ),
                                array(
                                     'type' => 'color',
                                    'name' => 'h2_font_color',
                                    'label' => __( 'Font Color', 'theme_support_comre' ),
                                    'description' => __( 'Choose the font color for heading h1', 'theme_support_comre' ),
                                    'default' => '#98ed28' 
                                ) 
                            ) 
                        ),
                        array(
                             'type' => 'section',
                            'title' => __( 'H3 Settings', 'theme_support_comre' ),
                            'name' => 'h3_settings',
                            'description' => __( 'heading h3 font settings', 'theme_support_comre' ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', 'theme_support_comre' ),
                                    'name' => 'h3_font_family',
                                    'description' => __( 'Select the font family to use for h3', 'theme_support_comre' ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                array(
                                     'type' => 'color',
                                    'name' => 'h3_font_color',
                                    'label' => __( 'Font Color', 'theme_support_comre' ),
                                    'description' => __( 'Choose the font color for heading h3', 'theme_support_comre' ),
                                    'default' => '#98ed28' 
                                ) 
                            ) 
                        ),
                        
                        array(
                             'type' => 'section',
                            'title' => __( 'H4 Settings', 'theme_support_comre' ),
                            'name' => 'h4_settings',
                            'description' => __( 'heading h4 font settings', 'theme_support_comre' ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', 'theme_support_comre' ),
                                    'name' => 'h4_font_family',
                                    'description' => __( 'Select the font family to use for h4', 'theme_support_comre' ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                array(
                                     'type' => 'color',
                                    'name' => 'h4_font_color',
                                    'label' => __( 'Font Color', 'theme_support_comre' ),
                                    'description' => __( 'Choose the font color for heading h4', 'theme_support_comre' ),
                                    'default' => '#98ed28' 
                                ) 
                            ) 
                        ),
                        
                        array(
                             'type' => 'section',
                            'title' => __( 'H5 Settings', 'theme_support_comre' ),
                            'name' => 'h5_settings',
                            'description' => __( 'heading h5 font settings', 'theme_support_comre' ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', 'theme_support_comre' ),
                                    'name' => 'h5_font_family',
                                    'description' => __( 'Select the font family to use for h5', 'theme_support_comre' ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                array(
                                     'type' => 'color',
                                    'name' => 'h5_font_color',
                                    'label' => __( 'Font Color', 'theme_support_comre' ),
                                    'description' => __( 'Choose the font color for heading h5', 'theme_support_comre' ),
                                    'default' => '#98ed28' 
                                ) 
                            ) 
                        ),
                        
                        array(
                             'type' => 'section',
                            'title' => __( 'H6 Settings', 'theme_support_comre' ),
                            'name' => 'h6_settings',
                            'description' => __( 'heading h6 font settings', 'theme_support_comre' ),
                            'dependency' => array(
                                 'field' => 'use_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', 'theme_support_comre' ),
                                    'name' => 'h6_font_family',
                                    'description' => __( 'Select the font family to use for h6', 'theme_support_comre' ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                array(
                                     'type' => 'color',
                                    'name' => 'h6_font_color',
                                    'label' => __( 'Font Color', 'theme_support_comre' ),
                                    'description' => __( 'Choose the font color for heading h6', 'theme_support_comre' ),
                                    'default' => '#98ed28' 
                                ) 
                            ) 
                        ) 
                    ) 
                ),
                
                /** body font settings */
                array(
                     'title' => __( 'Body Font', 'theme_support_comre' ),
                    'name' => 'body_font_settings',
                    'icon' => 'font-awesome:fa fa-text-width',
                    'controls' => array(
                         array(
                             'type' => 'toggle',
                            'name' => 'body_custom_font',
                            'label' => __( 'Use Custom Font', 'theme_support_comre' ),
                            'description' => __( 'Use custom font or not', 'theme_support_comre' ),
                            'default' => 0 
                        ),
                        array(
                             'type' => 'section',
                            'title' => __( 'Body Font Settings', 'theme_support_comre' ),
                            'name' => 'body_font_settings1',
                            'description' => __( 'body font settings', 'theme_support_comre' ),
                            'dependency' => array(
                                 'field' => 'body_custom_font',
                                'function' => 'vp_dep_boolean' 
                            ),
                            'fields' => array(
                                
                                 array(
                                     'type' => 'select',
                                    'label' => __( 'Font Family', 'theme_support_comre' ),
                                    'name' => 'body_font_family',
                                    'description' => __( 'Select the font family to use for body', 'theme_support_comre' ),
                                    'items' => array(
                                         'data' => array(
                                             array(
                                                 'source' => 'function',
                                                'value' => 'vp_get_gwf_family' 
                                            ) 
                                        ) 
                                    ) 
                                    
                                ),
                                
                                array(
                                     'type' => 'color',
                                    'name' => 'body_font_color',
                                    'label' => __( 'Font Color', 'theme_support_comre' ),
                                    'description' => __( 'Choose the font color for heading body', 'theme_support_comre' ),
                                    'default' => '#686868' 
                                ) 
                            ) 
                        ) 
                    ) 
                ) 
            ) 
        ), 
         array(
             'title' => __( 'Partners', 'theme_support_comre' ),
            'name' => 'brand_or_client',
            'icon' => 'font-awesome:fa fa-star',
            'controls' => array(
                 array(
                    'type' => 'builder',
                    'repeating' => true,
                    'sortable' => true,
                    'label' => __( 'Partners', 'theme_support_comre' ),
                    'name' => 'brand_or_client',
                    'description' => __( 'Add as many Partners as you want', 'theme_support_comre' ),
                    'fields' => array(
                         array(
                           'type' => 'upload',
                            'name' => 'brand_img',
                            'label' => __( 'Logo', 'theme_support_comre' ),
                            'description' => __( 'choose the Partner logo.', 'theme_support_comre' ),
                            'default' => '' 
                         ),
                         array(
                            'type' => 'textbox',
                            'name' => 'brand_link',
                            'label' => __( 'Brand Link', 'theme_support_comre' ),
                            'description' => __( 'Enter the Brand Link', 'theme_support_comre' ),
                            'default' => ''
                         ),
                         
                    ) 
                ) 
            ) 
        ),
        
         /*array(
            'title' => __( 'Instagram Settings', 'theme_support_comre' ),
            'name' => 'instagram_settings',
            'icon' => 'font-awesome:fa fa-star',
            'controls' => array(
               
                        array(
                            'type' => 'textbox',
                            'name' => 'client_id',
                            'label' => __( 'Client ID', 'theme_support_comre' ),
                            'description' => __( 'Enter the client id', 'theme_support_comre' ),
                            'default' => ''
                             ),
                        array(
                            'type' => 'textbox',
                            'name' => 'user_name',
                            'label' => __( 'Enter Instagram Username', 'theme_support_comre' ),
                            'description' => __( 'Enter instagram username', 'theme_support_comre' ),
                            'default' => ''
                             ),
                    ) 
                 
             
        ),*/
        
    ) 
);
$comre_options = apply_filters( 'comre_theme_options_array', $comre_options );

return $comre_options;
/**
 *EOF
 */