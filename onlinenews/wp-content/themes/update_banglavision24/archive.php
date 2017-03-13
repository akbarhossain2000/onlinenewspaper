<?php 
get_header();
?>

<div class="clearfix" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
	<div class="row">
		<div class="col-md-9">
			<div class="a1_add_space">
				<h1><img src="" alt="Add Space" /></h1>
			</div>
			<div class="archive_title">
				<h2>Archive News</h2>
			</div>
			<div class="archive_date">
				<p>Dhaka,&nbsp;&nbsp;<?php the_time('l, j F Y'); ?></p>
			</div>
			<div class="archive_news_area">
				<div class="row">
				
				<?php
					$category_id = get_the_category();
					$cats		= array();
					$i = 0;
					foreach($category_id as $k){
						$cats[] = array( 'categoryid'=>$k->cat_ID, 'name' => $k->name, 'slug' => $k->slug );	
						if($cats[$i]['categoryid'] == $bvnews24['category-nine']){
							
				?>
						
						<div class="col-md-6">
							<div class="arc_video">
								<iframe width="100%" height="250" src="https://www.youtube.com/embed/<?php the_title(); ?>" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
					
				<?php 
						}else{
				?>
						<div class="col-md-4">
							<div class="ar_news_content">
								<h3><?php echo $cats[$i]['name']; ?></h3>
								<ul>
								<?php
									$args = array(
										'post_type'	=> 'post',
										'cat'		=> '-1, -'.$bvnews24['category-nine']
									);
									$arc_data		= new WP_Query($args);
									if($arc_data->have_posts()):
										while($arc_data->have_posts()): $arc_data->the_post();
										
										$img_id		= get_post_thumbnail_id();
										$img_url	= wp_get_attachment_image_src($img_id);
								?>
									<li class="clearfix">
										<div class="scale_image_container">
											<a href="<?php the_permalink(); ?>"><img src="<?php echo $img_url[0]; ?>" alt="" class="scale_image" /></a>
										</div>
										<div class="post_text">
											<a href="<?php the_permalink(); ?>">
												<h4><?php the_title(); ?></h4>
											</a>
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
				<?php
						}
					$i++;
					}
				?>
				
				
				
				</div>
			</div>
		</div>
		
		<div class="col-md-3">
			<div class="a_add_space">
				<h1><img src="" alt="Add Space" /></h1>
			</div>
			
			<div class="arc_page_calendar">
				<h3>Archive Calendar</h3>
				<ul>
					<?php
						dynamic_sidebar('calender_widget');
					?>
				</ul>
			</div>
		</div>
	</div>
</div>




<?php
get_template_part('footer_one');
?>