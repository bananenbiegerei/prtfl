<?php
add_action('init', function() {
    register_taxonomy('service', array(
        0 => 'projekt',
    ), array(
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Service',
            'menu_name' => 'Services',
            'all_items' => 'All Services',
            'edit_item' => 'Edit Service',
            'view_item' => 'View Service',
            'update_item' => 'Update Service',
            'add_new_item' => 'Add New Service',
            'new_item_name' => 'New Service Name',
            'parent_item' => 'Parent Service',
            'parent_item_colon' => 'Parent Service:',
            'search_items' => 'Search Services',
            'not_found' => 'No services found',
            'no_terms' => 'No services',
            'filter_by_item' => 'Filter by service',
            'items_list_navigation' => 'Services list navigation',
            'items_list' => 'Services list',
            'back_to_items' => '← Go to services',
            'item_link' => 'Service Link',
            'item_link_description' => 'A link to a service',
        ),
        'public' => true,
        'hierarchical' => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
    ));

    register_taxonomy('sector', array(
        0 => 'projekt',
    ), array(
        'labels' => array(
            'name' => 'Sectors',
            'singular_name' => 'Sector',
            'menu_name' => 'Sectors',
            'all_items' => 'All Sectors',
            'edit_item' => 'Edit Sector',
            'view_item' => 'View Sector',
            'update_item' => 'Update Sector',
            'add_new_item' => 'Add New Sector',
            'new_item_name' => 'New Sector Name',
            'parent_item' => 'Parent Sector',
            'parent_item_colon' => 'Parent Sector:',
            'search_items' => 'Search Sectors',
            'not_found' => 'No sectors found',
            'no_terms' => 'No sectors',
            'filter_by_item' => 'Filter by sector',
            'items_list_navigation' => 'Sectors list navigation',
            'items_list' => 'Sectors list',
            'back_to_items' => '← Go to sectors',
            'item_link' => 'Sector Link',
            'item_link_description' => 'A link to a sector',
        ),
        'public' => true,
        'hierarchical' => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
    ));
});