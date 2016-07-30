<?php
/**
 * Template Name: - Resource child
 *
 */
get_header();
get_template_part('content', 'header');
/* * ******************************** page content************************************* */
require_once ( dirname(__FILE__) . '/breads.php' );
?>


<div class='primary-content resource-texo'>
    <?php
    while (have_posts()) :
        the_post();
        ?>
        <div class="row">
            <div class="large-12 columns">
                <h1 class="pg_ttl"><?php the_title(); ?></h1>
            </div>
        </div>
        <?php the_content(); ?>
        <?php
    endwhile;
    ?>
</div>
    <?php
    /*     * ******************************** page content************************************* */
    get_footer();
    ?>
     