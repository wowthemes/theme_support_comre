<?php
$sh_sc = array();

if( !function_exists('vc_map') ) return $sh_sc;

$sh_sc['sh_great_deals']	=	array(
		"name" => __("Great Deals", 'theme_support_comre'),
		"base" => "sh_great_deals",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show popular deals.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter  title', 'theme_support_comre' ),
			   "param_name" => "title",
			   "description" => __('Enter Deals title.', 'theme_support_comre' )
			),

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Number', 'theme_support_comre' ),
			   "param_name" => "num",
			   "description" => __('Enter Number of Deals Posts to show.', 'theme_support_comre' )
			),

			array(
		       "type" => "dropdown",
		       "holder" => "div",
		       "class" => "",
		       "heading" => __("coupon column", 'theme_support_comre'),
		       "param_name" => "coupon_column",
		       'value' => array_flip( array(''=>__('Select', 'theme_support_comre'), '4'=>__('4 Column', 'theme_support_comre'),'3'=>__('3 Column', 'theme_support_comre'))),   
		       "description" => __("Enter the Coupon Column.", 'theme_support_comre')
    		),

    		array(
		       "type" => "dropdown",
		       "holder" => "div",
		       "class" => "",
		       "heading" => __("Deal view", 'theme_support_comre'),
		       "param_name" => "deal_view",
		       'value' => array_flip( array(''=>__('Select', 'theme_support_comre'), 'grid'=>__('Grid View', 'theme_support_comre'),'list'=>__('List View', 'theme_support_comre'))),   
		       "description" => __("Enter the deal view.", 'theme_support_comre')
    		),

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Number on Load more', 'theme_support_comre' ),
			   "param_name" => "num_load_more",
			   "description" => __('Enter Number of Deals Posts on Load more.', 'theme_support_comre' )
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __( 'Category', 'theme_support_comre' ),
			   "param_name" => "cat",
			   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'coupons_category', 'hide_empty' =>          FALSE ), true ) ),
			   "description" => __( 'Choose Category.', 'theme_support_comre' )
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order By", 'theme_support_comre'),
			   "param_name" => "sort",
			   'value' => array_flip( array('date'=>__('Date', 'theme_support_comre'),'title'=>__('Title', 'theme_support_comre') ,'name'=>__('Name', 'theme_support_comre') ,'author'=>__('Author', 'theme_support_comre'),'comment_count' =>__('Comment Count', 'theme_support_comre'),'random' =>__('Random', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order", 'theme_support_comre'),
			   "param_name" => "order",
			   'value' => array_flip(array('ASC'=>__('Ascending', 'theme_support_comre'),'DESC'=>__('Descending', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),
			array(
			   "type" => "checkbox",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Extra Options", 'theme_support_comre'),
			   "param_name" => "extras",
			   'value' => array(__('Show Label', 'theme_support_comre')=>'labels', __('Show Get Coupon Code', 'theme_support_comre')=>'coupon_code'),
			   "description" => __("Choose extra options.", 'theme_support_comre')
			),
		)
	);

$sh_sc['sh_featured_cats']	=	array(
		"name" => __("Featured Categories", 'theme_support_comre'),
		"base" => "sh_featured_cats",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show featured Categories.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter  title', 'theme_support_comre' ),
			   "param_name" => "title",
			   "description" => __('Enter portfolio title.', 'theme_support_comre' )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Number', 'theme_support_comre' ),
			   "param_name" => "num",
			   "description" => __('Enter number of categories to show.', 'theme_support_comre' )
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Sort By", 'theme_support_comre'),
			   "param_name" => "sort",
			   'value' => array(__('Name', 'theme_support_comre')=>'name', __('Term ID', 'theme_support_comre')=>'id', __('Slug', 'theme_support_comre')=>'slug', __('Post Count', 'theme_support_comre')=>'count',__('Term Group', 'theme_support_comre')=>'term_group',),
			   "description" => __("Choose the sorting order.", 'theme_support_comre')
			),

			array(
		       "type" => "dropdown",
		       "holder" => "div",
		       "class" => "",
		       "heading" => __("Feature Column", 'theme_support_comre'),
		       "param_name" => "feature_column",
		       'value' => array_flip( array(''=>__('Select', 'theme_support_comre'), '4'=>__('4 Column', 'theme_support_comre'),'3'=>__('3 Column', 'theme_support_comre'), )),   
		       "description" => __("Enter the feature Column.", 'theme_support_comre')
    		),

			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order", 'theme_support_comre'),
			   "param_name" => "order",
			   'value' => array_flip(array('ASC'=>__('Ascending', 'theme_support_comre'),'DESC'=>__('Descending', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),
			array(
			   "type" => "checkbox",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Hide Empty Categories", 'theme_support_comre'),
			   "param_name" => "empty",
			   'value' => array(__('Hide Empty cat', 'theme_support_comre')=>1),
			   "description" => __("Hide Empty Categories", 'theme_support_comre')
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __( 'What to show', 'theme_support_comre' ),
			   "param_name" => "comre_tax",
			   "value" => array_flip(array(''=>__('Select Taxonomy', 'theme_support_comre'),'coupons_store_category'=>__('Store Category', 'theme_support_comre'),'coupons_category'=>__('Coupons Category', 'theme_support_comre'), 'wocommerce_category'=>__('Wocommerce  Category', 'theme_support_comre') ) ),
			   "description" => __( 'Choose Taxonomy.', 'theme_support_comre' )
			),
			
			
		)
);

$sh_sc['sh_featured_cats2']	=	array(
		"name" => __("Featured Categories 2", 'theme_support_comre'),
		"base" => "sh_featured_cats2",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show featured Categories.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter  title', 'theme_support_comre' ),
			   "param_name" => "title",
			   "description" => __('Enter portfolio title.', 'theme_support_comre' )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Number', 'theme_support_comre' ),
			   "param_name" => "num",
			   "description" => __('Enter number of categories to show.', 'theme_support_comre' )
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Sort By", 'theme_support_comre'),
			   "param_name" => "sort",
			   'value' => array(__('Name', 'theme_support_comre')=>'name', __('Term ID', 'theme_support_comre')=>'id', __('Slug', 'theme_support_comre')=>'slug', __('Post Count', 'theme_support_comre')=>'count',__('Term Group', 'theme_support_comre')=>'term_group',),
			   "description" => __("Choose the sorting order.", 'theme_support_comre')
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order", 'theme_support_comre'),
			   "param_name" => "order",
			   'value' => array_flip(array('ASC'=>__('Ascending', 'theme_support_comre'),'DESC'=>__('Descending', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),
			array(
			   "type" => "checkbox",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Hide Empty Categories", 'theme_support_comre'),
			   "param_name" => "empty",
			   'value' => array(__('Hide Empty cat', 'theme_support_comre')=>1),
			   "description" => __("Hide Empty Categories", 'theme_support_comre')
			),
			
			
		)
);


$sh_sc['sh_recent_blog']	=	array(
		"name" => __("Recent From Blog", 'theme_support_comre'),
		"base" => "sh_recent_blog",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show blog posts.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter  title', 'theme_support_comre' ),
			   "param_name" => "title",
			   "description" => __('Enter blog title.', 'theme_support_comre' )
			),

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Number', 'theme_support_comre' ),
			   "param_name" => "num",
			   "description" => __('Enter Number of blog Posts to show.', 'theme_support_comre' )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Excerpt Length', 'theme_support_comre' ),
			   "param_name" => "excerpt",
			   "description" => __('Enter words limit.', 'theme_support_comre' )
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __( 'Category', 'theme_support_comre' ),
			   "param_name" => "cat",
			   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'category', 'hide_empty' =>          FALSE ), true ) ),
			   "description" => __( 'Choose Category.', 'theme_support_comre' )
			),

			array(
		       "type" => "dropdown",
		       "holder" => "div",
		       "class" => "",
		       "heading" => __("Blog Column", 'theme_support_comre'),
		       "param_name" => "blog_column",
		       'value' => array_flip( array(''=>__('Select', 'theme_support_comre'), '4'=>__('4 Column', 'theme_support_comre'),'3'=>__('3 Column', 'theme_support_comre'), '2'=>__('2 Column', 'theme_support_comre'), )),   
		       "description" => __("Enter the blog Column.", 'theme_support_comre')
    		),

			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order By", 'theme_support_comre'),
			   "param_name" => "sort",
			   'value' => array_flip( array('date'=>__('Date', 'theme_support_comre'),'title'=>__('Title', 'theme_support_comre') ,'name'=>__('Name', 'theme_support_comre') ,'author'=>__('Author', 'theme_support_comre'),'comment_count' =>__('Comment Count', 'theme_support_comre'),'random' =>__('Random', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order", 'theme_support_comre'),
			   "param_name" => "order",
			   'value' => array_flip(array('ASC'=>__('Ascending', 'theme_support_comre'),'DESC'=>__('Descending', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),
			array(
			   "type" => "checkbox",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Extra Options", 'theme_support_comre'),
			   "param_name" => "extras",
			   'value' => array(__('Show Meta Info', 'theme_support_comre')=>'meta', __('Hide excerpt', 'theme_support_comre')=>'exc_status'),
			   "description" => __("Choose extra options.", 'theme_support_comre')
			),
		)
	);

$sh_sc['sh_top_week_deals']	=	array(
		"name" => __("Top Deals of the Week", 'theme_support_comre'),
		"base" => "sh_top_week_deals",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show Top deals of the week.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter  title', 'theme_support_comre' ),
			   "param_name" => "title",
			   "description" => __('Enter portfolio title.', 'theme_support_comre' )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Number', 'theme_support_comre' ),
			   "param_name" => "num",
			   "description" => __('Enter number of categories to show.', 'theme_support_comre' )
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order", 'theme_support_comre'),
			   "param_name" => "order",
			   'value' => array_flip(array('ASC'=>__('Ascending', 'theme_support_comre'),'DESC'=>__('Descending', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),

			
			array(
		       "type" => "dropdown",
		       "holder" => "div",
		       "class" => "",
		       "heading" => __("Deal Column", 'theme_support_comre'),
		       "param_name" => "deal_column",
		       'value' => array_flip( array(''=>__('Select', 'theme_support_comre'), '4'=>__('4 Column', 'theme_support_comre'),'3'=>__('3 Column', 'theme_support_comre'), '5'=>__('5 Column', 'theme_support_comre'),)),   
		       "description" => __("Enter the deal Column.", 'theme_support_comre')
    		),


			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Sort By", 'theme_support_comre'),
			   "param_name" => "sort",
			   'value' => array(__('Name', 'theme_support_comre')=>'name', __('Term ID', 'theme_support_comre')=>'id', __('Slug', 'theme_support_comre')=>'slug', __('Post Count', 'theme_support_comre')=>'count',__('Term Group', 'theme_support_comre')=>'term_group',),
			   "description" => __("Choose the sorting order.", 'theme_support_comre')
			),
		)
);

$sh_sc['sh_top_offers']	=	array(
		"name" => __("Top Offers", 'theme_support_comre'),
		"base" => "sh_top_offers",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show todays top offers.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter  title', 'theme_support_comre' ),
			   "param_name" => "title",
			   "description" => __('Enter portfolio title.', 'theme_support_comre' )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Number', 'theme_support_comre' ),
			   "param_name" => "num",
			   "description" => __('Enter number of categories to show.', 'theme_support_comre' )
			),
			array(
			   "type" => "checkbox",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __( 'Category', 'theme_support_comre' ),
			   "param_name" => "cat",
			   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'coupons_store_category', 'hide_empty' =>          FALSE ), true ) ),
			   "description" => __( 'Choose Category.', 'theme_support_comre' )
			),

			array(
		       "type" => "dropdown",
		       "holder" => "div",
		       "class" => "",
		       "heading" => __("top offer column", 'theme_support_comre'),
		       "param_name" => "topoffer_column",
		       'value' => array_flip( array(''=>__('Select', 'theme_support_comre'), '4'=>__('4 Column', 'theme_support_comre'),'3'=>__('3 Column', 'theme_support_comre'),)),   
		       "description" => __("Enter the offer Column.", 'theme_support_comre')
    		),

			array(
		       "type" => "dropdown",
		       "holder" => "div",
		       "class" => "",
		       "heading" => __("Offer Column", 'theme_support_comre'),
		       "param_name" => "offer_column",
		       'value' => array_flip( array(''=>__('Select', 'theme_support_comre'), '4'=>__('4 Column', 'theme_support_comre'),'3'=>__('3 Column', 'theme_support_comre'), )),   
		       "description" => __("Enter the offer Column.", 'theme_support_comre')
    		),


			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order", 'theme_support_comre'),
			   "param_name" => "order",
			   'value' => array_flip(array('ASC'=>__('Ascending', 'theme_support_comre'),'DESC'=>__('Descending', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Sort By", 'theme_support_comre'),
			   "param_name" => "sort",
			   'value' => array(__('Name', 'theme_support_comre')=>'name', __('Term ID', 'theme_support_comre')=>'id', __('Slug', 'theme_support_comre')=>'slug', __('Post Count', 'theme_support_comre')=>'count',__('Term Group', 'theme_support_comre')=>'term_group',),
			   "description" => __("Choose the sorting order.", 'theme_support_comre')
			),
		)
);


