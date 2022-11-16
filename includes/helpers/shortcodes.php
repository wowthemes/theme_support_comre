<?php
class SH_Shortcodes
{
	public $keys;
	protected $base = '';
	protected $_dir = '';
	protected $_s_dir = '';
	
	
	function __construct()
	{
		//add_action('init', array( $this, 'add' ) );
		$this->add();
		
		$this->_dir = get_template_directory();
		$this->_s_dir = get_stylesheet_directory();
		
	}
	
	function add()
	{
		$this->keys = include( SH_TH_ROOT.'includes/resource/shortcodes.php');
		//$this->keys = _WSH()->keys;
		// printr($this->keys);
		foreach( $this->keys as $k => $value )
		{
			add_shortcode( $k, array( $this, 'output' ) );
			
			if( function_exists( 'vc_map' ) ) {
				vc_map( $value );
			}
		}
		
	}

	public function output($atts, $contents, $tag) {
		
		extract( shortcode_atts( $this->create_atts( $this->keys[$tag] ), $atts ) );
		
		$output = include( _WSH()->includes( 'includes/modules/shortcodes/'.str_replace('sh_', '', $tag).'.php' ) );
		return $output;
	}
	
	
	
	/** method automatically call when php search for methods */
	
	public function __call($method, $args)
	{
	   if(property_exists($this, $method)) {
		   if(is_callable($this->$method)) {
			   $args[] = $this->current_atts;
			   return call_user_func_array($this->$method, $args);
		   }
	   }
	}
	
	function create_atts( $array = array() )
	{
		//$contents = '';
		$atts = array();
		
		foreach( $array['params'] as $arr ){
			if( $arr['param_name'] == 'content' ) continue;
			
			$atts[$arr['param_name']] = sh_set( $arr, 'default' ) ? sh_set( $arr, 'default' ) : ''; 
		}
		
		return $atts;
	}
	
	
	function excerpt( $str, $len = 35 )
	{
		return sh_trim( $str , $len );
	}
	
}
?>