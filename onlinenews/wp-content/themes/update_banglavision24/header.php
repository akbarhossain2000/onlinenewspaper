<?php

wp_head();


global $bvnews24;
?>

<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="<?php language_attributes(); ?>"><!--<![endif]-->

<!-- Mirrored from velikorodnov.com/html/revija/home_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Oct 2016 17:14:14 GMT -->
<head>
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
  <meta name = "format-detection" content = "telephone=no" />
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <!--meta info-->
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/images/favicon.ico">
  <!--stylesheet include-->
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/responsive.css">
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/styleswitcher.css">
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/colorpicker.css">
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/owl.carousel.css">
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo esc_url(get_template_directory_uri()); ?>/gslider/slider.css" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/animate.css">
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/hover-min.css">
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>">
  <!--modernizr-->
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery-2.1.0.min.js"></script>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.modernizr.js"></script>
  

  
</head>
<body class="wide_layout" <?php body_class(); ?>>
  <div class="loader"></div>
  <!--[if (lt IE 9) | IE 9]>
    <div class="ie_message_block">
      <div class="container">
        <div class="wrapper">
          <div class="clearfix"><i class="fa fa-exclamation-triangle f_left"></i><b>Attention!</b> This page may   not display correctly. You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button button_type_3 button_grey_light f_right" target="_blank">Update Now!</a></div>
        </div>
      </div>
    </div>
  <![endif]-->

  <!--cookie-->
  <!-- <div class="cookie">
          <div class="container">
            <div class="clearfix">
              <span>Please note this website requires cookies in order to function correctly, they do not store any specific information about you personally.</span>
              <div class="f_right"><a href="#" class="button button_type_3 button_orange">Accept Cookies</a><a href="#" class="button button_type_3 button_grey_light">Read More</a></div>
            </div>
          </div>
        </div>-->
  <div class="wrapper_container">
    <!--==============================header=================================-->
    <header role="banner" class="header header_2">
      <div class="h_top_part">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="header_top mobile_menu">
                <div class="head_weather_info">&nbsp;
					ঢাকা,&nbsp;&nbsp;<?php echo do_shortcode('[bangla_day]');?>,&nbsp;&nbsp;<?php echo do_shortcode('[english_date]');?>,&nbsp;&nbsp;<?php echo do_shortcode('[bangla_date]');?>,&nbsp;&nbsp;<?php echo do_shortcode('[hijri_date]'); ?>
                </div>
                <nav>
                  <ul>
                    <li><a href="http://localhost/wp_banglavision24/problem-with-bengali-font/" target="_blank">বাংলা ফন্ট দেখা না গেলে</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="h_bot_part">
        <div class="container">
          <div class="h_bot_part_container">
            <div class="col-lg-4 col-md-4 col-sm-4">
			  <div class="t_align_c">
                <a href="<?php bloginfo('home'); ?>" class="logo"><img src="<?php echo $bvnews24['logo']['url']; ?>" alt=""></a>
              </div>
            </div>
			
            <div class="col-lg-6 col-md-6 col-sm-6">
				<div class="ads-one">
					<h1 class="top-add"><img src="" alt="Add Space" /></h1>
				</div>
            </div>
			
            <div class="col-lg-2 col-md-2 col-sm-2">
              <div class="login_block">
                <ul>
                  <!--language settings-->
                  <li class="lang_button">
                    <a role="button" href="#"><span class="d_mxs_none">English</span></a>
                  </li>
                </ul>
              </div>
			  <div class="social_icon">
				<ul>
                  <li class="facebook">
                    <a href="https://www.facebook.com/banglavision24/" target="_blank">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="youtube">
                    <a href="#">
                      <i class="fa fa-youtube-play"></i>
                    </a>
                  </li>
			  </div>
            </div>
			
          </div>
        </div>
      </div>
      <!--main menu container-->
      <div class="menu_wrap">
        <div class="container clearfix">
          <!--button for responsive menu-->
          <button id="menu_button">
              Menu
            </button>
          <!--main menu-->
		  <nav role="navigation" class="main_menu">
		  <?php
			if(function_exists('wp_nav_menu')){
				wp_nav_menu(array(
					'theme_location' 	=> 'main-menu',
					'menu_id'			=> '',
					'menu_class'		=> '',
					'container'			=> false,
					
				));
			}
		  ?>
		  </nav>
        </div>
      </div>
    </header>
    <!--==============================content================================-->
    <div class="content">
      <div class="container">
        <!--news carousel-->
        <div class="clearfix calousel_top_news" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
          <div class="row">
          	<div class="col-md-8">
				<div class="news_title"><?php echo get_the_category_by_ID($bvnews24['category-one']); ?></div>
				<div class="br_news">
					<marquee behavior="scroll" direction="left" scrollamount="3" vertical-align:middle; cursor:pointer; onmouseover="javascript:this.setAttribute('scrollamount','0'); javascript:this.stop();" onmouseout="javascript:this.setAttribute('scrollamount','3'); javascript:this.start();">
					<?php
					if(have_posts()):
						$lnargs = array(
							'post_type' => 'post',
							'cat'		=> $bvnews24['category-one'],
							'posts_per_page' => 10
						);
						
						$lnews  = new WP_Query($lnargs);
						
						while($lnews->have_posts()): $lnews->the_post();
					?>
						<a href="<?php the_permalink(); ?>"><span class="br_icon"></span><?php the_title(); ?></a>
						
					<?php 
						endwhile;
						wp_reset_postdata();
						endif;
					?>
					</marquee>
				</div>
			</div>
          	<div class="col-lg-4 col-md-4">
				<div class="search_box">
					<form class="navbar-form" id="search_frm" method="get" action="<?php echo esc_url( home_url('/') ); ?>" role="search">
						<div class="input-group">
						  <input type="text" name="s" id="s" class="form-control" value="<?php echo get_search_query(); ?>" placeholder=" আপনি  কি খুঁজতে চান?">
						  <div class="input-group-btn">
							<a href="#" onclick="document.getElementById('search_frm').submit();" class="btn src_button"><i class="fa fa-search"></i>অনুসন্ধান</a>
						  </div>
						</div>
						
					</form>
				</div>
			</div>
          </div>
        </div>