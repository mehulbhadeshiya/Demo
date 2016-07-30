<a class='hide' href='#footer' id='footer'></a>
<br>
<div class='row bg-gray'>
    <div class=page--wrap>
        <!--
                  <div class='small-12 columns text-center'>
                    <div class='menu-centered footerNavMenu'>
                      <ul class='menu'>
                        <li class='prl'>
                          <a href="#"></a>
                        </li>
                        <li class='fisca'>
                          <a href="#"></a>
                        </li>
                        <li class='godaddy'>
                          <a href="#"></a>
                        </li>
                      </ul>
                    </div>
                  </div>
        -->
    </div>
</div>
<div class='row bg-gray'>
    <div class=page--wrap>
        <div class='small-12 columns'>
            <div class='menu-centered footer-nav'>
                <?php
                if (has_nav_menu('secondary')) {
                    wp_nav_menu(array('theme_location' => 'secondary', 'depth' => 0, 'container' => false, 'menu_class' => 'menu'));
                } else {
                    ?>
                    <ul class='menu'>
                        <li>
                            <a href="/licenses/"><h6>Rates, Terms &amp; Licenses</h6>
                            </a>
                        </li>
                        <li>
                            <a href="/contact-us/"><h6>Contact Us</h6>
                            </a>
                        </li>
                    </ul>
                <?php }
                ?>
            </div>
        </div>
    </div>
</div>
<div class='row bg-gray'>
    <div class=page--wrap>
        <div class='small-12 columns text-center'>
            <div class='menu-centered'>
                <ul class='menu social-links'>
                    <li class='google'><a alt-text="Google+ Profile" href="https://plus.google.com/+OpportunityFinancialChicago/posts"></a></li>
                    <li class='twitter'><a alt-text="Twitter Profile" href="https://twitter.com/opploans"></a></li>
                    <li class='facebook'><a alt-text="Facebook Profile" href="https://www.facebook.com/OpportunityLoans/"></a></li>
                </ul>
                <div>
                    <img class='bureau-badge' src='<?php echo get_template_directory_uri(); ?>/images/Logo_BBB_horizontal_ARating.png'>
                </div>
            </div>
        </div>
    </div>
</div>
<div class='row bg-gray'>
    <div class=page--wrap>
        <div class='small-12 columns text-center footer-cont'>
            <?php
            $ftr_content = ot_get_option('ftr_content') ? ot_get_option('ftr_content') : "";
            echo $ftr_content;
            ?>
        </div>
    </div>
</div>
</div>

<!-- W3TC-include-css -->
<?php
wp_print_styles('icons');
wp_print_styles('masthead');
if (is_page_template('templates/temp-home.php')) {
    wp_print_styles('application-homepage');
} else {
    wp_print_styles('application');
}
echo '<link rel="stylesheet" type="text/css" href="' . get_stylesheet_uri() . '" />';
wp_enqueue_script('application_runner');
wp_footer();
?>
<!--back to top-->

</body>
</html>
