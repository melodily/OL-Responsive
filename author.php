<?php get_header(); ?>
<link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri(); ?>/page-addon.css" type="text/css">

<?php
$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
?>

<div class="container">
<div class="content">
<div class="page-header">
<div class="authorbutton">
<h1><?php echo $curauth->display_name; ?></h1>
</div><!--authorbutton-->
</div><!--pageheader-->
<div class="lecturepic" style="background:url('<?php echo bloginfo('url') ?>/wp-content/uploads/userphoto/<?php echo $curauth->ID; ?>.png') no-repeat right bottom;">
	<div class="authorinfo">
		<div class="authorbutton">
		<button type="button" class="btn large" onClick="parent.location='mailto:<?php echo $curauth->user_email; ?>'">Email</button>
		<?php
		$str_teaser = get_user_meta($curauth->ID,'teaser', true);
		if ($str_teaser) {
			echo "";
		}
		?>
		</div><!--authorsbutton-->
		<h5><ul>
			<li>&nbsp</li>
			<?php
			$str_designation = get_user_meta($curauth->ID, 'designation', true);
			$str_subject = get_user_meta($curauth->ID, 'subject', true);
			$str_jc = get_user_meta($curauth->ID, 'jc', true);
			$str_gradyear = get_user_meta($curauth->ID, 'grad-year', true);
			$str_uni = get_user_meta($curauth->ID, 'university', true);
			$str_major = get_user_meta($curauth->ID, 'major', true);
			if ($str_designation) {
				echo "<li><b>".$str_designation."</b></li>";
			}
			if ($str_subject) {	
				echo "<li>Lecturing <b>".$str_subject."</b></li>";
			}
			if ($str_jc && $str_gradyear) {
				echo "<li><b>".$str_jc."</b>, Class of <b>".$str_gradyear."</b></li>";
			}
			if ($str_uni && $str_major) {
				echo "<li><b>".$str_uni."</b> studying <b>".$str_major."</b></li>";
			}
			?>
		</ul></h5>
	</div><!--authorinfo-->
	<div class="lecturebox">
		<ul>
		<?php query_posts($query_string.'&post_status=publish'); ?>
		<?php if (have_posts()) {
			echo "<h4>Lectures</h4>";
		}
		if ( have_posts() ) : while ( have_posts() ) : the_post();
		;
		?>
		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; else: ?>	
		<?php endif; ?>	
		</ul>	
	</div><!--lecturebox-->
</div><!--lecturepic-->
<?php get_footer('fluid'); ?>