<?php

class SH_Ajax
{
	
	function __construct()
	{
		if( !isset( $_SESSION ) ) session_start();
		
		add_action( 'wp_ajax__sh_ajax_callback', array( $this, 'ajax_handler' ) );
		add_action( 'wp_ajax_nopriv__sh_ajax_callback', array( $this, 'ajax_handler' ) );
	}
	
	function ajax_handler()
	{
		$method = sh_set( $_REQUEST, 'subaction' );
		if( method_exists( $this, $method ) ) $this->$method();
		
		exit;
	}
	
	function _disqus()
	{
		//include('disqus.php');
		//
		get_template_part( 'includes/modules/coupons/disqus' );
	}

	function tweets()
	{
		if( !class_exists( 'Codebird' ) ) include_once( 'codebird.php' );
		$cb = new Codebird;
		$method = sh_set( $_POST, 'method' );
		
		$theme_options = _WSH()->option();
		//printr($theme_options);
		$api = sh_set($theme_options, 'twitter_api');
		$api_secret = sh_set($theme_options, 'twitter_api_secret');
		$token = sh_set($theme_options, 'twitter_token');
		$token_secret = sh_set($theme_options, 'twitter_token_Secret');
		if( !$api && $api_secret ) 
		{ 
			_e('Please provide tiwtter api information to fetch feed', 'theme_support_comre');exit;
		}
		$cb->setConsumerKey($api, $api_secret);
		$cb->setToken($token, $token_secret);
		
		$reply = (array) $cb->statuses_userTimeline(array('count'=>sh_set( $_POST, 'number' ), 'screen_name'=>sh_set($_POST, 'screen_name')));
		if( isset( $reply['httpstatus'] ) ) unset( $reply['httpstatus'] );
		foreach( $reply as $k => $v ){
			
			//if( $k == 'httpstatus' ) continue;
			$time = human_time_diff( strtotime( sh_set( $v, 'created_at') ), current_time('timestamp') ) . __(' ago', 'theme_support_comre');
			$text = preg_replace('@(https?://([-\w\.]+[-\w])+(:\d+)?(/([\w/_\.#-]*(\?\S+)?[^\.\s])?)?)@', '<a href="$1" target="_blank">$1</a>', sh_set( $v, 'text'));
			if($_POST['template'] === 'lead' )
			{
				echo '<i class="fa fa-twitter"></i>'.$text.' <a href="#"> '.$time.'</a>' ;
			}
			else {
				echo 
				'<li><span></span><p>'.$text.' <a href="#">'.__(' about ', 'theme_support_comre').$time.'</a></p></li>';
			}
		}
	}
	
	function contact_form_submit()
	{
		if( !count( $_POST ) ) return;
	
		_load_plugins_class( 'validation', 'helpers', true );
		$t = $GLOBALS['_sh_base'];//printr($t);
		$settings = $t->option();
		
		$post_test = sh_set( $_POST, 'test' );
		$rec_email  = sanitize_email( $post_test ) ? sanitize_email( $post_test ) : _sh_generate_salt( $post_test, true );
		/** set validation rules for contact form */
		$t->validation->set_rules('contact_name','<strong>'.__('Name', 'theme_support_comre').'</strong>', 'required|min_length[4]|max_lenth[30]');
		
		//$t->validation->set_rules('aplus_l_name','<strong>'.__('Last Name', 'theme_support_comre').'</strong>', 'required|min_length[4]|max_lenth[30]');
		$t->validation->set_rules('contact_email','<strong>'.__('Email', 'theme_support_comre').'</strong>', 'required|valid_email');
		
		$t->validation->set_rules('contact_website','<strong>'.__('Website', 'theme_support_comre').'</strong>');
		$t->validation->set_rules('contact_company','<strong>'.__('Company', 'theme_support_comre').'</strong>', 'min_length[5]');
		
		$t->validation->set_rules('contact_message','<strong>'.__('Message', 'theme_support_comre').'</strong>', 'required|min_length[5]');
		if( sh_set($settings, 'contact_captcha_status'))
		{
			include_once( get_template_directory().'/includes/thirdparty/recaptchalib.php');
			$privatekey = sh_set($settings, 'recaptcha_private');
			
			$resp = recaptcha_check_answer ($privatekey,
                                 $_SERVER["REMOTE_ADDR"],
                                 $_POST["recaptcha_challenge_field"],
                                 $_POST["recaptcha_response_field"]);
			
			if( !$resp->is_valid )
			{
					$t->validation->_error_array['captcha'] = __('Invalid captcha entered, please try again.', 'theme_support_comre');
			}
	
		}
		$messages = '';
		if($t->validation->run() !== FALSE && empty($t->validation->_error_array))
		{
			$name = $t->validation->post('contact_name');
			$email = $t->validation->post('contact_email');
			
			$message = __("Contact Name:\t", 'theme_support_comre').$name."\r\n";
			$message .= "\r\n".__("Contact Website:\t", 'theme_support_comre').$t->validation->post('contact_website')."\r\n";
			$message .= "\r\n".__("Contact Company:\t", 'theme_support_comre').$t->validation->post('contact_company')."\r\n";
			$message .= "\r\n".__("Contact Subject:\t", 'theme_support_comre').sh_set( $_POST, 'contact_subject')."\r\n";
			
			$message .= "\r\n".$t->validation->post('contact_message'); 
	
			$contact_to = sanitize_email($rec_email) ? $rec_email : get_option('admin_email');
			
			$headers = 'From: '.$name.' <'.$email.'>' . "\r\n";
			wp_mail($contact_to, sprintf(__('Contact Us Message from %s', 'theme_support_comre'), get_bloginfo('name') ), $message, $headers);
	
			echo "<fieldset>";
			echo "<div id='success_page' class='alert alert-success'>";
			echo "<h1>".__('Email Sent Successfully.', 'theme_support_comre')."</h1>";
			echo "<p>".sprintf(__("Thank you <strong>%s</strong>, your message has been submitted to us.", 'theme_support_comre'), $name)."</p>";
			echo "</div>";
			echo "</fieldset>";
			exit;
		
		}else
		{
	
			 if( is_array( $t->validation->_error_array ) )
			 {
				 foreach( $t->validation->_error_array as $msg )
				 {
					 $messages .= '<div class="alert alert-danger">'.__('Error! ', 'theme_support_comre').$msg.'</div>';
				 }
			}
	
		}
	
		echo $messages;exit;
	}
		
