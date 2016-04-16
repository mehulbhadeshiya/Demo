<?php

function register_script($handle, $deps=array()) {
    wp_deregister_script($handle); // overide with our version
    $path = get_template_directory_uri() . '/js/' . $handle . '.js';
    wp_register_script($handle, $path, $deps, null, true);
}

function register_style($handle) {
    $path = get_template_directory_uri() . '/css/' . $handle . '.css';
    wp_register_style($handle, $path, null, null, null);
}

function register_opploans_scripts() {
// This allows other 3rd party plugins and WP functions to access our scripts
    $all_scripts = array(
        'my-jquery', 'foundation','underscore', 'stickyfill',
        'jquery-verticalcenter', 'jquery-overlaps', 'jquery-slimscroll',
        'jquery-ion.rangeslider', 'camelize', 'slider', 'shims',
        'imagesloaded', 'collision_detector', 'background_floater'
    );

    array_map('register_script', $all_scripts);

    register_script('application_runner', $all_scripts);

    function add_defer_attribute($tag, $handle) {
        return str_replace(' src', ' defer="defer" src', $tag);
    }
    add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);
}

function register_opploans_styles() {
// This allows other 3rd party plugins and WP functions to access our styles
    $all_styles = array(
        'masthead',
        'application-homepage',
        'application',
        'boostrap',
        'font-awesome',
        'icons',
        'modern-business'
    );

    array_map('register_style', $all_styles);
}

add_action('wp_enqueue_scripts', 'register_opploans_styles');
add_action('wp_enqueue_scripts', 'register_opploans_scripts');


add_action('wp_print_scripts', 'theme_slug_dequeue_footer_jquery', 100);
function theme_slug_dequeue_footer_jquery() {
   if( !is_admin()){
       wp_dequeue_script('jquery');
       wp_dequeue_script('admin-bar');
   }
}
