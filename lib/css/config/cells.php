<?php
	echo $_s->build_css(
		is_admin() ? '.editor-styles-wrapper .wp-block-table td' : '.wp-block-table td',
		array_merge(
			$module->get_setting('cells_padding')->get_css_data('padding'),
			$module->get_setting('cells_margin')->get_css_data(),
			$module->get_setting('cells_border')->get_css_data()
		)
	);