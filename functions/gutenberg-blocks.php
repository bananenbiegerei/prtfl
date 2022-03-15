<?php
// Custom Block Categories
function custom_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'custom-blocks',
				'title' => __( 'Custom Blocks', 'custom-blocks' ),
			),
		)
	);
}
add_filter( 'block_categories', 'custom_block_category', 10, 2);

// Register Custom Blocks
// For Icons go to: https://developer.wordpress.org/resource/dashicons/ – But leafe the "dashicons-" Prefix
function register_acf_block_types(){
	acf_register_block_type(['name' => 'Swiper',
	'title'				=> __('Swiper'),
	'description'		=> __('swiper'),
	'render_template'	=> 'template-parts/blocks/swiper.php',
	'category'			=> 'custom-blocks',
	'icon'				=> 'slides',
	'keywords'			=> [ ],
]);
acf_register_block_type(['name' => 'Suchmaske',
'title'				=> __('Suchmaske'),
'description'		=> __('Suchmaske'),
'render_template'	=> 'template-parts/blocks/search-mask.php',
'category'			=> 'custom-blocks',
'icon'				=> 'search',
'keywords'			=> [ ],
]);
acf_register_block_type(['name' => 'Hervorgehobenen Modelle',
'title'				=> __('Hervorgehobene Modelle'),
'description'		=> __('Ein zufällige Auswahl an hervorgehobenen Modellen'),
'render_template'	=> 'template-parts/blocks/random-featured-models.php',
'category'			=> 'custom-blocks',
'icon'				=> 'randomize',
'keywords'			=> [ ],
]);
}
if (function_exists('acf_register_block_type')) {
	add_action('acf/init', 'register_acf_block_types');
}

// Add Styleing to Editor
/**
* Registers support for editor styles & Enqueue it.
*/
// function add_editor_styles() {
// 	// Add support for editor styles.
// 	add_theme_support( 'editor-styles' );
//
// 	// Enqueue editor styles.
// 	add_editor_style( 'dist/assets/css/editor.css' );
// }
// add_action( 'after_setup_theme', 'add_editor_styles' );
