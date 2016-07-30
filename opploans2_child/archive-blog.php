<?php
/**
 * Template name: Blog
 * 
 */
get_header();
get_template_part('content', 'header');
/* * ******************************** page content************************************* */
?>
<div class='primary-content'>
    <h1 class="pg_ttl">Blog</h1>
    <h4>Recent Posts by OppLoans</h4>
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array('post_type' => 'blog', 'order' => 'DESC', 'paged' => $paged);
    query_posts($args);
    if (have_posts()) {
        while (have_posts()) :
            the_post();
            ?>
            <div class="blog_item">
                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <?php the_excerpt(); ?>
                <p>Posted on : <?php
                    $d = "F d, Y";
                    echo get_the_date($d, $post_ID);
                    ?> </p>
                <hr>
            </div> 
            <?php
        endwhile;
    }
    ?>
    <?php
    if (function_exists("pagination")) {
        pagination();
    }
    ?>
</div>
<?php
/* * ******************************** page content************************************* */
get_footer();
?>
     