$sh_sc['sh_popular_offers']	=	array(
		"name" => __("Popular Offers", 'theme_support_comre'),
		"base" => "sh_popular_offers",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show popular offers.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Number', 'theme_support_comre' ),
			   "param_name" => "num",
			   "description" => __('Enter Number of Portfolio Posts to show.', 'theme_support_comre' )
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __( 'Category', 'theme_support_comre' ),
			   "param_name" => "cat",
			   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'coupons_category', 'hide_empty' =>          FALSE ), true ) ),
			   "description" => __( 'Choose Category.', 'theme_support_comre' )
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order By", 'theme_support_comre'),
			   "param_name" => "sort",
			   'value' => array_flip( array('date'=>__('Date', 'theme_support_comre'),'title'=>__('Title', 'theme_support_comre') ,'name'=>__('Name', 'theme_support_comre') ,'author'=>__('Author', 'theme_support_comre'),'comment_count' =>__('Comment Count', 'theme_support_comre'),'random' =>__('Random', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),

			array(
		       "type" => "dropdown",
		       "holder" => "div",
		       "class" => "",
		       "heading" => __("Offer Column", 'theme_support_comre'),
		       "param_name" => "offer_column",
		       'value' => array_flip( array(''=>__('Select', 'theme_support_comre'), '4'=>__('4 Column', 'theme_support_comre'),'3'=>__('3 Column', 'theme_support_comre'), )),   
		       "description" => __("Enter the offer Column.", 'theme_support_comre')
    		),

			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order", 'theme_support_comre'),
			   "param_name" => "order",
			   'value' => array_flip(array('ASC'=>__('Ascending', 'theme_support_comre'),'DESC'=>__('Descending', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),
			
		)
	);

$sh_sc['sh_parallax']	=	array(
		"name" => __("Parallax", 'theme_support_comre'),
		"base" => "sh_parallax",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show parallax section.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter  title', 'theme_support_comre' ),
			   "param_name" => "title",
			   "description" => __('Enter portfolio title.', 'theme_support_comre' )
			),

			array(
			   "type" => "textarea",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Excerpt', 'theme_support_comre' ),
			   "param_name" => "excerpt",
			   "description" => __('Enter the text to show.', 'theme_support_comre' )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Excerpt Length', 'theme_support_comre' ),
			   "param_name" => "excerpt_length",
			   "description" => __('Enter words limit.', 'theme_support_comre' )
			),
			array(
			   "type" => "textarea",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __( 'Buttons', 'theme_support_comre' ),
			   "param_name" => "content",
			   "description" => __( 'Choose HTML of buttons.', 'theme_support_comre' )
			),
			array(
			   "type" => "attach_image",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Front Image", 'theme_support_comre'),
			   "param_name" => "fimage",
			   "description" => __("Choose the foreground image.", 'theme_support_comre')
			),
			array(
			   "type" => "attach_image",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("BG Image", 'theme_support_comre'),
			   "param_name" => "bg",
			   "description" => __("Choose the background Image.", 'theme_support_comre')
			),
			
		)
);

