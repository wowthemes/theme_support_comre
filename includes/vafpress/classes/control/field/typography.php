<?php



class VP_Control_Field_Typography extends VP_Control_FieldMulti

{



	var $extras;

	public function __construct()

	{

		parent::__construct();

	}


	public static function withArray($arr = array(), $class_name = null)

	{

		if(is_null($class_name))

			$instance = new self();

		else

			$instance = new $class_name;

		$instance->_basic_make($arr);

		$def = array( 'size' => false, 'alignment' => false, 'transform' => false, 'height' => false, 'spacing' => false,
		'color' => false, 'family' => true, 'variant' => true, 'width' => false );

		$merge = wp_parse_args( $arr, $def );

		$instance->extras = array_intersect_key( $merge, $def );

		return $instance;

	}



	public function render($is_compact = false)

	{

		$this->_setup_data();

		$this->add_data('is_compact', $is_compact);

		$this->add_data( 'extras', $this->extras );

		return VP_View::instance()->load('control/typography', $this->get_data());

	}

	public function set_value($_value)
	{

		// normalize linebreak to \n for all saved data

		if( is_string($_value) )
		{

			$_value = str_replace(array("\r\n", "\r"), "\n", $_value);

		}

		$this->_value = $_value;

		return $this;

	}



}



/**

 * EOF

 */