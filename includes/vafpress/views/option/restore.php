<div class="vp-field">

	<div class="label">

		<label>

			<?php _e('Import Demo Settings', 'theme_support_comre') ?>

		</label>

		<div class="description">

			<p><?php _e('Demo settings will import "theme options", "widgets", "revolution slider" and "visual composer templates"', 'theme_support_comre') ?></p>

		</div>

	</div>

	<div class="field">

		<div class="input">

			<div class="buttons">

				<a class="sh_demo_settings_import vp-button button button-primary" href="<?php echo admin_url('themes.php?page='.SH_NAME.'_option&sh_dummydata_import=true'); ?>" >

				<?php _e('Import Demo Settings', 'theme_support_comre') ?>

                </a>

				<span style="margin-left: 10px;">

					<span class="vp-field-loader vp-js-loader vp-dummy-load" style="display: none;"><img src="<?php VP_Util_Res::img_out('ajax-loader.gif', ''); ?>" style="vertical-align: middle;"></span>

					<span class="vp-js-status" style="display: none;"></span>

				</span>

				<p><?php _e('** Please make sure you have already make a backup data of your current settings. Once you click this button, your current settings will be gone', 'theme_support_comre'); ?></p>

				

				<div class="import_message"></div>

			</div>

		</div>

	</div>

    

</div>

<div class="vp-field">

	<div class="label">

		<label>

			<?php _e('Restore Default Options', 'theme_support_comre') ?>

		</label>

		<div class="description">

			<p><?php _e('Restore options to initial default values.', 'theme_support_comre') ?></p>

		</div>

	</div>

	<div class="field">

		<div class="input">

			<div class="buttons">

				<input class="vp-js-restore vp-button button button-primary" type="button" value="<?php _e('Restore Default', 'theme_support_comre') ?>" />

				<p><?php _e('** Please make sure you have already make a backup data of your current settings. Once you click this button, your current settings will be gone', 'theme_support_comre'); ?></p>

				<span style="margin-left: 10px;">

					<span class="vp-field-loader vp-js-loader" style="display: none;"><img src="<?php VP_Util_Res::img_out('ajax-loader.gif', ''); ?>" style="vertical-align: middle;"></span>

					<span class="vp-js-status" style="display: none;"></span>

				</span>

			</div>

		</div>

	</div>

</div>