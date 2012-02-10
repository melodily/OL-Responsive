<?php get_header(); ?>
<div class="container">
<div id="header">
	<h1 style="font-size:1000%; padding-top:50px;">Stop!</h1>
	<h6 style="font-size:200%; padding-top:30px; padding-bottom:10px;">Stop! Or we'll shoot!</h6>
	<code style="font-size:120%;">What you seek does not exist. Go no further. You have three choices ahead of you. Choose wisely.</code>
</div><!--header-->
<hr>
<div class="row">
	<div class="one-third column alpha aligncenter">
			<h1 style="font-size:400%;">A</h2>
			<h3>Return</h3>
			<hr>
			<a href="javascript:history.back()" class="email"><span>
			<h1 style="font-size:400%;">&larr;</h1>
			<span>
			<p class="medium">Go back to the previous page</p>
			</span></a>
			<h2>or</h2>
			<a href=<?php bloginfo('url'); ?> class="email"><span>
			<h1 style="font-size:400%;">&uarr;</h1>
			<p class="medium">Start over from the beginning</p>
			</span></a>
	</div><!--1/3col-->
	<div class="one-third column aligncenter">
		<h1 style="font-size:400%;">B</h2>
		<h3>Explore</h3>
		<hr>
		<p class="medium">Choose a subject. Any subject.</p>
		<p class="medium"><a href="/subjects/economics">Economics</a></p>
		<p class="medium"><a href="/subjects/chemistry">Chemistry</a></p>
	</div><!--1/3col-->
	<div class="one-third column omega aligncenter">
		<h1 style="font-size:400%;">C</h2>
		<h3>Battle</h3>
		<hr>
		<p class="medium">Think there should be something here? Drop us a message at</p>
		<p class="medium"><a href="mailto:hello@openlectures.sg" class="email"><span class="subheader">hello</span>@openlectures.sg</a></p>
		<p class="medium">and we'll get down to it.</p>
		<p class="medium">If you'd like us to keep you updated, include your email address.</p> 
	</div><!--1/3col-->
</div><!--row-->
<?php get_footer(); ?>