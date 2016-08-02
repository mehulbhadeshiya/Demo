 <?php
    $gen_ban_title = ot_get_option('gen_ban_title') ? ot_get_option('gen_ban_title') : "";
    $gen_ban_cont = ot_get_option('gen_ban_cont') ? ot_get_option('gen_ban_cont') : "";
    ?>
<a class='hide' href='#header' id='header'></a>
<div class='row background-float'>
  <div class='small-12 medium-12 small-centered columns text-center'>
    <!-- <h3 class='main-copy-1 weight-300'><?php wp_title(''); ?></h3> -->
    <h3 class='main-copy-1 weight-300'><?php echo $gen_ban_title;?></h3>
    <h4 class='main-copy-2 weight-300'><?php echo $gen_ban_cont;?></h4>
    <a class='apply-now button' href='/registrations/step1'>Apply Online</a>
    <h6 class='credit-score-copy'>This does <u>not</u> affect your credit score!
    </h6>
    </div>
  </div>
</div>
