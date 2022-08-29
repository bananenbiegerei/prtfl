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
}
if (function_exists('acf_register_block_type')) {
	add_action('acf/init', 'register_acf_block_types');
}