$sh_sc['sh_testimonials']	=	array(
		"name" => __("Testimonials", 'theme_support_comre'),
		"base" => "sh_testimonials",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show testimonials.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter  title', 'theme_support_comre' ),
			   "param_name" => "title",
			   "description" => __('Enter portfolio title.', 'theme_support_comre' )
			),

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Number', 'theme_support_comre' ),
			   "param_name" => "num",
			   "description" => __('Enter Number of Portfolio Posts to show.', 'theme_support_comre' )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Excerpt Lenght', 'theme_support_comre' ),
			   "param_name" => "excerpt",
			   "description" => __('Enter the excerpt Lenght.', 'theme_support_comre' ),
			   'default' => 25
			),

			array(
		       "type" => "dropdown",
		       "holder" => "div",
		       "class" => "",
		       "heading" => __("Testimonials column", 'theme_support_comre'),
		       "param_name" => "testimonial_column",
		       'value' => array_flip( array(''=>__('Select', 'theme_support_comre'), '4'=>__('4 Column', 'theme_support_comre'),'3'=>__('3 Column', 'theme_support_comre'), '5'=>__('5 Column', 'theme_support_comre'),)),   
		       "description" => __("Enter the testimonial Column.", 'theme_support_comre')
    		),

			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __( 'Category', 'theme_support_comre' ),
			   "param_name" => "cat",
			   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'testimonial_category', 'hide_empty' =>          FALSE ), true ) ),
			   "description" => __( 'Choose Category.', 'theme_support_comre' )
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order By", 'theme_support_comre'),
			   "param_name" => "sort",
			   'value' => array_flip( array('date'=>__('Date', 'theme_support_comre'),'title'=>__('Title', 'theme_support_comre') ,'name'=>__('Name', 'theme_support_comre') ,'author'=>__('Author', 'theme_support_comre'),'comment_count' =>__('Comment Count', 'theme_support_comre'),'random' =>__('Random', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order", 'theme_support_comre'),
			   "param_name" => "order",
			   'value' => array_flip(array('ASC'=>__('Ascending', 'theme_support_comre'),'DESC'=>__('Descending', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),
			array(
			   "type" => "checkbox",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Extra Options", 'theme_support_comre'),
			   "param_name" => "extras",
			   'value' => array(__('Show designation', 'theme_support_comre')=>'designation'),
			   "description" => __("Choose extra options.", 'theme_support_comre')
			),
		)
);

$sh_sc['sh_best_feature']	=	array(
			"name" => __("Best Feature", SH_NAME),
			"base" => "sh_best_feature",
			"class" => "",
			"category" => __('Comre', SH_NAME),
			"icon" => 'icon-wpb-layer-shape-text' ,
			"as_child" => array('only' => 'sh_location_facts'),// Use only|except attributes to limit child shortcodes (separate multiple values with comma)
			"content_element" => true,
			"show_settings_on_create" => true,
			'description' => __('Add Location Fact.', SH_NAME),
			"params" => array(
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Title", SH_NAME),
				   "param_name" => "title",
				   "description" => __("Enter the Title to show.", SH_NAME)
				),
				array(
				   "type" => "attach_image",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Image", SH_NAME),
				   "param_name" => "img",
				   "description" => __("Choose image.", SH_NAME)
				),
				
			),
		);


$sh_sc['sh_best_features']	=	array(
			"name" => __("Best Features", 'theme_support_comre'),
			"base" => "sh_best_features",
			"class" => "",
			"category" => __('Comre', 'theme_support_comre'),
			"icon" => 'icon-wpb-layer-shape-text' ,
			"as_parent" => array('only' => 'sh_best_feature'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
			"content_element" => true,
			"show_settings_on_create" => false,
			'description' => __('Add Best Features to your theme.', 'theme_support_comre'),
			"params" => array(
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Title", 'theme_support_comre'),
				   "param_name" => "title",
				   "description" => __("Enter the title for help.", 'theme_support_comre')
				),
				array(
				   "type" => "textfield",
				   "holder" => "div",
				   "class" => "",
				   "heading" => __("Description", 'theme_support_comre'),
				   "param_name" => "description",
				   "description" => __("Enter the Description for help.", 'theme_support_comre')
				),
			
			),
			"js_view" => 'VcColumnView'
);

$sh_sc['sh_call_to_action']	=	array(
		"name" => __("CAll to Action", 'theme_support_comre'),
		"base" => "sh_call_to_action",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show call to action.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter  title', 'theme_support_comre' ),
			   "param_name" => "title",
			   "description" => __('Enter portfolio title.', 'theme_support_comre' )
			),

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Button Text', 'theme_support_comre' ),
			   "param_name" => "btn_text",
			   "description" => __('Enter the button text.', 'theme_support_comre' )
			),
			
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __( 'Button Link', 'theme_support_comre' ),
			   "param_name" => "btn_link",
			   "description" => __( 'Enter button link.', 'theme_support_comre' )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Title 2", 'theme_support_comre'),
			   "param_name" => "title2",
			   "description" => __("Enter the title 2.", 'theme_support_comre')
			),
			array(
			   "type" => "attach_images",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Images", 'theme_support_comre'),
			   "param_name" => "images",
			   "description" => __("Choose images.", 'theme_support_comre')
			),
			array(
			   "type" => "attach_image",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("BG Image", 'theme_support_comre'),
			   "param_name" => "bg",
			   "description" => __("Choose bg image.", 'theme_support_comre')
			),
		)
);

