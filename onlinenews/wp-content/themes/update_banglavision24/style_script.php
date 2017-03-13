<?php
/*function remove_head_scripts() { 
   remove_action('wp_head', 'wp_print_scripts'); 
   remove_action('wp_head', 'wp_print_head_scripts', 9); 
   remove_action('wp_head', 'wp_enqueue_scripts', 1);
 
   add_action('wp_footer', 'wp_print_scripts', 5);
   add_action('wp_footer', 'wp_enqueue_scripts', 5);
   add_action('wp_footer', 'wp_print_head_scripts', 5); 
} 
add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );

function css_and_js_enqueue(){
	wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
	wp_register_style('bootstrap-theme', get_template_directory_uri().'/css/bootstrap-theme.min.css');
	wp_register_style('main', get_template_directory_uri().'/css/style.css');
	wp_register_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css');
	wp_register_style('responsive', get_template_directory_uri().'/css/responsive.css');
	wp_register_style('styleswitcher', get_template_directory_uri().'/css/styleswitcher.css');
	wp_register_style('colorpicker', get_template_directory_uri().'/css/colorpicker.css');
	wp_register_style('owl-carousel', get_template_directory_uri().'/css/owl.carousel.css');
	wp_register_style('animate', get_template_directory_uri().'/css/animate.css');
	wp_register_style('hover-min', get_template_directory_uri().'/css/hover-min.css');
	wp_register_style('slider', get_template_directory_uri().'/gslider/slider.css');
	wp_register_style('style', get_template_directory_uri().'/style.css');
	
	wp_register_script('jquery-min', get_template_directory_uri().'/js/jquery-2.1.0.min.js');
	wp_register_script('modernizr', get_template_directory_uri().'/js/jquery.modernizr.js');
	wp_register_script('jquery-ui', get_template_directory_uri().'/js/jquery-ui.min.js');
	wp_register_script('jquery-queryloader2', get_template_directory_uri().'/js/jquery.queryloader2.min.js');
	wp_register_script('jflickrfeed', get_template_directory_uri().'/js/jflickrfeed.js');
	wp_register_script('owl', get_template_directory_uri().'/js/owl.carousel.js');
	wp_register_script('circles', get_template_directory_uri().'/js/circles.min.js');
	wp_register_script('retina', get_template_directory_uri().'/js/retina.js');
	wp_register_script('apear', get_template_directory_uri().'/js/apear.js');
	wp_register_script('styleswither', get_template_directory_uri().'/js/styleswither.js');
	wp_register_script('colorpicker', get_template_directory_uri().'/js/colorpicker.js');
	wp_register_script('jquery-tweet', get_template_directory_uri().'/js/jquery.tweet.min.js');
	wp_register_script('bootstrap', get_template_directory_uri().'/js/bootstrap.min.js');
	wp_register_script('jssor-slider', get_template_directory_uri().'/gslider/js/jssor.slider-21.1.6.mini.js');
	wp_register_script('slider', get_template_directory_uri().'/gslider/js/slider.js');
	wp_register_script('plugins', get_template_directory_uri().'/js/plugins.js');
	wp_register_script('main', get_template_directory_uri().'/js/script.js');
	
	
	wp_enqueue_style(array('bootstrap', 'bootstrap-theme', 'main', 'font-awesome', 'responsive', 'styleswitcher', 'colorpicker', 'owl-carousel', 'animate', 'hover-min', 'slider', 'style'));
	wp_enqueue_script(array('jquery-min', 'modernizr', 'jquery-ui', 'jquery-queryloader2', 'jflickrfeed', 'circles', 'retina', 'apear', 'styleswither', 'colorpicker', 'jquery-tweet', 'bootstrap', 'jssor-slider', 'slider', 'owl', 'plugins', 'main'));
	/*wp_enqueue_script('jquery');
	wp_enqueue_script('jquery-min');
	wp_enqueue_script('modernizr');
	
	wp_enqueue_script('jquery-ui');
	wp_enqueue_script('jquery-queryloader2');
	wp_enqueue_script('jflickrfeed');
	wp_enqueue_script('owl');
	wp_enqueue_script('circles');
	wp_enqueue_script('retina');
	wp_enqueue_script('apear');
	//wp_enqueue_script('styleswither');
	wp_enqueue_script('colorpicker');
	wp_enqueue_script('jquery-tweet');
	wp_enqueue_script('bootstrap');
	wp_enqueue_script('jssor-slider');
	wp_enqueue_script('slider');
	
	//wp_enqueue_script('plugins');
	wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts', 'css_and_js_enqueue');*/
?>