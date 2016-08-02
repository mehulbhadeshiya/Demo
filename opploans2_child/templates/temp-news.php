<?php
/**
 * Template name: News
 * 
 */
get_header();
get_template_part('content', 'header');
/* * ******************************** page content************************************* */
?>
<div class='primary-content'>
    <h1 class="pg_ttl">In the News</h1>
    <h4>Press Releases</h4>
    <?php
    $args = array('post_type' => 'news', 'order' => 'DESC', 'posts_per_page' => '-1');
    query_posts($args);
    if (have_posts()) {
        while (have_posts()) :
            the_post();
            ?>
            <div class="blog_item">
                <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                <?php the_excerpt(); ?>
                <p>Published on : <?php
                    $d = "F d, Y";
                    echo get_the_date($d, $post_ID);
                    ?> </p>
                <hr>
            </div> 
            <?php
        endwhile;
    }
    wp_reset_query();
    ?>
    <br>
    <h1 class="pg_ttl">OppLoans in the News</h1>
    <?php
    $i = 0;
    $news_list = get_field('news_list');
    $news_list_len = sizeof($news_list);
    for ($i; $i < $news_list_len; $i++) {
        ?>
        <div class="blog_item">
            <h6><a href="<?php echo $news_list[$i]['news_ex_link']; ?>">
                    <?php echo $news_list[$i]['news_ttl']; ?></a></h6>
            <?php echo $news_list[$i]['news_cont']; ?>
            <p><a class="ext-news-link" href="<?php echo $news_list[$i]['news_ex_link']; ?>">
                    <?php echo $news_list[$i]['news_ex_link_ttl']; ?> &rarr;

                </a></p>
            <p>Published on : <?php echo $news_list[$i]['news_date']; ?></p>

            <hr>
        </div>
    <?php }
    ?>
</div>
<?php
/* * ******************************** page content************************************* */
get_footer();
?>
     
