<div class='grid grid--alternate'>
    <div class='grid__item small-block text-center'>
        <div class='about-us__highlight mt pt'>
            <img src="<?php echo get_template_directory_uri(); ?>/images/Icon_FastFunding.svg" />
        </div>
        <h5 class='mt'><?php the_field('abt_fet1_ttl'); ?></h5>
        <h6><?php the_field('abt_fet1_cont'); ?></h6>
    </div>
    <div class='grid__item small-block text-center'>
        <div class='about-us__highlight mt'>
            <img src="<?php echo get_template_directory_uri(); ?>/images/Icon_LowInterest.svg" />
        </div>
        <h5 class='mt'><?php the_field('abt_fet2_ttl'); ?></h5>
        <h6><?php the_field('abt_fet2_cont'); ?></h6>
    </div>
    <div class='grid__item small-block text-center'>
        <div class='about-us__highlight mt pt'>
            <img src="<?php echo get_template_directory_uri(); ?>/images/Icon_CaringService.svg" />
        </div>
        <h5 class='mt'><?php the_field('abt_fet3_ttl'); ?></h5>
        <h6><?php the_field('abt_fet3_cont'); ?></h6>
    </div>
</div>






<div class=about-us__compare>
    <h5 class="text-center"><?php the_field('abt_rate_ttl'); ?></h5>
    <div class="grid grid--transparent">
        <div class="grid__item text-center">
            <h5 class='mb0 bold'><?php the_field('abt_rate_cc_rate_ttl'); ?></h5>
            <h6><?php the_field('abt_rate_cc_rate'); ?></h6>
            <img src="<?php echo get_template_directory_uri(); ?>/images/Icon_1_Therm_CreditCard.svg" class='mt' />
        </div>
        <div class="grid__item text-center" style="color: #3973C9;">
            <h5 class='mb0 bold'><?php the_field('abt_rate_opl_ttl'); ?></h5>
            <h6><?php the_field('abt_rate_opl_rate'); ?></h6>
            <img src="<?php echo get_template_directory_uri(); ?>/images/Icon_2_Therm_OppLoans.svg" class='mt' />
        </div>
        <div class="grid__item text-center" style="color: #BE0004;">
            <h5 class='mb0 bold'><?php the_field('abt_rate_pl_rate_ttl'); ?></h5>
            <h6><?php the_field('abt_rate_pl_rate'); ?></h6>
            <img src="<?php echo get_template_directory_uri(); ?>/images/Icon_3_Therm_Payday.svg" class='mt' />
        </div>
        <div class="grid__item text-center" style="color: #850003;">
            <h5 class='mb0 bold'><?php the_field('abt_rate_bo_ttl'); ?></h5>
            <h6><?php the_field('abt_rate_bo_rate'); ?></h6>
            <img src="<?php echo get_template_directory_uri(); ?>/images/Icon_4_Therm_BankOverdraft.svg" class='mt' />
        </div>
    </div>
</div>




<?php
$i = 0;
$abt_quote_list = get_field('abt_quote_list');
$abt_quote_len = sizeof($abt_quote_list);
for ($i; $i < $abt_quote_len; $i++) {
    ?>
    <div class="primary-content">
        <div class='about-us__testimony'>
            <img src="<?php echo get_template_directory_uri(); ?>/images/quote.png" width=40 height=40 />
            <div class="abt-quote">
                <?php echo $abt_quote_list[$i]['abt_quote_cont']; ?>
            </div>
            <p class="quote-frm"><strong> <?php echo $abt_quote_list[$i]['abt_quote_by']; ?></strong></p>
        </div>
    </div>
<?php }
?>













<div class='about-us__team mt+ pt+'>
    <div class='about-us__team__heading mb+'>
        <h6 class='text-center'><strong><?php the_field('abt_team_ttl'); ?></strong></h6>
        <h5 class='text-center mh+ ph+'><?php the_field('abt_team_cont'); ?></h5>
    </div>




    <?php
    $i = 0;
    $abt_team_mems = get_field('abt_team_mem');
    $abt_team_len = sizeof($abt_team_mems);
    for ($i; $i < $abt_team_len; $i++) {
        if ($i % 4 == 0) {
            ?>
            <div class='grid grid--transparent grid--center mv+'>
            <?php }
            ?>
            <div class=grid__item>
                <img src="<?php echo $abt_team_mems[$i]['abt_team_mem_img']; ?>" class=image--profile />
                <h6 class='mt mb0 bold'><?php echo $abt_team_mems[$i]['abt_team_mem_name']; ?></h6>
                <h6><?php echo $abt_team_mems[$i]['abt_team_mem_pos']; ?></h6>
            </div>
            <?php
            if ((($i + 1) % 4 == 0) || ($i == ($abt_team_len - 1))) {
                if (($i == ($abt_team_len - 1) && (($i + 1) % 4 != 0))) {
                    ?>
                    <div class="grid__item"> &nbsp;</div>
                <?php }
                ?>
            </div>
            <?php
        }
    }
    ?>
</div>

<!-- <div class='box box--blue box__scholarship mh0'>
  <div class="primary-content">
    <div class=row>
      <div class='small-12 medium-8 columns'>
        <h6>OPPLOANS SCHOLARSHIP PROGRAM</h6>
        <h5 class='mt bold'>Are you a student? Here's a chance to win $2,500 towards your education!</h5>
      </div>
      <div class='small-12 medium-4 columns'>
        <p class='mt+ text-center'><a href='#' class='btn btn--reversed'>Learn More</a></p>
      </div>
    </div>
  </div>
</div>
-->
<div class='box mh0'>
    <div class="primary-content">
        <div class=row>
            <div class='small-12 medium-6 columns text-center column--divider'>
                <div class=about-us__contact__item>
                    <div class=about-us__contact__item__heading>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Icon_JoinTheTeam.svg" />
                    </div>
                    <div class=about-us__contact__item__content>
                        <h5><?php the_field('abt_grw_ttl');?></h5>
                        <?php the_field('abt_grw_cont');?>
                    </div>
                    <div class=about-us__contact__item__footer>
                        <a href='mailto:talent@opploans.com' class='btn btn--blue'>Join the Team</a>
                    </div>
                </div>
            </div>
            <div class='small-12 medium-6 columns text-center'>
                <div class=about-us__contact__item>
                    <div class=about-us__contact__item__heading>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/Icon_GetinTouch.svg" />
                    </div>
                    <div class=about-us__contact__item__content>
                        <h5><?php the_field('abt_gt_ttl');?></h5>
                        <?php the_field('abt_gt_cont');?>
                    </div>
                    <div class=about-us__contact__item__footer>
                        <a href='/contact-us/' class='btn btn--blue'>Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class='box text-center heading-300'>
    <?php the_field('pg_end_cont'); ?>
    <div class=mh>
        <a class='apply-now button' href='/registrations/step1'>Apply Online</a>
    </div>
    <h6 class='credit-score-copy color-black'>This does <u>not</u> affect your credit score!</h6>
</div>

