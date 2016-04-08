<?php
//get page's path
$pagePath = parse_url( $_SERVER['REQUEST_URI'] );
$pagePath = $pagePath['path'];
$pagePath = substr($pagePath, 1, -1);//remove slashes
?>
<div class="position-sticky">
  <?php if ($pagePath == '') { ?>
  <div class="masthead">
  <?php } else { ?>
  <div class="masthead masthead--overlay">
  <?php } ?>
    <div class="masthead-left">
      <a alt-text="Opportunity Loans: A better personal loan" class="logo" href="/">
        <img src="<?php echo get_template_directory_uri(); ?>/images/OppLoans-logo-white.png" alt="Opp Loans" width="150" height="45">
        <span class="tagline">A better personal loan</span>
      </a>
    </div>
    <div class="masthead-right">
      <a class="phone" href="tel:+1855-408-5000">(855) 408-5000</a>
      <div class="navigation">
        <a class="toggle close" data-target=".masthead">X</a>
        <ul>
          <li class="navigation__item">
            <a href="/about-us/">About Us</a>
          </li>
          <li class="navigation__item">
            <a href="/faq/">FAQ</a>
          </li>
          <li class="navigation__item">
            <a href="/blog/">Blog</a>
          </li>
          <li class="navigation__item">
            <a href="https://www.opploans-app.com/MemberPage.aspx?subpage=customerLogin">Sign In</a>
          </li>
          <li class="navigation__item button hollow apply-now">
            <a href="/registrations/step1">Apply Now</a>
          </li>
        </ul>
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
