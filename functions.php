<?php

// Disable Gutenberg editor globally
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);

// ACF JSON: Set save and load points
add_filter('acf/settings/save_json', function($path) {
    return get_stylesheet_directory() . '/acf-json';
});

add_filter('acf/settings/load_json', function($paths) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;
});

// Load localization functions
// Usage: `__('my example text', BB_TEXT_DOMAIN)`
// String translations can be edited with [Poedit](https://poedit.net)
require_once get_template_directory() . '/functions/localization.php';

// Special features of theme
require_once get_template_directory() . '/functions/features.php';

// Load styles & scripts
require_once get_template_directory() . '/functions/enqueue-scripts.php';

// Define menu locations
require_once get_template_directory() . '/functions/menu.php';

// Custom posts and taxonomies, edit as needed
require_once(get_template_directory().'/functions/custom-posts.php');
require_once(get_template_directory().'/functions/custom-taxonomies.php');

// Define image sizes
require_once get_template_directory() . '/functions/image-sizes.php';

// ACF Options Page
require_once get_template_directory() . '/functions/acf-options.php';