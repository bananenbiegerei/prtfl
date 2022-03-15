<?php
function custom_post_type() {
	register_post_type('modell',
	array(
		'labels'      => array(
			'name'          => __('Modelle'),
			'singular_name' => __('Modell'),
		),
		'public'      => true,
		'has_archive' => true,
		'supports' => array( 'title', 'thumbnail', 'editor', 'revisions')
	)
);
// register_post_type('modellvariante',
// array(
// 	'labels'      => array(
// 		'name'          => __('Modellvarianten'),
// 		'singular_name' => __('Modellvariante'),
// 	),
// 	'public'      => true,
// 	'has_archive' => true,
// 	'supports' => array( 'title', 'thumbnail', 'editor')
// )
// );
register_post_type('manufacturer',
array(
	'labels'      => array(
		'name'          => __('Unternehmen'),
		'singular_name' => __('Unternehmen'),
	),
	'public'      => true,
	'has_archive' => true,
	'supports' => array( 'title', 'thumbnail', 'editor', 'revisions')
)
);
register_post_type('brand',
array(
	'labels'      => array(
		'name'          => __('Marken'),
		'singular_name' => __('Marke'),
	),
	'public'      => true,
	'has_archive' => true,
	'supports' => array( 'title', 'thumbnail', 'editor', 'revisions')
)
);
}
add_action('init', 'custom_post_type');
