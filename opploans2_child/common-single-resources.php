<?php
get_header();
/* * ******************************** page content************************************* */

if (have_posts()) : while (have_posts()) : the_post();
        get_template_part('content', 'header');
        require_once ( dirname(__FILE__) . '/templates/breads.php' );
        ?>
        <div class='primary-content resource-texo blockquote_blue'>
            <div class="row">
                <div class="row">
                    <div class="xs-12 columns">
                        <?php
                        global $post;
                        $author_id = $post->post_author;
                        $post_id = get_the_ID();
                        $field_author_id = 'user_' . $author_id;
                        $usePhoto = get_field('usr_photo', $field_author_id);
                        $useName = get_field('usr_name', $field_author_id);
                        $useDetail = get_field('usr_detail', $field_author_id);
                        $pdf = get_field('ri_pdf', $post_id);
                        $linked_post_obj = get_field('ri_post_obj', $post_id);
                        $post_date = get_the_date('', $post_id);
                        if ($usePhoto) {
                            ?>
                            <div class="auther-thumb-circle">
                                <img src="<?php echo $usePhoto; ?>" alt="<?php echo $useName; ?>" /> 
                            </div>
                        <?php }
                        ?>
                        <p class="auther-meta"><?php echo $useName; ?></br><?php echo $post_date; ?></p>
                        <div class="clearfix"></div>
                        <h1 class="pg_ttl"><?php the_title(); ?></h1>
                    </div>
                </div>
            
                
                <div class="row">
                    <div class="large-7 medium-7 small-12 columns">
                        <?php the_content(); ?>
                    </div>
                    <div class="large-5 medium-5 small-12 columns">
                        <div class="sidebar-rec bg-gray">
                            <?php
                            if ($usePhoto) {
                                ?>
                                <div class="auther-thumb-square">
                                    <img src="<?php echo $usePhoto; ?>" alt="<?php echo $useName; ?>" /> 
                                </div>
                            <?php }
                            ?>

                            <h3 class = "override">About the Author</h3>
                            <?Php
                            if ($useDetail) {
                                echo $useDetail;
                            }
                            ?>
                        </div>
                        <?php if ($pdf) { ?>
                            <h3 class = "override">
                                <a title = "Download PDF Version" href = "<?php echo $pdf; ?>" target="_blank">
                                    <i class = "fa fa-file-pdf-o"></i> DOWNLOAD PDF VERSION</a>
                            </h3>    
                            <?php
                        }
                        if ($linked_post_obj) {
                            ?>
                            <h3 class = "override">You might also like...</h3>
                            <?php foreach ($linked_post_obj as $linked_post) {
                                ?>
                                <p><a title = "<?php echo $linked_post->post_title; ?>" href = "<?php echo get_the_permalink($linked_post->ID); ?>">
                                        <?php echo $linked_post->post_title; ?>
                                    </a> </p>   
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        get_template_part('content', 'subfooter');
    endwhile;
endif;
/* * ******************************** page content************************************* */
get_footer();
?>