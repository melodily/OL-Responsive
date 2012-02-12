<?php get_header(); ?>
  <div class="container">
        <?php if ( have_posts() ) : the_post(); ?>
        <div class="page-header">
        <h1><?php the_title(); ?></h1>
        </div><!--pageheader-->
        <div class="row">
        <div class="spanvideo">
          <video src="<?php echo get_post_meta($post->ID, 'videourl', true); ?>" id="container" poster="/wp-content/uploads/Ending-Wrapper.png"/></video>
        </div><!--10col-->
        <div class="span4">
        <?php 
          $subject = get_the_category();
          $subject_ID = $subject[0]->cat_ID;
          $parentcatID = pa_category_top_parent_id($subject_ID);
          $post_ID = $post->ID;
          $post_list = objectToArray(get_posts('cat='.$subject_ID.'&post_status=publish&orderby=title&order=ASC&posts_per_page=-1'));
          $post_count = count($post_list);
          for ($q=0; $q<$post_count; $q++) {
          $post_list_by_ID[$q] = $post_list[$q][ID];
          }
          $lecture = array_search($post_ID,$post_list_by_ID);
          $percentage = ($lecture+1)/$post_count*100;
          $previous_post_ID = $post_list_by_ID[$lecture-1];
          $next_post_ID = $post_list_by_ID[$lecture+1];
        ?>
        <p class="lead">Topic Progress</p>
        <div class="progress">
        <?php
        echo '<div class="bar" style="width:'.$percentage.'%;"></div><!--bar-->'
        ?>
        </div><!--progress-->
        <p class="lead">Lecture Navigation</p>
        <ul class="nav nav-list">
        <?php 
          echo '<li><a href="'.get_category_link($parentcatID).'"><i class="icon-arrow-up"></i>'.get_the_category_by_ID($parentcatID).'</a></li>';
        if ($previous_post_ID==NULL) {}
        else {
          echo '<li><a href="'.get_permalink($previous_post_ID).'"><i class="icon-arrow-left"></i>Previous Lecture</a></li>';
        }
        if ($next_post_ID==NULL) {}
        else {
          echo '<li><a href="'.get_permalink($next_post_ID).'"><i class="icon-arrow-right"></i>Next Lecture</a></li>';
        }
        ?>
        </ul><!--navlist-->
        </div><!--span2-->
        </div><!--row-->
        <?php endif; ?>
        </div><!--container-->
          <?php get_footer(); ?>  