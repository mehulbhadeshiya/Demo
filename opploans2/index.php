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
    <script src="https://cdn.optimizely.com/js/6136581106.js"></script>
    <title><?php wp_title(); ?></title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport">
    <meta name="msvalidate.01" content="9F8A9B3F39A381307795E8D6318FFFAF" />
    <meta name="msvalidate.01" content="A83353A4E9457491D73053B8B78F1AE1" />
    <meta name="google-site-verification" content="XfIZQoj4X8dDTkViazj55euxe93aIENbhS9Fuy__yRU" />
    <meta name="google-site-verification" content="9u1x53iWXZEOU3Rs6Zv1Iodm9C-Fdn66HSxUy6rng3A" />
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
      echo "<body data-context='engines#locomotive_index' class=home itemscope itemtype=http://schema.org/WebPage>";
    } else if (get_the_ID() == $about_id) {
      echo "<body data-context='engines#locomotive_pages' class=about-us itemscope itemtype=http://schema.org/WebPage>";
    } else if (get_the_ID() == $blog_id) {
      echo "<body data-context='engines#locomotive_pages' class=blog itemscope itemtype=http://schema.org/WebPage>";
    } else if (get_the_ID() == $faq_id) {
      echo "<body data-context='engines#locomotive_pages' class=faq itemscope itemtype=http://schema.org/WebPage>";
    } else {
      echo "<body itemscope itemtype=http://schema.org/WebPage data-context='engines#locomotive_pages'>";
    }
  ?>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WPJ5BX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?"&l="+l:'';j.async=true;j.src=
"https://www.googletagmanager.com/gtm.js?id="+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WPJ5BX');</script>
<!-- End Google Tag Manager -->

    <div id='main-bg' class='fade-in-on-load'>
       <a title="BBB Business Review" href="http://www.bbb.org/chicago/business-reviews/consumer-finance-and-loan-companies/opportunity-financial-llc-in-chicago-il-88577853/" target="_blank">
          <img class='bureau-badge' src='<?php echo get_template_directory_uri(); ?>/images/Logo_BBB_horizontal_ARating.png'>
       </a>
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
        /* John, this is where I put the breadcrumb code - just above the content. */
        echo "<div class='breadcrumbs' typeof='BreadcrumbList' vocab='http://schema.org/'>";
        bcn_display();
        echo "</div>";
        /* END breadcrumbs */
        the_content();

        echo "<p style='font-size:0.75em;margin-top:1em;'>Last modified: <span itemprop='dateModified'>";
        the_modified_date();
        echo "</span></p>";

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
        wp_print_styles('font-awesome');
    }

    echo '<link rel="stylesheet" type="text/css" href="' . get_stylesheet_uri() . '" />';

    show_admin_bar(false);
    wp_enqueue_script('application_runner');
    wp_footer();
  ?>
  </body>
</html>
