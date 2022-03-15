<?php
function site_scripts() {
    //JS
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/dist/js/app.js', array( 'jquery' ), '', false);
    //wp_enqueue_script( 'turbo', get_template_directory_uri() . '/dist/js/turbo.js', array(), '', false );
    //wp_enqueue_script( 'bikesearch', get_template_directory_uri() . '/dist/js/bikesearch.js', array(), '', false );

    // CSS
    wp_enqueue_style( 'style', get_template_directory_uri() . '/dist/css/style.css', array(), '', 'all' );
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);
