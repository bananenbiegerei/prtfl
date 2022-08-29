<?php
function site_scripts() {
    //JS
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/dist/js/app.js', array( 'jquery' ), '', false);
    // CSS
    wp_enqueue_style( 'style', get_template_directory_uri() . '/dist/css/style.css', array(), '', 'all' );
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);
