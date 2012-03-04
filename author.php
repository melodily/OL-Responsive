<?php get_header(); ?>

<div class="container">
	<div class="row">

<?php
$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));

$designation_list = get_cimyFieldValue($curauth->ID, 'DESIGNATION');
$designations = explode(",",$designation_list);
$subject_list = get_cimyFieldValue($curauth->ID, 'SUBJECT');
$subjects = explode(",",$subject_list);
$gender = get_cimyFieldValue($curauth->ID, 'GENDER');
$school = get_cimyFieldValue($curauth->ID, 'SCHOOL');
$gradyear = get_cimyFieldValue($curauth->ID, 'GRAD');
$university = get_cimyFieldValue($curauth->ID, 'UNIVERSITY');
$major = get_cimyFieldValue($curauth->ID, 'MAJOR');
$video = get_cimyFieldValue($curauth->ID, 'TEASER');
$cv = get_cimyFieldValue($curauth->ID, 'CV');

if ($gender=="Male") {
	$ns=2;
}
else {
	$ns=0;
}

if (count($designations)==1) {
	if ($designations[0]=='Lecturer') {
		$primary_designation = 'Lecturer';
	}
	else {
		$primary_designation = 'Staff';
	}
}
else {
	$primary_designation = 'Staff';
	$secondary_designation = 'Lecturer';
}

echo '<div class="span3">';
		userphoto($curauth->ID);
	    echo '<ul class="nav nav-list">';
		    echo '<li><a href="mailto:'.$email.'">Email</a></li>';
	    if ($video) {
	    	echo '<li><a href="#">Watch Teaser Video</a></li>';
		}
		if ($cv) {
			echo '<li><a href="'.$cv.'">Curriculum Vitae</a></li>';
		}  
	    echo '</ul>';
echo '</div><!--span3-->';
echo '<div class="span9">';
echo '<div class="page-header"><h1>'.$curauth->display_name.'</h1></div><!--page-header-->';
echo '<div class="row">';
echo '<div class="span6">';
if ($school && $gradyear) {
	echo '<h2>'.$school.'</h2>';
	echo '<h3><small>Class of '.$gradyear.'</small></h3>';
}
if ($university && $major) {
	echo '<h2>'.$university.'</h2>';
	echo '<h3>'.$major.' <small>Class of '.($gradyear+$ns+5).'</small></h3>';
}
echo '</div><!--span3-->';
?>
<!-- 	
<?php 
query_posts($query_string.'&post_status=publish');
if (have_posts()) {
echo "<h4>Lectures</h4>";
}
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endwhile; else:
endif; 
?>	 
-->
</div><!--span9-->
</div><!--row-->
</div><!--container-->
<?php get_footer(); ?>