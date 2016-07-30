<?php
/**
 * Template name: Apply - Scholarship 
 *
 */
?>
<html>
    <head>
        <title><?php wp_title(); ?></title>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport">
        <?php
        ob_start();
        wp_head();
        $head = ob_get_contents();
        ob_end_clean();
        echo substr($head, 0, strpos($head, "<script"));
        ?>
        <script type='text/javascript'  src='<?php echo get_template_directory_uri(); ?>/js/my-jquery.js'></script>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/masthead.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/application.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/modern-business.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" />
        <style type="text/css">
            /*            .position-sticky {
                            width: 100% !important;
                            position: fixed !important;
                            top: 0 !important;
                            left: 0 !important;
                            right: 0 !important;
                            margin: 0 !important;
                            z-index: 6 !important;
                            -webkit-transition: opacity ease 0.2s;
                            transition: opacity ease 0.2s;
                        }*/
                        
                        
                        
            body, p, input, label  { font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial ;     }     
            label { color: black !important; font-size: 0.925rem; letter-spacing: 0.0625rem;  font-weight: 500 !important;      -webkit-font-smoothing: antialiased;} 
            body .form-divider { font-family: 'Museo';}
                
            
            
            
            body .scholar-bg{
                background-image: url(<?php echo get_template_directory_uri(); ?>/templates/header.jpg) !important;
                background-position: center top;
                background-repeat: no-repeat;
                background-size: cover;
                min-height: auto;
                z-index: -1;
                min-height: 300px;
                padding: 0 0 3rem 0;
            }
            .scholar-bg h6{
                color: #fff;
                margin: 1rem 0 2.3rem 0;
            }
            .scr-highlight{
                border: 5px solid #fff;
                background: rgba(255,255,255,0.65);
                color: #3e424d;
                font-size: 1.2rem;
                display: table;
                margin: 0 auto;
                padding:2.5rem 6rem;
                border-radius: 5px;
                line-height: 1.8rem;
            }
            
            .gfield_required { display: none !important;}

            .sub-ess-desc strong {
                color: #e19438;
                font-weight: normal;
            }
            .sub-ess-desc p {
                font-size: 1.2rem;
                line-height: 1.4;
                margin-bottom: 1.5rem;
            }
            .sub-ess-desc {
                margin:4.7em auto 2.5em auto;
                max-width: 900px;
                text-align: center;
                color: #3e424d;
            }

            .sec-apl {
                background: #eeeeee;
            }
            .scrform-contain {
                border: 2px solid #e0e0e2;
                background: #fff;
                border-radius: 15px;
                /* width: 900px; */
                margin: 90px auto;
                padding:5em 0.5rem 2rem 0.5rem;
                position: relative;
            }
            .form-icon {
                border-radius: 50%;
                display: table;
                height: 100px;
                left: 50%;
                margin: 0 auto 0 -50px;
                position: absolute;
                right: auto;
                text-align: center;
                top: -50px;
                width: 100px;
            }
            .graduate-cap {
                background-image: url(<?php echo get_template_directory_uri(); ?>/templates/Icon_cap.svg);
                display: block;
                height: 109px;
                margin: 0 auto;
                vertical-align: middle;
                width: 109px;
            }
            .scrform-inr {
                margin: 0 auto;
            }
            .form-divider {
                border-bottom: 1px solid #e6e6e6;
                font-size: 1.4rem;
                text-align: center;
                font-family: "Museo", Palatino, Georgia, Cambria, "Times New Roman", Times, serif;
                margin: 10px 0 20px 0;
                padding: 0 0 15px 0;

            }

            .schr-form_wrapper [type='text'], 
            .schr-form_wrapper [type='password'], 
            .schr-form_wrapper [type='date'], 
            .schr-form_wrapper [type='datetime'],
            .schr-form_wrapper [type='datetime-local'], 
            .schr-form_wrapper [type='month'], .schr-form_wrapper [type='week'],
            .schr-form_wrapper [type='email'], 
            .schr-form_wrapper [type='number'], .schr-form_wrapper [type='search'], .schr-form_wrapper [type='tel'], 
            .schr-form_wrapper [type='time'], .schr-form_wrapper [type='url'], .schr-form_wrapper [type='color'],
            .schr-form_wrapper textarea,.schr-form_wrapper select,.schr-form_wrapper .rules{
                border: 1px solid #e0e0e2;
                margin: 0 0 1rem 0;
            }
            .schr-form_wrapper ul{
                margin: 0;
            }
            .schr-form_wrapper li {
                list-style: none;
                clear: both;
                display: table;
                width: 100%;
                position: relative;
            }
            .hide-label > label{
                display: none;
            }


            .schr-form_wrapper .ginput_container input{

                width: 100%;
            }
            .schr-form_wrapper .essay-field .ginput_container{
                float: none;
                width: 100%;
            }
            .schr-form_wrapper .essay-field .ginput_counter {
                float: right;
            }
            .schr-form_wrapper .essay-field .ginput_container textarea{
                margin: 0;
            }


            .schr-form_wrapper .rules{
                height: 300px;
                overflow-y: scroll;
                display: block;
                padding: 10px;
            }
            .schr-form_wrapper .rules h2 {
                font-size: 1.1rem;
                font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
                font-weight: bold;
                margin: 0;
            }
            .schr-form_wrapper .terms input{
                float: left;
                width: 20px;
                margin: 0;

            }
            .schr-form_wrapper .terms label{
                float: right;
                width: 90%;
                width: 70%;
                width: -moz-calc(100% - 30px);
                width: -webkit-calc(100% - 30px);
                width: -o-calc(100% - 30px);
                width: calc(100% - 30px);
                margin: 0;
                line-height: 15px;
                font-size: 14px;
                font-weight: normal;

            }
            .schr-form_wrapper .terms .ginput_container{
                float: none;
                width: 100%;
            }
            .schr-form_wrapper .gform_button{
                float: none;
                width: 60%;
                font-size: 20px;
                margin: 40px auto;
                display: table;
                padding: 0.7em 1em;
            }
            .schr-form_wrapper .terms {
                margin: 30px 0 0 0;
            }
            .schr-form_wrapper .gsection_description p {
                font-size: 14px;
                line-height: 17px;
            }
            .validation_error,.gfield_description.validation_message,.warningTextareaInfo  {
                color: #910b0b;    margin: 5px 0;
            }
            .hide-error .gfield_description.validation_message{
                position: absolute;
                right: 0;
                bottom: 0;
                display: none;
            }
            .schr-form_wrapper .gfield_error [type='text'],.schr-form_wrapper .gfield_error textarea {
                border: 1px solid #910b0b;
            }
            .masthead--overlay{
/*                background: transparent;*/
            }
            .appl-sec {
                background: #fff;
                padding: 2rem 0;
            }
            .gform_confirmation_message {
                color: #e19438;
                font-size: 1.3rem;
                text-align: center;
            }
            .sch-requred {
                font-size: 15px;
                letter-spacing: 0;
                position: absolute;
                right: 10px;
                top: 10px;
            }
            #field_1_2 {
                position: static;
            }
            
            
            #field_1_19 .ginput_counter { display: none !important;}
            #field_1_19 .word-count-wrapper { float: right;}
            
            
            /* Degree */
            
            #field_1_22 .ginput_container .gfield_checkbox input, #field_1_22 .ginput_container .gfield_checkbox label {    
            width: auto;
            float: left;
            display: inline-block;
            line-height: 1;}
            
            #field_1_22 .gfield_checkbox li { width: 33%; display: inline-block; padding-top: 1.6rem;}
            #field_1_22  {padding-bottom: 1rem;}
              
            .scrform-contain:hover .form-icon,.scrform-contain:hover {
                box-shadow: 0 0 15px #ccc;
                transition: all 0.25s ease-in-out 0.1s;
            }
            @media screen and (min-width: 47.5em){
                .scholar-bg{
                    background-image: url(<?php echo get_template_directory_uri(); ?>/templates/header.jpg) !important;
                }
            }
            @media screen and (min-width: 37em){
                .schr-form_wrapper li > label {
                    float: left;
                    width: 150px;
                    font-weight: 600;
                    color: #4a4a4c;
                    line-height: 4rem;
                }
                .schr-form_wrapper .ginput_container {
                    float: left;
                    width: 350px;
                }
                .schr-form_wrapper .add-str .ginput_container{
                    width: 245px;
                }
                .schr-form_wrapper .add-apr .ginput_container{
                    width: 99px;
                    float: right;
                }
                .schr-form_wrapper .add-city .ginput_container{
                    width: 45%;
                }
                .schr-form_wrapper .add-state .ginput_container{
                    width: 22%;
                }
                .schr-form_wrapper li.add-str {
                    width: 400px;
                    float: left;
                    clear: none;
                }
                .schr-form_wrapper li.add-apr {
                    width: 100px;
                    float: left;
                    clear: none;
                }

                .schr-form_wrapper li.add-city  {
                    width: 370px;
                    float: left;
                    clear: none;
                }

                .schr-form_wrapper .add-city  .ginput_container {
                    width: 215px;
                }
                .schr-form_wrapper .add-state .ginput_container {
                    width: 130px;
                    float: right;
                }
                .schr-form_wrapper li.add-state {
                    float: right;
                    clear: none;
                    width: auto;
                    width: 130px;
                }
                .scrform-inr {
                    width: 500px;
                    margin: 0 auto;
                }
                .schr-form_wrapper [type='text'], .schr-form_wrapper [type='password'], .schr-form_wrapper [type='date'], .schr-form_wrapper [type='datetime'], .schr-form_wrapper [type='datetime-local'], .schr-form_wrapper [type='month'], .schr-form_wrapper [type='week'], .schr-form_wrapper [type='email'], .schr-form_wrapper [type='number'], .schr-form_wrapper [type='search'], .schr-form_wrapper [type='tel'], .schr-form_wrapper [type='time'], .schr-form_wrapper [type='url'], .schr-form_wrapper [type='color'], .schr-form_wrapper textarea, .schr-form_wrapper select, .schr-form_wrapper .rules {
                    padding: 1rem 1rem;
                }
            }
            @media screen and (max-width: 36.9em){
                .form-divider {
                    font-size: 1.4rem;
                }
                .sub-ess-desc {
                    margin: 2em auto 0 auto;
                } 
                .scrform-contain {
                    margin: 4em auto;    padding: 2em 0.5rem 0 0.5rem;
                }
                .graduate-cap {
                    height: 23px;
                    width: 30px;
                    margin: 17px auto;    background-size: 100% 100%;
                }
                .form-icon {
                    height: 60px;
                    width: 60px;
                    top: -30px;
                    margin: 0 auto 0 -30px;
                }
                .scr-highlight {
                    padding: 1rem 1rem;
                }
            }
        </style>
    </head>

    <body>
        <div id='main' class="scholar-bg">
            <?php
            get_header();
            get_template_part('content', 'header_scholar');
            ?>
            <div class="sec-apl">
                <?php
                echo "<div class='primary-content'>";
                while (have_posts()) : the_post();
                    ?>
                    <div class="container">
                        <div class="row">
                            <div class="large-12 column">
                                <div class="sub-ess-desc">
                                    <p>OppLoans helps customers strengthen their financial skills and knowledge.<br>We believe it's important that students understand personal finance too.</p>
                                    <p>In 750 words or fewer, please explain why financial literacy should be important<br>to college students like yourself.</p>
                                    <p>Apply below! The next application deadline is <strong>September 31, 2016.</strong></p>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="large-6 large-offset-3 medium-10 medium-offset-1 column">
                                <div class="scrform-contain">

                                    <div class="form-icon">
                                        <span class="graduate-cap"></span>
                                        <!-- SVG code -->
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

                <?php echo "</div>"; ?>
                <div class="appl-sec">

                    <div class = 'row '>
                        <div class = 'small-12 medium-8 small-centered columns text-center'>
                            <br>
                            <h4 class = 'weight-300'>Get approved today. Receive your money as soon as <strong>tomorrow!*</strong></h4>
                        </div>
                    </div>
                    <div class = 'row'>
                        <div class = 'small-12 medium-8 small-centered small-collapse columns text-center'>
                            <a class = 'apply-now button' href = '/registrations/step1'>
                                Apply Online
                            </a>
                            <h6 class = 'credit-score-copy color-black'>
                                This does
                                <u>not</u>
                                affect your credit score!
                            </h6>
                        </div>
                    </div>
                </div>
                <?php
                get_footer();
                ?>
            </div>
            <div id='main-bg'>
                <img class='bureau-badge' src='<?php echo get_template_directory_uri(); ?>/images/Logo_BBB_horizontal_ARating.png'>
            </div>

            <?php
            wp_enqueue_script('application_runner');
            wp_footer();
            ?>




            <script type="text/javascript">
                jQuery(document).ready(function () {

                    jQuery(document).bind('gform_post_render', function (event, formId, currentPage) {

                        if (formId == 1) {
                            jQuery('#input_1_19').textareaCount({
                                'maxCharacterSize': 4000,
                                'originalStyle': 'ginput_counter',
                                'displayFormat': '#input of #max max characters'}
                            );
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
   if(jQuery('.gform_confirmation_message').length > 0){
                   var offset = jQuery('.gform_confirmation_message').offset().top;
                   $('body').animate({scrollTop: offset - 150}, 600);
              }
                });

            </script>
    </body>
</html>


