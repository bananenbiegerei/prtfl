<?php

// Site scripts and style
add_action(
	'wp_enqueue_scripts',
	function () {
		// Site javascript, loaded with defer
		wp_enqueue_script('site-js:defer', get_template_directory_uri() . '/js/site.js', ['jquery'], '', false);
		// Site style
		wp_enqueue_style('style', get_template_directory_uri() . '/css/site.css', [], '', 'all');
	},
	999,
);

// Editor style
add_action(
	'admin_enqueue_scripts',
	function () {
		// Editor style
		wp_enqueue_style('style', get_template_directory_uri() . '/css/editor.css', [], '', 'all');
	},
	999,
);
