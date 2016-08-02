<?php
get_header();
/* * ******************************** page content************************************* */

if (have_posts()) : while (have_posts()) : the_post();
        get_template_part('content', 'header');
        //require_once ( dirname(__FILE__) . '/templates/breads.php' );
        ?>
        <div class='primary-content page-texo'>
            <?php the_content(); ?>
        </div>
        <?php
        get_template_part('content', 'subfooter');

    endwhile;
endif;
/* * ******************************** page content************************************* */
get_footer();
?>