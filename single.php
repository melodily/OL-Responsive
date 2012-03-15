<?php get_header(); ?>
  <div class="container">
        <?php if ( have_posts() ) : the_post(); ?>
        <div class="page-header">
          <?php
          $title = the_title('','',false);
          $title_short = substr($title,5);
          ?>
        <h1><?php echo $title_short; ?></h1>
        </div><!--pageheader-->
        <?php 
        $status=get_post_meta($post->ID, 'pending_refilm', true);
        if ($status) {
          echo '<div class="alert alert-error fade in">';
          echo '<a class="close" data-dismiss="alert">×</a>';
          echo 'This lecture has been scheduled for a refilm because of community feedback.';
          echo '</div>';
        }
        ?>
        <div class="row">
        <div class="spanvideo">
          <div class="video cbar-bottom">
          <video src="<?php echo get_post_meta($post->ID, 'videourl', true); ?>" id="container" poster="/wp-content/uploads/Ending-Wrapper.png"/></video>
        </div>
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
          $notes = get_post_meta($post->ID, 'supplementary_notes',true);
        ?>
        <p class="lead">Topic Progress (<?php echo ($lecture+1); ?>/<?php echo $post_count; ?>)</p>
        <div class="progress">
        <?php
        echo '<div class="bar" style="width:'.$percentage.'%;"></div><!--bar-->'
        ?>
        </div><!--progress-->
        <p class="lead">Lecture Navigation</p>
        <ul class="nav nav-list" id="navigation">
        <?php 
          echo '<li><a href="'.get_category_link($parentcatID).'"><i class="icon-chevron-up"></i>'.get_the_category_by_ID($parentcatID).'</a></li>';
        if ($previous_post_ID==NULL) {}
        else {
          echo '<li><a href="'.get_permalink($previous_post_ID).'"><i class="icon-chevron-left"></i>Previous Lecture</a></li>';
        }
        if ($next_post_ID==NULL) {}
        else {
          echo '<li><a href="'.get_permalink($next_post_ID).'"><i class="icon-chevron-right"></i>Next Lecture</a></li>';
        }
        ?>
        </ul><!--navlist-->
        <p class="lead">The Community</p>
        <ul class="nav nav-list">
          <?php if($notes) {
          echo '<li><a href="'.$notes.'"><i class="icon-download-alt"></i>Download supplementary notes</a></li>';
          }
          ?>
          <li><a href="mailto:<?php the_author_email() ?>"><i class="icon-envelope"></i>Email the lecturer</a></li>
          <li><a href="/errors"><i class="icon-exclamation-sign"></i>Report an error</a></li>
          <li class="hidden"><a href="#"><span class="openlectures muted"><strong>open</strong>questions</span></a></li>
        </ul><!--navlist-->
        <?php
        if (get_the_content()) {
          echo '<hr>';
          echo '<p class="lead">Errata</p>';
          echo '<div class="well errata">';
          the_content();
          echo '</div><!--well-->';
        }
        ?>
        </div><!--span2-->
        </div><!--row-->
        <?php endif; ?>
        </div><!--container-->
          <?php get_footer(); ?>  