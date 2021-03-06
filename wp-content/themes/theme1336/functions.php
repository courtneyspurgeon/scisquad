<?php

	$functions_path = TEMPLATEPATH . '/functions/';
	$includes_path = TEMPLATEPATH . '/includes/';
	
	//Loading jQuery and Scripts
	require_once $includes_path . 'theme-scripts.php';
	
	//Widget and Sidebar
	require_once $includes_path . 'sidebar-init.php';
	require_once $includes_path . 'register-widgets.php';
	
	//Theme initialization
	require_once $includes_path . 'theme-init.php';
	
	//Additional function
	require_once $includes_path . 'theme-function.php';
	
	//Shortcodes
	require_once $includes_path . 'theme_shortcodes/shortcodes.php';
	include_once(TEMPLATEPATH . '/includes/theme_shortcodes/alert.php');
	include_once(TEMPLATEPATH . '/includes/theme_shortcodes/tabs.php');
	include_once(TEMPLATEPATH . '/includes/theme_shortcodes/toggle.php');
	include_once(TEMPLATEPATH . '/includes/theme_shortcodes/html.php');
	
	//tinyMCE includes
	include_once(TEMPLATEPATH . '/includes/theme_shortcodes/tinymce/tinymce_shortcodes.php');
	
	
	
	
	

	
	
	
	
	// removes detailed login error information for security
	add_filter('login_errors',create_function('$a', "return null;"));
	
	if ( !function_exists( 'optionsframework_init' ) ) {
	
	
	/*-----------------------------------------------------------------------------------*/
	/* Options Framework Theme
	/*-----------------------------------------------------------------------------------*/
	
	/* Set the file path based on whether the Options Framework Theme is a parent theme or child theme */
	
	/////////// Start courtneyspurgeon changes
	// Commenting out done by courtneyspurgeon 5.12.2013
	// created a child theme and we do not want to duplicate all the option files
	// child theme only used for php template files and css

	//if ( STYLESHEETPATH == TEMPLATEPATH ) {
		define('OPTIONS_FRAMEWORK_URL', TEMPLATEPATH . '/admin/');
		define('OPTIONS_FRAMEWORK_DIRECTORY', get_bloginfo('template_directory') . '/admin/');
	// } else {
	// 	define('OPTIONS_FRAMEWORK_URL', TEMPLATEPATH . '/admin/');
	// 	define('OPTIONS_FRAMEWORK_DIRECTORY', get_bloginfo('stylesheet_directory') . '/admin/');
	// }
		
	/////////// end courtneyspurgeon changes
	
	require_once (OPTIONS_FRAMEWORK_URL . 'options-framework.php');
	
	}
		
	// Removes Trackbacks from the comment cout
	add_filter('get_comments_number', 'comment_count', 0);
	function comment_count( $count ) {
		if ( ! is_admin() ) {
			global $id;
			$comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
			return count($comments_by_type['comment']);
		} else {
			return $count;
		}
	}
//----------------------------------------------  
	//James's shortcodes for adding buttons
    function signOffText()
    {
        return 'Thank you so much for reading ! And remember to subscribe to our RSS feed.';

    }
    
    add_shortcode('signoff','signOffText');

    function quote($atts, $content=NULL)
    {
        return '<div class="right text">"'.$content.'"</div>';

    }
    add_shortcode("quote","quote");

// button shortcodes resources:
// http://tutorials.mysitemyway.com/adding-column-layout-shortcodes-to-a-wordpress-theme/
 
function snix_shortcode_button( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'link'  => '#',
    'title' => 'View Link',
    'target'=> '',
    'size'  => '',
    'color' => '',
    'type' => '',
    'align' => '',
    ), $atts));
 
    $target = ($target == 'blank') ? ' target="_blank"' : '';
    $align = ($align) ? ' align'.$align : '';
    $color = ($color) ? ' '.$color : '';
    $type = ($type) ? ' '.$type : '';
 
    $out = '<a' .$target. ' class="' .$size.$color.$type.$align. ' awesome" href="' .$link. '" title="' .$title. '"><span></span>' .do_shortcode($content). '</a>';
 
    return $out;
}
add_shortcode('button', 'snix_shortcode_button');



// clean up formatting in shortcodes
function snix_clean_shortcodes($content) {   
	$array = array (
		'<p>[' => '[', 
		']</p>' => ']', 
		']<br />' => ']'
	);

	$content = strtr($content, $array);
	return $content;
}
add_filter('the_content', 'snix_clean_shortcodes');

//------------------------------------------------------


//James's code for columns----

//---------end of code for columns



	// enable shortcodes in sidebar
	add_filter('widget_text', 'do_shortcode');
	
	// custom excerpt ellipses for 2.9+
	function custom_excerpt_more($more) {
		return 'Read More &raquo;';
	}
	add_filter('excerpt_more', 'custom_excerpt_more');
	// no more jumping for read more link
	function no_more_jumping($post) {
		return '&nbsp;<a href="'.get_permalink($post->ID).'" class="read-more">'.'Continue Reading'.'</a>';
	}
	add_filter('excerpt_more', 'no_more_jumping');
	
	
	// category id in body and post class
	function category_id_class($classes) {
		global $post;
		foreach((get_the_category($post->ID)) as $category)
			$classes [] = 'cat-' . $category->cat_ID . '-id';
			return $classes;
	}
	
	add_filter('post_class', 'category_id_class');
	add_filter('body_class', 'category_id_class');

?>