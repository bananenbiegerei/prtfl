<?php

acf_register_block_type([
	'name' => 'responsive-table',
	'title' => 'Responsive Table',
	'description' => 'Table block optimized for mobile',
	'render_template' => get_template_directory() . '/template-parts/acf-blocks/responsive-table.php',
	'category' => 'wkmde-custom-blocks',
	'icon' => 'excerpt-view',
]);
