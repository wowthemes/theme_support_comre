<?php
class SH_Taxonomies
{
	
	var $team_slug = '' ;
	var $services_slug = '' ;
	var $projects_slug = '' ;
	var $gallery_slug = '' ;
	var $testimonials_slug = '' ;
	var $team_cat_slug = '';
	var $services_cat_slug = '' ;
	var $coupons_cat_slug = '' ;
	var $coupons_store_slug = 'coupon_stores';
	var $gallery_cat_slug = '' ;
	var $testimonials_cat_slug = '' ;
	
	function __construct()
	{
		// Hook into the 'init' action
		//add_action( 'init', array($this, 'taxonomies'), 0 );
		$theme_option = _WSH()->option() ; 
		$this->coupons_cat_slug = sh_set($theme_option , 'coupons_category_permalink' , 'coupons_category');
		$this->coupons_store_slug = sh_set($theme_option , 'coupons_store_category_permalink' , 'coupon_stores');
		$this->team_cat_slug = sh_set($theme_option , 'team_category_permalink' , 'team_category') ;
		$this->services_cat_slug = sh_set($theme_option , 'services_category_permalink' , 'services_category') ;
		$this->gallery_cat_slug = sh_set($theme_option , 'gallery_category_permalink' , 'gallery_category') ;
		$this->testimonials_cat_slug = sh_set($theme_option , 'testimonial_category_permalink' , 'testimonials_category') ;
		$this->projects_cat_slug = '';
		$this->taxonomies();
	}
	
	// Register Custom Taxonomy
	function taxonomies()  {
		$labels = array(
			'name'                       => _x( 'Category', 'Coupons Category', SH_NAME ),
			'singular_name'              => _x( 'Category', 'Category', SH_NAME ),
			'menu_name'                  => __( 'Category', 'theme_support_comre' ),
			'all_items'                  => __( 'All Categories', 'theme_support_comre' ),
			'parent_item'                => __( 'Parent Category', 'theme_support_comre' ),
			'parent_item_colon'          => __( 'Parent Category:', 'theme_support_comre' ),
			'new_item_name'              => __( 'New Category Name', 'theme_support_comre' ),
			'add_new_item'               => __( 'Add New Category', 'theme_support_comre' ),
			'edit_item'                  => __( 'Edit Category', 'theme_support_comre' ),
			'update_item'                => __( 'Update Category', 'theme_support_comre' ),
			'separate_items_with_commas' => __( 'Separate Categories with commas', 'theme_support_comre' ),
			'search_items'               => __( 'Search Categories', 'theme_support_comre' ),
			'add_or_remove_items'        => __( 'Add or remove Categories', 'theme_support_comre' ),
			'choose_from_most_used'      => __( 'Choose from the most used Categories', 'theme_support_comre' ),
		);
	
		$rewrite = array(
			'slug'                       => $this->coupons_cat_slug,
			'with_front'                 => true,
			'hierarchical'               => true,
		);
	
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
		);
	
		register_taxonomy( 'coupons_category' , 'sh_coupons' , $args );


		//Coupons stores taxonomy
		$labels = array(
			'name'                       => _x( 'Store', 'Coupons Store', SH_NAME ),
			'singular_name'              => _x( 'Store', 'Stores', SH_NAME ),
			'menu_name'                  => __( 'Stores', 'theme_support_comre' ),
			'all_items'                  => __( 'All Stores', 'theme_support_comre' ),
			'parent_item'                => __( 'Parent Store', 'theme_support_comre' ),
			'parent_item_colon'          => __( 'Parent Store:', 'theme_support_comre' ),
			'new_item_name'              => __( 'New Store Name', 'theme_support_comre' ),
			'add_new_item'               => __( 'Add New Store', 'theme_support_comre' ),
			'edit_item'                  => __( 'Edit Store', 'theme_support_comre' ),
			'update_item'                => __( 'Update Store', 'theme_support_comre' ),
			'separate_items_with_commas' => __( 'Separate Stores with commas', 'theme_support_comre' ),
			'search_items'               => __( 'Search Stores', 'theme_support_comre' ),
			'add_or_remove_items'        => __( 'Add or remove Stores', 'theme_support_comre' ),
			'choose_from_most_used'      => __( 'Choose from the most used Stores', 'theme_support_comre' ),
		);
	
