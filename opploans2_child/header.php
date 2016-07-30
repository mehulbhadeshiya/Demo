<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"  <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"  <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"  <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <?php
    $fevicon = ot_get_option('fevicon') ? ot_get_option('fevicon') : "";
    $logo = ot_get_option('logo') ? ot_get_option('logo') : "";
    $tag_line = ot_get_option('tag_line') ? ot_get_option('tag_line') : "";
    ?>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport">
        <title><?php wp_title(' | ', true, 'right'); ?></title>
        <link href="<?php echo $fevicon; ?>" rel="shortcut icon">
        <?php
        ob_start();
        wp_head();
        $head = ob_get_contents();
        ob_end_clean();
        echo substr($head, 0, strpos($head, "<script"));
        ?>
        <style rel='stylesheet' type='text/css'>
            body.loaded {
                -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
                filter: alpha(opacity=100);
                -moz-opacity: 1;
                -khtml-opacity: 1;
                opacity: 1;
                visibility: visible;
                -webkit-transition: opacity 0.3s ease-out 0.1s;
                transition: opacity 0.3s ease-out 0.1s;
            }
            body {
                opacity: 0;
                visibility: hidden;
                -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
                filter: alpha(opacity=0);
                -moz-opacity: 0;
                -khtml-opacity: 0;
                opacity: 0;
            }
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
    $header_bg = '';
    if ((is_page_template('templates/temp-faq.php')) || (is_singular('faqs'))) {
        $header_bg = ot_get_option('faq_banner_image') ? ot_get_option('faq_banner_image') : "";
    }
    if ((is_post_type_archive('blog')) || (is_singular('blog'))) {
        $header_bg = ot_get_option('blog_banner_image') ? ot_get_option('blog_banner_image') : "";
    }
    if (is_page_template('templates/temp-home.php')) {
        $header_bg = ot_get_option('hm_banner_image') ? ot_get_option('hm_banner_image') : "";
        ?>
        <body data-context='engines#locomotive_index' class='home'>
            <?php
        } else if (is_page_template('templates/temp-aboutus.php')) {
            $header_bg = ot_get_option('abt_banner_image') ? ot_get_option('abt_banner_image') : "";
            ?>
        <body data-context='engines#locomotive_pages' class='about-us'>
        <?php } else if (is_post_type_archive('blog')) { ?>
        <body data-context='engines#locomotive_pages' class='blog'>
            <?php
        } else if (is_page_template('templates/temp-faq.php')) {
            ?>
        <body data-context='engines#locomotive_pages' class='faq'>
            <?php
        } else {
            if ($header_bg == '') {
                $header_bg = ot_get_option('oth_banner_image') ? ot_get_option('oth_banner_image') : "";
            }
            ?>
        <body data-context='engines#locomotive_pages' <?php body_class();?> id="otr-page">
            <?php
        }
        ?>
        <div id='main-bg' class='fade-in-on-load' style="background-image: url(<?php echo $header_bg; ?>);">
            <img class='bureau-badge' src='<?php echo get_template_directory_uri(); ?>/images/Logo_BBB_horizontal_ARating.png'>
        </div>

        <div id='main' class='fade-in-on-load'>
            <div class="position-sticky">
                <?php if (is_page_template('templates/temp-home.php')) { ?>
                    <div class="masthead">
                    <?php } else { ?>
                        <div class="masthead masthead--overlay masthead--overlay--persist">
                        <?php } ?>
                        <div class=page--wrap>
                            <div class="masthead-left">
                                <a alt-text="Opportunity Loans: A better personal loan" class="logo" href="<?php bloginfo('url'); ?>">
                                    <img src="<?php echo $logo; ?>" alt="Opp Loans" width="150" height="45">
                                    <span class="tagline"><?php echo $tag_line; ?></span>
                                </a>
                            </div>
                            <div class="masthead-right">
                                <a class="phone" href="tel:+1855-408-5000">(855) 408-5000</a>

                                <div class="navigation">
                                    <a class="toggle close" data-target=".masthead">X</a>
                                    <?php
                                    if (has_nav_menu('primary')) {
                                        wp_nav_menu(array('theme_location' => 'primary', 'depth' => 0, 'container' => false, 'menu_class' => 'nav navbar-nav'));
                                    } else {
                                        ?>
                                        <ul>
                                            <li class="navigation__item">
                                                <a href="/about-us/">About Us</a>
                                            </li>
                                            <li class="navigation__item">
                                                <a href="/faqs/">FAQ</a>
                                            </li>
                                            <li class="navigation__item">
                                                <a href="/glossary/">Glossary</a>
                                            </li>
                                            <li class="navigation__item">
                                                <a href="/rates-terms/">Guides</a>
                                            </li>
                                            <li class="navigation__item">
                                                <a href="/blog/">Blog</a>
                                            </li>
                                            <li class="navigation__item">
                                                <a href="https://www.opploans-app.com/myaccount.aspx?">Sign In</a>
                                            </li>
                                            <li class="navigation__item button hollow apply-now">
                                                <a href="/registrations/step1">Apply Now</a>
                                            </li>
                                        </ul>
                                    <?php }
                                    ?>
                                    <hr>
                                    <p class="text-center">
                                        Questions? We can help.
                                        <br>
                                        <a class="phone" href="tel:+1855-408-5000">(855) 408-5000</a>
                                    </p>
                                </div>
                                <a class="hamburger slide-left toggle" data-target=".masthead"></a>
                            </div>
                        </div>
                    </div>
                </div>

