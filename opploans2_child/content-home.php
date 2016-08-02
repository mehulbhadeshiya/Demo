<div class='fade-in-on-load load-delay-long'>
    <div class=page--wrap>
        <a class='hide' href='#header' id='header'></a>
        <div class='row background-float'>
            <div class='small-12 medium-12 small-centered columns text-center'>
                <h3 class='main-copy-1 weight-400'><?php the_field('hm_bn_title'); ?></h3>
                <h4 class='main-copy-2 weight-400'>
                    <span class='wrap'><?php the_field('hm_bn_sub_title'); ?></span>
                </h4>
                <div class='box text-center'>
                    <div class='slider'>
                        <input data-options='{"min":1000,"max":10000,"from":2500,"step":100}' id='loan-amount' name='loan-amount' type='text' value='2500'>
                    </div>
                    <div class=ph+>
                        <a class='apply-now button' href='/registrations/step1'>
                            Apply Online
                        </a>
                    </div>
                    <h6 class='credit-score-copy'>
                        This does <u>not</u> affect your credit score!
                    </h6>
                </div>
            </div>
        </div>
    </div>
    <div class='bg-gray'>
        <div class=page--wrap>
            <div class='customer-rating weight-400' data-alt-display='true' data-rating='4.9'>
                <span>
                    <div class=stars>
                        <div></div>
                        <div style='width: 96%'></div>
                    </div>
                    <span class='wrap inline'>
                        <?php the_field('hm_bn_highline'); ?>
                    </span>
                </span>
            </div>
        </div>
    </div>


    <div class='page--wrap'>



        <?php
        $i = 0;
        $reviews = get_field('review_list');
        $reviews_len = sizeof($reviews);
        for ($i; $i < $reviews_len; $i++) {

            if ($i % 3 == 0) {
                ?>
                <div class='row collapse'>
                <?php }
                ?>
                <div class='small-12 small-collapse medium-4 columns'>
                    <div class='online-review'>
                        <a href='<?php echo $reviews[$i]['rew_url']; ?>'>
                            <div class='review-hero'>
                                <img src='<?php echo $reviews[$i]['rew_image']; ?>' alt="Image">
                            </div>
                            <div class='review-panel'>
                                <div class='review-header'>
                                    <strong>"<?php echo $reviews[$i]['rew_quote']; ?>" - <?php echo $reviews[$i]['rew_person_name']; ?></strong>
                                </div>
                                <div class='review-footer'>
                                    <p class='mb0'><?php echo $reviews[$i]['rew_city']; ?> | $<?php echo $reviews[$i]['rew_loan_amount']; ?> OPPLOAN</p>
                                    <div class='stars'>
                                        <div></div>
                                        <div style='width: 96%'></div>
                                    </div>
                                    <?php
                                    if (($reviews[$i]['rew_source']) == 'google') {
                                        $reviewSource = "<img src='" . get_template_directory_uri() . "/images/google.png' alt='Google Customer Review' width=45 height=16 />";
                                    } else {
                                        $reviewSource = "<img src='" . get_template_directory_uri() . "/images/facebook.png' alt='Facebook Customer Review' width=45 height=16 />";
                                    }
                                    echo $reviewSource;
                                    ?>


                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <?php
                if ((($i + 1) % 3 == 0) || ($i == ($reviews_len - 1))) {
                    ?>
                </div>
                <?php
            }
        }
        ?>
        <div class='grid'>
            <div class='grid__item'>
                <div id='man-looking-up' class='flex-image' style="background-image:url(<?php the_field('cont_blk1_img'); ?>);"></div>
            </div>
            <div class='grid__item'>
                <ul class='checkmarks menu vertical menu-centered text-center flexVerticalCenter'>
                    <li class='header'>
                        <h4><?php the_field('cont_blk1_title'); ?></h4>
                    </li>
                    <?php
                    $i = 0;
                    $fet_list = get_field('cont_blk1_fetlist');
                    $fet_list_len = sizeof($fet_list);


                    for ($i; $i < $fet_list_len; $i++) {
                        ?>
                        <li class='checkmark'>



                            <h5><?php echo $fet_list[$i]['cont_blk1_fetlist_title']; ?></h5>
                            <h6><?php echo $fet_list[$i]['cont_blk1_fetlist_cont']; ?></h6>
                        </li>
                    <?php }
                    ?>
                </ul>
            </div>
        </div>

        <div class='grid grid--reverse'>
            <div class='grid__item'>
                <ul class='numbers menu vertical menu-centered text-center flexVerticalCenter'>
                    <li class='header'>
                        <h4>
                            <h4><?php the_field('cont_blk2_title'); ?></h4>
                        </h4>
                    </li>
                    <?php
                    $fet_list = get_field('cont_blk2_fetlist');
                    $fet_list_len = sizeof($fet_list);
                    $i = 0;
                    for ($i; $i < $fet_list_len; $i++) {
                        switch ($i) {
                            case 0:
                                $class = 'one';
                                break;
                            case 1:
                                $class = 'two';
                                break;
                            default:
                                $class = 'three';
                        }
                        ?>
                        <li class='<?php echo $class; ?>'>
                            <span class="list-num"><?php echo $i+1;?></span>
                            <h5><?php echo $fet_list[$i]['cont_blk2_fetlist_title']; ?></h5>
                            <h6><?php echo $fet_list[$i]['cont_blk2_fetlist_cont']; ?></h6>
                        </li>
                    <?php }
                    ?>
                </ul>
            </div>
            <div class='grid__item'>
                <div id='woman-with-child' class='flex-image flex-image--centered' style="background-image:url(<?php the_field('cont_blk2_img'); ?>);"></div>
            </div>
        </div>



        <br>
        <div class='box text-center heading-300'>
            <?php the_field('pg_end_cont'); ?>
            <a class='apply-now button' href='/registrations/step1'>
                Apply Online
            </a>
            <h6 class='credit-score-copy color-black'>
                This does <u>not</u> affect your credit score!
            </h6>
        </div>
    </div>
</div>
