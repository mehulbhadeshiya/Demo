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
    'rewrite' => array('slug' => 'blog'),
    'has_archive' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => null,
    'show_in_rest' => true,
    'rest_base' => 'blog',
    'rest_controller_class' => 'WP_REST_Posts_Controller',
    'supports' => array('title', 'editor', 'author', 'thumbnail'),
    'menu_icon' => 'dashicons-admin-post'
);

register_post_type('blog', $args);



function post_type_menus() {
    $labels = array(
        'name' => _x('FAQs', 'post type general name', 'opploans'),
        'singular_name' => _x('FAQs', 'post type singular name', 'opploans'),
        'add_new' => _x('Add New FAQ', 'book', 'opploans'),
        'add_new_item' => __('Add New FAQ', 'opploans'),
        'edit_item' => __('Edit FAQ', 'opploans'),
        'new_item' => __('New FAQ', 'opploans'),
        'view_item' => __('View FAQ', 'opploans'),
        'search_items' => __('Search FAQs', 'opploans'),
        'not_found' => __('No FAQ found', 'opploans'),
        'not_found_in_trash' => __('No FAQ found in Trash', 'opploans'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'show_in_rest' => true,
        'rest_base' => 'faqs',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'comments'),
        'menu_icon' => 'dashicons-testimonial'
    );

    register_post_type('faqs', $args);

    $labels = array(
        'name' => _x('FAQ Category', 'taxonomy general name', 'opploans'),
        'singular_name' => _x('Category', 'taxonomy singular name', 'opploans'),
        'search_items' => __('Search FAQ Category', 'opploans'),
        'all_items' => __('All FAQ Category', 'opploans'),
        'parent_item' => __('Parent Category', 'opploans'),
        'parent_item_colon' => __('Parent Category:', 'opploans'),
        'edit_item' => __('Edit Category', 'opploans'),
        'update_item' => __('Update Category', 'opploans'),
        'add_new_item' => __('Add New Category', 'opploans'),
        'new_item_name' => __('New Category Name', 'opploans'),
    );

    register_taxonomy(
            'faqs-category', 'faqs', array(
        'public' => true,
        'hierarchical' => true,
        'labels' => $labels,
        'query_var' => 'faqs',
        'show_ui' => true,
        'rewrite' => array('slug' => 'faqs-category', 'with_front' => false),
            )
    );
    /* News */
    $labels = array(
        'name' => _x('News', 'post type general name', 'opploans'),
        'singular_name' => _x('News', 'post type singular name', 'opploans'),
        'add_new' => _x('Add New News', 'book', 'opploans'),
        'add_new_item' => __('Add New News', 'opploans'),
        'edit_item' => __('Edit News', 'opploans'),
        'new_item' => __('New News', 'opploans'),
        'view_item' => __('View News', 'opploans'),
        'search_items' => __('Search News', 'opploans'),
        'not_found' => __('No News found', 'opploans'),
        'not_found_in_trash' => __('No News found in Trash', 'opploans'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'in-the-news'),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'show_in_rest' => true,
        'rest_base' => 'in-the-news',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'comments'),
        'menu_icon' => 'dashicons-megaphone'
    );
    register_post_type('news', $args);

//    $labels = array(
//        'name' => _x('News Category', 'taxonomy general name', 'opploans'),
//        'singular_name' => _x('Category', 'taxonomy singular name', 'opploans'),
//        'search_items' => __('Search News Category', 'opploans'),
//        'all_items' => __('All News Category', 'opploans'),
//        'parent_item' => __('Parent Category', 'opploans'),
//        'parent_item_colon' => __('Parent Category:', 'opploans'),
//        'edit_item' => __('Edit Category', 'opploans'),
//        'update_item' => __('Update Category', 'opploans'),
//        'add_new_item' => __('Add New Category', 'opploans'),
//        'new_item_name' => __('New Category Name', 'opploans'),
//    );
//
//    register_taxonomy(
//            'news-category', 'news', array(
//        'public' => true,
//        'hierarchical' => true,
//        'labels' => $labels,
//        'query_var' => 'news',
//        'show_ui' => true,
//        'rewrite' => array('slug' => 'news-category', 'with_front' => false),
//            )
//    );
    /**/
    /* Glossary */
    $labels = array(
        'name' => _x('Glossary', 'post type general name', 'opploans'),
        'singular_name' => _x('Glossary', 'post type singular name', 'opploans'),
        'add_new' => _x('Add New Glossary', 'book', 'opploans'),
        'add_new_item' => __('Add New Glossary', 'opploans'),
        'edit_item' => __('Edit Glossary', 'opploans'),
        'new_item' => __('New Glossary', 'opploans'),
        'view_item' => __('View Glossary', 'opploans'),
        'search_items' => __('Search Glossary', 'opploans'),
        'not_found' => __('No Glossary found', 'opploans'),
        'not_found_in_trash' => __('No Glossary found in Trash', 'opploans'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'glossary'),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'show_in_rest' => true,
        'rest_base' => 'glossary',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports' => array('title', 'editor', 'author', 'thumbnail'),
        'menu_icon' => 'dashicons-list-view'
    );
    register_post_type('terms-glossary', $args);

    /* Resources */
