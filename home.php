<?php get_header(); ?>
<body>
<div class="container">
<?php echo do_shortcode('[sp-twitter users=27 count=1 displayFormat=div]')?>
<h1>What did you <span class="subheader">learn</span> today? Choose a subject:</h1>
<div class="row">
<div class="span4 aligncenter">
<a href="/subjects/economics"><span>
<img src="/wp-content/themes/olresponsive/img/econs.png">
<h2>Economics</h2>
</span></a>
</div><!--4col-->
<div class="span4 aligncenter">
<a href="/subjects/chemistry"><span>
<img src="/wp-content/themes/olresponsive/img/chem.png">
<h2>Chemistry</h2>
</span></a>
</div><!--4col-->
<div class="span4 aligncenter">
<img src="/wp-content/themes/olresponsive/img/math.png" class="muted">
<h2 class="disabled">Mathematics</h2>
<p class="disabled">Coming Soon</p>
</div><!--4col-->
<div class="span4 aligncenter">
<img src="/wp-content/themes/olresponsive/img/physics.png" class="muted">
<h2 class="disabled">Physics</h2>
<p class="disabled">Coming Soon</p>
</div><!--4col-->
<div class="span4 aligncenter">
<img src="/wp-content/themes/olresponsive/img/bio.png" class="muted">
<h2 class="disabled">Biology</h2>
<p class="disabled">Coming Soon</p>
</div><!--4col-->
<div class="span4 aligncenter">
<img src="/wp-content/themes/olresponsive/img/geog.png" class="muted">
<h2 class="disabled">Geography</h2>
<p class="disabled">Coming Soon</p>
</div><!--4col-->
</div><!--row-->
<br/>
<div class="well aligncenter">
<h3><span class="subheader">What are we?</span> Free education. That's what we are. Watch a video, and hear it from our lecturers.</h3>
</div><!--well-->
</div><!--container-->
<!--[if lt IE 7 ]>
  <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->
</body>
<?php get_footer(); ?>
</html>