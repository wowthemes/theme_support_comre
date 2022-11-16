<?php 

class _wow_themes_woocommerce
{

	public $post_types = array();

	function __construct()
	{
		$this->post_types[] = 'sh_coupons';

		$this->init();
	}

	public function init()
	{

		//if( function_exists('WC') ) {
			add_action( 'admin_init', array($this, 'start') );
		//}
	}

	function start()
	{

		if( !function_exists('WC')) return;

		WC_Frontend_Scripts::init();

		foreach ($this->post_types as $value) {
			
			if (is_admin()){
				//add_filter( 'woocommerce_screen_ids',array( $this, 'woocommerce_screen_ids'),11,1);
				//add_action( 'current_screen', array( $this, 'conditonal_includes' ) );
				add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ),11 );
			}

			if(post_type_exists( $value )) 
			{

				add_action('publish_'.$value, array($this, 'publish_post'));

				add_action( 'woocommerce_process_'.$value.'_meta', 'WC_Meta_Box_Product_Data::save', 10, 2 );
				add_action( 'woocommerce_process_'.$value.'_meta', 'WC_Meta_Box_Product_Images::save', 20, 2 );
				
				add_meta_box( 'woocommerce-product-data', __( 'Post Settings', 'woocommerce' ), 'WC_Meta_Box_Product_Data::output', $value, 'normal', 'low' );
			}
		}

		

	}


	function publish_post( $post_id, $post_object = '' )
	{
		global $post;

		$post = ( $post_object ) ? $post_object : $post;

		// $post_id and $post are required
		if ( empty( $post_id ) || empty( $post ) ) {
			return;
		}

		// Dont' save meta boxes for revisions or autosaves
		if ( defined( 'DOING_AUTOSAVE' ) || is_int( wp_is_post_revision( $post ) ) || is_int( wp_is_post_autosave( $post ) ) ) {
			return;
		}

		// Check the nonce
		if ( empty( $_POST['woocommerce_meta_nonce'] ) || ! wp_verify_nonce( $_POST['woocommerce_meta_nonce'], 'woocommerce_save_data' ) ) {
			return;
		}

		// Check the post being saved == the $post_id to prevent triggering this call for other save_post events
		if ( empty( $_POST['post_ID'] ) || $_POST['post_ID'] != $post_id ) {
			return;
		}

		// Check user has permission to edit
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}

		// Check the post type
		$post_types = $this->post_types;
		if ( in_array( $post->post_type, array_keys( $post_types ) ) ) {
			do_action( 'woocommerce_process_' . $post->post_type . '_meta', $post_id, $post );
		}
	}


		/**
	 * Enqueue scripts
	 */
	public function admin_scripts() 
	{

		global $wp_query, $post, $wp_scripts;
		
		$screen       = get_current_screen();

		//print_r($screen);exit;

		$wc_screen_id = sanitize_title( __( 'WooCommerce', 'woocommerce' ) );
		$suffix       = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

		// Products
		$cpt_list = $this->post_types;
		
		$cpt_screens = $cpt_list; //array_keys($cpt_list);

		/*if (!empty($cpt_list))
		foreach($cpt_list as $key => $cpt)
			$cpt_list[$key] = 'edit-'.$cpt;
		$cpt_screens = array_merge($cpt_list,$cpt_screens);*/

		if ( in_array( $screen->id, $cpt_list ) ) {

			wp_enqueue_script( 'jquery-tiptip');
			wp_enqueue_script( 'woocommerce_quick-edit', plugins_url('woocommerce/assets/js/admin/quick-edit' . $suffix . '.js'), array('jquery'), WC_VERSION );
		}
		
		// Meta boxes
		if ( in_array( $screen->id, $cpt_screens ) ) {

			wp_enqueue_media();
			wp_enqueue_script( 'wc-admin-product-meta-boxes', plugins_url('woocommerce/assets/js/admin/meta-boxes-product' . $suffix . '.js'), array( 'wc-admin-meta-boxes' ), WC_VERSION );
			wp_enqueue_script( 'wc-admin-variation-meta-boxes', plugins_url('woocommerce/assets/js/admin/meta-boxes-product-variation' . $suffix . '.js'), array( 'wc-admin-meta-boxes' ), WC_VERSION );
			wp_enqueue_script( 'serializejson', plugins_url('woocommerce/assets/js/jquery-serializejson/jquery.serializejson' . $suffix . '.js'), array( 'jquery' ), '2.6.1' );

			$params = array(
				'post_id'                             => isset( $post->ID ) ? $post->ID : '',
				'plugin_url'                          => WC()->plugin_url(),
				'ajax_url'                            => admin_url( 'admin-ajax.php' ),
				'woocommerce_placeholder_img_src'     => wc_placeholder_img_src(),
				'add_variation_nonce'                 => wp_create_nonce( 'add-variation' ),
				'link_variation_nonce'                => wp_create_nonce( 'link-variations' ),
				'delete_variations_nonce'             => wp_create_nonce( 'delete-variations' ),
				'load_variations_nonce'               => wp_create_nonce( 'load-variations' ),
				'save_variations_nonce'               => wp_create_nonce( 'save-variations' ),
				'bulk_edit_variations_nonce'          => wp_create_nonce( 'bulk-edit-variations' ),
				'i18n_link_all_variations'            => esc_js( __( 'Are you sure you want to link all variations? This will create a new variation for each and every possible combination of variation attributes (max 50 per run).', 'woocommerce' ) ),
				'i18n_enter_a_value'                  => esc_js( __( 'Enter a value', 'woocommerce' ) ),
				'i18n_enter_menu_order'               => esc_js( __( 'Variation menu order (determines position in the list of variations)', 'woocommerce' ) ),
				'i18n_enter_a_value_fixed_or_percent' => esc_js( __( 'Enter a value (fixed or %)', 'woocommerce' ) ),
				'i18n_delete_all_variations'          => esc_js( __( 'Are you sure you want to delete all variations? This cannot be undone.', 'woocommerce' ) ),
				'i18n_last_warning'                   => esc_js( __( 'Last warning, are you sure?', 'woocommerce' ) ),
				'i18n_choose_image'                   => esc_js( __( 'Choose an image', 'woocommerce' ) ),
				'i18n_set_image'                      => esc_js( __( 'Set variation image', 'woocommerce' ) ),
				'i18n_variation_added'                => esc_js( __( "variation added", 'woocommerce' ) ),
				'i18n_variations_added'               => esc_js( __( "variations added", 'woocommerce' ) ),
				'i18n_no_variations_added'            => esc_js( __( "No variations added", 'woocommerce' ) ),
				'i18n_remove_variation'               => esc_js( __( 'Are you sure you want to remove this variation?', 'woocommerce' ) ),
				'i18n_scheduled_sale_start'           => esc_js( __( 'Sale start date (YYYY-MM-DD format or leave blank)', 'woocommerce' ) ),
				'i18n_scheduled_sale_end'             => esc_js( __( 'Sale end date (YYYY-MM-DD format or leave blank)', 'woocommerce' ) ),
				'i18n_edited_variations'              => esc_js( __( 'Save changes before changing page?', 'woocommerce' ) ),
				'i18n_variation_count_single'         => esc_js( __( '%qty% variation', 'woocommerce' ) ),
				'i18n_variation_count_plural'         => esc_js( __( '%qty% variations', 'woocommerce' ) ),
				'variations_per_page'                 => absint( apply_filters( 'woocommerce_admin_meta_boxes_variations_per_page', 10 ) )
			);

			wp_localize_script( 'wc-admin-variation-meta-boxes', 'woocommerce_admin_meta_boxes_variations', $params );
		}
		
		if (!is_array($cpt_screens)){$cpt_screens=array();}
		if ( in_array( str_replace( 'edit-', '', $screen->id ), array_merge( $cpt_screens, wc_get_order_types( 'order-meta-boxes' ) ) ) ) {
			$params = array(
				'remove_item_notice'            => __( 'Are you sure you want to remove the selected items? If you have previously reduced this item\'s stock, or this order was submitted by a customer, you will need to manually restore the item\'s stock.', 'woocommerce' ),
				'i18n_select_items'             => __( 'Please select some items.', 'woocommerce' ),
				'i18n_do_refund'                => __( 'Are you sure you wish to process this refund? This action cannot be undone.', 'woocommerce' ),
				'i18n_delete_refund'            => __( 'Are you sure you wish to delete this refund? This action cannot be undone.', 'woocommerce' ),
				'i18n_delete_tax'               => __( 'Are you sure you wish to delete this tax column? This action cannot be undone.', 'woocommerce' ),
				'remove_item_meta'              => __( 'Remove this item meta?', 'woocommerce' ),
				'remove_attribute'              => __( 'Remove this attribute?', 'woocommerce' ),
				'name_label'                    => __( 'Name', 'woocommerce' ),
				'remove_label'                  => __( 'Remove', 'woocommerce' ),
				'click_to_toggle'               => __( 'Click to toggle', 'woocommerce' ),
				'values_label'                  => __( 'Value(s)', 'woocommerce' ),
				'text_attribute_tip'            => __( 'Enter some text, or some attributes by pipe (|) separating values.', 'woocommerce' ),
				'visible_label'                 => __( 'Visible on the product page', 'woocommerce' ),
				'used_for_variations_label'     => __( 'Used for variations', 'woocommerce' ),
				'new_attribute_prompt'          => __( 'Enter a name for the new attribute term:', 'woocommerce' ),
				'calc_totals'                   => __( 'Calculate totals based on order items, discounts, and shipping?', 'woocommerce' ),
				'calc_line_taxes'               => __( 'Calculate line taxes? This will calculate taxes based on the customers country. If no billing/shipping is set it will use the store base country.', 'woocommerce' ),
				'copy_billing'                  => __( 'Copy billing information to shipping information? This will remove any currently entered shipping information.', 'woocommerce' ),
				'load_billing'                  => __( 'Load the customer\'s billing information? This will remove any currently entered billing information.', 'woocommerce' ),
				'load_shipping'                 => __( 'Load the customer\'s shipping information? This will remove any currently entered shipping information.', 'woocommerce' ),
				'featured_label'                => __( 'Featured', 'woocommerce' ),
				'prices_include_tax'            => esc_attr( get_option( 'woocommerce_prices_include_tax' ) ),
				'round_at_subtotal'             => esc_attr( get_option( 'woocommerce_tax_round_at_subtotal' ) ),
				'no_customer_selected'          => __( 'No customer selected', 'woocommerce' ),
				'plugin_url'                    => WC()->plugin_url(),
				'ajax_url'                      => admin_url( 'admin-ajax.php' ),
				'order_item_nonce'              => wp_create_nonce( 'order-item' ),
				'add_attribute_nonce'           => wp_create_nonce( 'add-attribute' ),
				'save_attributes_nonce'         => wp_create_nonce( 'save-attributes' ),
				'calc_totals_nonce'             => wp_create_nonce( 'calc-totals' ),
				'get_customer_details_nonce'    => wp_create_nonce( 'get-customer-details' ),
				'search_products_nonce'         => wp_create_nonce( 'search-products' ),
				'grant_access_nonce'            => wp_create_nonce( 'grant-access' ),
				'revoke_access_nonce'           => wp_create_nonce( 'revoke-access' ),
				'add_order_note_nonce'          => wp_create_nonce( 'add-order-note' ),
				'delete_order_note_nonce'       => wp_create_nonce( 'delete-order-note' ),
				'calendar_image'                => WC()->plugin_url().'/assets/images/calendar.png',
				'post_id'                       => isset( $post->ID ) ? $post->ID : '',
				'base_country'                  => WC()->countries->get_base_country(),
				'currency_format_num_decimals'  => wc_get_price_decimals(),
				'currency_format_symbol'        => get_woocommerce_currency_symbol(),
				'currency_format_decimal_sep'   => esc_attr( wc_get_price_decimal_separator() ),
				'currency_format_thousand_sep'  => esc_attr( wc_get_price_thousand_separator() ),
				'currency_format'               => esc_attr( str_replace( array( '%1$s', '%2$s' ), array( '%s', '%v' ), get_woocommerce_price_format() ) ), // For accounting JS
				'rounding_precision'            => WC_ROUNDING_PRECISION,
				'tax_rounding_mode'             => WC_TAX_ROUNDING_MODE,
				'product_types'                 => array_map( 'sanitize_title', get_terms( 'product_type', array( 'hide_empty' => false, 'fields' => 'names' ) ) ),
				'i18n_download_permission_fail' => __( 'Could not grant access - the user may already have permission for this file or billing email is not set. Ensure the billing email is set, and the order has been saved.', 'woocommerce' ),
				'i18n_permission_revoke'        => __( 'Are you sure you want to revoke access to this download?', 'woocommerce' ),
				'i18n_tax_rate_already_exists'  => __( 'You cannot add the same tax rate twice!', 'woocommerce' ),
				'i18n_product_type_alert'       => __( 'Your product has variations! Before changing the product type, it is a good idea to delete the variations to avoid errors in the stock reports.', 'woocommerce' )
			);

			wp_localize_script( 'wc-admin-meta-boxes', 'woocommerce_admin_meta_boxes', $params );

			$jquery_version = isset( $wp_scripts->registered['jquery-ui-core']->ver ) ? $wp_scripts->registered['jquery-ui-core']->ver : '1.9.2';
			// Admin styles for WC pages only
   			wp_enqueue_style( 'woocommerce_admin_styles', WC()->plugin_url() . '/assets/css/admin.css', array(), WC_VERSION );
   			wp_enqueue_style( 'jquery-ui-style', '//code.jquery.com/ui/' . $jquery_version . '/themes/smoothness/jquery-ui.css', array(), $jquery_version );
   			wp_enqueue_style( 'wp-color-picker' );
		}


		// Product sorting - only when sorting by menu order on the products page
		if ( current_user_can('edit_others_pages') && in_array($screen->id,$cpt_screens) && isset( $wp_query->query['orderby'] ) && $wp_query->query['orderby'] == 'menu_order title' ) {

			wp_enqueue_script( 'woocommerce_product_ordering', plugins_url('woocommerce/assets/js/admin/product-ordering.js'), array('jquery-ui-sortable'), WC_VERSION, true );

		}
		?>
			<style>
				.icon-cart .menu-icon-post div.wp-menu-image:before {
					font-family: WooCommerce!important;
					content: "\e01d";
					font-size: 1.3em!important;
				}
			</style>
		<?php

	}
}

new _wow_themes_woocommerce;