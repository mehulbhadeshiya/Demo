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

    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/masthead.css" />
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

  <?php
    show_admin_bar(false);
    wp_enqueue_script('application_runner');
    wp_footer();
  ?>
  </body>
</html>