$sh_sc['sh_our_team']	=	array(
		"name" => __("Our Team", 'theme_support_comre'),
		"base" => "sh_our_team",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show team members.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter  title', 'theme_support_comre' ),
			   "param_name" => "title",
			   "description" => __('Enter portfolio title.', 'theme_support_comre' )
			),

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Number', 'theme_support_comre' ),
			   "param_name" => "num",
			   "description" => __('Enter Number of Portfolio Posts to show.', 'theme_support_comre' )
			),
			array(
				'type'=>'textfield',
				'holder'=>'div',
				'class' => '',
				'heading' => __('Excerpt Length', 'theme_support_comre'),
				'param_name' => 'limit',
				'description' => __('Enter text limit', 'theme_support_comre')
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __( 'Category', 'theme_support_comre' ),
			   "param_name" => "cat",
			   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'team_category', 'hide_empty' =>          FALSE ), true ) ),
			   "description" => __( 'Choose Category.', 'theme_support_comre' )
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order By", 'theme_support_comre'),
			   "param_name" => "sort",
			   'value' => array_flip( array('date'=>__('Date', 'theme_support_comre'),'title'=>__('Title', 'theme_support_comre') ,'name'=>__('Name', 'theme_support_comre') ,'author'=>__('Author', 'theme_support_comre'),'comment_count' =>__('Comment Count', 'theme_support_comre'),'random' =>__('Random', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order", 'theme_support_comre'),
			   "param_name" => "order",
			   'value' => array_flip(array('ASC'=>__('Ascending', 'theme_support_comre'),'DESC'=>__('Descending', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),
			array(
			   "type" => "checkbox",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Extra Options", 'theme_support_comre'),
			   "param_name" => "extras",
			   'value' => array(__('Show designation', 'theme_support_comre')=>'designation', __('Show Excerpt', 'theme_support_comre')=>'excerpt', __('Show Social Icons', 'theme_support_comre')=>'social' ),
			   "description" => __("Choose extra options.", 'theme_support_comre')
			),
		)
);

$sh_sc['sh_testimonials_2']	=	array(
		"name" => __("Testimonials Style 2", 'theme_support_comre'),
		"base" => "sh_testimonials_2",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show testimonials.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter  title', 'theme_support_comre' ),
			   "param_name" => "title",
			   "description" => __('Enter portfolio title.', 'theme_support_comre' )
			),

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Number', 'theme_support_comre' ),
			   "param_name" => "num",
			   "description" => __('Enter Number of Portfolio Posts to show.', 'theme_support_comre' )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Text Limit', 'theme_support_comre' ),
			   "param_name" => "excerpt",
			   "description" => __('Enter text limmit to show.', 'theme_support_comre' )
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __( 'Category', 'theme_support_comre' ),
			   "param_name" => "cat",
			   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'testimonials_category', 'hide_empty' =>          FALSE ), true ) ),
			   "description" => __( 'Choose Category.', 'theme_support_comre' )
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order By", 'theme_support_comre'),
			   "param_name" => "sort",
			   'value' => array_flip( array('date'=>__('Date', 'theme_support_comre'),'title'=>__('Title', 'theme_support_comre') ,'name'=>__('Name', 'theme_support_comre') ,'author'=>__('Author', 'theme_support_comre'),'comment_count' =>__('Comment Count', 'theme_support_comre'),'random' =>__('Random', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order", 'theme_support_comre'),
			   "param_name" => "order",
			   'value' => array_flip(array('ASC'=>__('Ascending', 'theme_support_comre'),'DESC'=>__('Descending', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),
			array(
			   "type" => "checkbox",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Extra Options", 'theme_support_comre'),
			   "param_name" => "extras",
			   'value' => array(__('Show designation', 'theme_support_comre')=>'designation'),
			   "description" => __("Choose extra options.", 'theme_support_comre')
			),
			array(
			   "type" => "attach_image",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Background Image', 'theme_support_comre' ),
			   "param_name" => "bg",
			   "description" => __('Choose the bg image.', 'theme_support_comre' )
			),
		)
);

$sh_sc['sh_partners']	=	array(
		"name" => __("Our Partners", 'theme_support_comre'),
		"base" => "sh_partners",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show partners or clients.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter  title', 'theme_support_comre' ),
			   "param_name" => "title",
			   "description" => __('Enter portfolio title.', 'theme_support_comre' )
			),

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Number', 'theme_support_comre' ),
			   "param_name" => "num",
			   "description" => __('Enter Number of Portfolio Posts to show.', 'theme_support_comre' )
			),
			
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __( 'Category', 'theme_support_comre' ),
			   "param_name" => "cat",
			   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'partners_category', 'hide_empty' =>          FALSE ), true ) ),
			   "description" => __( 'Choose Category.', 'theme_support_comre' )
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order By", 'theme_support_comre'),
			   "param_name" => "sort",
			   'value' => array_flip( array('date'=>__('Date', 'theme_support_comre'),'title'=>__('Title', 'theme_support_comre') ,'name'=>__('Name', 'theme_support_comre') ,'author'=>__('Author', 'theme_support_comre'),'comment_count' =>__('Comment Count', 'theme_support_comre'),'random' =>__('Random', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order", 'theme_support_comre'),
			   "param_name" => "order",
			   'value' => array_flip(array('ASC'=>__('Ascending', 'theme_support_comre'),'DESC'=>__('Descending', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),
			
		)
);


$sh_sc['sh_products']	=	array(
		"name" => __("Products", 'theme_support_comre'),
		"base" => "sh_products",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show Products.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter  title', 'theme_support_comre' ),
			   "param_name" => "title",
			   "description" => __('Enter portfolio title.', 'theme_support_comre' )
			),

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Number', 'theme_support_comre' ),
			   "param_name" => "num",
			   "description" => __('Enter Number of Portfolio Posts to show.', 'theme_support_comre' )
			),
			
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __( 'Category', 'theme_support_comre' ),
			   "param_name" => "cat",
			   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'product_cat', 'hide_empty' =>          FALSE ), true ) ),
			   "description" => __( 'Choose Category.', 'theme_support_comre' )
			),

			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order By", 'theme_support_comre'),
			   "param_name" => "sort",
			   'value' => array_flip( array('date'=>__('Date', 'theme_support_comre'),'title'=>__('Title', 'theme_support_comre') ,'name'=>__('Name', 'theme_support_comre') ,'author'=>__('Author', 'theme_support_comre'),'comment_count' =>__('Comment Count', 'theme_support_comre'),'random' =>__('Random', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),

			array(
		       "type" => "dropdown",
		       "holder" => "div",
		       "class" => "",
		       "heading" => __("Products column", 'theme_support_comre'),
		       "param_name" => "products_column",
		       'value' => array_flip( array(''=>__('Select', 'theme_support_comre'), '4'=>__('4 Column', 'theme_support_comre'),'3'=>__('3 Column', 'theme_support_comre'), '5'=>__('5 Column', 'theme_support_comre'),)),   
		       "description" => __("Enter the products Column.", 'theme_support_comre')
    		),

			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order", 'theme_support_comre'),
			   "param_name" => "order",
			   'value' => array_flip(array('ASC'=>__('Ascending', 'theme_support_comre'),'DESC'=>__('Descending', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),
			array(
			   "type" => "checkbox",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Extra Options", 'theme_support_comre'),
			   "param_name" => "extras",
			   'value' => array(__('Show price', 'theme_support_comre')=>'price'),
			   "description" => __("Choose extra options.", 'theme_support_comre')
			),
		)
);

$sh_sc['sh_product_by_cat']	=	array(
		"name" => __("Products By Category", 'theme_support_comre'),
		"base" => "sh_product_by_cat",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show products by category.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter  title', 'theme_support_comre' ),
			   "param_name" => "title",
			   "description" => __('Enter product title.', 'theme_support_comre' )
			),

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Number', 'theme_support_comre' ),
			   "param_name" => "num",
			   "description" => __('Enter Number of Product Posts to show.', 'theme_support_comre' )
			),
			
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order By", 'theme_support_comre'),
			   "param_name" => "sort",
			   'value' => array_flip( array('date'=>__('Date', 'theme_support_comre'),'title'=>__('Title', 'theme_support_comre') ,'name'=>__('Name', 'theme_support_comre') ,'author'=>__('Author', 'theme_support_comre'),'comment_count' =>__('Comment Count', 'theme_support_comre'),'random' =>__('Random', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order", 'theme_support_comre'),
			   "param_name" => "order",
			   'value' => array_flip(array('ASC'=>__('Ascending', 'theme_support_comre'),'DESC'=>__('Descending', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),
			array(
			   "type" => "checkbox",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Extra Options", 'theme_support_comre'),
			   "param_name" => "extras",
			   'value' => array(__('Show "Shop Now" button', 'theme_support_comre')=>'shop_btn'),
			   "description" => __("Choose extra options.", 'theme_support_comre')
			),
		)
);

$sh_sc['sh_products_by_store']	=	array(
		"name" => __("Products By Stores", 'theme_support_comre'),
		"base" => "sh_products_by_store",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show products by store.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter  title', 'theme_support_comre' ),
			   "param_name" => "title",
			   "description" => __('Enter portfolio title.', 'theme_support_comre' )
			),

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Number', 'theme_support_comre' ),
			   "param_name" => "num",
			   "description" => __('Enter Number of Portfolio Posts to show.', 'theme_support_comre' )
			),
			
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order By", 'theme_support_comre'),
			   "param_name" => "sort",
			   'value' => array_flip( array('date'=>__('Date', 'theme_support_comre'),'title'=>__('Title', 'theme_support_comre') ,'name'=>__('Name', 'theme_support_comre') ,'author'=>__('Author', 'theme_support_comre'),'comment_count' =>__('Comment Count', 'theme_support_comre'),'random' =>__('Random', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order", 'theme_support_comre'),
			   "param_name" => "order",
			   'value' => array_flip(array('ASC'=>__('Ascending', 'theme_support_comre'),'DESC'=>__('Descending', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),
		)
);

$sh_sc['sh_signup']	=	array(
		"name" => __("Sign Up Form", 'theme_support_comre'),
		"base" => "sh_signup",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show sign up form.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter  title', 'theme_support_comre' ),
			   "param_name" => "title",
			   "description" => __('Enter portfolio title.', 'theme_support_comre' )
			),

			array(
			   "type" => "attach_image",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Image', 'theme_support_comre' ),
			   "param_name" => "image",
			   "description" => __('Choose the title.', 'theme_support_comre' )
			),
			
			array(
			   "type" => "textarea",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __( 'Text', 'theme_support_comre' ),
			   "param_name" => "text",			   
			   "description" => __( 'Enter text.', 'theme_support_comre' )
			),
			
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __( 'Social Connect Position', 'theme_support_comre' ),
			   "param_name" => "social_position",			   
			   'value' => array(__('Bottom', 'theme_support_comre') => 'bottom', __('Top', 'theme_support_comre') => 'top'),
			   "description" => __( 'Social connect position whether at top or bottom.', 'theme_support_comre' )
			),
		)
);

$sh_sc['sh_signin']	=	array(
		"name" => __("Sign In Form", 'theme_support_comre'),
		"base" => "sh_signin",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show sign up form.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter  title', 'theme_support_comre' ),
			   "param_name" => "title",
			   "description" => __('Enter portfolio title.', 'theme_support_comre' )
			),

			array(
			   "type" => "attach_image",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Image', 'theme_support_comre' ),
			   "param_name" => "image",
			   "description" => __('Choose the title.', 'theme_support_comre' )
			),
			
			array(
			   "type" => "textarea",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __( 'Text', 'theme_support_comre' ),
			   "param_name" => "text",			   
			   "description" => __( 'Enter text.', 'theme_support_comre' )
			),
			
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __( 'Social Connect Position', 'theme_support_comre' ),
			   "param_name" => "social_position",			   
			   'value' => array(__('Bottom', 'theme_support_comre') => 'bottom', __('Top', 'theme_support_comre') => 'top'),
			   "description" => __( 'Social connect position whether at top or bottom.', 'theme_support_comre' )
			),
		)
);