	function wishlist()
	{
		global $current_user;
      	get_currentuserinfo();
			
		if( is_user_logged_in() ){
			
			$meta = (array)get_user_meta( $current_user->ID, '_ja_product_wishlist', true );
			$data_id = sh_set( $_POST, 'data_id' );
			if( $meta && is_array( $meta ) ){
				if( in_array( $data_id, $meta ) ){
					exit(json_encode(array('code'=>'exists', 'msg'=>__('You have already added this item to wish list', 'theme_support_comre' ) ) ) );
				}
				$newmeta = array_merge( array( sh_set( $_POST, 'data_id' ) ), $meta );
				update_user_meta( $current_user->ID, '_ja_product_wishlist', array_unique($newmeta) );
				exit(json_encode(array('code'=>'success', 'msg'=>__('Item successfully added to wishlist', 'theme_support_comre' ) ) ) );
			}else{
				exit(json_encode(array('code'=>'fail', 'msg'=>__('There is an error adding to wishlist', 'theme_support_comre' ) ) ) );
			}
		}
		else exit(json_encode(array('code'=>'fail', 'msg'=>__('Please login first to add the item to your wishlist', 'theme_support_comre' ) ) ) );
	}
	
	function wishlist_del()
	{
		global $current_user;
      	get_currentuserinfo();
			
		if( is_user_logged_in() ){
			
			$meta = get_user_meta( $current_user->ID, '_ja_product_wishlist', true );
			$data_id = sh_set( $_POST, 'data_id' );
			if( $meta && is_array( $meta ) ){
				$searched = array_search( $data_id, $meta );
				if( isset($meta[$searched]) ){
					unset( $meta[$searched] );
					update_user_meta( $current_user->ID, '_ja_product_wishlist', array_unique($meta) );
					exit(json_encode(array('code'=>'del', 'msg'=>__('Product is successfully deleted from wishlist', 'theme_support_comre' ) ) ) );
				}else exit(json_encode(array('code'=>'fail', 'msg'=>__('Unable to find this product into wishlist', 'theme_support_comre' ) ) ) );
			}else{
				update_user_meta( $current_user->ID, '_ja_product_wishlist', array( sh_set( $_POST, 'data_id' ) ) );
				exit(json_encode(array('code'=>'fail', 'msg'=>__('Unable to retrieve your wishlist', 'theme_support_comre' ) ) ) );
			}
		}
		else exit(json_encode(array('code'=>'fail', 'msg'=>__('Please login first to add/delete product in your wishlist', 'theme_support_comre' ) ) ) );
	}
	
