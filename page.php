    <?php get_header(); ?>  
    <div class="container header">      
    <?php if ( have_posts() ) : the_post(); ?>  
        <h1><?php the_title(); ?></h1>
        <?php remove_filter (‘the_content’, ‘wpautop’); ?>
            <?php the_content(); ?>
    <?php endif; ?>  
    </div><!--container-->  
    <?php get_footer(); ?>  