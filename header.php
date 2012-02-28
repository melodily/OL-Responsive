<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Open Lectures <?php wp_title('-'); ?></title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="/wp-content/themes/olresponsive/timeline.min.css">
  <link rel="stylesheet" href="/wp-content/themes/olresponsive/style.css">

  <!--Scripts
  ================================================== -->
  <?php function call_scripts() {
  // Load on all pages
  wp_enqueue_script('jquery');  
  wp_enqueue_script('modernizr', '/wp-content/themes/olresponsive/js/modernizr-2.0.6.min.js', array(), null, true);
  wp_enqueue_script('respond', '/wp-content/themes/olresponsive/js/respond.min.js', array(), null, true);
  wp_enqueue_script('bootstrap', '/wp-content/themes/olresponsive/js/bootstrap.min.js', array('jquery'), null, true);
  // wp_enqueue_script('opacity', '/wp-content/themes/olresponsive/js/opacity.js', array('jquery'), null, true);
  // Conditional loading
  if (is_category() || is_page('team')) {
  wp_enqueue_script('subnav', '/wp-content/themes/olresponsive/js/subnav.js', array('jquery'), null, true);
  }
  if (is_single() || is_home()) {
  wp_enqueue_script('jwplayer', '/wp-content/themes/olresponsive/jwplayer/jwplayer.js', array('jquery'), null, false);  }
  if (is_page('press')) {
  wp_enqueue_script('timeline', '/wp-content/themes/olresponsive/js/timeline.js', array('jquery'), null, true);  }
  if (is_page('about-us')) {
  wp_enqueue_script('extremes', '/wp-content/themes/olresponsive/js/extremes.js', array('jquery'), null, true);  }
  }
  if (is_single()) {
  wp_enqueue_script('lecture', '/wp-content/themes/olresponsive/js/lecture.js', array('jquery'), null, true);  }
  if (is_page('team')) {
  wp_enqueue_script('easing', '/wp-content/themes/olresponsive/js/jquery.easing.1.3.js', array('jquery'), null, true);
  wp_enqueue_script('quicksand', '/wp-content/themes/olresponsive/js/jquery.quicksand.js', array('jquery','easing'), null, true);
  wp_enqueue_script('team', '/wp-content/themes/olresponsive/js/team.js', array('jquery','quicksand'), null, true);  }
  add_action('wp_enqueue_scripts', 'call_scripts');
  ?>
<?php wp_head(); ?>
<?php flush(); ?>

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="brand email" href="http://openlectures.sg"><span class="openlectures"><b>open</b>lectures</span></a>
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <div class="nav-collapse">
        <ul class="nav">
          <ul class="nav">
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Subjects<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/subjects/economics">Economics</a></li>
                <li><a href="/subjects/chemistry">Chemistry</a></li>
                <li class="divider"></li>
                <li><a href="#" class="muted">Mathematics</a></li>
                <li><a href="#" class="muted">Physics</a></li>
                <li><a href="#" class="muted">Biology</a></li>
                <li><a href="#" class="muted">Geography</a></li>
              </ul>
            </li>
          </ul>
          <!-- <li><a href="/about-us">About Us</a></li> -->
          <!-- <li><a href="/team">The Team</a></li> -->
          <li><a href="/press">Press</a></li>
          <li><a href="/contact-us">Contact Us</a></li>
        </ul>
        <!-- <form class="navbar-search pull-right">
          <input type="text" class="search-query" placeholder="Find a lecture">
        </form> -->
      </div><!--navcollapse-->
    </div><!--container-->
  </div><!--navbarinner-->
</div><!--navbar-->
</head>