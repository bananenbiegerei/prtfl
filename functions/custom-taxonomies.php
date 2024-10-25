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

    register_taxonomy('technologie', array(
        0 => 'projekt',
    ), array(
        'labels' => array(
            'name' => 'Technologies',
            'singular_name' => 'Technology',
            'menu_name' => 'Technologies',
            'all_items' => 'All Technologies',
            'edit_item' => 'Edit Technology',
            'view_item' => 'View Technology',
            'update_item' => 'Update Technology',
            'add_new_item' => 'Add New Technology',
            'new_item_name' => 'New Technology Name',
            'parent_item' => 'Parent Technology',
            'parent_item_colon' => 'Parent Technology:',
            'search_items' => 'Search Technologies',
            'not_found' => 'No technologies found',
            'no_terms' => 'No technologies',
            'filter_by_item' => 'Filter by technology',
            'items_list_navigation' => 'Technologies list navigation',
            'items_list' => 'Technologies list',
            'back_to_items' => '← Go to technologies',
            'item_link' => 'Technology Link',
            'item_link_description' => 'A link to a technology',
        ),
        'public' => true,
        'hierarchical' => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
    ));
});