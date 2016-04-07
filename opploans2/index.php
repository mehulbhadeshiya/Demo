<?php
  /**
   * The main template file
   *
   * @package WordPress
   * @subpackage OppLoans2
   */

  # this theme acts as the homepage and a template for all other content pages
  # need to split content/styles by homepage or all other pages
  $homepage_id = 2;
  $about_id = 5;
?>
<html>
  <head>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport">
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery_ujs.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/foundation.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/turbolinks.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/underscore.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/async.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/raphael.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/raphael-svg-import.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/holder.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/stickyfill.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bounce.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-slimscroll.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/icheck.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/imagesloaded.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/hideShowPassword.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-inputmask.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-verticalcenter.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-overlaps.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/application.js"></script>
    <?php
      echo '<link rel="stylesheet" type="text/css" href="' . get_stylesheet_uri() . '" />';

      if (get_the_ID() == $homepage_id) {
        echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/css/application-homepage.css" />';
      } else {
        echo '<link rel="stylesheet" type="text/css" href="' . get_template_directory_uri() . '/css/application.css" />';
      }
    ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-validate.js"></script>
  </head>

  <?php
    if (get_the_ID() == $homepage_id) {
      echo "<body data-context='engines#locomotive_index'>";
    } else if (get_the_ID() == $about_id) {
      echo "<body data-context='engines#locomotive_pages' class=about-us>";
    } else {
      echo "<body data-context='engines#locomotive_pages'>";
    }
  ?>

    <div id='main'>

  <?php
    get_header();

    if (get_the_ID() == $homepage_id) {
      get_template_part('content', 'home');
    } elseif (get_the_ID() == $about_id) {
      get_template_part('content', 'headerabout');
      get_template_part('content', 'about');
    } else {
      if (have_posts()) : while (have_posts()) : the_post();
        get_template_part('content', 'header');
        echo "<div class='primary-content'>";
        the_content();
        echo "</div>";
        get_template_part('content', 'subfooter');
      endwhile; endif;
    }

    get_footer();
  ?>

    </div>
    <div id='main-bg'>
      <img class='bureau-badge' src='<?php echo get_template_directory_uri(); ?>/images/Logo_BBB_horizontal_ARating.png'>
    </div>
  </body>
</html>
