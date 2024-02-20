<?php
/**
 * Timber starter-theme
 * https://github.com/timber/starter-theme
 */

// Load Composer dependencies.
require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/src/StarterSite.php';

Timber\Timber::init();

// Sets the directories (inside your theme) to find .twig files.
Timber::$dirname = [ 'templates', 'views' ];

// Enable support for custom page templates
add_theme_support('custom-page-templates');

// Enqueue Bootstrap CSS and JS
function enqueue_bootstrap() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css');

    // Enqueue Bootstrap JS and its dependency (Popper.js)
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js', array('jquery', 'popper'), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_bootstrap');



function enqueue_swiper_scripts_styles() {
    // Enqueue Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');

    // Enqueue Swiper JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_scripts_styles');


function enqueue_custom_styles() {
    wp_enqueue_style('custom-style', get_stylesheet_uri());
}
function enqueue_custom_scripts() {
    // Enqueue Custom.js
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/custom.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


// Hook the function to the wp_enqueue_scripts action
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

new StarterSite();
