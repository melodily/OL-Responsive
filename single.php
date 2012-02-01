<?php get_header(); ?>
  <div class="container header">
        <div class="two columns">
        <br />
        </div><!--2col-->
        <div class="twelve columns">
        <?php if ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div class="row remove-bottom">
        <div class="three columns alpha alignleft">
          <?php
            if (previous_post_link('%link','&#8592; Previous Lecture',TRUE)) {
            previous_post_link('<p class="remove-bottom">%link</p>','&#8592; Previous Lecture', TRUE);
            }
            else {
              echo '&nbsp;';
            }
            endif
          ?>
        </div><!--3col-->
        <div class="six columns aligncenter">
          <p class="remove-bottom">
            <?php 
              $category = get_the_category();
              $catid = $category[0]->cat_ID;
              $parentcatID = pa_category_top_parent_id($catid);
              echo '<a href="'.get_category_link($parentcatID).'">'.get_the_category_by_ID($parentcatID).'</a>';
            ?>
          </p>
        </div><!--6col-->
        <div class="three columns omega alignright">
        <?php next_post_link('<p class="remove-bottom">%link</p>','Next Lecture &#8594;', TRUE); ?>
        </div><!--3col-->
        </div><!--row-->
        </div><!--12col-->
        <div class="sixteen columns aligncenter">
        <hr class="half-bottom">
        <div class="video">
          <video src="<?php echo get_post_meta($post->ID, 'videourl', true); ?>" id="container" poster="/wp-content/uploads/Ending-Wrapper.png"/></video>
          <script type='text/javascript'>
            jwplayer('container').setup({
              'flashplayer': '/wp-content/themes/olresponsive/jwplayer/player.swf',
              'width': '700',
              'height': '437',
              'plugins': {
                'hd-2': {'state': 'true'},
            	  'backstroke-1' : {},
                'captions-2': {file:''},
                'lightsout-1': {}
      	      },
              'controlbar': 'bottom',
              'logo': {
          	'file': '/wp-content/uploads/Logo-Player.png',
          	'position': 'top-left',
            },
            'skin': '/wp-content/themes/olcustom/jwplayer/schoon.zip'
            });
          </script>
          </div><!--video-->
        </div><!--16col-->
        </div><!--container-->
          <?php get_footer(); ?>  