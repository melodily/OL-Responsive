<?php get_header(); ?>
<div class="container">
<div id="header">
	<h1 style="font-size:1000%; padding-top:50px;">Stop!</h1>
	<h6 style="font-size:200%; padding-top:30px; padding-bottom:10px;">Stop! Or we'll shoot!</h6>
	<code style="font-size:120%;">What you seek does not exist. Go no further. You have three choices ahead of you. Choose wisely.</code>
</div><!--header-->
<hr>
<div class="row">
	<div class="span-one-third">
		<div class="well" style="text-align:center;">
			<h1 style="font-size:400%;">A</h2>
			<h3>Return</h3>
			<hr>
			<a href="javascript:history.back()"><span>
			<h1 style="font-size:400%;">&larr;</h1>
			<span>
			<p>Go back to the previous page you were on</p>
			</span></a>
			<h2>or</h2>
			<a href=<?php bloginfo('url'); ?>><span>
			<h1 style="font-size:400%;">&uarr;</h1>
			<p>Start over from the beginning</p>
			</span></a>
		</div><!--well-->
	</div><!--span-one-third-->
	<div class="span-one-third">
		<div class="well" style="text-align:center;">
		<h1 style="font-size:400%;">B</h2>
		<h3>Explore</h3>
		<hr>
		<p>Choose a subject. Any subject.</p>
		<div class="row" style="margin-left:inherit;">
		<div class="span2">
			<a href="/biology"><span>
			<h1 style="font-size:350%;">b</h1>
			<p>biology</p></span></a>
		</div><!--span2-->
		<div class="span2">
			<a href="/chemistry"><span>
			<h1 style="font-size:350%;">c</h1>
			<p>chemistry</p></span></a>
		</div><!--span2-->
		</div><!--subset-row-->
		<div class="row" style="margin-left:inherit;">
		<div class="span2">
			<a href="/economics"><span>
			<h1 style="font-size:350%;">e</h1>
			<p>economics</p></span></a>
		</div><!--span2-->
		<div class="span2">
			<a href="/mathematics"><span>
			<h1 style="font-size:350%;">m</h1>
			<p>mathematics</p></span></a>
		</div><!--span2-->
		</div><!--subset-row-->
		<div class="row" style="margin-left:inherit;">
		<div class="span2">
			<a href="/physics"><span>
			<h1 style="font-size:350%;">p</h1>
			<p>physics</p></span></a>
		</div><!--span2-->
		<div class="span2">
			<a href="/subjects"><span>
			<h1 style="font-size:350%;">( )</h1>
			<p>all subjects</p></span></a>
		</div><!--span2-->
		</div><!--subset-row-->
		</div><!--well-->
	</div><!--span-one-third-->
	<div class="span-one-third" style="text-align:center;">
		<div class="well">
			<h1 style="font-size:400%;">C</h2>
			<h3>Battle</h3>
			<hr>
			<p>Think there should be something here? Drop us a message at</p>
<p><a href="mailto:hello@openlectures.sg">hello@openlectures.sg</a></p>
<p>and we'll get down to it.</p>
			<p>If you'd like us to keep you updated, include your email address.</p> 
		</div><!--well-->
	</div><!--span-one-third-->
</div><!--row-->
<?php get_footer(); ?>