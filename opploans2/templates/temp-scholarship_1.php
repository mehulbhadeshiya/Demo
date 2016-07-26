<?php
/**
 * Template name: Apply - Scholarship fd
 *
 */
?>
<html>
    <head>
        <title><?php wp_title(); ?></title>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport">
        <?php
//        ob_start();
        wp_head();
//        $head = ob_get_contents();
//        ob_end_clean();
//        echo substr($head, 0, strpos($head, "<script"));
        ?>

        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/masthead.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/application.css" />

        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/modern-business.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" />

        <style type="text/css">
            .sec-apl {
                background: #eeeeee;
            }
            .scrform-contain {
                border: 2px solid #e0e0e2;
                background: #fff;
                border-radius: 15px;
                width: 900px;
                margin: 0 auto;
            }
            .form-icon {
                position: relative;
                top: -50px;
                text-align: center;
                display: table;
                margin: 0 auto;
                background: #fff;
                border: 1px solid #e0e0e2;
                height: 100px;
                width: 100px;
                border-radius: 50%;
            }
            .graduate-cap {
                background-image: url(<?php echo get_template_directory_uri(); ?>/templates/graduation_cap.png);
                height: 53px;
                width: 77px;
                display: block;
                background-repeat: no-repeat;
                margin: 22px auto;
                vertical-align: middle;
            }
            .scrform-inr {
                width: 500px;
                margin: 0 auto;
            }
            .form-divider {
                border-bottom: 1px solid #e6e6e6;
                font-size: 22px;
                text-align: center;
                font-family: "Museo", Palatino, Georgia, Cambria, "Times New Roman", Times, serif;
            }
        </style>
        <script type='text/javascript' src=<?php echo get_template_directory_uri() . '/js/my-jquery.js'; ?>></script>
    </head>

    <body data-context='engines#locomotive_pages'>
        <div id='main'>
            <?php
            get_header();
            get_template_part('content', 'header');
            ?>
            <div class="sec-apl">
                <?php
                echo "<div class='primary-content'>";
                while (have_posts()) : the_post();
                    ?>
                    <div class="container">
                        <div class="row">
                            <div class="scrform-contain">
                                <div class="form-icon">
                                    <span class="graduate-cap"></span>
                                </div>
                                <div class="scrform-inr">






                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>

        <div>
            <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/form.js"></script>

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
//        show_admin_bar(false);
//        wp_enqueue_script('application_runner');
        ?>
        <?php wp_footer();
        ?>
        <?php
        $plugin_dir_url = plugins_url() . '/gravityforms';

        $plugin_css_dir_url = $plugin_dir_url . '/css';
        $plugin_js_dir_url = $plugin_dir_url . '/js';

        echo $plugin_dir_url;
        echo $plugin_css_dir_url;
        echo $plugin_js_dir_url;
        ?>

        <link rel='stylesheet' id='gforms_reset_css-css'  href=<?php echo $plugin_css_dir_url . '/formreset.min.css?ver=1.9.12.1'; ?> type='text/css' media='all' />
        <link rel='stylesheet' id='gforms_formsmain_css-css'  href='<?php echo $plugin_css_dir_url; ?>/formsmain.min.css?ver=1.9.12.1' type='text/css' media='all' />
        <link rel='stylesheet' id='gforms_ready_class_css-css'  href='<?php echo $plugin_css_dir_url; ?>/readyclass.min.css?ver=1.9.12.1' type='text/css' media='all' />
        <link rel='stylesheet' id='gforms_browsers_css-css'  href='<?php echo $plugin_css_dir_url; ?>/browsers.min.css?ver=1.9.12.1' type='text/css' media='all' />


        <script type='text/javascript' src=<?php echo $plugin_js_dir_url . '/jquery.textareaCounter.plugin.js?ver=1.9.12.1'; ?>></script>
        <script type='text/javascript' src=<?php echo $plugin_js_dir_url . '/placeholders.jquery.min.js?ver=1.9.12.1'; ?>></script>

        <script type="text/javascript">
            jQuery(document).ready(function () {

                jQuery(document).bind('gform_post_render', function (event, formId, currentPage) {
                    if (formId == 1) {
                        jQuery('#input_1_19').textareaCount({'maxCharacterSize': 4000, 'originalStyle': 'ginput_counter', 'displayFormat': '#input of #max max characters'});
                        if (typeof Placeholders != 'undefined') {
                            Placeholders.enable();
                        }
                    }
                });
                jQuery(document).bind('gform_post_conditional_logic', function (event, formId, fields, isInit) {
                });

                jQuery(document).ready(function () {
                    jQuery(document).trigger('gform_post_render', [1, 1])
                });
            });

        </script>
    </body>
</html>
