<?php

/* Automatically declare all blocks in `acf-blocks/` */
add_action('acf/init', function () {
	foreach (glob(dirname(__FILE__) . '/acf-blocks/*.php') as $block) {
		include_once $block;
	}
});
