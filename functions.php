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


function register_services_post_type() {
    register_post_type('services', array(
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Service'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-hammer',
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'services'),
    ));
}
add_action('init', 'register_services_post_type');



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

add_action('template_redirect', function () {
    if (is_page('services')) {
        include get_theme_file_path('page-services.php');
        exit;
    }
});

add_filter('template_include', function($template) {
    if (is_singular('services')) {
        $slug = get_post_field('post_name');

        // Custom template for Ants
        if ($slug === 'ants') {
            $custom = get_theme_file_path('single-services-ants.php');
            if (file_exists($custom)) {
                return $custom;
            }
        }

        // Custom template for Rodents
        if ($slug === 'rodents') {
            $custom = get_theme_file_path('single-services-rodents.php');
            if (file_exists($custom)) {
                return $custom;
            }
        }

        // Custom template for Termites
        if ($slug === 'termites') {
            $custom = get_theme_file_path('single-services-termites.php');
            if (file_exists($custom)) {
                return $custom;
            }
        }
        if ($slug === 'bed-bugs') {
            $custom = get_theme_file_path('single-services-bed-bugs.php');
            if (file_exists($custom)) return $custom;
        }

        if ($slug === 'spiders') {
            $custom = get_theme_file_path('single-services-spiders.php');
            if (file_exists($custom)) return $custom;
        }

        
        if ($slug === 'roaches') {
            $custom = get_theme_file_path('single-services-roaches.php');
            if (file_exists($custom)) return $custom;
        }

        if ($slug === 'bees-wasps-hornets') {
            $custom = get_theme_file_path('single-services-bees-wasps-hornets.php');
            if (file_exists($custom)) return $custom;
        }

        if ($slug === 'mosquitos') {
            $custom = get_theme_file_path('single-services-mosquitos.php');
            if (file_exists($custom)) return $custom;
        }

        // Custom template for Wildlife Control
        if ($slug === 'wildlife-control') {
            $custom = get_theme_file_path('single-services-wildlife-control.php');
            if (file_exists($custom)) return $custom;
        }

        


    }

    return $template;
});
















// Enable featured images
add_theme_support('post-thumbnails');



