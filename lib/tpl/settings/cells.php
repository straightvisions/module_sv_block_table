<?php if ( current_user_can( 'activate_plugins' ) ) { ?>
	<div class="sv_setting_subpage">
		<h2><?php _e('Cells', 'sv100'); ?></h2>
		<div class="sv_setting_flex">
			<?php
				echo $module->get_setting( 'cells_margin' )->form();
				echo $module->get_setting( 'cells_padding' )->form();
			?>
		</div>
	</div>
<?php } ?>