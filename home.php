<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Open Lectures - The Revolution of Education</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/skeleton.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/boilerplate.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sticky.full.css"> 

  <!-- Scripts
  ================================================== -->
  <?php function call_scripts() {  
  wp_enqueue_script('modernizr', '/wp-content/themes/olresponsive/js/modernizr-2.0.6.min.js', false, null);
  wp_enqueue_script('respond', '/wp-content/themes/olresponsive/js/respond.min.js', false, null);
  wp_enqueue_script('sticky','/wp-content/themes/olresponsive/js/sticky.full.js', false, null);
  }
  add_action('wp_enqueue_scripts', 'call_scripts');
  ?>
  <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
<?php wp_head(); ?>
</head>
<?php flush(); ?>
<body>
<div class="container header">
<img src="/wp-content/themes/olresponsive/img/Masthead-Fill-Gray-Web.png" width="500px";>
<br/><br/>
<h1>Hi there! What did you <span class="subheader">learn</span> today?</h1>
<div class="row">
<div class="subject columns aligncenter alpha">
<a href="/subjects/economics" class="email"><span>
<img src="/wp-content/themes/olresponsive/img/econs.png">
<h2>Econs</h2>
</span></a>
</div><!--3col-->
<div class="subject columns aligncenter">
<a href="/subjects/chemistry" class="email"><span>
<img src="/wp-content/themes/olresponsive/img/chem.png">
<h2>Chem</h2>
</span></a>
</div><!--3col-->
<div class="subject columns aligncenter">
<img src="/wp-content/themes/olresponsive/img/math.png" class="disabled">
<h2 class="disabled">Math</h2>
</div><!--3col-->
<div class="subject columns aligncenter">
<img src="/wp-content/themes/olresponsive/img/physics.png" class="disabled">
<h2 class="disabled">Physics</h2>
</div><!--3col-->
<div class="subject columns aligncenter omega">
<img src="/wp-content/themes/olresponsive/img/bio.png" class="disabled">
<h2 class="disabled">Bio</h2>
</div><!--3col-->
</div><!--row-->
<div class="row half-bottom">
<div class="four columns alpha">
<div class="graybox aligncenter round-top">
<h3 class="remove-bottom">New Content</h3>
</div><!--graybox-->
<div class="tealbox aligncenter round-bot">
<h1>6 Feb</h1>
<p class="medium">Chemistry, Introductory Topics</p>
</div><!--tealbox-->
</div><!--2/3col-->
<div class="twelve columns omega">
<p>Here at Open Lectures, we're just a bunch of regular guys and girls who've been through the system and, luckily for us, came out looking good. Now, we want to help everyone out there who wants to learn, to educate themselves. We want to put the power of education back into your hands.</p>

<p>We're doing it for free, because education should never be limited by your ability to afford it. And we're not giving you any slipshod work - all our work is carefully designed to let you gain the best you can from it!</p>

<p class="lead subheader">So sit back, relax and start learning.</p>
</div><!--1/3col-->
</div><!--row-->
</div><!--container-->
<!--[if lt IE 7 ]>
  <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->
<script>
jQuery(document).ready(function()
  {
    jQuery.sticky('<p class="remove-bottom"><b>04 Feb</b> - Stoichiometry lectures are now available! View them <a href="/chemistry">here</a>!</p>');
  });
</script> 
</body>
<?php get_footer(); ?>
</html>