<?php
get_header();


?>
        <!--banners-->
        <div class="clearfix">
          <div class="two_third_column" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
            <!--Gallery-->
            <div id="owl-demo-3" class="owl-carousel">
			<?php
				$tsargs = array(
					'post_type'		=> 'post',
					'cat'		 	=> $bvnews24['category-two'],
					'posts_per_page'=> 5
				);
				
				$tsnews		= new WP_Query($tsargs);
				
				while($tsnews->have_posts()): $tsnews->the_post();
				
				$tsimg_id	= get_post_thumbnail_id();
				$tsimg_url	= wp_get_attachment_image_src($tsimg_id, '', true);
				
			?>
              <div class="item">
                <div class="scale_image_container">
                  <a href="javascript:void(0)"><img src="<?php echo $tsimg_url[0]; ?>" alt="" class="scale_image"></a>
                  <!--caption-->
                  <div class="caption_type_1">
                    <div class="caption_inner">
                      <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                    </div>
                  </div>
                </div>
              </div>
			  <?php
				endwhile;
				wp_reset_postdata();
			  ?>
            </div>
          </div>
          <div class="one_third_column one_third_var2">
            <div class="latest_news" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
			  <?php 
				if(have_posts()):
				  $ltargs	= array(
					'post_type'		=> 'post',
					'cat'			=> $bvnews24['category-three'],
					'posts_per_page'=> 10
				  );
				  
				  $ltndata		= new WP_Query($ltargs);
				  
			  ?>
			  <h3><a href="<?php echo get_category_link( $bvnews24['category-three'] ); ?>"><span class="tooltip">আরো খবর</span><?php echo get_the_category_by_ID($bvnews24['category-three']); ?></a></h3>
				<ul class="l-news-list">
				<?php
					while($ltndata->have_posts()): $ltndata->the_post();
					
					$ltnimg_id		= get_post_thumbnail_id();
					$ltnimg_url		= wp_get_attachment_image_src($ltnimg_id);
					
				?>
					<li class="clearfix">
						<div class="scale_image_container">
						  <a href="<?php the_permalink(); ?>"><img src="<?php echo $ltnimg_url[0]; ?>" alt="" class="scale_image"></a>
						</div>
						<div class="post_text">
						  <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
						</div>
					</li>
				<?php
					endwhile;
					wp_reset_postdata();
					endif;
				?>
				</ul>
            </div>
          </div>
        </div>
		<!-- Add Block-->
		<div class="row m_top">
			<div class="col-md-6">
				<div class="ads-one">
					<h1><img src="" alt="Add Space" /></h1>
				</div>
			</div>
			<div class="col-md-6">
				<div class="ads-one">
					<h1><img src="" alt="Add Space" /></h1>
				</div>
			</div>
		</div>
        <!--News Block-->
		
        <div class="row m_top" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="mnews-default">
				<?php
					if(have_posts()):
					  $nargs	= array(
						'post_type'		=> 'post',
						'cat'			=> $bvnews24['category-four'],
						'posts_per_page'=> 5
					  );
					  
					  $ndata		= new WP_Query($nargs);
					  
				?>
					<h3><a href="<?php echo get_category_link($bvnews24['category-four']); ?>"><span class="tooltip">আরো খবর</span><?php echo get_the_category_by_ID($bvnews24['category-four']); ?></a></h3>
					<ul class="m-news-list">
					<?php
						while($ndata->have_posts()): $ndata->the_post();
						
						$nimg_id		= get_post_thumbnail_id();
						$nimg_url		= wp_get_attachment_image_src($nimg_id);
					?>
						<li class="clearfix">
							<div class="scale_image_container">
								<a href="<?php the_permalink(); ?>"><img src="<?php echo $nimg_url[0]; ?>" alt="" class="scale_image" /></a>
							</div>
							<div class="post_text">
								<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
							</div>
						</li>
					<?php endwhile; ?>
					</ul>
					<?php
					  wp_reset_postdata();
					  endif;
					?>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="mnews-default">
				<?php
					if(have_posts()):
					  $inargs		= array(
							'post_type'		=> 'post',
							'cat'			=> $bvnews24['category-five'],
							'posts_per_page'=> 5
					  );
					  
					  $indata		= new WP_Query($inargs);
					  
				?>
					<h3><a href="<?php echo get_category_link($bvnews24['category-five']); ?>"><?php echo get_the_category_by_ID($bvnews24['category-five']); ?></a></h3>
					<ul class="m-news-list">
					<?php
						while($indata->have_posts()): $indata->the_post();
						
						$inimg_id			= get_post_thumbnail_id();
						$inimg_url			= wp_get_attachment_image_src($inimg_id);
						
					?>
						<li class="clearfix">
							<div class="scale_image_container">
								<a href="<?php the_permalink(); ?>"><img src="<?php echo $inimg_url[0]; ?>" alt="" class="scale_image" /></a>
							</div>
							<div class="post_text">
								<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
							</div>
						</li>
					<?php endwhile; ?>
					</ul>
					<?php
						wp_reset_postdata();
						endif;
					?>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="mnews-default">
				<?php
					if(have_posts()):
					
					$pargs		= array(
						'post_type'			=> 'post',
						'cat'				=> $bvnews24['category-six'],
						'posts_per_page'	=> 5
					);
					
					$pdata		= new WP_Query($pargs);
				?>
					<h3><a href="<?php echo get_category_link($bvnews24['category-six']); ?>"><?php echo get_the_category_by_ID($bvnews24['category-six']); ?></a></h3>
					<ul class="m-news-list">
					<?php
						while($pdata->have_posts()): $pdata->the_post();
						
						$pimg_id		= get_post_thumbnail_id();
						$pimg_url		= wp_get_attachment_image_src($pimg_id);
					?>
						<li class="clearfix">
							<div class="scale_image_container">
								<a href="<?php the_permalink(); ?>"><img src="<?php echo $pimg_url[0]; ?>" alt="" class="scale_image" /></a>
							</div>
							<div class="post_text">
								<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
							</div>
						</li>
					<?php endwhile; ?>
					</ul>
					<?php 
						wp_reset_postdata();
						endif;
					?>
				</div>
			</div>
		</div>
		
		<div class="row m_top" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="mnews-default">
				<?php
					if(have_posts()):
					  $ecargs		= array(
							'post_type'			=> 'post',
							'cat'				=> $bvnews24['category-seven'],
							'posts_per_page'	=> 5
					  );
					  
					  $ecdata		= new WP_Query($ecargs);
					  
				?>
					<h3><a href="<?php echo get_category_link($bvnews24['category-seven']); ?>"><?php echo get_the_category_by_ID($bvnews24['category-seven']); ?></a></h3>
					<ul class="m-news-list">
					<?php
						while($ecdata->have_posts()): $ecdata->the_post();
						
						$ecimg_id		= get_post_thumbnail_id();
						$ecimg_url		= wp_get_attachment_image_src($ecimg_id);
					?>
						<li class="clearfix">
							<div class="scale_image_container">
								<a href="<?php the_permalink(); ?>"><img src="<?php echo $ecimg_url[0]; ?>" alt="" class="scale_image" /></a>
							</div>
							<div class="post_text">
								<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
							</div>
						</li>
					<?php
						endwhile;
					?>
					</ul>
					<?php
						wp_reset_postdata();
						endif;
					?>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="mnews-default">
				<?php 
					if(have_posts()):
					  $cnargs		= array(
							'post_type'			=> 'post',
							'cat'				=> $bvnews24['category-eight'],
							'posts_per_page'	=> 5
					  );
					  
					  $cndata		= new WP_Query($cnargs);
					  
				?>
					<h3><a href="<?php echo get_category_link($bvnews24['category-eight']); ?>"><?php echo get_the_category_by_ID($bvnews24['category-eight']); ?></a></h3>
					<ul class="m-news-list">
					<?php
						while($cndata->have_posts()): $cndata->the_post();
						
						$cnimg_id		= get_post_thumbnail_id();
						$cnimg_url		= wp_get_attachment_image_src($cnimg_id);
						
					?>
						<li class="clearfix">
							<div class="scale_image_container">
								<a href="<?php the_permalink(); ?>"><img src="<?php echo $cnimg_url[0]; ?>" alt="" class="scale_image" /></a>
							</div>
							<div class="post_text">
								<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
							</div>
						</li>
					<?php endwhile; ?>
					</ul>
					<?php
						wp_reset_postdata();
						endif;
					?>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="tv">
					<a href="http://www.jagobd.com/"><h3>আরও টিভি চ্যানেল</h3></a>
					<?php 
						if(have_posts()):
						
						$vargs		= array(
							'post_type'			=> 'post',
							'cat'				=> $bvnews24['category-nine'],
							'posts_per_page'	=> 1
						);
						
						$vndata		= new WP_Query($vargs);
						
						while($vndata->have_posts()): $vndata->the_post();
						
					?>
					<iframe width="100%" height="250" src="https://www.youtube.com/embed/<?php the_title(); ?>" frameborder="0" allowfullscreen></iframe>
					<?php
						endwhile;
						wp_reset_postdata();
						endif;
					?>
				</div>
				<div class="social_media">
					<div class="section appear-animation fadeInDown appear-animation-visible" data-appear-animation="fadeInDown" data-appear-animation-delay="1150" style="animation-delay: 1150ms;">
					  <?php 
							dynamic_sidebar('facebook_widget');
					  ?>
					  <!--<ul class="social_media_list clearfix">
						
						<li>
						  <a href="#" class="fb">
							<i class="fa fa-facebook"></i>
							<div>3,794</div>
							<p>Fans</p>
						  </a>
						</li>
						<li>
						  <a href="#" class="you_tube">
							<i class="fa fa-youtube-play"></i>
							<div>7,820</div>
							<p>Subscribers</p>
						  </a>
						</li>
						<li>
						  <a href="#" class="twitter">
							<i class="fa fa-twitter"></i>
							<div>1,552</div>
							<p>Followers</p>
						  </a>
						</li>
					  </ul>-->
					</div>
				</div>
			</div>
		</div>
		
		<!-- Add Block-->
		<div class="row m_top">
			<div class="col-md-6">
				<div class="ads-one">
					<h1><img src="" alt="Add Space" /></h1>
				</div>
			</div>
			<div class="col-md-6">
				<div class="ads-one">
					<h1><img src="" alt="Add Space" /></h1>
				</div>
			</div>
		</div><!-- End Add Block-->
		
		<div class="row m_top" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
			<div class="col-md-8">
				<div class="sliderbox">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
					  <?php
						if(have_posts()):
						  $enargs	= array(
								'post_type'			=> 'post',
								'cat'				=> $bvnews24['category-ten'],
								'posts_per_page'	=> 5,
						  );
						  
						  $endata		= new WP_Query($enargs);
						  
						  while($endata->have_posts()): $endata->the_post();
						  
							$enimg_id		= get_post_thumbnail_id();
							$enimg_url		= wp_get_attachment_image_src($enimg_id, '', true);
							
					  ?>
						<div class="item <?php if($endata->current_post==0): ?>active<?php endif; ?>">
						  <div class="scale_image_container">
							<a href="javascript:void(0)"><img src="<?php echo $enimg_url[0]; ?>" alt="..." class="scale_image"></a>
							  <!--caption-->
							  <div class="caption_type_1">
								<div class="caption_inner">
								  <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
								</div>
							  </div>
						  </div>
						</div>
					<?php 
						endwhile; 
						wp_reset_postdata();
						endif;
					?>
					  </div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="ent-news">
				<?php 
					if(have_posts()):
					  $ennargs		= array(
							'post_type'			=> 'post',
							'cat'				=> $bvnews24['category-ten'],
							'posts_per_page'	=> 10
					  );
					  
					  $enndata		= new WP_Query($ennargs);
				?>
					<h3><a href="<?php echo get_category_link($bvnews24['category-ten']); ?>"><?php echo get_the_category_by_ID($bvnews24['category-eleven']); ?></a></h3>
					<ul class="entnews-list">
						<?php 
							while($enndata->have_posts()): $enndata->the_post();
							
							$ennimg_id		= get_post_thumbnail_id();
							$ennimg_url		= wp_get_attachment_image_src($ennimg_id);
						?>
							<li class="clearfix">
								<div class="scale_image_container">
									<a href="<?php the_permalink(); ?>"><img src="<?php echo $ennimg_url[0]; ?>" alt="" class="scale_image" /></a>
								</div>
								<div class="post_text">
									<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
								</div>
							</li>
						<?php
							endwhile;
							wp_reset_postdata();
							endif;
						?>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="row m_top" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="mnews-default">
				<?php
					if(have_posts()):
					  $crargs		= array(
							'post_type'			=> 'post',
							'cat'				=> $bvnews24['category-twelve'],
							'posts_per_page'	=> 5
					  );
					  
					  $crdata		= new WP_Query($crargs);
					  
				?>
					<h3><a href="<?php echo get_category_link($bvnews24['category-twelve']); ?>"><?php echo get_the_category_by_ID($bvnews24['category-twelve']); ?></a></h3>
					<ul class="m-news-list">
					<?php 
						while($crdata->have_posts()): $crdata->the_post();
						
						$crimg_id		= get_post_thumbnail_id();
						$crimg_url		= wp_get_attachment_image_src($crimg_id);
						
					?>
						<li class="clearfix">
							<div class="scale_image_container">
								<a href="<?php the_permalink(); ?>"><img src="<?php echo $crimg_url[0]; ?>" alt="" class="scale_image" /></a>
							</div>
							<div class="post_text">
								<a href="<?php the_permalink(); ?>">
									<h4><?php the_title(); ?></h4>
								</a>
							</div>
						</li>
					<?php endwhile; ?>
					</ul>
					<?php 
						wp_reset_postdata();
						endif;
					?>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="mnews-default">
					<?php
					if(have_posts()):
					  $smargs		= array(
							'post_type'			=> 'post',
							'cat'				=> $bvnews24['category-thirteen'],
							'posts_per_page'	=> 5
					  );
					  
					  $smdata		= new WP_Query($smargs);
					  
				?>
					<h3><a href="<?php echo get_category_link($bvnews24['category-thirteen']); ?>"><?php echo get_the_category_by_ID($bvnews24['category-thirteen']); ?></a></h3>
					<ul class="m-news-list">
					<?php 
						while($smdata->have_posts()): $smdata->the_post();
						
						$smimg_id		= get_post_thumbnail_id();
						$smimg_url		= wp_get_attachment_image_src($smimg_id);
						
					?>
						<li class="clearfix">
							<div class="scale_image_container">
								<a href="<?php the_permalink(); ?>"><img src="<?php echo $smimg_url[0]; ?>" alt="" class="scale_image" /></a>
							</div>
							<div class="post_text">
								<a href="<?php the_permalink(); ?>">
									<h4><?php the_title(); ?></h4>
								</a>
							</div>
						</li>
					<?php endwhile; ?>
					</ul>
					<?php 
						wp_reset_postdata();
						endif;
					?>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="mnews-default">
					<?php
					if(have_posts()):
					  $agrargs		= array(
							'post_type'			=> 'post',
							'cat'				=> $bvnews24['category-fourteen'],
							'posts_per_page'	=> 5
					  );
					  
					  $agrdata		= new WP_Query($agrargs);
					  
				?>
					<h3><a href="<?php echo get_category_link($bvnews24['category-fourteen']); ?>"><?php echo get_the_category_by_ID($bvnews24['category-fourteen']); ?></a></h3>
					<ul class="m-news-list">
					<?php 
						while($agrdata->have_posts()): $agrdata->the_post();
						
						$agrimg_id		= get_post_thumbnail_id();
						$agrimg_url		= wp_get_attachment_image_src($agrimg_id);
						
					?>
						<li class="clearfix">
							<div class="scale_image_container">
								<a href="<?php the_permalink(); ?>"><img src="<?php echo $agrimg_url[0]; ?>" alt="" class="scale_image" /></a>
							</div>
							<div class="post_text">
								<a href="<?php the_permalink(); ?>">
									<h4><?php the_title(); ?></h4>
								</a>
							</div>
						</li>
					<?php endwhile; ?>
					</ul>
					<?php 
						wp_reset_postdata();
						endif;
					?>
				</div>
			</div>
		</div>
		
		<!-- Add Block-->
		<div class="row m_top">
			<div class="col-md-6">
				<div class="ads-one">
					<h1><img src="" alt="Add Space" /></h1>
				</div>
			</div>
			<div class="col-md-6">
				<div class="ads-one">
					<h1><img src="" alt="Add Space" /></h1>
				</div>
			</div>
		</div><!-- End Add Block-->
		
		
		
		<div class="row m_top" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="mnews-default">
					<?php
					if(have_posts()):
					  $itargs		= array(
							'post_type'			=> 'post',
							'cat'				=> $bvnews24['category-fifteen'],
							'posts_per_page'	=> 5
					  );
					  
					  $itdata		= new WP_Query($itargs);
					  
				?>
					<h3><a href="<?php echo get_category_link($bvnews24['category-fifteen']); ?>"><?php echo get_the_category_by_ID($bvnews24['category-fifteen']); ?></a></h3>
					<ul class="m-news-list">
					<?php 
						while($itdata->have_posts()): $itdata->the_post();
						
						$itimg_id		= get_post_thumbnail_id();
						$itimg_url		= wp_get_attachment_image_src($itimg_id);
						
					?>
						<li class="clearfix">
							<div class="scale_image_container">
								<a href="<?php the_permalink(); ?>"><img src="<?php echo $itimg_url[0]; ?>" alt="" class="scale_image" /></a>
							</div>
							<div class="post_text">
								<a href="<?php the_permalink(); ?>">
									<h4><?php the_title(); ?></h4>
								</a>
							</div>
						</li>
					<?php endwhile; ?>
					</ul>
					<?php 
						wp_reset_postdata();
						endif;
					?>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="mnews-default">
					<?php
					if(have_posts()):
					  $wtargs		= array(
							'post_type'			=> 'post',
							'cat'				=> $bvnews24['category-sixteen'],
							'posts_per_page'	=> 5
					  );
					  
					  $wtdata		= new WP_Query($wtargs);
					  
				?>
					<h3><a href="<?php echo get_category_link($bvnews24['category-sixteen']); ?>"><?php echo get_the_category_by_ID($bvnews24['category-sixteen']); ?></a></h3>
					<ul class="m-news-list">
					<?php 
						while($wtdata->have_posts()): $wtdata->the_post();
						
						$wtimg_id		= get_post_thumbnail_id();
						$wtimg_url		= wp_get_attachment_image_src($wtimg_id);
						
					?>
						<li class="clearfix">
							<div class="scale_image_container">
								<a href="<?php the_permalink(); ?>"><img src="<?php echo $wtimg_url[0]; ?>" alt="" class="scale_image" /></a>
							</div>
							<div class="post_text">
								<a href="<?php the_permalink(); ?>">
									<h4><?php the_title(); ?></h4>
								</a>
							</div>
						</li>
					<?php endwhile; ?>
					</ul>
					<?php 
						wp_reset_postdata();
						endif;
					?>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="appear-animation fadeInDown appear-animation-visible" data-appear-animation="fadeInDown" data-appear-animation-delay="1150" style="animation-delay: 1150ms;">
				  <div class="tabs ui-tabs ui-widget ui-widget-content ui-corner-all">
					<!--tabs navigation-->
					<div class="clearfix tabs_conrainer">
					  <ul class="tabs_nav clearfix ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
						<li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tab-5" aria-labelledby="ui-id-5" aria-selected="true"><a href="#tab-5" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-5"><h3>সর্বাধিক পঠিত</h3></a></li>
						<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tab-6" aria-labelledby="ui-id-6" aria-selected="false"><a href="#tab-6" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-5"><h3>সাম্প্রতিক খবর</h3></a></li>
					  </ul>
					</div>
					<!--tabs content-->
					<div class="tabs_content post_var_inline side_bar_tabs tab_img">
					  <div id="tab-5" aria-labelledby="ui-id-5" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false" style="display: block;">
						<ul>
						<?php 
							$popargs	= array(
								'meta_key'	=> 'wpb_post_views_count',
								'orderby'	=> 'meta_value_num',
								'order'		=> 'DESC',
								'posts_per_page'=> 5
							);
							
							query_posts($popargs);
							if(have_posts()):
							while(have_posts()): the_post();
							
							$popimg_id		= get_post_thumbnail_id();
							$popimg_url		= wp_get_attachment_image_src($popimg_id);
							
						?>
						  <li class="clearfix">
							<div class="scale_image_container">
							  <a href="<?php the_permalink(); ?>"><img src="<?php echo $popimg_url[0]; ?>" alt="" class="scale_image"></a>
							</div>
							<div class="post_text">
							  <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
							  <div class="event_date"><?php the_time('F j, Y', ''); ?> | <?php the_time('', 'g:i'); ?>&nbsp;&nbsp;<span><a href="#"><?php echo wpb_get_post_views(get_the_ID()); ?></a></span></div>
							</div>
						  </li>
						 <?php
							endwhile; endif;
							wp_reset_query();
						 ?>
						</ul>
					  </div>
					  <div id="tab-6" aria-labelledby="ui-id-6" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" style="display: none;" aria-expanded="false" aria-hidden="true">
						<ul>
						<?php
						$args		= array(
							'post_type'			=> 'post',
							'cat'				=> '-1, -'.$bvnews24['category-nine'],
							'posts_per_page'	=> 5,
						);
						$requery		= new WP_Query($args);
						if($requery->have_posts()):
							while($requery->have_posts()): $requery->the_post();
							
							$rimg_id 	= get_post_thumbnail_id();
							$rimg_url	= wp_get_attachment_image_src($rimg_id);
						?>
						  <li class="clearfix">
							<div class="scale_image_container">
							  <a href="<?php the_permalink(); ?>"><img src="<?php echo $rimg_url[0]; ?>" alt="" class="scale_image"></a>
							</div>
							<div class="post_text">
							  <a href="<?php the_permalink(); ?>"><h4><?php the_title();?></h4></a>
							  <div class="event_date"><?php the_time('F j, Y'); ?> | <?php the_time('g:i'); ?></div>
							</div>
						  </li>
						<?php 
							endwhile;
							
							endif;
							wp_reset_postdata();
						?>
						</ul>
					  </div>
					</div>
				  </div>
				</div>
			</div>
		</div>
		
		<div class="row m_top" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="mnews-default">
					<?php
					if(have_posts()):
					  $cpargs		= array(
							'post_type'			=> 'post',
							'cat'				=> $bvnews24['category-seventeen'],
							'posts_per_page'	=> 5
					  );
					  
					  $cpdata		= new WP_Query($cpargs);
					  
				?>
					<h3><a href="<?php echo get_category_link($bvnews24['category-seventeen']); ?>"><?php echo get_the_category_by_ID($bvnews24['category-seventeen']); ?></a></h3>
					<ul class="m-news-list">
					<?php 
						while($cpdata->have_posts()): $cpdata->the_post();
						
						$cpimg_id		= get_post_thumbnail_id();
						$cpimg_url		= wp_get_attachment_image_src($cpimg_id);
						
					?>
						<li class="clearfix">
							<div class="scale_image_container">
								<a href="<?php the_permalink(); ?>"><img src="<?php echo $cpimg_url[0]; ?>" alt="" class="scale_image" /></a>
							</div>
							<div class="post_text">
								<a href="<?php the_permalink(); ?>">
									<h4><?php the_title(); ?></h4>
								</a>
							</div>
						</li>
					<?php endwhile; ?>
					</ul>
					<?php 
						wp_reset_postdata();
						endif;
					?>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="mnews-default">
					<?php
					if(have_posts()):
					  $spargs		= array(
							'post_type'			=> 'post',
							'cat'				=> $bvnews24['category-eighteen'],
							'posts_per_page'	=> 5
					  );
					  
					  $spdata		= new WP_Query($spargs);
					  
				?>
					<h3><a href="<?php echo get_category_link($bvnews24['category-eighteen']); ?>"><?php echo get_the_category_by_ID($bvnews24['category-eighteen']); ?></a></h3>
					<ul class="m-news-list">
					<?php 
						while($spdata->have_posts()): $spdata->the_post();
						
						$spimg_id		= get_post_thumbnail_id();
						$spimg_url		= wp_get_attachment_image_src($spimg_id);
						
					?>
						<li class="clearfix">
							<div class="scale_image_container">
								<a href="<?php the_permalink(); ?>"><img src="<?php echo $spimg_url[0]; ?>" alt="" class="scale_image" /></a>
							</div>
							<div class="post_text">
								<a href="<?php the_permalink(); ?>">
									<h4><?php the_title(); ?></h4>
								</a>
							</div>
						</li>
					<?php endwhile; ?>
					</ul>
					<?php 
						wp_reset_postdata();
						endif;
					?>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="mnews-default">
					<?php
					if(have_posts()):
					  $scargs		= array(
							'post_type'			=> 'post',
							'cat'				=> $bvnews24['category-nineteen'],
							'posts_per_page'	=> 5
					  );
					  
					  $scdata		= new WP_Query($scargs);
					  
				?>
					<h3><a href="<?php echo get_category_link($bvnews24['category-nineteen']); ?>"><?php echo get_the_category_by_ID($bvnews24['category-nineteen']); ?></a></h3>
					<ul class="m-news-list">
					<?php 
						while($scdata->have_posts()): $scdata->the_post();
						
						$scimg_id		= get_post_thumbnail_id();
						$scimg_url		= wp_get_attachment_image_src($scimg_id);
						
					?>
						<li class="clearfix">
							<div class="scale_image_container">
								<a href="<?php the_permalink(); ?>"><img src="<?php echo $scimg_url[0]; ?>" alt="" class="scale_image" /></a>
							</div>
							<div class="post_text">
								<a href="<?php the_permalink(); ?>">
									<h4><?php the_title(); ?></h4>
								</a>
							</div>
						</li>
					<?php endwhile; ?>
					</ul>
					<?php 
						wp_reset_postdata();
						endif;
					?>
				</div>
			</div>
		</div>
		
		<!-- Add Block-->
		<div class="row m_top">
			<div class="col-md-6">
				<div class="ads-one">
					<h1><img src="" alt="Add Space" /></h1>
				</div>
			</div>
			<div class="col-md-6">
				<div class="ads-one">
					<h1><img src="" alt="Add Space" /></h1>
				</div>
			</div>
		</div><!-- End Add Block-->
		
		<div class="row m_top" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
			<div class="col-md-8">
				<div class="gallery-slider">
					<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width:600px; height:325px; overflow: hidden; visibility: hidden;">
						<!-- Loading Screen -->
						<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
							<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
							<div style="position:absolute;display:block;background:url('<?php echo esc_url(get_template_directory_uri()); ?>/gslider/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
						</div>
						<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 325px; overflow: hidden;">
						<?php
							if(have_posts()):
							  $sprargs		= array(
									'post_type'			=> 'post',
									'cat'				=> $bvnews24['category-twenty'],
									'posts_per_page'	=> 5
								);
								
								$sprdata		= new WP_Query($sprargs);
								
								while($sprdata->have_posts()): $sprdata->the_post();
								
								$sprimg_id		= get_post_thumbnail_id();
								$sprimg_url		= wp_get_attachment_image_src($sprimg_id, '', true);
								
						?>
							<div data-p="112.50">
								<img data-u="image" src="<?php echo $sprimg_url[0]; ?>" />
								<div class="carousel-caption">
									<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								</div>
							</div>
						<?php
							endwhile;
							wp_reset_postdata();
							endif;
						?>	
						</div>
						<!-- Thumbnail Navigator -->
						<!--<div data-u="thumbnavigator" class="jssort09-600-45" style="position:absolute;bottom:0px;left:0px;width:600px;height:45px;">
							<div style="position: absolute; top: 0; left: 0; width: 100%; height:100%; background-color: #000; filter:alpha(opacity=40.0); opacity:0.4;"></div>-->
							<!-- Thumbnail Item Skin Begin -->
							<!--<div data-u="slides" style="cursor: default;">
								<div data-u="prototype" class="p">
									<div data-u="thumbnailtemplate" class="t"></div>
								</div>
							</div>-->
							<!-- Thumbnail Item Skin End -->
						<!--</div>-->
						
						<!-- Arrow Navigator -->
						<span data-u="arrowleft" class="jssora05l" style="top:0px;left:8px;width:40px;height:40px;" data-autocenter="2"></span>
						<span data-u="arrowright" class="jssora05r" style="top:0px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sprt-news">
				<?php
					if(have_posts()):
					  $spnrargs		= array(
							'post_type'			=> 'post',
							'cat'				=> $bvnews24['category-twenty'],
							'posts_per_page'	=> 10
					  );
						
					  $spnrdata		= new WP_Query($spnrargs);
				?>
					<h3><a href="<?php echo get_category_link($bvnews24['category-twenty']); ?>"><?php echo get_the_category_by_ID($bvnews24['category-twenty-one']); ?></a></h3>
					<ul class="sprtnews-list">
					<?php
						while($spnrdata->have_posts()): $spnrdata->the_post();
						
						$sprnimg_id		= get_post_thumbnail_id();
						$sprnimg_url	= wp_get_attachment_image_src($sprnimg_id);
					?>
						<li class="clearfix">
							<div class="scale_image_container">
								<a href="<?php the_permalink(); ?>"><img src="<?php echo $sprnimg_url[0]; ?>" alt="" class="scale_image" /></a>
							</div>
							<div class="post_text">
								<a href="<?php the_permalink(); ?>">
									<h4><?php the_title(); ?></h4>
								</a>
							</div>
						</li>
					<?php endwhile; ?>
					</ul>
					<?php
						wp_reset_postdata();
						endif;
					?>
				</div>
			</div>
		</div>
		
		<div class="row m_top" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="mnews-default">
					<?php
					if(have_posts()):
					  $lcargs		= array(
							'post_type'			=> 'post',
							'cat'				=> $bvnews24['category-twenty-two'],
							'posts_per_page'	=> 5
					  );
					  
					  $lcdata		= new WP_Query($lcargs);
					  
				?>
					<h3><a href="<?php echo get_category_link($bvnews24['category-twenty-two']); ?>"><?php echo get_the_category_by_ID($bvnews24['category-twenty-two']); ?></a></h3>
					<ul class="m-news-list">
					<?php 
						while($lcdata->have_posts()): $lcdata->the_post();
						
						$lcimg_id		= get_post_thumbnail_id();
						$lcimg_url		= wp_get_attachment_image_src($lcimg_id);
						
					?>
						<li class="clearfix">
							<div class="scale_image_container">
								<a href="<?php the_permalink(); ?>"><img src="<?php echo $lcimg_url[0]; ?>" alt="" class="scale_image" /></a>
							</div>
							<div class="post_text">
								<a href="<?php the_permalink(); ?>">
									<h4><?php the_title(); ?></h4>
								</a>
							</div>
						</li>
					<?php endwhile; ?>
					</ul>
					<?php 
						wp_reset_postdata();
						endif;
					?>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="mnews-default">
				<?php
					if(have_posts()):
					  $lctsargs		= array(
							'post_type'			=> 'post',
							'cat'				=> $bvnews24['category-twenty-three'],
							'posts_per_page'	=> 5
					  );
					  
					  $lctsdata		= new WP_Query($lctsargs);
					  
				?>
					<h3><a href="<?php echo get_category_link($bvnews24['category-twenty-three']); ?>"><?php echo get_the_category_by_ID($bvnews24['category-twenty-three']); ?></a></h3>
					<ul class="m-news-list">
					<?php 
						while($lctsdata->have_posts()): $lctsdata->the_post();
						
						$lctsimg_id		= get_post_thumbnail_id();
						$lctsimg_url		= wp_get_attachment_image_src($lctsimg_id);
						
					?>
						<li class="clearfix">
							<div class="scale_image_container">
								<a href="<?php the_permalink(); ?>"><img src="<?php echo $lctsimg_url[0]; ?>" alt="" class="scale_image" /></a>
							</div>
							<div class="post_text">
								<a href="<?php the_permalink(); ?>">
									<h4><?php the_title(); ?></h4>
								</a>
							</div>
						</li>
					<?php endwhile; ?>
					</ul>
					<?php 
						wp_reset_postdata();
						endif;
					?>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="mnews-default">
				<?php
					if(have_posts()):
					  $irargs		= array(
							'post_type'			=> 'post',
							'cat'				=> $bvnews24['category-twenty-four'],
							'posts_per_page'	=> 5
					  );
					  
					  $irdata		= new WP_Query($irargs);
					  
				?>
					<h3><a href="<?php echo get_category_link($bvnews24['category-twenty-four']); ?>"><?php echo get_the_category_by_ID($bvnews24['category-twenty-four']); ?></a></h3>
					<ul class="m-news-list">
					<?php 
						while($irdata->have_posts()): $irdata->the_post();
						
						$irimg_id		= get_post_thumbnail_id();
						$irimg_url		= wp_get_attachment_image_src($irimg_id);
						
					?>
						<li class="clearfix">
							<div class="scale_image_container">
								<a href="<?php the_permalink(); ?>"><img src="<?php echo $irimg_url[0]; ?>" alt="" class="scale_image" /></a>
							</div>
							<div class="post_text">
								<a href="<?php the_permalink(); ?>">
									<h4><?php the_title(); ?></h4>
								</a>
							</div>
						</li>
					<?php endwhile; ?>
					</ul>
					<?php 
						wp_reset_postdata();
						endif;
					?>
				</div>
			</div>
		</div>
		
		<div class="row m_top" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="mnews-default">
					<?php
					if(have_posts()):
					  $distargs		= array(
							'post_type'			=> 'post',
							'cat'				=> $bvnews24['category-twenty-five'],
							'posts_per_page'	=> 5
					  );
					  
					  $distdata		= new WP_Query($distargs);
					  
				?>
					<h3><a href="<?php echo get_category_link($bvnews24['category-twenty-five']); ?>"><?php echo get_the_category_by_ID($bvnews24['category-twenty-five']); ?></a></h3>
					<ul class="m-news-list">
					<?php 
						while($distdata->have_posts()): $distdata->the_post();
						
						$distimg_id		= get_post_thumbnail_id();
						$distimg_url		= wp_get_attachment_image_src($distimg_id);
						
					?>
						<li class="clearfix">
							<div class="scale_image_container">
								<a href="<?php the_permalink(); ?>"><img src="<?php echo $distimg_url[0]; ?>" alt="" class="scale_image" /></a>
							</div>
							<div class="post_text">
								<a href="<?php the_permalink(); ?>">
									<h4><?php the_title(); ?></h4>
								</a>
							</div>
						</li>
					<?php endwhile; ?>
					</ul>
					<?php 
						wp_reset_postdata();
						endif;
					?>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="mnews-default">
					<?php
					if(have_posts()):
					  $lsargs		= array(
							'post_type'			=> 'post',
							'cat'				=> $bvnews24['category-twenty-six'],
							'posts_per_page'	=> 5
					  );
					  
					  $lsdata		= new WP_Query($lsargs);
					  
				?>
					<h3><a href="<?php echo get_category_link($bvnews24['category-twenty-six']); ?>"><?php echo get_the_category_by_ID($bvnews24['category-twenty-six']); ?></a></h3>
					<ul class="m-news-list">
					<?php 
						while($lsdata->have_posts()): $lsdata->the_post();
						
						$lsimg_id		= get_post_thumbnail_id();
						$lsimg_url		= wp_get_attachment_image_src($lsimg_id);
						
					?>
						<li class="clearfix">
							<div class="scale_image_container">
								<a href="<?php the_permalink(); ?>"><img src="<?php echo $lsimg_url[0]; ?>" alt="" class="scale_image" /></a>
							</div>
							<div class="post_text">
								<a href="<?php the_permalink(); ?>">
									<h4><?php the_title(); ?></h4>
								</a>
							</div>
						</li>
					<?php endwhile; ?>
					</ul>
					<?php 
						wp_reset_postdata();
						endif;
					?>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="horoscop">
				<?php
					/*if(have_posts()):
					  $hsargs		= array(
							'post_type'			=> 'post',
							'cat'				=> $bvnews24['category-twenty-seven'],
							'posts_per_page'	=> 1
					  );
					  
					  $hsdata		= new WP_Query($hsargs);*/
					  
				?>
					<h3><a href="<?php echo get_category_link($bvnews24['category-twenty-seven']); ?>"><?php echo get_the_category_by_ID($bvnews24['category-twenty-seven']); ?></a></h3>
					<ul>
					<?php 
						//while($hsdata->have_posts()): $hsdata->the_post();
						
						//$hsimg_id		= get_post_thumbnail_id();
						//$hsimg_url		= wp_get_attachment_image_src($hsimg_id);
						
					?>
						<li class="clearfix">
							<div class="scale_image_container">
								<a href="<?php echo get_category_link($bvnews24['category-twenty-seven']); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/horoscopes.jpg" alt="" class="scale_image" /></a>
							</div>
							<div class="post_text">
								<a href="<?php echo get_category_link($bvnews24['category-twenty-seven']); ?>">
									<h4>জেনে নিন আপনার রাশিফল!</h4>
								</a>
							</div>
						</li>
					<?php //endwhile; ?>
					</ul>
					<?php 
						/*wp_reset_postdata();
						endif;*/
					?>
				</div>
				
				<div class="arothers">
					<div class="appear-animation fadeInDown appear-animation-visible" data-appear-animation="fadeInDown" data-appear-animation-delay="1150" style="animation-delay: 1150ms;">
					  <div class="tabs ui-tabs ui-widget ui-widget-content ui-corner-all">
						<!--tabs navigation-->
						<div class="clearfix tabs_conrainer">
						  <ul class="tabs_nav clearfix ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
							<li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tab-7" aria-labelledby="ui-id-7" aria-selected="true"><a href="#tab-7" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-7"><h3>অন্যান্য সংবাদপত্র</h3></a></li>
							<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tab-8" aria-labelledby="ui-id-8" aria-selected="false"><a href="#tab-8" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-8"><h3>আর্কাইভ সংবাদ </h3></a></li>
						  </ul>
						</div>
						<!--tabs content-->
						<div class="tabs_content post_var_inline side_bar_tabs tab_img">
						  <div id="tab-7" aria-labelledby="ui-id-7" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false" style="display: block;">
							<ul class="news_paper">
								<li class="clearfix">
									<div class="scale_image_container">
										<a href="http://localhost/wp_banglavision24/newspaper/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/newspaper-img.png" alt="" class="scale_image" /></a>
										<div class="news_link">
											<a href="http://localhost/wp_banglavision24/newspaper/" target="_blank">
												<h4>সকল সংবাদপত্র</h4>
											</a>
										</div>
									</div>
								</li>
							</ul>
						  </div>
						  <div id="tab-8" aria-labelledby="ui-id-8" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" style="display: none;" aria-expanded="false" aria-hidden="true">
							<ul>
									<?php
										/* $defaults = array(
											'next_text' => '˃',
											'prev_text' => '˂',
											'post_count' => true,
											'month_view' => true,
											'month_select' => 'default',
											'different_theme' => true,
											'theme' => 'Custom 1',
											'categories' => null,
											'post_type' => 'post'
										);
										archive_calendar($defaults); */
										dynamic_sidebar('calender_widget');
									?>
							</ul>
						  </div>
						</div>
					  </div>
					</div>
				</div>
				
			</div>
		</div>
		
		<!-- Add Block-->
		<div class="row m_top">
			<div class="col-md-6">
				<div class="ads-one">
					<h1><img src="" alt="Add Space" /></h1>
				</div>
			</div>
			<div class="col-md-6">
				<div class="ads-one">
					<h1><img src="" alt="Add Space" /></h1>
				</div>
			</div>
		</div><!-- End Add Block-->
		
      </div>
    </div>
	
	<!--==============================news carousel=================================-->
	<div class="news_gallery" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
      <div class="container">
        <!--Gallery-->
        <div id="owl-demo-5">
		<?php
		  if(have_posts()):
			$gargs		= array(
				'post_type'			=> 'post', 
				'cat'				=> $bvnews24['category-twenty-eight'],
			);
			
			$gdata		= new WP_Query($gargs);
			
			while($gdata->have_posts()): $gdata->the_post();
				
			$gimg_id		= get_post_thumbnail_id();
			$gimg_url		= wp_get_attachment_image_src($gimg_id, 'news_gallery_img', true);
			
		?>
          <div class="item">
            <div class="scale_image_container">
              <a href="<?php the_permalink(); ?>"><img src="<?php echo $gimg_url[0]; ?>" alt="" class="scale_image"></a>
              <!--caption-->
              <div class="caption_type_1">
                <div class="caption_inner">
                  <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                </div>
              </div>
            </div>
          </div>
		<?php
			endwhile;
			wp_reset_postdata();
			endif;
		?>
        </div>
		
		
<?php
get_footer();
?>