<?php

$sh_sc = array();

$sh_sc['sh_call_out'] = array(

			"name" => __("Call Out", 'theme_support_comre'),

			"base" => "sh_call_out",

			"class" => "",

			"category" => __('Preshop', 'theme_support_comre'),

			"icon" => 'fa-user' ,

			'description' => __('show the call out banner.', 'theme_support_comre'),

			"params" => array(

				array(

				   "type" => "textfield",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Image Link", 'theme_support_comre'),

				   "param_name" => "link",

				   'value' => '',

				   "description" => __("Enter the Image Link", 'theme_support_comre')

				),

				array(

				   "type" => "attach_image",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Image", 'theme_support_comre'),

				   "param_name" => "img",

				   'value' => '',

				   "description" => __("Enter the Image url", 'theme_support_comre')

				),

				array(

				   "type" => "textfield",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Image Title", 'theme_support_comre'),

				   "param_name" => "title",

				   'value' => '',

				   "description" => __("Enter the Image Title", 'theme_support_comre')

				),

				array(

						   "type" => "dropdown",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __(" Background Color Check", 'theme_support_comre'),

						   "param_name" => "color_check",

						   'value' => array_flip(array('clearfix'=>__('None', 'theme_support_comre'),'banner clearfix'=>__('Black', 'theme_support_comre'),         'banner colorful clearfix'=>__('Orange', 'theme_support_comre') ) ),			

						   "description" => __("Select the background image color.", 'theme_support_comre')

						),

				

				

				

			)

	    );

		

		

		

		$sh_sc['sh_pricing-tables'] = array(

			"name" => __("Pricing tables", 'theme_support_comre'),

			"base" => "sh_pricing-tables",

			"class" => "",

			"category" => __('Preshop', 'theme_support_comre'),

			"icon" => 'fa-user' ,

			'description' => __('show the pricing list.', 'theme_support_comre'),

			"params" => array(

			

		

				array(

				   "type" => "textfield",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Price Heading", 'theme_support_comre'),

				   "param_name" => "price_heading",

				   'value' => '',

				   "description" => __("Enter the price heading", 'theme_support_comre')

				),

			    array(

				   "type" => "textfield",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Price", 'theme_support_comre'),

				   "param_name" => "price",

				   'value' => '',

				   "description" => __("Enter the price", 'theme_support_comre')

				),

			      	array(

						   "type" => "exploded_textarea",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __("Features", 'theme_support_comre'),

						   "param_name" => "features",

						   "description" => __("Enter One Feature per Line", 'theme_support_comre')

						),

				

				  array(

				   "type" => "textfield",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Enter the button name", 'theme_support_comre'),

				   "param_name" => "button_name",

				   'value' => '',

				   "description" => __("Enter the button name", 'theme_support_comre')

				),

					array(

				   "type" => "textfield",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Button link", 'theme_support_comre'),

				   "param_name" => "link",

				   'value' => '',

				   "description" => __("Enter the button link", 'theme_support_comre')

				),

				

				

			)

	    );

					

		$sh_sc['sh_parchase-lists'] = array(

			"name" => __("Parchase Lists", 'theme_support_comre'),

			"base" => "sh_parchase-lists",

			"class" => "",

			"category" => __('Preshop', 'theme_support_comre'),

			"icon" => 'fa-user' ,

			'description' => __('show the parchase list.', 'theme_support_comre'),

			"params" => array(

			

		

				array(

				   "type" => "textfield",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Price Heading", 'theme_support_comre'),

				   "param_name" => "price_heading",

				   'value' => '',

				   "description" => __("Enter the price heading", 'theme_support_comre')

				),

			    array(

				   "type" => "textfield",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Price", 'theme_support_comre'),

				   "param_name" => "price",

				   'value' => '',

				   "description" => __("Enter the price", 'theme_support_comre')

				),

			      	array(

						   "type" => "exploded_textarea",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __("Features", 'theme_support_comre'),

						   "param_name" => "features",

						   "description" => __("Enter One Feature per Line", 'theme_support_comre')

						),

				

				  array(

				   "type" => "textfield",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Enter the button name", 'theme_support_comre'),

				   "param_name" => "button_name",

				   'value' => '',

				   "description" => __("Enter the button name", 'theme_support_comre')

				),

				

					array(

				   "type" => "textfield",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Button link", 'theme_support_comre'),

				   "param_name" => "link",

				   'value' => '',

				   "description" => __("Enter the button link", 'theme_support_comre')

				),

				

				

			)

	    );

					

			$sh_sc['sh_parallex'] = array(

			"name" => __("parallex", 'theme_support_comre'),

			"base" => "sh_parallex",

			"class" => "",

			"category" => __('Preshop', 'theme_support_comre'),

			'description' => __('show the Parallex banner.', 'theme_support_comre'),

			"params" => array(

				array(

				   "type" => "textfield",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Msg Title",'theme_support_comre'),

				   "param_name" => "msg_title",

				   'value' =>  '',

				   "description" => __("Enter the message title", 'theme_support_comre')

				),

				array(

				   "type" => "attach_image",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("background image", 'theme_support_comre'),

				   "param_name" => "image",

				   "description" => __("Enter the  background image", 'theme_support_comre')

				),

							array(

				   "type" => "textarea",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Short html Text", 'theme_support_comre'),

				   "param_name" => "content",

						 'value' =>'',

				   "description" => __("Enter content, you can use html tags", 'theme_support_comre')

				),

				

				

				

			)

	    );

					

					

				$sh_sc['sh_parallex2'] = array(

			"name" => __("parallex2", 'theme_support_comre'),

			"base" => "sh_parallex2",

			"class" => "",

			"category" => __('Preshop', 'theme_support_comre'),

			'description' => __('show the Parallex 2 banner.', 'theme_support_comre'),

			"params" => array(

				array(

				   "type" => "textfield",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Msg Title",'theme_support_comre'),

				   "param_name" => "msg_title",

				   'value' => '',

				   "description" => __("Enter the message title", 'theme_support_comre')

				),

						array(

				   "type" => "textfield",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Button Link Title Attribute",'theme_support_comre'),

				   "param_name" => "link_title",

				   'value' => '',

				   "description" => __("Enter the message title", 'theme_support_comre')

				),

						array(

				   "type" => "textfield",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Title",'theme_support_comre'),

				   "param_name" => "msg_title",

				   'value' => '',

				   "description" => __("Enter the message title", 'theme_support_comre')

				),

						array(

				   "type" => "textfield",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Button Link URl",'theme_support_comre'),

				   "param_name" => "link",

				   'value' =>  '',

				   "description" => __("Enter the button link url", 'theme_support_comre')

				),

				array(

				   "type" => "attach_image",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("background image", 'theme_support_comre'),

				   "param_name" => "image",

				   "description" => __("Enter the  background image", 'theme_support_comre')

				),

							array(

				   "type" => "textarea",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Short html Text", 'theme_support_comre'),

				   "param_name" => "content",

						 'value' =>  '',

				   "description" => __("Enter content, you can use html tags", 'theme_support_comre')

				),

				

				

				

			)

	    );

	$sh_sc['sh_right_small_banner'] = array(

			"name" => __("Right Small Banner", 'theme_support_comre'),

			"base" => "sh_right_small_banner",

			"class" => "",

			"category" => __('Preshop', 'theme_support_comre'),

			"icon" => 'fa-user' ,

			'description' => __('show the mini banner.', 'theme_support_comre'),

			"params" => array(

				array(

				   "type" => "textfield",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Image Link", 'theme_support_comre'),

				   "param_name" => "link",

				   'value' => '',

				   "description" => __("Enter the Image Link", 'theme_support_comre')

				),

				array(

				   "type" => "textfield",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Image Title", 'theme_support_comre'),

				   "param_name" => "title",

				   'value' => '',

				   "description" => __("Enter the Image Title", 'theme_support_comre')

				),

				array(

						   "type" => "dropdown",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __("Banner Button 1 Status", 'theme_support_comre'),

						   "param_name" => "btn_status",

						   'value' => array_flip(array('active'=>__('active', 'theme_support_comre'),'none'=>__('none', 'theme_support_comre') ) ),			

						   "description" => __("show button status.", 'theme_support_comre')

						),

							array(

				   "type" => "attach_image",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Image", 'theme_support_comre'),

				   "param_name" => "img",

				   'value' => '',

				   "description" => __("Enter the Image url", 'theme_support_comre')

				),

						array(

				   "type" => "textfield",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Banner Button Link", 'theme_support_comre'),

				   "param_name" => "banner2_btn_link",

				   'value' => '',

				   "description" => __("Enter the banner2 button link", 'theme_support_comre')

				),

						array(

				   "type" => "textfield",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Banner  Button Text", 'theme_support_comre'),

				   "param_name" => "banner2_btn_text",

				   'value' => '',

				   "description" => __("Banner 2 Button Text", 'theme_support_comre')

				),

						array(

				   "type" => "textfield",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Banner  title", 'theme_support_comre'),

				   "param_name" => "banner2_title",

				   'value' => '',

				   "description" => __("Enter the banner2 title", 'theme_support_comre')

				),

						

			)

	    );

			

					

			$sh_sc['sh_mini_banner'] = array(

			"name" => __("Mini Banner", 'theme_support_comre'),

			"base" => "sh_mini_banner",

			"class" => "",

			"category" => __('Preshop', 'theme_support_comre'),

			"icon" => 'fa-user' ,

			'description' => __('show the mini banner.', 'theme_support_comre'),

			"params" => array(

				array(

				   "type" => "textfield",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Image Link", 'theme_support_comre'),

				   "param_name" => "link",

				   'value' => '',

				   "description" => __("Enter the Image Link", 'theme_support_comre')

				),

						

							array(

				   "type" => "textfield",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Banner Button 1  Link", 'theme_support_comre'),

				   "param_name" => "btn_link",

				   'value' => '',

				   "description" => __("Enter the button Link", 'theme_support_comre')

				),

							array(

				   "type" => "textfield",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Banner Button 1 Text", 'theme_support_comre'),

				   "param_name" => "btn_text",

				   'value' => '',

				   "description" => __("Enter the button title", 'theme_support_comre')

				),

				array(

				   "type" => "textfield",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Image Title", 'theme_support_comre'),

				   "param_name" => "title",

				   'value' => '',

				   "description" => __("Enter the Image Title", 'theme_support_comre')

				),

				array(

						   "type" => "dropdown",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __("Banner Button 1 Status", 'theme_support_comre'),

						   "param_name" => "btn_status",

						   'value' => array_flip(array('active'=>__('active', 'theme_support_comre'),'none'=>__('none', 'theme_support_comre') ) ),			

						   "description" => __("show button status.", 'theme_support_comre')

						),

							array(

				   "type" => "attach_image",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Image", 'theme_support_comre'),

				   "param_name" => "img",

				   'value' => '',

				   "description" => __("Enter the Image url", 'theme_support_comre')

				),

					

			

			)

	    );

					

					

			$sh_sc['sh_parallex'] = array(

			"name" => __("parallex", 'theme_support_comre'),

			"base" => "sh_parallex",

			"class" => "",

			"category" => __('Preshop', 'theme_support_comre'),

			'description' => __('show the Parallex banner.', 'theme_support_comre'),

			"params" => array(

				array(

				   "type" => "textfield",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Msg Title",'theme_support_comre'),

				   "param_name" => "msg_title",

				   'value' =>  __("Pretty & PreShop",'theme_support_comre'),

				   "description" => __("Enter the message title", 'theme_support_comre')

				),

				array(

				   "type" => "attach_image",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("background image", 'theme_support_comre'),

				   "param_name" => "image",

				   "description" => __("Enter the  background image", 'theme_support_comre')

				),

							array(

				   "type" => "textarea",

				   "holder" => "div",

				   "class" => "",

				   "heading" => __("Short html Text", 'theme_support_comre'),

				   "param_name" => "content",

						 'value' =>  __("Find your favorite design and put your personal touch on it before you buy..",'theme_support_comre'),

				   "description" => __("Enter content, you can use html tags", 'theme_support_comre')

				),

				

				

				

			)

	    );

