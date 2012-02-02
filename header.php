<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title><?php bloginfo('name'); ?> <?php wp_title('-'); ?></title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/skeleton.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/boilerplate.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/backtotop.css">

  <!-- Scripts
  ================================================== -->
  <?php function call_scripts() {
  wp_enqueue_script('jquery');  
  wp_enqueue_script('modernizr', '/wp-content/themes/olresponsive/js/modernizr-2.0.6.min.js', false, null);
  wp_enqueue_script('respond', '/wp-content/themes/olresponsive/js/respond.min.js', false, null);
  wp_enqueue_script('jwplayer', '/wp-content/themes/olresponsive/jwplayer/jwplayer.js', false, null);
  wp_enqueue_script('backtotop', '/wp-content/themes/olresponsive/js/backtotop.js', false, null);
  if (is_page('terms')) {
  wp_enqueue_script('tabs', '/wp-content/themes/olresponsive/js/tabs.js', false, null);
  }
  if (is_page('about-us')) {
  wp_enqueue_script('extremes', '/wp-content/themes/olresponsive/js/extremes.js', false, null);
  }
  wp_enqueue_script('footer', '/wp-content/themes/olresponsive/js/footer.js', false, null);
  // wp_enqueue_script('sticky', '/wp-content/themes/olresponsive/js/jquery.sticky.js', false, null);
  }
  add_action('wp_enqueue_scripts', 'call_scripts');
  ?>
  <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
<?php wp_head(); ?>
</head>
<?php flush(); ?>