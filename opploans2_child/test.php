<?php

/* Blog */
$labels = array(
    'name' => _x('Blog', 'post type general name', 'opploans'),
    'singular_name' => _x('Blog', 'post type singular name', 'opploans'),
    'add_new' => _x('Add New Blog', 'book', 'opploans'),
    'add_new_item' => __('Add New Blog', 'opploans'),
    'edit_item' => __('Edit Blog', 'opploans'),
    'new_item' => __('New Blog', 'opploans'),
    'view_item' => __('View Blog', 'opploans'),
    'search_items' => __('Search Blog', 'opploans'),
    'not_found' => __('No Blog found', 'opploans'),
    'not_found_in_trash' => __('No Blog found in Trash', 'opploans'),
    'parent_item_colon' => ''
);
$args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'blog', 'with_front' => false),
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'show_in_rest' => true,
    'rest_base' => 'blog',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'supports' => array('title', 'editor', 'author', 'thumbnail'),
    'menu_icon' => 'dashicons-testimonial'
);

register_post_type('blog', $args);
