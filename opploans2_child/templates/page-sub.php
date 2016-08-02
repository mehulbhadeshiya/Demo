<?php
/**
 * Template Name: Page - Sub
 * Description: Displays page title and content in Hero section above 3 widgets.
 *
  */

get_header();
get_template_part('content', 'header');
/* * ******************************** page content************************************* */
?>
<div class='primary-content page-texo'>
    <?php
    while (have_posts()) :
        the_post();
        ?>
        <h1><?php the_content(); ?></h1>
        <?php
    endwhile;
    ?>
</div>
<?php
/* * ******************************** page content************************************* */
get_footer();
?>
     