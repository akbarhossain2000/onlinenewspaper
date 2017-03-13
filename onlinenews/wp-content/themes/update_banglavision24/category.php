<?php
get_header();
?>

<div class="clearfix" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
	<div class="row cat-div-mg">
		<div class="col-md-12">
			<h2 class="cat_title"><?php echo single_cat_title('', false); ?></h2>
			<div class="row">
				<?php
					if(is_category($bvnews24['category-nine'])){
						if(have_posts()):
							while(have_posts()): the_post();
				?>
							<div class="col-md-6">
								<div class="v_item">
									<iframe width="100%" height="350" src="https://www.youtube.com/embed/<?php the_title(); ?>" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
				<?php
							endwhile;
						endif;
					}
					elseif(is_category($bvnews24['category-twenty-seven'])){
						if(have_posts()):
							while(have_posts()): the_post();
							
							$hcatimg_id			= get_post_thumbnail_id();
							$hcatimg_url		= wp_get_attachment_image_src($hcatimg_id, 'medium', true);
				?>				
							<div class="col-md-6">
								<div class="hcop_item">
									<h3 class="hcop_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
									<div class="hcop_cat_item">
										<div class="scale_image_container">
											<a href="<?php the_permalink(); ?>"><img src="<?php echo $hcatimg_url[0]; ?>" alt="" class="scale_image" /></a>	
										</div>
										<div class="hcop_text">
											<p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?>&nbsp;<a href="<?php the_permalink(); ?>">বিস্তারিত</a></p>
										</div>
										
									</div>
								</div>
							</div>
				<?php
							endwhile;
						endif;
					}else{
						if(have_posts()):
							while(have_posts()): the_post();
						
							$catimg_id			= get_post_thumbnail_id();
							$catimg_url			= wp_get_attachment_image_src($catimg_id, 'medium', true);
						
				?>
							<div class="col-md-4">
								<div class="cat_item">
									<div class="scale_image_container">
										<a href="<?php the_permalink(); ?>"><img src="<?php echo $catimg_url[0]; ?>" alt="" class="scale_image" /></a>
										<div class="cat_item_title">
											<a href="<?php the_permalink(); ?>">
												<h3><?php the_title(); ?></h3>
											</a>
										</div>
									</div>
								</div>
								<div class="cat_item_content">
									<p><?php echo wp_trim_words(get_the_content(), 15, '...'); ?><a href="<?php the_permalink(); ?>">বিস্তারিত </a></p>
								</div>
							</div>
				<?php 
							endwhile;
						endif;
					}
						
				?>
			</div>
		</div>
	</div>
</div>


<?php
get_template_part("footer_one");
?>