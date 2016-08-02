<?php
/*
 * Template Name: Financial Terms Glossary
 */
get_header();
get_template_part('content', 'header');
/* * ******************************** page content************************************* */
?>
<div class='primary-content page-texo'>
    <h1 class="pg_ttl">Financial Terms Glossary</h1>
    <?php
    $args = array('post_type' => 'terms-glossary', 'order' => 'ASC', 'orderby' => 'title', 'posts_per_page' => '-1');
    query_posts($args);
    if (have_posts()) {
        ?>
        <dl>
            <?php
            while (have_posts()) :
                the_post();
                $title = get_the_title();
                ?>
                <dt><dfn><?php echo $title; ?></dfn></dt>
                <dd>
                    <?php the_field('ftg_text'); ?>
                    <em>Read more about <a title="<?php echo $title; ?>" href="<?php the_permalink(); ?>"><?php echo $title; ?></a>.</em>
                </dd>

            <?php endwhile;
            ?>
        </dl>
        <?php
    }
    ?> 

</div>
<?php
/* * ******************************** page content************************************* */
get_footer();
?>
     
