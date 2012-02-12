<?php get_header(); ?>
<body data-spy="scroll" data-target=".subnav" data-offset="50">
<div class="container" id="top">
    <div class="page-header">
    <h1><?php single_cat_title(); ?></h1>
    </div>
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
        echo '<div class="subnav">';
        echo '<ul class="nav nav-pills">';
        for ($q=0; $q<$catcount; $q++) {
            echo '<li class="dropdown">';
            echo '<a class="dropdown-toggle" data-toggle="dropdown" href="#">'.get_the_category_by_ID($subcat_ID[$q]).'<b class="caret"></b></a>';
            echo '<ul class="dropdown-menu">';
            for ($n=0; $n<$topiccount[$q]; $n++) {
               echo '<li><a href="#'.$topics_ID[$q][$n].'">'.get_the_category_by_ID($topics_ID[$q][$n]).'</a></li>';
            }
            echo '</ul>';
            echo '</li>';
        }
        echo '</ul><!--navpills-->';
        echo '</div><!--subnav-->';
        echo '<div class="row">';
        for ($q=0; $q<$catcount; $q++) {
            echo '<div class="span4">';
            echo '<h2 class="subheader">'.get_the_category_by_ID($subcat_ID[$q]).'</h2>';
            echo '</div><!--4col-->';
            echo '<div class="span8">';
            for ($n=0; $n<$topiccount[$q]; $n++) {
                echo '<section id="'.$topics_ID[$q][$n].'">';
                echo '<h3>'.get_the_category_by_ID($topics_ID[$q][$n]).'</h3>';
                echo '<ul class="nav nav-list">';
                    foreach (get_posts('cat='.$topics_ID[$q][$n].'&posts_per_page=30&order=ASC&orderby=title') as $post) {
                        setup_postdata( $post );
                        echo '<li><a href="'.get_permalink($post->ID).'">'.get_the_title().'</a></li>';   
                    }
                echo '</ul>';
                echo '</section>';
            }
            echo '</div><!--8col-->';
        }
        echo '</div><!--row-->';
    ?>
    <!-- <p id="back-top">
        <a href="#top"><span></span>Back to Top</a>
    </p> -->
</div><!--container-->
</body>
<?php get_footer(); ?>