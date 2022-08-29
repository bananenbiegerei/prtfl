<?php
// Register Navigation Menus
function custom_navigation_menus() {
    $locations = array(
        'top' => __( 'Top', 'text_domain' ),
        'footer' => __( 'Footer', 'text_domain' ),
    );
    register_nav_menus( $locations );

}
add_action( 'init', 'custom_navigation_menus' );