//    $labels = array(
//        'name' => _x('Resource Category', 'taxonomy general name', 'opploans'),
//        'singular_name' => _x('Category', 'taxonomy singular name', 'opploans'),
//        'search_items' => __('Search Resource Category', 'opploans'),
//        'all_items' => __('All Resource Category', 'opploans'),
//        'parent_item' => __('Parent Category', 'opploans'),
//        'parent_item_colon' => __('Parent Category:', 'opploans'),
//        'edit_item' => __('Edit Category', 'opploans'),
//        'update_item' => __('Update Category', 'opploans'),
//        'add_new_item' => __('Add New Category', 'opploans'),
//        'new_item_name' => __('New Category Name', 'opploans'),
//    );
//
//    register_taxonomy(
//            'resource-category', 'content', array(
//        'public' => true,
//        'hierarchical' => true,
//        'labels' => $labels,
//        'query_var' => 'resource-category',
//        'show_ui' => true,
//        'rewrite' => array('slug' => 'content', 'with_front' => false),
//            )
//    );
//    
//    $labels = array(
//        'name' => _x('Resources', 'post type general name', 'opploans'),
//        'singular_name' => _x('Resources', 'post type singular name', 'opploans'),
//        'add_new' => _x('Add New Resource', 'book', 'opploans'),
//        'add_new_item' => __('Add New Resource', 'opploans'),
//        'edit_item' => __('Edit Resource', 'opploans'),
//        'new_item' => __('New Resource', 'opploans'),
//        'view_item' => __('View Resource', 'opploans'),
//        'search_items' => __('Search Resources', 'opploans'),
//        'not_found' => __('No Resource found', 'opploans'),
//        'not_found_in_trash' => __('No Resource found in Trash', 'opploans'),
//        'parent_item_colon' => ''
//    );
//    $args = array(
//        'labels' => $labels,
//        'public' => true,
//        'publicly_queryable' => true,
//        'show_ui' => true,
//        'query_var' => true,
//        'rewrite' => array('slug' => 'content/%resource-category%', 'with_front' => false),
//        'has_archive' => 'content',
//        'capability_type' => 'post',
//        'hierarchical' => false,
//        'menu_position' => null,
//        'show_in_rest' => true,
//        'rest_base' => 'content',
//        'rest_controller_class' => 'WP_REST_Posts_Controller',
//        'supports' => array('title', 'editor', 'author', 'thumbnail'),
//        'menu_icon' => 'dashicons-testimonial'
//    );
//    register_post_type('content', $args);

    /* Articles */
    $labels = array(
        'name' => _x('Articles', 'post type general name', 'opploans'),
        'singular_name' => _x('Articles', 'post type singular name', 'opploans'),
        'add_new' => _x('Add New Article', 'book', 'opploans'),
        'add_new_item' => __('Add New Article', 'opploans'),
        'edit_item' => __('Edit Article', 'opploans'),
        'new_item' => __('New Article', 'opploans'),
        'view_item' => __('View Article', 'opploans'),
        'search_items' => __('Search Articles', 'opploans'),
        'not_found' => __('No Article found', 'opploans'),
        'not_found_in_trash' => __('No Article found in Trash', 'opploans'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'content/articles', 'with_front' => false),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'show_in_rest' => true,
        'rest_base' => 'articles',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports' => array('title', 'editor', 'author', 'thumbnail'),
        'menu_icon' => 'dashicons-pressthis'
    );

    register_post_type('our-article', $args);


    /* White papers */
    $labels = array(
        'name' => _x('White papers', 'post type general name', 'opploans'),
        'singular_name' => _x('White papers', 'post type singular name', 'opploans'),
        'add_new' => _x('Add New White papers', 'book', 'opploans'),
        'add_new_item' => __('Add New White papers', 'opploans'),
        'edit_item' => __('Edit White papers', 'opploans'),
        'new_item' => __('New White papers', 'opploans'),
        'view_item' => __('View White papers', 'opploans'),
        'search_items' => __('Search White papers', 'opploans'),
        'not_found' => __('No White papers found', 'opploans'),
        'not_found_in_trash' => __('No White papers found in Trash', 'opploans'),
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'content/white-papers', 'with_front' => false),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'show_in_rest' => true,
        'rest_base' => 'white-papers',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports' => array('title', 'editor', 'author', 'thumbnail'),
        'menu_icon' => 'dashicons-media-text'
    );

    register_post_type('our-white-papers', $args);
}

add_action('init', 'post_type_menus');
?>