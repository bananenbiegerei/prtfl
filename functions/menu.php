<?php

// Register navigation menu locations
add_action('init', function () {
	$locations = [
		'top' => __('Top', BB_TEXT_DOMAIN),
		'footer' => __('Footer', BB_TEXT_DOMAIN),
	];
	register_nav_menus($locations);
});

// Add classes to menu links for the 'top' and 'footer' menu locations
add_filter('nav_menu_link_attributes', function ($atts, $item, $args) {
	if ($args->theme_location === 'top' || $args->theme_location === 'footer') {
		$atts['class'] = isset($atts['class']) ? $atts['class'] . ' btn btn-xs btn-ghost' : 'btn btn-xs btn-ghost';
	}
	return $atts;
}, 10, 3);
