    <?php get_header(); ?>
    <body>  
    <div class="container">      
    <?php if ( have_posts() ) : the_post(); ?> 
    	<div class="page-header"> 
        <h1><?php the_title(); ?></h1>
        </div><!--pageheader-->
        <?php remove_filter (‘the_content’, ‘wpautop’); ?>
            <?php the_content(); ?>
    <?php endif; ?>  
    </div><!--container-->  
    <?php get_footer(); ?>  