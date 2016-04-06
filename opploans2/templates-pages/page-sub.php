<?php
/**
 * Template Name: Page - Sub
 * Description: Displays page title and content in Hero section above 3 widgets.
 *
  */
get_header(); ?>

    <div class="hidden-lg hidden-md">
      <div id="start-today">
          <a class="close">Close</a>
           <?php
          if (function_exists('dynamic_sidebar')) {
              dynamic_sidebar("home-right");
          } ?> 
      </div>
    </div>

<div id="banner3" class="hidden-xs" class="hidden-sm"></div>  
<div class="section subpage" id="cont_holder">
 
 <?php while (have_posts()) : the_post(); ?>
  <div class="container"><!-- /.row --> 
    <div class="row">
      <div id="super-header" class="hidden-xs" style="padding-bottom:30px"><?php the_title();?></div>
    </div>

 
    <div class="row">
      <h2 class="hidden-lg" class="hidden-md"><?php the_title();?></h2>

        <?php  wp_strip_all_tags( the_content()) ?>

        <?php // wp_list_pages(); // uncomment to get all page list ?> 
    </div>
  </div>

</div>
   
            <?php endwhile; // end of the loop. ?>
<!--
            <div class="tab_title">A Truly Better Personal Loan</div>
-->

<div style="background-color: #384a58; text-align: center; margin-top: 30px;">
  <div style="padding: 20px;">
    <span style="color: #ffffff; font-size: 1.4em;">
      A Truly Better Personal Loan
    </span>
    &nbsp;&nbsp;&nbsp;
    <a href="https://www.opploans-app.com/apply.aspx">
      <button type="button" class="btn btn-info">
        <span style="color: #ffffff; font-size: 2em;">Get Approved Now</span>
      </button>
    </a>
  </div>
</div>

  <!-- /.container --> 
  
</div>
<!-- /.section --><!-- /.section-colored -->

<div>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/form.js"></script> 
<?php get_footer(); ?>