$sh_sc['sh_my_account']	=	array(
		"name" => __("Comre My Account", 'theme_support_comre'),
		"base" => "sh_my_account",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show account management system.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "checkbox",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enable Blog Posts Tab', 'theme_support_comre' ),
			   "param_name" => "blog",
			   'value' => array(esc_html__('Enable Blog Post Tab') => 1),
			   "description" => __('Enable or disable blog post tab.', 'theme_support_comre' )
			),

			array(
			   "type" => "checkbox",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enable Coupons Tab', 'theme_support_comre' ),
			   "param_name" => "coupon",
			   'value' => array(esc_html__('Enable Coupons Tab') => 1),
			   "description" => __('Enable or disable coupons management tab.', 'theme_support_comre' )
			),
			
			array(
			   "type" => "checkbox",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enable Store Tab', 'theme_support_comre' ),
			   "param_name" => "store",
			   'value' => array(esc_html__('Enable Store Tab') => 1),
			   "description" => __('Enable or disable store management tab.', 'theme_support_comre' )
			),
			array(
			   "type" => "checkbox",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enable Order Tab', 'theme_support_comre' ),
			   "param_name" => "order",
			   'value' => array(esc_html__('Enable Order Tab') => 1),
			   "description" => __('Enable or disable order management tab.', 'theme_support_comre' )
			),
			
			array(
			   "type" => "checkbox",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enable Cred Points Tab', 'theme_support_comre' ),
			   "param_name" => "points",
			   'value' => array(esc_html__('Enable Points Tab') => 1),
			   "description" => __('Enable or disable Cred Points management tab.', 'theme_support_comre' )
			),

		)
);


