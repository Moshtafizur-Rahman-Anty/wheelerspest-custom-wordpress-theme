<?php
// Enqueue styles and scripts
function touchdown_pest_theme_scripts() {

    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/frontend/bootstrap.min.css');

    // Load main stylesheet
    wp_enqueue_style('touchdown-main-style', get_template_directory_uri() . '/assets/css/frontend/main.css');

    wp_enqueue_style('allsite-style', get_template_directory_uri() . '/assets/css/frontend/allsite.css');

}

add_action('wp_enqueue_scripts', 'touchdown_pest_theme_scripts');




// Enable menu support
add_theme_support('menus');

// Register menu locations
function touchdown_register_menus() {
    register_nav_menus(array(
        'main_menu' => 'menu',
        'footer_menu' => 'footer'
    ));
}
add_action('init', 'touchdown_register_menus');


// Enable featured images
add_theme_support('post-thumbnails');



