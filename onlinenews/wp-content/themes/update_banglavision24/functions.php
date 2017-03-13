<?php

if( ! function_exists('banglavision_setup')):

	function banglavision_setup(){
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');
		add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
	) );
		add_theme_support('custom-background');
		add_image_size('single_page_img', 750, 500, true);
		add_image_size('news_gallery_img', 300, 200, true);
		
		load_theme_textdomain('bvn24', get_template_directory_uri().'/languages');
		
		if(function_exists('register_nav_menu')){
			register_nav_menu('main-menu', __('Main Menu', 'bvn24'));
		}
		
		register_post_type('bangla_newspaper', array(
				'labels'		=> array(
						'name'		=> 'Bangla Newspaper',
						'add_new_item' => 'Add Newspaper Link',
				),
				'public'		=> true,
				'supports'		=> array('title', 'thumbnail')
		));
		
		register_post_type('online_newspaper', array(
				'labels'		=> array(
						'name'		=> 'Online Newspaper',
						'add_new_item' => 'Add Newspaper Link',
				),
				'public'		=> true,
				'supports'		=> array('title', 'thumbnail')
		));
		
		register_post_type('local_newspaper', array(
				'labels'		=> array(
						'name'		=> 'Local Newspaper',
						'add_new_item' => 'Add Newspaper Link',
				),
				'public'		=> true,
				'supports'		=> array('title', 'thumbnail')
		));
		
		register_post_type('inter_newspaper', array(
				'labels'		=> array(
						'name'		=> 'International Newspaper',
						'add_new_item' => 'Add Newspaper Link',
				),
				'public'		=> true,
				'supports'		=> array('title', 'thumbnail')
		));
	}
endif;
add_action('after_setup_theme', 'banglavision_setup');


require_once("lib/ReduxCore/framework.php");
require_once("lib/sample/config.php");

function topViewPost($postID){
	$countKey		= 'wpb_post_views_count';
	$count			= get_post_meta($postID, $countKey, true);
	if($count==''){
		$count = 1;
		delete_post_meta($postID, $countKey);
		add_post_meta($postID, $countKey, '1');
	}else{
		$count++;
		update_post_meta($postID, $countKey, $count);
	}
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


function wpb_get_post_views($postID){
	    $count_key = 'wpb_post_views_count';
	    $count = get_post_meta($postID, $count_key, true);
	    if($count==''){
	        delete_post_meta($postID, $count_key);
	        add_post_meta($postID, $count_key, '0');
	        return "0 View";
	    }
	    return $count.' Views';
}

function bvNews24_widget_sidebar(){
	register_sidebar(array(
			'name'			=> __('Footer Widget', 'bvn24'),
			'description'	=> __('Footer Widget Add Here', 'bvn24'),
			'id'			=> 'footer_widget',
			'before_widget'	=> '<div class="col-lg-4 col-md-4 col-sm-6"><div class="widget widget_categories" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">',
			'after_widget'	=> '</div></div>',
			'before_title'	=> '<h3 class="widget_title">',
			'after_title'	=> '</h3>'
	));
	
	register_sidebar(array(
			'name'			=> __('Calendar Widget', 'bvn24'),
			'description'	=> __('Calendar Widget Add Here', 'bvn24'),
			'id'			=> 'calender_widget',
			'before_widget'	=> '<li class="clearfix">',
			'after_widget'	=> '</li>',
			'before_title'	=> '<span style="display:none">',
			'after_title'	=> '</span>'
	));
	
	register_sidebar(array(
			'name'			=> __('Facebook Widget', 'bvn24'),
			'description'	=> __('Facebook Widget Add Here', 'bvn24'),
			'id'			=> 'facebook_widget',
			'before_widget'	=> '<div class="social-area">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<span style="display:none">',
			'after_title'	=> '</span>'
	));
}
add_action('widgets_init', 'bvNews24_widget_sidebar');

function remove_page_cat($query){
	if($query->is_search){
		$query->set('post_type', 'post');
		$query->set('cat', '-1, -65');
	}
	return $query;				
}
add_filter('pre_get_posts', 'remove_page_cat');
	

function change_submenu_class($menu) {  
  $menu = preg_replace('/ class="sub-menu"/','/ class="sub_menu_wrap type_2 clearfix" /',$menu);  
  return $menu;  
}  
add_filter('wp_nav_menu','change_submenu_class');

?>