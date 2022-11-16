<?php 

// include_once( SH_TH_ROOT.'includes/thirdparty/parsecsv.lib.php' );


class __Batch_Coupons
{

	protected $columns = '';
	protected $columns_show = '';
	protected $meta_key = '';

	function __construct()
	{
		add_action('admin_menu', array($this, '_sh_register_my_custom_submenu_page' ) );

		add_filter( 'manage_posts_columns' ,  array($this, 'add_custom_column') );
		add_action( 'manage_posts_custom_column' , array($this, 'custom_columns'), 10, 2 );

		add_filter( 'manage_edit-sh_coupons_sortable_columns', array($this, 'my_website_manage_sortable_columns') );//make sortable columns
		add_action( 'pre_get_posts', array($this, 'manage_wp_posts_be_qe_pre_get_posts'), 1 );//Manage sortable queries

		add_action( 'publish_sh_coupons', array($this, 'publish_coupons') );

		$this->meta_key = '_sh_sh_coupons_settings';
		$this->columns = array('title', 'description', 'banner', 'small_image', 'cashback', 'expires_date', 'coupon_display_type', 'coupon_code', 'coupon_link', 'verified', 'safe', 'share', 'discuss', 'featured_image', 'categories', 'stores');
		$this->columns_show = array('expires_date', 'coupon_code', 'coupon_link');
	}

	function publish_coupons( $post_id, $post = '' )
	{
		if( is_user_logged_in() ) {
			if( $coupons_settings = sh_set( $_POST, '_sh_sh_coupons_settings' ) ) {
				foreach( $this->columns_show as $col ) {
					update_post_meta( $post_id, '_sh_coupons_'.$col, sh_set( $coupons_settings, $col) );
				}
			}
		}
	}	

	function _sh_register_my_custom_submenu_page() {
		
		if( sh_set( $_GET, 'export_links') ) {
			$this->export();	
		}

		add_submenu_page( 'edit.php?post_type=sh_coupons', __('Batch Coupons Uploader', 'theme_support_comre'), __('Batch Couopons', 'theme_support_comre') , 'manage_options', 'batch-coupons', array( $this, '_sh_my_custom_submenu_page_callback' ) );
	}

	function export()
	{
		if(file_exists('_text.csv')) unlink('_text.csv');

		$data = array();
		$data[0] = $this->columns;

		$links = get_posts(array('post_type'=>'sh_coupons', 'posts_per_page'=>-1));
		
		if( $links ) {
			
			foreach( $links as $link ) {
				$post_meta = get_post_meta($link->ID, $this->meta_key, true );
				
				foreach ($this->columns as $value) {
					$data[$link->ID][$value] = sh_set($post_meta, $value);
				}
				$data[$link->ID]['title'] = $link->post_title;
				$data[$link->ID]['description'] = $link->post_content;
				$thumbnail = wp_get_attachment_url(get_post_thumbnail_id($link->ID));
				$terms = wp_get_post_terms( $link->ID, 'coupons_category', array('fields'=>'names') );
				$data[$link->ID]['featured_image'] = $thumbnail;
				$data[$link->ID]['categories'] = implode(',',  (array)$terms);
				$terms = wp_get_post_terms( $link->ID, 'coupons_store_category', array('fields'=>'names') );
				$data[$link->ID]['stores'] = implode(',',  (array)$terms);

			}
		}
		
		//printr($data);
		$create_csv = new \ParseCsv\Csv();
		$create_csv->data = $data;//array('test'=>'test', 'newtest'=>'test');
		
		$create_csv->save('_text.csv');
		$create_csv->output('coupons.csv');
		//wp_redirect(admin_url('edit.php?post_type=links-manager&page=batch-coupons&export_links=true'));
		exit;
	}

	function _sh_my_custom_submenu_page_callback() {

		//if( isset($_POST['_submit_coupons_batch_file'])) $this->_sh_upload_batch_coupons();
		?>
		
		<div class="wrap"><div id="icon-tools" class="icon32"></div>
			<h2><?php esc_html__('Upload Batch File', 'theme_support_comre'); ?></h2>
			
			<?php if( isset($_POST['_submit_coupons_batch_file'])) $this->_sh_upload_batch_coupons(); ?>	
			<form method="post" action="" enctype="multipart/form-data">
				<input type="file" name="upload_batch_coupons">
				<input name="_submit_coupons_batch_file" type="submit" value="<?php esc_html__('Upload', 'theme_support_comre'); ?>" class="button-secondary">
				<input type="hidden" name="coupons_nonce" value="<?php echo wp_create_nonce('coupons_batch_nonce'); ?>">
			</form>

			<a href="<?php echo admin_url('edit.php?post_type=sh_coupons&page=batch-coupons&export_links=true'); ?>" class="button-secondary"><?php esc_html__('Export', 'theme_support_comre');?></a>
		</div>
		
		<?php 
	}

	function my_cust_filename($dir, $name, $ext){
	    return $name.$ext;
	}

