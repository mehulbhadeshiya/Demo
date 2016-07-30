<?php
/**
 * Template name: FAQ
 */
?>
<?php
get_header();
get_template_part('content', 'header');
/* * ******************************** page content************************************* */
?>
<div class = 'primary-content page-texo'>
    <div class="row">
        <div class="large-12 columns">
            <h1 class="pg_ttl">FAQ</h1>
        </div>
    </div>
    <div class="row">
        <div class="large-6 medium-6 small-12 columns">
            <h4>Questions About Personal Loans</h4>
            <?php
            $loop = get_faq_by_cat('personal-loans');
            if ($loop->have_posts()) {
                while ($loop->have_posts()) :
                    $loop->the_post();
                    ?>
                    <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                    <?php
                endwhile;
            }
            ?>
        </div>
    </div>
    <div class="row">
        <div class="large-6 medium-6 small-12 columns">
            <h4>Questions About Your Account</h4>
            <div class="accordion show-for-small" data-accordion="" data-allow-all-closed="true">
                <?php
                $loop = get_faq_by_cat('your-account');
                if ($loop->have_posts()) {
                    $i = 1;
                    while ($loop->have_posts()) :
                        $loop->the_post();
                        ?>
                        <div class="accordion-item" data-accordion-item="">
                            <a id="panel<?php echo $i; ?>-heading" class="accordion-title" href="#panel<?php echo $i; ?>"><?php the_title(); ?></a>
                            <div id="panel<?php echo $i; ?>" class="accordion-content" data-tab-content="">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <?php
                        $i++;
                    endwhile;
                }
                ?>
            </div>
            <h4>Questions About Your Loan Application</h4>
            <div class="accordion show-for-small" data-accordion="" data-allow-all-closed="true">
                <?php
                $loop = get_faq_by_cat('loan-application');
                if ($loop->have_posts()) {
                    $i = 1;
                    while ($loop->have_posts()) :
                        $loop->the_post();
                        ?>
                        <div class="accordion-item" data-accordion-item="">
                            <a id="panel<?php echo $i; ?>-heading" class="accordion-title" href="#panel<?php echo $i; ?>"><?php the_title(); ?></a>
                            <div id="panel<?php echo $i; ?>" class="accordion-content" data-tab-content="">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <?php
                        $i++;
                    endwhile;
                }
                ?>
            </div>
        </div>
        <div class="large-6 medium-6 small-12 columns">
            <h4>Questions About Loan Repayment</h4>
            <div class="accordion show-for-small" data-accordion="" data-allow-all-closed="true">
                <?php
                $loop = get_faq_by_cat('loan-repayment');
                if ($loop->have_posts()) {
                    $i = 1;
                    while ($loop->have_posts()) :
                        $loop->the_post();
                        ?>
                        <div class="accordion-item" data-accordion-item="">
                            <a id="panel<?php echo $i; ?>-heading" class="accordion-title" href="#panel<?php echo $i; ?>"><?php the_title(); ?></a>
                            <div id="panel<?php echo $i; ?>" class="accordion-content" data-tab-content="">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <?php
                        $i++;
                    endwhile;
                }
                ?>
            </div>
            <h4>Questions About Credit Education &amp; Credit Reporting</h4>
            <div class="accordion show-for-small" data-accordion="" data-allow-all-closed="true">
                <?php
                $loop = get_faq_by_cat('credit-education-credit-reporting');
                if ($loop->have_posts()) {
                    $i = 1;
                    while ($loop->have_posts()) :
                        $loop->the_post();
                        ?>
                        <div class="accordion-item" data-accordion-item="">
                            <a id="panel<?php echo $i; ?>-heading" class="accordion-title" href="#panel<?php echo $i; ?>"><?php the_title(); ?></a>
                            <div id="panel<?php echo $i; ?>" class="accordion-content" data-tab-content="">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <?php
                        $i++;
                    endwhile;
                }
                ?>
            </div>
        </div>
    </div>


</div>
<?php
/* * ******************************** page content************************************* */

get_footer();
?>
