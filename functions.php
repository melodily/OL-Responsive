<?php

// Remove menus from WP Dashboard
function remove_menus () {
global $menu;
    $restricted = array(__('Dashboard'), __('Links'), __('Comments'));
    end ($menu);
    while (prev($menu)){
        $value = explode(' ',$menu[key($menu)][0]);
        if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
    }
}
add_action('admin_menu', 'remove_menus');
// End remove menus

// GravityForms "Display All Posts" Dropdown Add-in
// update the '51' to the ID of your form
add_filter('gform_pre_render_3', 'populate_posts');

function populate_posts($form){
    
    foreach($form['fields'] as &$field){
        
        if($field['type'] != 'select' || strpos($field['cssClass'], 'populate-posts') === false)
            continue;

        $posts = get_posts('numberposts=-1&post_status=publish&cat=-200');

        $choices = array(array('text' => 'Type to search', 'value' => ' '));
        
        foreach($posts as $post){
            $choices[] = array('text' => $post->post_title, 'value' => $post->post_title);
        }
        
        $field['choices'] = $choices;
        
    }
    
    return $form;
}
// End GravityForms Add-in

// Finds Top Level Parent
function pa_category_top_parent_id ($catid) {
 while ($catid) {
  $cat = get_category($catid); // get the object for the catid
  $catid = $cat->category_parent; // assign parent ID (if exists) to $catid
  // the while loop will continue whilst there is a $catid
  // when there is no longer a parent $catid will be NULL so we can assign our $catParent
  $catParent = $cat->cat_ID;
 }
return $catParent;
}
// End find Top Level Parent

// Convert stdclassObject to multidimensional array
function objectToArray($d) {
        if (is_object($d)) {
            // Gets the properties of the given object
            // with get_object_vars function
            $d = get_object_vars($d);
        }
 
        if (is_array($d)) {
            /*
            * Return array converted to object
            * Using __FUNCTION__ (Magic constant)
            * for recursive call
            */
            return array_map(__FUNCTION__, $d);
        }
        else {
            // Return array
            return $d;
        }
        }
// End objectToArray

// Disable the Wordpress Admin Bar for all but admins.
if (!current_user_can('administrator')):
show_admin_bar(false);
endif;
// End Disable WP Admin bar

// Don't add the wp-includes/js/l10n.js?ver=20101110 script to non-admin pages
function remove_l10n_js(){
  if (!is_admin()){
    wp_deregister_script('l10n');
  }
}
add_action('wp_print_scripts', 'remove_l10n_js');
// End remove l10n

// Declare theme support for post-thumbnails
	if ( function_exists( 'add_theme_support' ) ) { 
	  add_theme_support( 'post-thumbnails' ); 
	}
// End declare theme support

// Redirect to Post if Search returns only single result
	add_action('template_redirect', 'single_result');
	function single_result() {
		if (is_search()) {
			global $wp_query;
			if ($wp_query->post_count == 1) {
				wp_redirect( get_permalink( $wp_query->posts['0']->ID ) );
			}
		}
	}
// End post redirect

// Remove junk from head
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
// End remove junk from head

?>