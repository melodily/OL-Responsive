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
  <link rel="stylesheet" href="/wp-content/themes/olresponsive/style.css">
  <link rel="stylesheet" href="/wp-content/themes/olresponsive/skeleton.css">
  <link rel="stylesheet" href="/wp-content/themes/olresponsive/boilerplate.css">
  <link rel="stylesheet" href="/wp-content/themes/olresponsive/backtotop.css">
  <link rel="stylesheet" href="/wp-content/themes/olresponsive/timeline.css">
  <link rel="stylesheet" href="/wp-content/themes/olresponsive/bootstrap.css">

  <!-- Scripts
  ================================================== -->
  <?php function call_scripts() {
  wp_enqueue_script('jquery');  
  wp_enqueue_script('modernizr', '/wp-content/themes/olresponsive/js/modernizr-2.0.6.min.js', array(), null, true);
  wp_enqueue_script('respond', '/wp-content/themes/olresponsive/js/respond.min.js', array(), null, true);
  wp_enqueue_script('bootstrap', '/wp-content/themes/olresponsive/js/bootstrap.min.js', array('jquery'), null, true);
  if (is_single() || is_home()) {
  wp_enqueue_script('jwplayer', '/wp-content/themes/olresponsive/jwplayer/jwplayer.js', array('jquery'), null, false);
  }
  wp_enqueue_script('backtotop', '/wp-content/themes/olresponsive/js/backtotop.js', array(), null, true);
  if (is_page(array('terms','press'))) {
  wp_enqueue_script('tabs', '/wp-content/themes/olresponsive/js/tabs.js', array(), null, true);
  }
  if (is_page('press')) {
  wp_enqueue_script('timeline', '/wp-content/themes/olresponsive/js/timeline.js', array('jquery'), null, true);
  }
  if (is_page('about-us')) {
  wp_enqueue_script('extremes', '/wp-content/themes/olresponsive/js/extremes.js', array('jquery'), null, true);
  }
  }
  add_action('wp_enqueue_scripts', 'call_scripts');
  ?>
  <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
<?php wp_head(); ?>
</head>
<?php flush(); ?>