		$rewrite = array(
			'slug'                       => $this->coupons_store_slug,
			'with_front'                 => true,
			'hierarchical'               => true,
		);
	
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
		);
	
		register_taxonomy( 'coupons_store_category' , 'sh_coupons' , $args );
		
		
		$labels = array(
			'name'                       => _x( 'Category', 'Testimonial Category', SH_NAME ),
			'singular_name'              => _x( 'Category', 'Category', SH_NAME ),
			'menu_name'                  => __( 'Category', 'theme_support_comre' ),
			'all_items'                  => __( 'All Categories', 'theme_support_comre' ),
			'parent_item'                => __( 'Parent Category', 'theme_support_comre' ),
			'parent_item_colon'          => __( 'Parent Category:', 'theme_support_comre' ),
			'new_item_name'              => __( 'New Category Name', 'theme_support_comre' ),
			'add_new_item'               => __( 'Add New Category', 'theme_support_comre' ),
			'edit_item'                  => __( 'Edit Category', 'theme_support_comre' ),
			'update_item'                => __( 'Update Category', 'theme_support_comre' ),
			'separate_items_with_commas' => __( 'Separate Categories with commas', 'theme_support_comre' ),
			'search_items'               => __( 'Search Categories', 'theme_support_comre' ),
			'add_or_remove_items'        => __( 'Add or remove Categories', 'theme_support_comre' ),
			'choose_from_most_used'      => __( 'Choose from the most used Categories', 'theme_support_comre' ),
		);
	
		$rewrite = array(
			'slug'                       => $this->testimonials_cat_slug,
			'with_front'                 => true,
			'hierarchical'               => true,
		);
	
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
		);
	
		register_taxonomy( 'testimonials_category', 'sh_testimonials', $args );
		
		
		$labels = array(
			'name'                       => _x( 'Category', 'Team Category', SH_NAME ),
			'singular_name'              => _x( 'Category', 'Category', SH_NAME ),
			'menu_name'                  => __( 'Category', 'theme_support_comre' ),
			'all_items'                  => __( 'All Categories', 'theme_support_comre' ),
			'parent_item'                => __( 'Parent Category', 'theme_support_comre' ),
			'parent_item_colon'          => __( 'Parent Category:', 'theme_support_comre' ),
			'new_item_name'              => __( 'New Category Name', 'theme_support_comre' ),
			'add_new_item'               => __( 'Add New Category', 'theme_support_comre' ),
			'edit_item'                  => __( 'Edit Category', 'theme_support_comre' ),
			'update_item'                => __( 'Update Category', 'theme_support_comre' ),
			'separate_items_with_commas' => __( 'Separate Categories with commas', 'theme_support_comre' ),
			'search_items'               => __( 'Search Categories', 'theme_support_comre' ),
			'add_or_remove_items'        => __( 'Add or remove Categories', 'theme_support_comre' ),
			'choose_from_most_used'      => __( 'Choose from the most used Categories', 'theme_support_comre' ),
		);
	
		$rewrite = array(
			'slug'                       => $this->team_cat_slug,
			'with_front'                 => true,
			'hierarchical'               => true,
		);
	
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
		);
	
		register_taxonomy( 'team_category', 'sh_team', $args );
		
		
		$labels = array(
			'name'                       => _x( 'Category', 'Gallery Category', SH_NAME ),
			'singular_name'              => _x( 'Category', 'Category', SH_NAME ),
			'menu_name'                  => __( 'Category', 'theme_support_comre' ),
			'all_items'                  => __( 'All Categories', 'theme_support_comre' ),
			'parent_item'                => __( 'Gallery Category', 'theme_support_comre' ),
			'parent_item_colon'          => __( 'Gallery Category:', 'theme_support_comre' ),
			'new_item_name'              => __( 'New Category Name', 'theme_support_comre' ),
			'add_new_item'               => __( 'Add New Category', 'theme_support_comre' ),
			'edit_item'                  => __( 'Edit Category', 'theme_support_comre' ),
			'update_item'                => __( 'Update Category', 'theme_support_comre' ),
			'separate_items_with_commas' => __( 'Separate Categories with commas', 'theme_support_comre' ),
			'search_items'               => __( 'Search Categories', 'theme_support_comre' ),
			'add_or_remove_items'        => __( 'Add or remove Categories', 'theme_support_comre' ),
			'choose_from_most_used'      => __( 'Choose from the most used Categories', 'theme_support_comre' ),
		);
	
		$rewrite = array(
			'slug'                       => $this->gallery_cat_slug,
			'with_front'                 => true,
			'hierarchical'               => true,
		);
	
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
		);
	
		register_taxonomy( 'gallery_category', 'sh_gallery', $args );
		
		
		$labels = array(
			'name'                       => _x( 'Category', 'Service Category', SH_NAME ),
			'singular_name'              => _x( 'Category', 'Category', SH_NAME ),
			'menu_name'                  => __( 'Category', 'theme_support_comre' ),
			'all_items'                  => __( 'All Categories', 'theme_support_comre' ),
			'parent_item'                => __( 'Parent Category', 'theme_support_comre' ),
			'parent_item_colon'          => __( 'Parent Category:', 'theme_support_comre' ),
			'new_item_name'              => __( 'New Category Name', 'theme_support_comre' ),
			'add_new_item'               => __( 'Add New Category', 'theme_support_comre' ),
			'edit_item'                  => __( 'Edit Category', 'theme_support_comre' ),
			'update_item'                => __( 'Update Category', 'theme_support_comre' ),
			'separate_items_with_commas' => __( 'Separate Categories with commas', 'theme_support_comre' ),
			'search_items'               => __( 'Search Categories', 'theme_support_comre' ),
			'add_or_remove_items'        => __( 'Add or remove Categories', 'theme_support_comre' ),
			'choose_from_most_used'      => __( 'Choose from the most used Categories', 'theme_support_comre' ),
		);
	
		$rewrite = array(
			'slug'                       => $this->services_cat_slug,
			'with_front'                 => true,
			'hierarchical'               => true,
		);
	
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
		);
	
		register_taxonomy('services_category', 'sh_services', $args );
		
		/*** Register faqs taxonomy faq_category */
		
		$labels = array(
			'name'                       => _x( 'Category', 'FAQs Category', SH_NAME ),
			'singular_name'              => _x( 'Category', 'Category', SH_NAME ),
			'menu_name'                  => __( 'Category', 'theme_support_comre' ),
			'all_items'                  => __( 'All Categories', 'theme_support_comre' ),
			'parent_item'                => __( 'Parent Category', 'theme_support_comre' ),
			'parent_item_colon'          => __( 'Parent Category:', 'theme_support_comre' ),
			'new_item_name'              => __( 'New Category Name', 'theme_support_comre' ),
			'add_new_item'               => __( 'Add New Category', 'theme_support_comre' ),
			'edit_item'                  => __( 'Edit Category', 'theme_support_comre' ),
			'update_item'                => __( 'Update Category', 'theme_support_comre' ),
			'separate_items_with_commas' => __( 'Separate Categories with commas', 'theme_support_comre' ),
			'search_items'               => __( 'Search Categories', 'theme_support_comre' ),
			'add_or_remove_items'        => __( 'Add or remove Categories', 'theme_support_comre' ),
			'choose_from_most_used'      => __( 'Choose from the most used Categories', 'theme_support_comre' ),
		);
	
		$rewrite = array(
			'slug'                       => $this->projects_cat_slug,
			'with_front'                 => true,
			'hierarchical'               => true,
		);
	
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
		);
	
		register_taxonomy( 'faq_category' , 'sh_faq' , $args );
		
        $args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'                    => $rewrite,
		);
	
		register_taxonomy( 'portfolio_category' , 'sh_portfolio' , $args );
		
	}
}