<?php $def = array( 'size' => false, 'alignment' => false, 'transform' => false, 'height' => false, 'spacing' => false,
		'color' => false, 'family' => true, 'variant' => true, 'width' => false );

$merge = wp_parse_args( (array)$value, $def );

$value = array_intersect_key( $merge, $def ); ?>


<?php if(!$is_compact) echo VP_View::instance()->load('control/template_control_head', $head_info); ?>



<?php $fonts_array = wp_remote_get( SH_TH_URL . '/includes/vafpress/data/gwf.json' );
//printr($extras);

$google_fonts = isset( $fonts_array['body'] ) ? json_decode( $fonts_array['body'] ) : '';

//print_r($google_fonts);exit;?>

<?php if ( $extras['family'] ) : ?>
	<div class="vp-typography-family">
		<label>Font Family</label>

		<select name="<?php echo esc_attr( $name ); ?>[family]" class="vp-input vp-js-select2" autocomplete="off">

			<option></option>

			<?php  if ( $google_fonts )
			foreach ( $google_fonts as $k => $gfont ) : ?>
				<option <?php selected( $k, $value['family'] ); ?> value="<?php echo esc_attr( $k ); ?>"><?php echo esc_attr( $k ); ?></option>
			<?php endforeach; ?>

		</select>

	</div>
<?php endif; ?>

<?php $default_variants = apply_filters( 'vp_websafe_fonts_variants', array(
	'regular',
	'italic',
	'700',
	'700italic',
	'inherit',
)); ?>
<?php if ( $extras['variant'] ) : ?>
	<div class="vp-typography-variant">
		<label>Font Weight & Style</label>

		<select name="<?php echo esc_attr( $name ); ?>[variant]" class="vp-input vp-js-select2" autocomplete="off">

			<option></option>

			<?php  if ( $default_variants )
			foreach ( $default_variants as $gfont ) : ?>
				<option <?php selected( $gfont, $value['variant'] ); ?> value="<?php echo esc_attr( $gfont ); ?>"><?php echo esc_attr( ucwords( $gfont ) ); ?></option>
			<?php endforeach; ?>

		</select>

	</div>

<?php endif; ?>
<?php $default_variants = apply_filters( 'vp_websafe_fonts_alignment', array(
	'inherit',
	'left',
	'right',
	'center',
	'initial',
)); ?>
<?php if ( $extras['alignment'] ) : ?>
	<div class="vp-typography-alignment">
		<label>Text Alignment</label>
		<select name="<?php echo esc_attr( $name ); ?>[alignment]" class="vp-input vp-js-select2" autocomplete="off">

			<option></option>

			<?php  if ( $default_variants )
			foreach ( $default_variants as $gfont ) : ?>
				<option <?php selected( $gfont, $value['alignment'] ); ?> value="<?php echo esc_attr( $gfont ); ?>"><?php echo esc_attr( ucwords( $gfont ) ); ?></option>
			<?php endforeach; ?>

		</select>

	</div>
<?php endif; ?>
<?php $default_variants = apply_filters( 'vp_websafe_fonts_transform', array(
	'none',
	'capitalize',
	'Uppercase',
	'lowercase',
	'initial',
	'inherit',
)); ?>
<?php if ( $extras['transform'] ) : ?>
	<div class="vp-typography-transform">
		<label>Text Transform</label>
		<select name="<?php echo esc_attr( $name ); ?>[transform]" class="vp-input vp-js-select2" autocomplete="off">

			<option></option>

			<?php  if ( $default_variants )
			foreach ( $default_variants as $gfont ) : ?>
				<option <?php selected( $gfont, $value['transform'] ); ?> value="<?php echo esc_attr( $gfont ); ?>"><?php echo esc_attr( ucwords( $gfont ) ); ?></option>
			<?php endforeach; ?>

		</select>

	</div>
<?php endif; ?>
<?php if ( $extras['size'] ) : ?>

	<div class="vp-typography-size">
		<label>Font Size</label>
		<input type="text" name="<?php echo esc_attr( $name ); ?>[size]" value="<?php echo esc_attr( $value['size'] ); ?>" class="vp-input input-small">
		<span>px</span>
	</div>

<?php endif; ?>

<?php if ( $extras['height'] ) : ?>
	<div class="vp-typography-lineheight">
		<label>LineHeight</label>
		<input type="text" name="<?php echo esc_attr( $name ); ?>[height]" value="<?php echo esc_attr( $value['height'] ); ?>" class="vp-input input-small">
		<span>px</span>

	</div>
<?php endif; ?>
<?php if ( $extras['spacing'] ) : ?>
	<div class="vp-typography-spacing">
		<label>Letter Spacing</label>
		<input type="text" name="<?php echo esc_attr( $name ); ?>[spacing]" value="<?php echo esc_attr( $value['spacing'] ); ?>" class="vp-input input-small">
		<span>px</span>

	</div>
<?php endif; ?>	
<?php if ( $extras['color'] ) : ?>
	<div class="vp-typography-color vp-color">
		<label>color</label>
		<div class="field">
			<label class="indicator" for="<?php echo esc_attr( $name ); ?>"><span style="background-color: <?php echo esc_attr( $value['color'] ); ?>;"></span></label>

			<input id="<?php echo esc_attr( $name ); ?>_color" class="vp-input vp-js-colorpicker"

			type="text" name="<?php echo esc_attr( $name ); ?>[color]" value="<?php echo esc_attr( $value['color'] ); ?>" data-vp-opt="(format:hex)" />
		</div>
	</div>
<?php endif; ?>	


<?php if ( $extras['width'] ) : ?>

	<div class="vp-typography-width">
		<label>Width</label>
		<input type="text" name="<?php echo esc_attr( $name ); ?>[]" value="<?php echo esc_attr( $value['width'] ); ?>" class="vp-input input-small">
		<span>px</span>
	</div>

<?php endif; ?>


<?php if(!$is_compact) echo VP_View::instance()->load('control/template_control_foot', $head_info); ?>
