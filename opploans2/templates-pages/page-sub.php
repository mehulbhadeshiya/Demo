<?php
/**
 * Template Name: Page - Sub
 * Description: Displays page title and content in Hero section above 3 widgets.
 *
  */
?>

<html>
  <head>
    <title><?php wp_title(); ?></title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport">
    <?php
      ob_start();
      wp_head();
      $head = ob_get_contents();
      ob_end_clean();

      echo substr($head, 0, strpos($head, "<script"));
    ?>
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

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/application.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/modern-business.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-validate.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/application.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/modern-business.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" />
  </head>

  <body data-context='engines#locomotive_pages'>
    <div id='main'>
      <?php
        get_header();
        get_template_part('content', 'header');
        echo "<div class='primary-content'>";

        while (have_posts()) : the_post();
      ?>

        <div class="container">
          <div class="row">
            <h1><?php the_title();?></h1>

            <?php  wp_strip_all_tags( the_content()) ?>

            <?php // wp_list_pages(); // uncomment to get all page list ?> 
          </div>
        </div>
      <?php endwhile; ?>  
    </div>

    <div>
      <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/form.js"></script> 

      <?php
        echo "</div>";
        get_template_part('content', 'subfooter');

        get_footer();
      ?>
    </div>
    <div id='main-bg'>
      <img class='bureau-badge' src='<?php echo get_template_directory_uri(); ?>/images/Logo_BBB_horizontal_ARating.png'>
    </div>
  </body>
</html>
