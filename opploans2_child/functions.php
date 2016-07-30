<?php
require_once( dirname(__FILE__) . '/inc/posts.php' );
/* theme */

/**
 * Create a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * 
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function opploans_wp_title($title, $sep) {
    global $paged, $page;
    if (is_feed()) {
        return $title;
    }
// Add the site name.
    $title .= get_bloginfo('name');

// Add the site description for the home/front page.
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && ( is_home() || is_front_page())) {
        $title = "$title $sep $site_description";
    }

// Add a page number if necessary.
    if ($paged >= 2 || $page >= 2) {
        $title = " $title $sep " . sprintf(__('Page %s', 'opploans'), max($paged, $page));
    }
    return $title;
}

add_filter('wp_title', 'opploans_wp_title', 10, 2);
if (!function_exists('opploans_setup')):

    function opploans_setup() {
        register_nav_menus(array('primary' => __('Top nav menu', 'opploans'),
            'secondary' => __('Footer nav Menu', 'opploans'),
        ));
    }

    add_action('after_setup_theme', 'opploans_setup');
endif; // opploans_setup




/* excerpt */

function new_excerpt_length($length) {
    return 50;
}

add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($more) {
    return '...';
}

add_filter('excerpt_more', 'new_excerpt_more');
/* pagination */

function pagination() {

    if (is_singular())
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1)
        return;

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = intval($wp_query->max_num_pages);

    /** 	Add current page to the array */
    if ($paged >= 1)
        $links[] = $paged;

    /** 	Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (( $paged + 2 ) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="navigation">    <ul aria-label="Pagination" role="navigation" class="pagination">' . "\n";

    /** 	Previous Post Link */
    if (get_previous_posts_link())
        printf('<li>%s</li>' . "\n", get_previous_posts_link());

    /** 	Link to first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="current"' : '';

        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

        if (!in_array(2, $links))
            echo '<li>…</li>';
    }

    /** 	Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array) $links as $link) {
        $class = $paged == $link ? ' class="current"' : '';
        if ($paged != $link) {
            printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
        } else {
            printf('<li%s>%s</li>' . "\n", $class, $link);
        }
    }

    /** 	Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links))
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="current"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }

    /** 	Next Post Link */
    if (get_next_posts_link())
        printf('<li>%s</li>' . "\n", get_next_posts_link());

    echo '</ul></div>' . "\n";
}

/* posts */
//add_action('init', 'my_new_default_post_type', 1);
//
//function my_new_default_post_type() {
//    
//    register_post_type('post', array(
//        'labels' => array(
//            'name_admin_bar' => _x('Post', 'add new on admin bar'),
//        ),
//        'public' => true,
//        'show_ui' => true,
//        '_builtin' => true,
//        '_edit_link' => 'post.php?post=%d',
//        'capability_type' => 'post',
//        'map_meta_cap' => true,
//        'hierarchical' => false,
//        'rewrite' => array('slug' => 'blog'),
//        'query_var' => false,
//         'rest_base' => 'blog',
//        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'post-formats'),
//    ));
//}
//add_action( 'init', 'my_new_default_post_type', 1 );
//function my_new_default_post_type() {
// 
//    register_post_type( 'post', array(
//        'labels' => array(
//            'name_admin_bar' => _x( 'Post', 'add new on admin bar' ),
//        ),
//        'public'  => true,
//         'show_ui' => true,
//        '_builtin' => false, 
//        '_edit_link' => 'post.php?post=%d', 
//        'capability_type' => 'post',
//        'map_meta_cap' => true,
//        'hierarchical' => false,
//        'rewrite' => array( 'slug' => 'blog' ),
//        'query_var' => false,
//        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'post-formats' ),
//    ) );
//}
/* admin */
show_admin_bar(false);
/* get faq */

function get_faq_by_cat($faq_cat) {
    $faqs_cat_obj = get_term_by('slug', $faq_cat, 'faqs-category');
    if ($faqs_cat_obj) {
        $faqs_cat = $faqs_cat_obj->term_id;
        $category = get_category_by_slug($slug);
        $mypost = array(
            'post_type' => 'faqs',
            'tax_query' => array(
                array(
                    'taxonomy' => 'faqs-category',
                    'field' => 'id',
                    'terms' => $faqs_cat,
                    'include_children' => false,
                )
            ),
            'posts_per_page' => '-1'
        );
        $loop = new WP_Query($mypost);
        return $loop;
    } else {
        return false;
    }
}

function wpa_show_permalinks( $post_link, $post ){
    if ( is_object( $post ) && $post->post_type == 'content' ){
        $terms = wp_get_object_terms( $post->ID, 'resource-category' );
        if( $terms ){
            return str_replace( '%resource-category%' , $terms[0]->slug , $post_link );
        }
    }
    return $post_link;
}
add_filter( 'post_type_link', 'wpa_show_permalinks', 1, 2 );
//admin style
function custom_colors() {
    echo '<style type="text/css">
      #adminmenu, #adminmenu .wp-submenu, #adminmenuback, #adminmenuwrap {
    background-color: #000;
}
#adminmenu > li:hover > a,#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu .wp-menu-arrow, #adminmenu .wp-menu-arrow div, #adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, .folded #adminmenu li.current.menu-top, .folded #adminmenu li.wp-has-current-submenu {
    box-shadow: 5px 0 0 #ccc inset;
}
#menu-posts{display:none !important;}
         </style>';
}
add_action('admin_head', 'custom_colors');