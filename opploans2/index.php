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
  $about_id = 17;
  $blog_id = 5;
  $faq_id = 19;
?>
<html>
  <head>
    <title><?php wp_title(); ?></title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport">
    <meta charset="UTF-8">
    <?php
      ob_start();
      wp_head();
      $head = ob_get_contents();
      ob_end_clean();

      echo substr($head, 0, strpos($head, "<script"));
    ?>

    <style rel='stylesheet' type='text/css'>
      [data-context$=locomotive_index] .fade-in-on-load {
        opacity: 0;
        visibility: hidden;
      }

      [data-context$=locomotive_index] body.loaded .fade-in-on-load {
        opacity: 1;
        visibility: visible;
        -webkit-transition: opacity 0.3s ease-out 0.1s;
        transition: opacity 0.3s ease-out 0.1s;
      }
    </style>
  </head>

  <?php
    if (get_the_ID() == $homepage_id) {
      echo "<body data-context='engines#locomotive_index' class=home>";
    } else if (get_the_ID() == $about_id) {
      echo "<body data-context='engines#locomotive_pages' class=about-us>";
    } else if (get_the_ID() == $blog_id) {
      echo "<body data-context='engines#locomotive_pages' class=blog>";
    } else if (get_the_ID() == $faq_id) {
      echo "<body data-context='engines#locomotive_pages' class=faq>";
    } else {
      echo "<body data-context='engines#locomotive_pages'>";
    }
  ?>
    <div id='main-bg' class='fade-in-on-load'>
      <img class='bureau-badge' src='<?php echo get_template_directory_uri(); ?>/images/Logo_BBB_horizontal_ARating.png'>
    </div>

    <div id='main' class='fade-in-on-load'>

  <?php
    get_header();

    if (get_the_ID() == $homepage_id) {
      get_template_part('content', 'home');
      get_footer();
    } elseif (get_the_ID() == $about_id) {
      get_template_part('content', 'headerabout');
      get_template_part('content', 'about');
      get_template_part('content', 'footerabout');

    } elseif (get_the_ID() == $blog_id) {
      get_template_part('content', 'headerblog');
      get_template_part('content', 'blog');
      get_template_part('content', 'footerblog');

    } elseif (get_the_ID() == $faq_id) {
      get_template_part('content', 'headerfaq');
      get_template_part('content', 'faq');
      get_template_part('content', 'footerfaq');

    } else {
      if (have_posts()) : while (have_posts()) : the_post();
        get_template_part('content', 'header');
        echo "<div class='primary-content'>";
        the_content();
        echo "</div>";
        get_template_part('content', 'subfooter');
        get_footer();
      endwhile; endif;
    }
  ?>
    </div>

  <!-- W3TC-include-css -->
  <?php
    wp_print_styles('icons');
    wp_print_styles('masthead');

    if (get_the_ID() == $homepage_id) {
        wp_print_styles('application-homepage');
    } else {
        wp_print_styles('application');
    }

    echo '<link rel="stylesheet" type="text/css" href="' . get_stylesheet_uri() . '" />';

    show_admin_bar(false);
    wp_enqueue_script('application_runner');
    wp_footer();
  ?>
  </body>
</html>