$sh_sc['sh_submit_coupon']	=	array(
		"name" => __("Submit Coupon", 'theme_support_comre'),
		"base" => "sh_submit_coupon",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('submit coupon form.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter  title', 'theme_support_comre' ),
			   "param_name" => "title",
			   "description" => __('Enter portfolio title.', 'theme_support_comre' )
			),

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Tagline', 'theme_support_comre' ),
			   "param_name" => "tagline",
			   "description" => __('Enter tagline.', 'theme_support_comre' )
			),
			
			array(
			   "type" => "attach_image",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __( 'Image', 'theme_support_comre' ),
			   "param_name" => "image",
			   "description" => __( 'Choose image.', 'theme_support_comre' )
			),
			array(
			   "type" => "textarea",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Text", 'theme_support_comre'),
			   "param_name" => "content",
			   "description" => __("Enter text.", 'theme_support_comre')
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Sub Title", 'theme_support_comre'),
			   "param_name" => "subtitle",
			   "description" => __("Enter sub title.", 'theme_support_comre')
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Sub Tagline", 'theme_support_comre'),
			   "param_name" => "subtagline",
			   "description" => __("Enter sub tagline.", 'theme_support_comre')
			),
		)
);

$sh_sc['sh_call_to_action_2']	=	array(
		"name" => __("CAll to Action 2", 'theme_support_comre'),
		"base" => "sh_call_to_action_2",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show call to action.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textarea",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter Text', 'theme_support_comre' ),
			   "param_name" => "content",
			   "description" => __('Enter cotnent.', 'theme_support_comre' )
			),

			array(
			   "type" => "color",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Background Color', 'theme_support_comre' ),
			   "param_name" => "bg_color",
			   "description" => __('Choose bg color.', 'theme_support_comre' )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Button Text", 'theme_support_comre'),
			   "param_name" => "btn_text",
			   "description" => __("Enter button text.", 'theme_support_comre')
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __( 'Button Link', 'theme_support_comre' ),
			   "param_name" => "btn_link",
			   "description" => __( 'Enter button link.', 'theme_support_comre' )
			),
			
		)
);