$sh_sc['sh_services']	=	array(

					"name" => __("Services", 'theme_support_comre'),

					"base" => "sh_services",

					"class" => "",

					"category" => __('Preshop', 'theme_support_comre'),

					"icon" => 'fa-briefcase' ,

					'description' => __('Show Service Style 1 in 3 Columns.', 'theme_support_comre'),

					"params" => array(

					   	array(

						   "type" => "dropdown",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __( 'Do you want to show title on top', 'theme_support_comre' ),

						   "param_name" => "title_show",

						   'value' => array_flip(array('true'=>__('Show', 'theme_support_comre'),'false'=>__('None', 'theme_support_comre')) ),			

						   "description" => __( 'select title if you want to show of top.', 'theme_support_comre' )

						),

					      array(

						   "type" => "dropdown",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __( 'Show read more button', 'theme_support_comre' ),

						   "param_name" => "button_read_more",

						   'value' => array_flip(array('true'=>__('Show', 'theme_support_comre'),'false'=>__('None', 'theme_support_comre')) ),			

						   "description" => __( 'choose if you want to show read more button.', 'theme_support_comre' )

						),

						array(

						   "type" => "textfield",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __('Title', 'theme_support_comre' ),

						   "param_name" => "title",

						   "description" => __('Enter the title.', 'theme_support_comre' )

						),

						  array(

						   "type" => "textfield",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __('Inner Title', 'theme_support_comre' ),

						   "param_name" => "title_inner",

						   "description" => __('Enter the Inner title.', 'theme_support_comre' )

						),

							

					

					 

						array(

						   "type" => "textfield",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __('Number', 'theme_support_comre' ),

						   "param_name" => "num",

						   "description" => __('Enter Number of Services to Show.', 'theme_support_comre' )

						),

		

						array(

						   "type" => "dropdown",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __( 'Category', 'theme_support_comre' ),

						   "param_name" => "cat",

						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'services_category', 'hide_empty' => FALSE ), true ) ),

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

	$sh_sc['sh_team']	=	array(

					"name" => __("Teams", 'theme_support_comre'),

					"base" => "sh_team",

					"class" => "",

					"category" => __('Preshop', 'theme_support_comre'),

					"icon" => 'fa-briefcase' ,

					'description' => __('Show Team.', 'theme_support_comre'),

					"params" => array(

						array(

						   "type" => "textfield",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __('Title', 'theme_support_comre' ),

						   "param_name" => "title",

						   "description" => __('Enter title.', 'theme_support_comre' )

						),

		              	array(

						   "type" => "textfield",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __('Title Inner', 'theme_support_comre' ),

						   "param_name" => "title_inner",

						   "description" => __('Enter Inner Title .', 'theme_support_comre' )

						),

		

						array(

						   "type" => "textfield",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __('Number', 'theme_support_comre' ),

						   "param_name" => "num",

						   "description" => __('Enter of Teams to show.', 'theme_support_comre' )

						),

		

						array(

						   "type" => "dropdown",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __( 'Category', 'theme_support_comre' ),

						   "param_name" => "cat",

						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'team_category', 'hide_empty' => FALSE ), true ) ),

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

				

				$sh_sc['sh_testimonials']	=	array(

					"name" => __("Testimonials ( 2 Columns)", 'theme_support_comre'),

					"base" => "sh_testimonials",

					"class" => "",

					"category" => __('Preshop', 'theme_support_comre'),

					"icon" => 'fa-briefcase' ,

					'description' => __('Show testimonials Style 1 in 2 Columns.', 'theme_support_comre'),

					"params" => array(

						array(

						   "type" => "textfield",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __('Number', 'theme_support_comre' ),

						   "param_name" => "num",

						   "description" => __('Enter Number of Services to Show.', 'theme_support_comre' )

						),

		                 array(

						   "type" => "textfield",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __('Title', 'theme_support_comre' ),

						   "param_name" => "title",

						   "description" => __('Enter Title.', 'theme_support_comre' )

						),

						array(

						   "type" => "textfield",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __('Tagline', 'theme_support_comre' ),

						   "param_name" => "tag",

						   "description" => __('Enter the tagline.', 'theme_support_comre' )

						),

						array(

						   "type" => "dropdown",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __( 'Category', 'theme_support_comre' ),

						   "param_name" => "cat",

						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'testimonial_category', 'hide_empty' => FALSE ), true ) ),

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

					"name" => __("Products ( 2 Columns)", 'theme_support_comre'),

					"base" => "sh_products",

					"class" => "",

					"category" => __('Preshop', 'theme_support_comre'),

					"icon" => 'fa-briefcase' ,

					'description' => __('Show Featured Products .', 'theme_support_comre'),

					"params" => array(

						array(

						   "type" => "textfield",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __('Featured Posts Title', 'theme_support_comre' ),

						   "param_name" => "feature_title",

						   "description" => __('Enter Feature Post title.', 'theme_support_comre' )

						),

						array(

						   "type" => "textfield",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __('Number', 'theme_support_comre' ),

						   "param_name" => "num",

						   "description" => __('Enter Number of Services to Show.', 'theme_support_comre' )

						),

						array(

						   "type" => "dropdown",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __( 'Category', 'theme_support_comre' ),

						   "param_name" => "cat",

						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'product_cat',                           'hide_empty' => FALSE ), true ) ),

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

				

				

				$sh_sc['sh_best-sellers']	=	array(

					"name" => __(" Best Sellers", 'theme_support_comre'),

					"base" => "sh_best-sellers",

					"class" => "",

					"category" => __('Preshop', 'theme_support_comre'),

					"icon" => 'fa-briefcase' ,

					'description' => __('Show best selling products .', 'theme_support_comre'),

					"params" => array(

						array(

						   "type" => "textfield",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __('Title', 'theme_support_comre' ),

						   "param_name" => "title",

						   "description" => __('Enter the title on the top', 'theme_support_comre' )

						),

						array(

						   "type" => "textfield",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __('Set Old Price of items', 'theme_support_comre' ),

						   "param_name" => "old_price",

						   "description" => __('Enter the old price', 'theme_support_comre' )

						),

							array(

						   "type" => "textfield",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __('Set the new price of the items', 'theme_support_comre' ),

						   "param_name" => "new_price",

						   "description" => __('Enter the new price', 'theme_support_comre' )

						),

						array(

						   "type" => "textfield",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __('Number', 'theme_support_comre' ),

						   "param_name" => "num",

						   "description" => __('Enter Number of Services to Show.', 'theme_support_comre' )

						),

						array(

						   "type" => "dropdown",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __( 'Category', 'theme_support_comre' ),

						   "param_name" => "cat",

						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'product_cat',                           'hide_empty' => FALSE ), true ) ),

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

				$sh_sc['sh_middle-slider']	=	array(

					"name" => __("Middle slider  Products ", 'theme_support_comre'),

					"base" => "sh_middle-slider",

					"class" => "",

					"category" => __('Preshop', 'theme_support_comre'),

					"icon" => 'fa-briefcase' ,

					'description' => __('Show Featured Products .', 'theme_support_comre'),

					"params" => array(

						array(

						   "type" => "textfield",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __('Title', 'theme_support_comre' ),

						   "param_name" => "feature_title",

						   "description" => __('Enter Slider title.', 'theme_support_comre' )

						),

						array(

						   "type" => "textfield",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __('Number', 'theme_support_comre' ),

						   "param_name" => "num",

						   "description" => __('Enter Number of Products to Show.', 'theme_support_comre' )

						),

						array(

						   "type" => "dropdown",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __( 'Category', 'theme_support_comre' ),

						   "param_name" => "cat",

						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'product_cat',                           'hide_empty' => FALSE ), true ) ),

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

						   "type" => "textfield",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __("Product's Old Price", 'theme_support_comre' ),

						   "param_name" => "old_price",

						   "description" => __("Enter Product's Old Price.", 'theme_support_comre' )

						),

		                	array(

						   "type" => "textfield",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __("Product's New Price", 'theme_support_comre' ),

						   "param_name" => "new_price",

						   "description" => __("Enter Product's New Price.", 'theme_support_comre' )

						),

					)

				);

								

				

					$sh_sc['sh_from-blog']	=	array(

					"name" => __("From Blog", 'theme_support_comre'),

					"base" => "sh_from-blog",

					"class" => "",

					"category" => __('Preshop', 'theme_support_comre'),

					"icon" => 'fa-briefcase' ,

					'description' => __('Show Posts from the blog.', 'theme_support_comre'),

					"params" => array(

						array(

						   "type" => "textfield",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __('Enter title', 'theme_support_comre' ),

						   "param_name" => "title",

						   "description" => __('Enter blog title.', 'theme_support_comre' )

						),

						array(

						   "type" => "textfield",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __('Number', 'theme_support_comre' ),

						   "param_name" => "num",

						   "description" => __('Enter Number of Blog Posts to show.', 'theme_support_comre' )

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



					$sh_sc['sh_top-blog-posts']	=	array(

					"name" => __("top-blog-posts", 'theme_support_comre'),

					"base" => "sh_top-blog-posts",

					"class" => "",

					"category" => __('Preshop', 'theme_support_comre'),

					"icon" => 'fa-briefcase' ,

					'description' => __('Show Posts from the blog.', 'theme_support_comre'),

					"params" => array(

						array(

						   "type" => "textfield",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __('Number', 'theme_support_comre' ),

						   "param_name" => "num",

						   "description" => __('Enter Number of Blog Posts to show.', 'theme_support_comre' )

						),

						array(

						   "type" => "dropdown",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __( 'Category', 'theme_support_comre' ),

						   "param_name" => "cat",

						   "value" => array_flip( (array)sh_get_categories( array( 'taxonomy' => 'category', 'hide_empty'                           => FALSE ), true ) ),

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

				

		$sh_sc['sh_fun_facts']	=	array(

					"name" => __("Fun Facts", 'theme_support_comre'),

					"base" => "sh_fun_facts",

					"class" => "",

					"category" => __('Preshop', 'theme_support_comre'),

					"icon" => 'icon-wpb-layer-shape-text' ,

					"as_parent" => array('only' => 'sh_fact'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)

					"content_element" => true,

					"show_settings_on_create" => false,

					'description' => __('Add Fun Facts to your theme.', 'theme_support_comre'),

					"params" => array(

						array(

						   "type" => "attach_image",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __("Background Image", 'theme_support_comre'),

						   "param_name" => "bg",

						   "description" => __("Upload Background Image", 'theme_support_comre')

						),

					

					),

					"js_view" => 'VcColumnView'

				);

$sh_sc['sh_fact']	=	array(

					"name" => __("Fact", 'theme_support_comre'),

					"base" => "sh_fact",

					"class" => "",

					"category" => __('Preshop', 'theme_support_comre'),

					"icon" => 'icon-wpb-layer-shape-text' ,

					"as_child" => array('only' => 'sh_fun_facts'),// Use only|except attributes to limit child shortcodes (separate multiple values with comma)

					"content_element" => true,

					"show_settings_on_create" => true,

					'description' => __('Add Fact.', 'theme_support_comre'),

					"params" => array(

						array(

						   "type" => "textfield",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __("Title", 'theme_support_comre'),

						   "param_name" => "title",

						   "description" => __("Enter Title for Skills Section", 'theme_support_comre')

						),

						array(

						   "type" => "textfield",

						   "holder" => "div",

						   "class" => "",

						   "heading" => __("Number", 'theme_support_comre'),

						   "param_name" => "number",

						   "description" => __("Enter Number", 'theme_support_comre')

						),

					

					),

				);		

/*----------------------------------------------------------------------------*/

