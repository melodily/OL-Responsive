<?php get_header(); ?>
<div class="container header" id="top">
    <h1><?php single_cat_title(); ?></h1>
    <hr>
    <div class="rows">
    <?php
        $subject = get_category($cat);
        $subcats = objectToArray(get_categories('parent='.$subject->cat_ID));
        $catcount = count($subcats);
        for ($i=0; $i<$catcount; $i++) {
            $subcat_ID[$i]=$subcats[$i][cat_ID];
            $topics[$i] = objectToArray(get_categories('child_of='.$subcats[$i][cat_ID]));
            $topiccount[$i] = count($topics[$i]);
            for ($k=0; $k<$topiccount[$i]; $k++) {
                $topics_ID[$i][$k]=$topics[$i][$k][cat_ID];
            }
        }
        for ($q=0; $q<$catcount; $q++) {
            echo '<div class="one-third column alpha">';
            echo '<h2 class="subheader">'.get_the_category_by_ID($subcat_ID[$q]).'</h2>';
            echo '</div><!--1/3col-->';
            echo '<div class="two-thirds column omega">';
            for ($n=0; $n<$topiccount[$q]; $n++) {
                echo '<h3>'.get_the_category_by_ID($topics_ID[$q][$n]).'</h3>';
                echo '<ul>';
                    foreach (get_posts('cat='.$topics_ID[$q][$n].'&posts_per_page=30&order=ASC&orderby=title') as $post) {
                        setup_postdata( $post );
                        echo '<li><a href="'.get_permalink($post->ID).'">'.get_the_title().'</a></li>';   
                    }
                echo '</ul>';
            }
            echo '</div><!--2/3col-->';
        }
    ?>
    </div><!--rows-->
    <p id="back-top">
        <a href="#top"><span></span>Back to Top</a>
    </p>
</div><!--container-->
<?php get_footer(); ?>