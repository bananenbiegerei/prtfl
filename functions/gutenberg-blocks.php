<?php
// Custom Block Categories
function custom_block_category($categories, $post)
{
	return array_merge($categories, [
		[
			'slug' => 'custom-blocks',
			'title' => __('Custom Blocks', 'custom-blocks'),
		],
	]);
}
add_filter('block_categories', 'custom_block_category', 10, 2);
