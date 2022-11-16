<?php $def = array( 'image' => false, 'bgposition' => false, 'color' => false, 'bgrepeat' => false, 'bgscroll' => false );

$merge = wp_parse_args( (array)$value, $def );

$value = array_intersect_key( $merge, $def ); ?>


<?php if(!$is_compact) echo VP_View::instance()->load('control/template_control_head', $head_info); ?>



<?php //$fonts_array = wp_remote_get( SH_TH_URL . '/includes/vafpress/data/gwf.json' );
//printr($extras);

//$google_fonts = isset( $fonts_array['body'] ) ? json_decode( $fonts_array['body'] ) : '';*/

//print_r($google_fonts);exit;?>

<?php if ( $extras['image'] ) : ?>
	<div class="vp-background-image">
		<label>Background Image</label>
		<input class="vp-input" type="text" readonly id="<?php echo esc_attr( $name ); ?>" name="<?php echo esc_attr( $name ); ?>[image]" value="<?php echo esc_attr( $value['image'] ); ?>" />

		<div class="buttons">

			<input class="vp-js-upload vp-button button" type="button" value="<?php _e('Choose File', 'theme_support_comre'); ?>" />

			<input class="vp-js-remove-upload vp-button button" type="button" value="x" />

		</div>

		<div class="image">

			<img src="<?php echo esc_url( $value['image'] ); ?>" alt="" />

		</div>
	</div>
<?php endif; ?>

<?php $default_bgrepeat = apply_filters( 'vp_websafe_image_bgrepeat', array(
	'repeat',
	'repeat-x',
	'repeat-y',
	'inherit',
)); ?>
<?php if ( $extras['bgrepeat'] ) : ?>
	<div class="vp-background-bgrepeat">
		<label>Background Image repeat</label>

		<select name="<?php echo esc_attr( $name ); ?>[bgrepeat]" class="vp-input vp-js-select2" autocomplete="off">

			<option></option>

			<?php  if ( $default_bgrepeat )
			foreach ( $default_bgrepeat as $gfont ) : ?>
				<option <?php selected( $gfont, $value['bgrepeat'] ); ?> value="<?php echo esc_attr( $gfont ); ?>"><?php echo esc_attr( ucwords( $gfont ) ); ?></option>
			<?php endforeach; ?>

		</select>

	</div>

<?php endif; ?>
<?php $default_bgposition = apply_filters( 'vp_websafe_image_bgposition', array(
	'left top',
	'left bottom',
	'left center',
	'right top',
	'right bottom',
	'right center',
	'center top',
	'center bottom',
	'center center',
	
)); ?>
<?php if ( $extras['bgposition'] ) : ?>
	<div class="vp-background-bgposition">
		<label>Background Position</label>
		<select name="<?php echo esc_attr( $name ); ?>[bgposition]" class="vp-input vp-js-select2" autocomplete="off">

			<option></option>

			<?php  if ( $default_bgposition )
			foreach ( $default_bgposition as $gfont ) : ?>
				<option <?php selected( $gfont, $value['bgposition'] ); ?> value="<?php echo esc_attr( $gfont ); ?>"><?php echo esc_attr( ucwords( $gfont ) ); ?></option>
			<?php endforeach; ?>

		</select>

	</div>
<?php endif; ?>
<?php $default_bgscroll = apply_filters( 'vp_websafe_image_bgscroll', array(
	'scroll',
	'fixed',

)); ?>

<?php if ( $extras['bgscroll'] ) : ?>
	<div class="vp-background-bgposition">
		<label>Background Scroll</label>
		<select name="<?php echo esc_attr( $name ); ?>[bgscroll]" class="vp-input vp-js-select2" autocomplete="off">

			<option></option>

			<?php  if ( $default_bgscroll )
			foreach ( $default_bgscroll as $gfont ) : ?>
				<option <?php selected( $gfont, $value['bgscroll'] ); ?> value="<?php echo esc_attr( $gfont ); ?>"><?php echo esc_attr( ucwords( $gfont ) ); ?></option>
			<?php endforeach; ?>

		</select>

	</div>
<?php endif; ?>
<?php if ( $extras['color'] ) : ?>
	<div class="vp-background-color vp-color">
		<label>Background color</label>
		<div class="field">
			<label class="indicator" for="<?php echo esc_attr( $name ); ?>"><span style="background-color: <?php echo esc_attr( $value['color'] ); ?>;"></span></label>

			<input id="<?php echo esc_attr( $name ); ?>_color" class="vp-input vp-js-colorpicker"

			type="text" name="<?php echo esc_attr( $name ); ?>[color]" value="<?php echo esc_attr( $value['color'] ); ?>" data-vp-opt="(format:hex)" />
		</div>
	</div>
<?php endif; ?>	




<?php if(!$is_compact) echo VP_View::instance()->load('control/template_control_foot', $head_info); ?>
