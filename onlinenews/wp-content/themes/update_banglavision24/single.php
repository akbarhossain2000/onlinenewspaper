<?php
get_header();
?>

	<div class="clearfix" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
		<div class="row">
			<div class="col-md-8">
			<?php
			if(in_category($bvnews24['category-twenty-seven'])){
				if(have_posts()): 
					while(have_posts()): the_post();
						//topViewPost(get_the_ID());
			?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php the_title('<h1 class="entry-title">', '</h1>') ?>
						<div class="show_date">
					
							<p>অনলাইন ডেস্ক | &nbsp;&nbsp;<?php the_time('F j, Y'); ?></p>
						</div>
						<div class="share_social">
							<?php echo addthis_print_widget(); ?>
						</div>
						<div class="horoscope_single">
							<?php if(has_post_thumbnail()): ?>
								<div class="f_img">
									<?php the_post_thumbnail('single_page_img'); ?>
								</div>
								<!--<div class="caption_text">
									<h2><?php //do_shortcode('[ccfic format="plaintext"]'); ?></h3>
								</div>-->
							<?php endif; ?>
							
							<div class="sp_content">
								<?php the_content(); ?>
							</div>
						</div>
					</article>
			<?php
					endwhile;
				endif;
			}else{
				if(have_posts()): 
					while(have_posts()): the_post();
						//topViewPost(get_the_ID());
			?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php the_title('<h1 class="entry-title">', '</h1>') ?>
						<div class="show_date">
					
							<p>অনলাইন ডেস্ক | &nbsp;&nbsp;<?php the_time('F j, Y'); ?></p>
						</div>
						<div class="share_social">
							<?php echo addthis_print_widget(); ?>
						</div>
						<?php if(has_post_thumbnail()): ?>
							<div class="f_img">
								<?php the_post_thumbnail('single_page_img'); ?>
							</div>
							<!--<div class="caption_text">
								<h2><?php //do_shortcode('[ccfic format="plaintext"]'); ?></h3>
							</div>-->
						<?php endif; ?>
						
						<div class="sp_content">
							<?php the_content(); ?>
						</div>
					</article>
			<?php
					endwhile;
				endif;
			}
			?>
				<div class="s1_add_space">
					<h1><img src="" alt="Add Space" /></h1>
				</div>
			</div>
				
				<div class="col-md-4">
					<div class="s_add_space">
						<h1><img src="" alt="Add Space" /></h1>
					</div>
					
					<div class="related_news">
						<?php 
							$id = get_the_ID();
							$cat_id = get_the_category($id);
						?>
						<h3><a href="">এই বিভাগের অন্যান্য  সংবাদ</a></h3>
						<ul>
						<?php 
							$args = array(
								'cat'			=> $cat_id[0]->cat_ID,
								'posts_per_page'=> 12,
								'order'			=> 'DESC',
							);
							
							$rldata		= new WP_Query($args);
							if($rldata->have_posts()):
							
							while($rldata->have_posts()): $rldata->the_post();
							
							$rlimg_id			= get_post_thumbnail_id();
							$rlimg_url			= wp_get_attachment_image_src($rlimg_id);
						?>
							<li class="clearfix">
								<div class="scale_image_container">
									<a href="<?php the_permalink(); ?>"><img src="<?php echo $rlimg_url[0]; ?>" alt="" class="scale_image" /></a>
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
		</div>
	</div>
		
	<div class="clearfix" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
		<div class="row">
			<div class="related_news_block">
				<div class="col-md-12">
					<h2>এই রকম আরও খবর </h2>
					<div class="row">
					<?php
						$args = array(
								'cat'			=> $cat_id[0]->cat_ID,
								'posts_per_page'=> 4,
								'order'			=> 'DESC',
							);
							
							$rlndata		= new WP_Query($args);
							if($rlndata->have_posts()):
							
							while($rlndata->have_posts()): $rlndata->the_post();
							
							$rlnimg_id			= get_post_thumbnail_id();
							$rlnimg_url			= wp_get_attachment_image_src($rlnimg_id, 'medium', true);
					?>
						<div class="col-md-3">
							<div class="rn_item">
								<div class="scale_image_container">
									<a href="<?php the_permalink(); ?>"><img src="<?php echo $rlnimg_url[0]; ?>" alt="" class="scale_image" /></a>
									
									<div class="rn_caption_text">
										<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
									</div>
								</div>
								
							</div>
							<div class="rn_content_text">
								<p><?php echo wp_trim_words(get_the_content(), 15, '...') ?>&nbsp;<a href="<?php the_permalink(); ?>">বিস্তারিত </a></p>
							</div>
						</div>
					<?php 
							endwhile;
							endif;
							wp_reset_postdata();
					?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="clearfix" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
		<div class="row">
			<div class="col-md-12">
				<div class="sfooter_add">
					<h1><img src="" alt="Add Space" /></h1>
				</div>
			</div>
		</div>
	</div>


<?php
get_template_part("footer_one");
?>

