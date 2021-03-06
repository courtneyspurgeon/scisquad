<?php
function my_script() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-1.7.2.min.js', false, '1.7.2');
		wp_enqueue_script('jquery');
	
		wp_enqueue_script('modernizr', get_bloginfo('template_url').'/js/modernizr.js', array('jquery'), '2.0.6');
		wp_enqueue_script('superfish', get_bloginfo('template_url').'/js/superfish.js', array('jquery'), '1.4.8');
		wp_enqueue_script('supersubs', get_bloginfo('template_url').'/js/supersubs.js', array('jquery'), '0.2b');
		wp_enqueue_script('nivo', get_bloginfo('template_url').'/js/jquery.nivo.slider.js', array('jquery'), '2.5.2');
		wp_enqueue_script('loader', get_bloginfo('template_url').'/js/jquery.loader.js', array('jquery'), '1.0');
		wp_enqueue_script('cufon_yui', get_bloginfo('template_url').'/js/cufon-yui.js', array('jquery'), '1.09i');
		wp_enqueue_script('Bebas_regular', get_bloginfo('template_url').'/js/Bebas_400.font.js', array('jquery'), '1.0');
		wp_enqueue_script('Bebas_Neue_400', get_bloginfo('template_url').'/js/Bebas_Neue_400.font.js', array('jquery'), '1.0');
		wp_enqueue_script('cufon_replace', get_bloginfo('template_url').'/js/cufon-replace.js', array('jquery'), '1.0');
		wp_enqueue_script('swfobject', get_bloginfo('url').'/wp-includes/js/swfobject.js', array('jquery'), '2.2');
		wp_enqueue_script('cycleAll', get_bloginfo('template_url').'/js/jquery.cycle.all.js', array('jquery'), '2.99');
		wp_enqueue_script('audiojs', get_bloginfo('template_url').'/js/audiojs/audio.js', array('jquery'), '1.0');
		wp_enqueue_script('custom', get_bloginfo('template_url').'/js/custom.js', array('jquery'), '1.0');
		wp_enqueue_script('easing', get_bloginfo('template_url').'/js/jquery.easing.1.3.js', array('jquery'), '1.3');
	}
}
add_action('init', 'my_script');
?>