	function download_rating()
	{
		$ip = $_SERVER['REMOTE ADDR'];
		extract( $_POST );
		
		$meta = get_post_meta( $post_id, '_download_rating', true );
		
		if( !sh_set( $meta, $ip ) )
		{
			$meta[$ip] = $value;
			
			update_post_meta( $post_id, '_download_rating', $meta );
			
			echo 'success';exit;
		}
		
		exit( 'failed' );
	}
	
	
	function coupon_voting()
	{ 

		 $type  = sh_set( $_POST, 'type' );
		 $id    =  sh_set( $_POST, 'id' );
		 $type = ( $type == 'down' ) ? 'down' : 'up';
		 
		 $up = false;
		$down = false;
		
		$_SESSION['current_user_coupon_voting'] = isset($_SESSION['current_user_coupon_voting']) ? $_SESSION['current_user_coupon_voting'] : array();
		$sess = $_SESSION['current_user_coupon_voting'];
	
		$thumbs_up = (int)get_post_meta($id, '_comre_coupon_thumbs_up', true );
		$thumbs_down = (int)get_post_meta($id, '_comre_coupon_thumbs_down', true );
	
		if( in_array($id, (array)sh_set( $sess, 'down' )) ) $down = true;
		if( in_array($id, (array)sh_set( $sess, 'up' )) ) $up = true;
	
		if( $down && $up ) {
			echo json_encode(array('down'=>(int)$thumbs_down, 'up'=>(int)$thumbs_up));
			exit;
		}
		
		if( !isset( $_SESSION['current_user_coupon_voting'][$type] ) ) $_SESSION['current_user_coupon_voting'][$type] = array();
		array_push($_SESSION['current_user_coupon_voting'][$type], $id);
		
		if($type == 'down' && !$down ) {
			$thumbs_down++;
			update_post_meta($id, '_comre_coupon_thumbs_down', $thumbs_down );
			echo json_encode(array('down'=>(int)$thumbs_down, 'up'=>(int)$thumbs_up));
			exit;
		}
		
		if($type == 'up' && !$up ) {
			$thumbs_up++;
			update_post_meta($id, '_comre_coupon_thumbs_up', $thumbs_up );
			echo json_encode(array('down'=>(int)$thumbs_down, 'up'=>(int)$thumbs_up));
			exit;
		}
	
		echo json_encode(array('down'=>(int)$thumbs_down, 'up'=>(int)$thumbs_up));
		exit;
	}


	function get_coupon_code()
	{
		get_template_part( 'includes/modules/coupons/coupon-ajax-popup' );
	}
	
	function mark_expired()
	{
		$id = isset( $_POST['id'] ) ? $_POST['id'] : null;
		$post = get_post($id);
		if( !$post ) exit('Invalid post');
		
		if( $post->post_type !== 'sh_coupons' ) exit('Invalid request' );
		
		$coupon_permalink = get_permalink($post);
		
		$options = _WSH()->option();
		
		$expire_coupon_email = sh_set($options, 'expire_email');
		$subject = esc_html__( 'Expired Coupon notification', 'theme_support_comre' );
		$expire_coupon_email = str_replace( array( '{{coupon_link}}', '{{deal_url}}' ), $coupon_permalink, $expire_coupon_email );
		
		wp_mail( get_option('admin_email'), $subject, $expire_coupon_email);
		
		exit('Success');
	}
	
	function hotcold_voting() {

		if ( ! is_user_logged_in() ) {
			return wp_send_json( array('status' => 'error', 'msg' => esc_html_e( 'Loggin to vote', 'geodeo' ) ) );
		}

		$post_id = sh_set( $_POST, 'id' );
		$type = sh_set( $_POST, 'data_type' );

		$userdata = wp_get_current_user();
		
		$user_ids = get_post_meta( $post_id, 'geodeo_voting_user', true );
		$voting_hot = get_post_meta( $post_id, 'geodeo_voting_hot', true );
		$voting_cold = get_post_meta( $post_id, 'geodeo_voting_cold', true );
		$voting_cold = ( $voting_cold < 1 ) ? 0 : $voting_cold;

		$user_ids = ( $user_ids ) ? $user_ids : array();

		if ( in_array( $userdata->ID, array_keys( $user_ids ) ) ) {
			return wp_send_json( array('status' => 'error', 'msg' => esc_html__( 'You have already voted', 'geodeo' ) ) );
		}

		if ( 'minus' === $type ) {
			$user_ids[$userdata->ID] = 'minus';
			$voting_cold++;
			update_post_meta( $post_id, 'geodeo_voting_cold', $voting_cold );
			update_post_meta( $post_id, 'geodeo_voting_user', $user_ids );
		} elseif( 'plus' === $type ) {
			$user_ids[$userdata->ID] = 'plus';
			$voting_hot = $voting_hot + 3;
			update_post_meta( $post_id, 'geodeo_voting_hot', $voting_hot );
			update_post_meta( $post_id, 'geodeo_voting_user', $user_ids );
		}
		$grand_voting = $voting_hot - $voting_cold;
		return wp_send_json( array('status' => 'success', 'rating' => $grand_voting, 'cold' => $voting_cold, 'hot' => $voting_hot ) );
	}
	
}