$sh_sc['sh_drop_cap']	=	array(
		"name" => __("Drop Cap", 'theme_support_comre'),
		"base" => "sh_drop_cap",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show drop Cap.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter Title', 'theme_support_comre' ),
			   "param_name" => "title",
			   "description" => __('Enter title.', 'theme_support_comre' )
			),

			array(
			   "type" => "textarea",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Text', 'theme_support_comre' ),
			   "param_name" => "content",
			   "description" => __('Enter Content.', 'theme_support_comre' )
			),
		)
);

$sh_sc['sh_drop_cap_2']	=	array(
		"name" => __("Drop Cap_2", 'theme_support_comre'),
		"base" => "sh_drop_cap_2",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show drop Cap.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter Title', 'theme_support_comre' ),
			   "param_name" => "title",
			   "description" => __('Enter title.', 'theme_support_comre' )
			),

			array(
			   "type" => "textarea",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Text', 'theme_support_comre' ),
			   "param_name" => "content",
			   "description" => __('Enter Content.', 'theme_support_comre' )
			),
		)
);


$sh_sc['sh_progress_bar']	=	array(
		"name" => __("Progress Bar", 'theme_support_comre'),
		"base" => "sh_progress_bar",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show progress bar.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter Title', 'theme_support_comre' ),
			   "param_name" => "title",
			   "description" => __('Enter title.', 'theme_support_comre' )
			),

			array(
			   "type" => "textarea",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Text', 'theme_support_comre' ),
			   "param_name" => "content",
			   "description" => __('Enter Content like ( Heading | 50% ) one progress bar per line.', 'theme_support_comre' )
			),
		)
);

/*$sh_sc['sh_deals_4']	=	array(
		"name" => __("Coupon Style 4", 'theme_support_comre'),
		"base" => "sh_deals_4",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show coupon style 4.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter  title', 'theme_support_comre' ),
			   "param_name" => "title",
			   "description" => __('Enter section title.', 'theme_support_comre' )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Number', 'theme_support_comre' ),
			   "param_name" => "number",
			   "description" => __('Enter number of posts to show.', 'theme_support_comre' )
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __( 'Category', 'theme_support_comre' ),
			   "param_name" => "cat",
			   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'deals_category', 'hide_empty' =>          FALSE ), true ) ),
			   "description" => __( 'Choose Category.', 'theme_support_comre' )
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order By", 'theme_support_comre'),
			   "param_name" => "sort",
			   'value' => array_flip( array('date'=>__('Date', 'theme_support_comre'),'title'=>__('Title', 'theme_support_comre') ,'name'=>__('Name', 'theme_support_comre') ,'author'=>__('Author', 'theme_support_comre'),'comment_count' =>__('Comment Count', 'theme_support_comre'),'random' =>__('Random', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order", 'theme_support_comre'),
			   "param_name" => "order",
			   'value' => array_flip(array('ASC'=>__('Ascending', 'theme_support_comre'),'DESC'=>__('Descending', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),
			
		)
);
*/
$sh_sc['sh_comre_community']	=	array(
		"name" => __("Comre Community", 'theme_support_comre'),
		"base" => "sh_comre_community",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show comre community.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter  title', 'theme_support_comre' ),
			   "param_name" => "title",
			   "description" => __('Enter section title.', 'theme_support_comre' )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Sub  title', 'theme_support_comre' ),
			   "param_name" => "subtitle",
			   "description" => __('Enter section title.', 'theme_support_comre' )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('title 2', 'theme_support_comre' ),
			   "param_name" => "title2",
			   "description" => __('Enter section title.', 'theme_support_comre' )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Text Limit', 'theme_support_comre' ),
			   "param_name" => "text_limit",
			   "description" => __('Enter text limit.', 'theme_support_comre' )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Number', 'theme_support_comre' ),
			   "param_name" => "number",
			   "description" => __('Enter number of posts to show.', 'theme_support_comre' )
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __( 'Category', 'theme_support_comre' ),
			   "param_name" => "cat",
			   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'deals_category', 'hide_empty' =>          FALSE ), true ) ),
			   "description" => __( 'Choose Category.', 'theme_support_comre' )
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order By", 'theme_support_comre'),
			   "param_name" => "sort",
			   'value' => array_flip( array('date'=>__('Date', 'theme_support_comre'),'title'=>__('Title', 'theme_support_comre') ,'name'=>__('Name', 'theme_support_comre') ,'author'=>__('Author', 'theme_support_comre'),'comment_count' =>__('Comment Count', 'theme_support_comre'),'random' =>__('Random', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),
			array(
			   "type" => "dropdown",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Order", 'theme_support_comre'),
			   "param_name" => "order",
			   'value' => array_flip(array('ASC'=>__('Ascending', 'theme_support_comre'),'DESC'=>__('Descending', 'theme_support_comre') ) ),			
			   "description" => __("Enter the sorting order.", 'theme_support_comre')
			),
			array(
			   "type" => "attach_image",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Front Image", 'theme_support_comre'),
			   "param_name" => "fimage",
			   "description" => __("Choos the images.", 'theme_support_comre')
			),
		)
);

