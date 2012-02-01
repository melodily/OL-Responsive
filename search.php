<?php get_header(); ?>
	
		<div id="container">	
			<div class="container" id="content">
			
<?php if ( have_posts() ) : ?>
				
				<h1 class="page-title"><?php _e( 'Search Results for: ', 'shape' ); ?><span><?php the_search_query(); ?></span></h1>
				
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				<div id="nav-above" class="navigation">
					<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'shape' )) ?></div>
					<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'shape' )) ?></div>
				</div><!-- #nav-above -->
<?php } ?>							

<?php while ( have_posts() ) : the_post() ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( __('Permalink to %s', 'shape'), the_title_attribute('echo=0') ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

<?php if ( $post->post_type == 'post' ) { ?>									
					<div class="entry-meta">
						<span class="meta-prep meta-prep-author"><?php _e('By ', 'shape'); ?></span>
						<span class="author vcard"><a class="url fn n" href="<?php echo get_author_link( false, $authordata->ID, $authordata->user_nicename ); ?>" title="<?php printf( __( 'View all posts by %s', 'shape' ), $authordata->display_name ); ?>"><?php the_author(); ?></a></span>
					</div><!-- .entry-meta -->
<?php } ?>
					
					<div class="entry-summary">	
<blockquote><p><?php the_excerpt( __( 'Continue reading <span class="meta-nav">&raquo;</span>', 'shape' )  ); ?></p></blockquote>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'shape' ) . '&after=</div>') ?>
					</div><!-- .entry-summary -->	
				</div><!-- #post-<?php the_ID(); ?> -->

<?php endwhile; ?>

<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
				<?php wp_pagenavi(); ?>
<?php } ?>			

<?php else : ?>

				<div id="post-0" class="post no-results not-found">
					<h2 class="entry-title"><?php _e( 'Nothing Found', 'shape' ) ?></h2>
					<div class="entry-content">
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'shape' ); ?></p>
					<form method="get" id="searchform" action="" >  
					<input type="text" value="Search..." placeholder="Find a lecture" onfocus="if(this.value == this.defaultValue) this.value = ''" name="s" id="s" /> 						
					</div><!-- .entry-content -->
				</div>

<?php endif; ?>			

			</div><!-- #content -->		
		</div><!-- #container -->
		
<?php get_sidebar(); ?>	
<?php get_footer(); ?>