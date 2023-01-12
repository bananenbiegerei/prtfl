<?php

// Add an option to defer loading of scripts (required for AlpineJS)
add_filter(
	'script_loader_tag',
	function ($tag, $handle, $src) {
		if (strstr($handle, ':defer')) {
			$tag = str_replace('<script ', '<script defer ', $tag);
		}
		return $tag;
	},
	10,
	3,
);

// Site scripts and style
add_action(
	'wp_enqueue_scripts',
	function () {
		// Site javascript
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
