<?php
get_header();
/* * ******************************** page content************************************* */
get_template_part('content', 'header');
require_once ( dirname(__FILE__) . '/breads.php' );
?>
<div class='primary-content resource-texo blockquote_blue'>
    <div class="row">
        <?php
        if (is_page_template('templates/temp-whitepapers.php')) {
            $page_title = 'White Papers';
            $post_type = 'our-white-papers';
        } else {
            $page_title = 'Articles';
            $post_type = 'our-article';
        }
        ?>

        <h1 class='override'><?php echo $page_title; ?></h1>
        <?php
        $args = array('post_type' => $post_type, 'order' => 'DESC', 'posts_per_page' => '-1');
        query_posts($args);
        if (have_posts()) {
            while (have_posts()) :
                the_post();
                ?>

                <div class="rec-list">
                    <?php
                    global $post;
                    $author_id = $post->post_author;
                    $post_id = get_the_ID();
                    $field_author_id = 'user_' . $author_id;
                    $usePhoto = get_field('usr_photo', $field_author_id);
                    $useName = get_field('usr_name', $field_author_id);

                    $post_date = get_the_date('', $post_id);
                    if ($usePhoto) {
                        ?>
                        <div class="auther-thumb-circle gray-filter1">
                            <img src="<?php echo $usePhoto; ?>" alt="<?php echo $useName; ?>" /> 
                        </div>
                    <?php }
                    ?>

                    <p class="auther-meta">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
                        <?php echo $useName; ?><br><?php echo $post_date; ?></p>
                    <div class="clearfix"></div>

                </div>

                <?php
            endwhile;
        }
        wp_reset_query();
        ?>


    </div>
</div>
<?php
get_template_part('content', 'subfooter');


/* * ******************************** page content************************************* */
get_footer();
?>