$sh_sc['sh_google_map']	=	array(
		"name" => __("Google Map", 'theme_support_comre'),
		"base" => "sh_google_map",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Show google map.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter Latitude', 'theme_support_comre' ),
			   "param_name" => "lat",
			   "description" => __('Enter Latitude of Google Map.', 'theme_support_comre' )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter Longitude', 'theme_support_comre' ),
			   "param_name" => "long",
			   "description" => __('Enter Longitude of Google Map.', 'theme_support_comre' )
			),

			array(
			   "type" => "textarea",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Address', 'theme_support_comre' ),
			   "param_name" => "address",
			   "description" => __('Enter Address of Google Map.', 'theme_support_comre' )
			),
			array(
			   "type" => "attach_image",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __("Map Marker Image", 'theme_support_comre'),
			   "param_name" => "marker",
			   "description" => __("Choose the Map Marker Image.", 'theme_support_comre')
			),
		)
);

$sh_sc['sh_get_touch']	=	array(
		"name" => __("Get Touch", 'theme_support_comre'),
		"base" => "sh_get_touch",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Get in Touch.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter Title', 'theme_support_comre' ),
			   "param_name" => "title",
			   "description" => __('Enter title.', 'theme_support_comre' )
			),
			array(
			   "type" => "textarea",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Description', 'theme_support_comre' ),
			   "param_name" => "description",
			   "description" => __('Enter Description Content.', 'theme_support_comre' )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Address', 'theme_support_comre' ),
			   "param_name" => "address",
			   "description" => __('Enter the address.', 'theme_support_comre' )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Email', 'theme_support_comre' ),
			   "param_name" => "email",
			   "description" => __('Enter the email address.', 'theme_support_comre' )
			),
			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Phone', 'theme_support_comre' ),
			   "param_name" => "phone",
			   "description" => __('Enter the phone.', 'theme_support_comre' )
			),
			array(
			   "type" => "textarea",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('social media html', 'theme_support_comre' ),
			   "param_name" => "content",
			   "description" => __('Enter Content.', 'theme_support_comre' )
			),
		)
);

$sh_sc['sh_contact_form']	=	array(
		"name" => __("Contact Form", 'theme_support_comre'),
		"base" => "sh_contact_form",
		"class" => "",
		"category" => __('Comre', 'theme_support_comre'),
		"icon" => 'fa-briefcase' ,
		'description' => __('Contact Form.', 'theme_support_comre'),

		"params" => array(

			array(
			   "type" => "textfield",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Enter Title', 'theme_support_comre' ),
			   "param_name" => "title",
			   "description" => __('Enter title.', 'theme_support_comre' )
			),

			array(
			   "type" => "textarea",
			   "holder" => "div",
			   "class" => "",
			   "heading" => __('Text', 'theme_support_comre' ),
			   "param_name" => "content",
			   "description" => __('Enter Content.', 'theme_support_comre' )
			),
		)
);


/** Price TAble and price table features */
//Register "container" content element. It will hold all your inner (child) content elements
$sh_sc['sh_ptable'] =
	array(
    "name" => __("Price Table", 'theme_support_comre'),
    "base" => "sh_ptable",
    "as_parent" => array('only' => 'sh_ptable_features'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
    "content_element" => true,
    "show_settings_on_create" => false,
	'icon' => 'fa-table',
	'description' => __('show pricing table', 'theme_support_comre'),
	"category" => __('Comre', 'theme_support_comre'),
    "params" => array(
        // add params same as with any other content element
        array(
            "type" => "textfield",
            "heading" => __("Title", 'theme_support_comre'),
            "param_name" => "title",
            "description" => __("Enter the title for fun facts area", 'theme_support_comre')
        ),
		array(
            "type" => "textfield",
            "heading" => __("Discount", 'theme_support_comre'),
            "param_name" => "discount",
            "description" => __("Enter the count either in price or percentage", 'theme_support_comre')
        ),
		array(
            "type" => "textfield",
            "heading" => __("Duration", 'theme_support_comre'),
            "param_name" => "duration",
            "description" => __("Enter the duration", 'theme_support_comre')
        ),
		array(
            "type" => "textfield",
            "heading" => __("Button Label", 'theme_support_comre'),
            "param_name" => "btn",
            "description" => __("Enter the 'Order Now' button label", 'theme_support_comre')
        ),
		array(
            "type" => "textfield",
            "heading" => __("Button LInk", 'theme_support_comre'),
            "param_name" => "btn_link",
            "description" => __("Enter the 'Order Now' button link", 'theme_support_comre')
        ),
    ),
    "js_view" => 'VcColumnView'
) ;


$sh_sc['sh_ptable_features'] =
		array(
		    "name" => __("Price Table Features", SH_NAME),
		    "base" => "sh_ptable_features",
		    "content_element" => true,
			'icon'	 => 'fa-table',
		    "as_child" => array('only' => 'sh_ptable'), // Use only|except attributes to limit parent (separate multiple values with comma)
		    "category" => __('Comre', SH_NAME),
		    "params" => array(
		        // add params same as with any other content element
		        array(
		            "type" => "textarea",
		            "heading" => __("Content", SH_NAME),
		            "param_name" => "content",
		            "description" => __("Add the pricing table features", SH_NAME),
					'value' => ''
					
		        ),
		    )
		); 




//Your "container" content element should extend WPBakeryShortCodesContainer class to inherit all required functionality
class WPBakeryShortCode_Sh_Ptable extends WPBakeryShortCodesContainer {
}
class WPBakeryShortCode_Sh_Ptable_Features extends WPBakeryShortCode {
}





/*----------------------------------------------------------------------------*/
$sh_sc = apply_filters( '_sh_shortcodes_array', $sh_sc );
	
return $sh_sc;