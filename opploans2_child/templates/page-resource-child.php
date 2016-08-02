<?php
/**
 * Template Name: - Resource child
 *
 */
get_header();
get_template_part('content', 'header');
/* * ******************************** page content************************************* */
//require_once ( dirname(__FILE__) . '/breads.php' );
?>


<div class='primary-content resource-texo'>
    <?php
    while (have_posts()) :
        the_post();
        ?>
       
        <?php the_content(); ?>
        <?php
    endwhile;
    ?>
</div>
    <?php
    /*     * ******************************** page content************************************* */
    get_footer();
    ?>
     