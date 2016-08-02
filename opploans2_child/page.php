<?php
get_header();
get_template_part('content', 'header');
/* * ******************************** page content************************************* */
?>
<div class='primary-content page-texo'>
    <?php
    while (have_posts()) :
        the_post();
        ?>
        <h1 class="pg_ttl"><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <?php
    endwhile;
    ?>
</div>
<?php
/* * ******************************** page content************************************* */
get_footer();
?>
     