	function _sh_upload_batch_coupons()
	{
		//$url = 'C:\xampp\htdocs\comre/wp-content/uploads/2015/07/batch_File.csv';
		//_sh_read_csv($url);
		
		//return;
		if( isset($_POST['_submit_coupons_batch_file'])) {
			
			if ( ! function_exists( 'wp_handle_upload' ) ) {
			    require_once( ABSPATH . 'wp-admin/includes/file.php' );
			}

			$nonce = wp_verify_nonce( $_POST['coupons_nonce'], 'coupons_batch_nonce' );
			if( !$nonce ) {
				esc_html__('Unauthorized form submission', 'theme_support_comre');
				return;
			}

			$uploadedfile = $_FILES['upload_batch_coupons'];

			$upload_overrides = array( 'test_form' => false, 'unique_filename_callback' => array($this, 'my_cust_filename' ) );

			$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );

			if ( $movefile && !isset( $movefile['error'] ) ) {
			    echo "File is valid, and was successfully uploaded.\n";

			    if( $url = sh_set($movefile, 'file')) {
			    	//$csv_res = _sh_read_csv($url);
			    	$csv = $csv = new \ParseCsv\Csv();
					$csv->parseFile($url);
					$csv_res = $csv->data;
			    	$this->_sh_insert_coupons_from_batch_file( $csv_res );
			    }

			    //var_dump( $movefile);
			} else {
			    /**
			     * Error generated by _wp_handle_upload()
			     * @see _wp_handle_upload() in wp-admin/includes/file.php
			     */
			    echo $movefile['error'];
			}

			
		}
	}


	function _sh_insert_coupons_from_batch_file($array)
	{

		foreach( (array)$array->data as $arr )
		{
			
			global $current_user;
		    get_currentuserinfo();
			
			
			$res_msg = '';
			$error = false;
			
			if( !$current_user->ID ) {
				$error = true;
				$res_msg .= __('You must login to submit this form!', 'theme_support_comre').'<br>';
				continue;
			}
			
			
				
				/*$by_slug = get_term_by( 'slug', $arr['categories'], 'coupons_category' );
				if( $by_slug ) $term = $by_slug->term_id;
				else $term = 0;*/
				
				$term = $this->terms_from_slug($arr, 'coupons_category', 'categories' );
				
				/*$by_slug = get_term_by( 'slug', $arr['stores'], 'coupons_store_category' );
				if( $by_slug ) $store_terms = $by_slug->term_id;
				else 
				{ 
					$new_term = wp_insert_term( $arr['stores'], 'coupons_store_category' );
					
					if( !is_wp_error( $new_term ) ) $store_terms = $new_term->term_id;
					else $store_terms = 0;
				}*/
				
				$store_terms = $this->terms_from_slug($arr, 'coupons_store_category', 'stores' );
				
				 $my_post = array(
				  'post_title'    => $arr['title'],
				  'post_content'  => $arr['description'],
				  'post_status'   => 'publish',
				  'post_author'   => $current_user->ID,
				  'tax_input' => array( 'coupons_category' => (array)$term, 'coupons_store_category' => (array)$store_terms ),
				  'post_type' => 'sh_coupons'
				); 
				
				// Insert the post into the database
				$post_id = wp_insert_post( $my_post );
				//printr($post_id);
				//$post_id = 450;
				if( !is_wp_error( $post_id ) ) {
					
					//update terms
					$set_terms = wp_set_post_terms( $post_id, (array)$term, 'coupons_category');
					wp_set_post_terms( $post_id, (array)$store_terms, 'coupons_store_category');
					//printr($set_terms);
					
					//Update meta data
					
					$meta_fields = array( '_sh_sh_coupons_settings'=>$this->columns);
					
					foreach( $meta_fields as $k => $met_field )
					{
						$values = array();
						foreach ($met_field as $value) {
							$meta_value = sh_set( $arr, $value);
							if( in_array( $value, $this->columns_show ) ) update_post_meta($post_id, '_sh_coupons_'.$value, $meta_value);
							$values[$value] = $meta_value;
						
						}
						update_post_meta($post_id, $k, $values);
						
					}
					
					
					// $filename should be the path to a file in the upload directory.
					
					// These files need to be included as dependencies when on the front end.
					require_once( ABSPATH . 'wp-admin/includes/image.php' );
					require_once( ABSPATH . 'wp-admin/includes/file.php' );
					require_once( ABSPATH . 'wp-admin/includes/media.php' );
					
					// Let WordPress handle the upload.
					// Remember, 'my_image_upload' is the name of our file input in our form above.
					$attachment_id = $this->_sh_insert_featured_image($arr['featured_image'], $post_id);
					if( !is_wp_error( $attachment_id ) ) set_post_thumbnail( $post_id, $attachment_id );
					$res_msg = __('Your coupon Added successfully and pending for review', 'theme_support_comre');	
					$error = false;
					echo 'The coupon post '.$arr['title']. ' is successfully added';
				}
				else {
					echo $post_id->get_message();
				}
			
		}
		
	}

	
	function terms_from_slug($data = array(), $tax = 'coupons_category', $key = 'categories' )
	{
		if( !$data ) return array();
		
		$term_ids = array();
		
		$explode = explode( ',', $data[$key] );
		
		foreach( $explode as $exp )
		{
			$by_slug = get_term_by( 'slug', $exp, $tax );
			if( $by_slug ) $term_ids[] = $by_slug->term_id;
			else 
			{ 
				$new_term = wp_insert_term( $data[$tax], $tax );
				
				if( !is_wp_error( $new_term ) ) $term_ids[] = $new_term->term_id;
				else $term_ids[] = 0;
			}
		}
		
		return $term_ids;
		
	}
	
	function _sh_insert_featured_image($img_url, $pos_id)
	{
		$url = $img_url; // Input a .zip URL here
	    $tmp = download_url( $url );
	    $file_array = array(
	        'name' => basename( $url ),
	        'tmp_name' => $tmp
	    );

	    // Check for download errors
	    if ( is_wp_error( $tmp ) ) {
	        @unlink( $file_array[ 'tmp_name' ] );
	        return $tmp;
	    }

	    $id = media_handle_sideload( $file_array, 0 );
	    // Check for handle sideload errors.
	    if ( is_wp_error( $id ) ) {
	        @unlink( $file_array['tmp_name'] );
	        return $id;
	    }

	    $attachment_url = wp_get_attachment_url( $id );
	    // Do whatever you have to here
	    echo $attachment_url;
	    return $id;

	}

	/* Add custom column to post list */
	function add_custom_column( $columns ) {
		global $post_type;

		if( $post_type == 'sh_coupons' ) {
			unset($columns['date']);
			$custom = array('expires_date'=>'Expires Date', 'coupon_code' => 'Coupon Code', 'coupon_link'=>'Coupon Link', 'date'=>'Date');
		    return array_merge( $columns, $custom );
		}

		return $columns;
	}
	
	function custom_columns( $column, $post_id ) {
	
		switch ( $column ) {
			case 'expires_date':
				echo get_post_meta( $post_id, '_sh_coupons_expires_date', true ); 
			break;

			case 'coupon_code':
				echo get_post_meta( $post_id, '_sh_coupons_coupon_code', true ); 
			break;
			case 'coupon_link':
				echo get_post_meta( $post_id, '_sh_coupons_coupon_link', true ); 
			break;
			
		}
	}

	function my_website_manage_sortable_columns( $sortable_columns ) {
		
	   /**
	    * In this scenario, I already have a column with an
	    * ID (or index) of 'release_date_column'. Both column 
	    * indexes MUST match.
	    * 
	    * The value of the array item (after the =) is the
	    * identifier of the column data. For example, my
	    * column data, 'release_date', is a custom field
	    * with a meta key of 'release_date' so my
	    * identifier is 'release_date'.
	    */
	   $sortable_columns[ 'expires_date' ] = 'expires_date';

	   // Let's also make the film rating column sortable
	   

	   return $sortable_columns;

	}

	function manage_wp_posts_be_qe_pre_get_posts( $query ) {
		global $post_type;

	    if( !is_admin() || $post_type !== 'sh_coupons' ) return;

	    /**
	    * We only want our code to run in the main WP query
	    * AND if an orderby query variable is designated.
	    */
	    if ( $query->is_main_query() && ( $orderby = $query->get( 'orderby' ) ) ) {

		    switch( $orderby ) {

		        // If we're ordering by 'film_rating'
		        case 'expires_date':

		            // set our query's meta_key, which is used for custom fields
		            $query->set( 'meta_key', '_sh_coupons_expires_date' );
						
		            /**
		             * Tell the query to order by our custom field/meta_key's
		             * value, in this film rating's case: PG, PG-13, R, etc.
		             *
		             * If your meta value are numbers, change 'meta_value'
		             * to 'meta_value_num'.
		             */
		            $query->set( 'orderby', 'meta_value' );
						
		        break;

		        

		    }

	   }
	}

}

new __Batch_Coupons;

/*add_action('publish_sh_coupons', '_sh_publish_sh_coupons');

function _sh_publish_sh_coupons( $post_id, $post )
{
	if($coupons_setting = sh_set($_POST, '_sh_sh_coupons_settings')) {
		if( $exp_date = sh_set($coupons_setting, 'expires_date') ) {
			$date = date('Y-m-d h:i:s', strtotime($exp_date));
			update_post_meta($post_id, '_sh_coupon_expire_date', $date );
		}
	}
}

function my_home_category( $query ) {

	if( is_admin()) return;

	$post_type = sh_set( $query->query, 'post_type');

	if( $post_type == 'sh_coupons' )
	{

		$meta_query =	array(
			        array(
			           'key' => '_sh_coupon_expire_date',
			           'value' => date("Y-m-d"),
			           'compare' => '>=',
			           'type' => 'datetime'// you can change it to datetime also
			       )
			);
		$query->set('meta_query', $meta_query);
		$query->set('orderby', 'meta_value');
	}
}
add_action( 'pre_get_posts', 'my_home_category' );*/

