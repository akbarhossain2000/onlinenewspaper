<?php
get_header();
?>

	<div class="clearfix" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
		<div class="row">
			<div class="col-md-8">
				<div class="se1_add_space">
					<h1><img src="" alt="Add Space" /></h1>
				</div>
				<div class="se_result">
					<h2 class="se_title"><?php printf( __( 'Search Results for: %s', 'bvn24' ), get_search_query() ); ?></h2>
				</div>
			<?php
				
				if(have_posts()): 
					while(have_posts()): the_post();
					
					$img_id		= get_post_thumbnail_id();
					$img_url	= wp_get_attachment_image_src($img_id, 'medium', true);
			?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<a href="<?php the_permalink(); ?>"><?php the_title('<h2 class="s-entry-title">', '</h2>') ?></a>
						<div class="show_date">
							<p>অনলাইন ডেস্ক | &nbsp;&nbsp;<?php the_time('F j, Y'); ?></p>
						</div>

						
						<div class="se_f_img">
						<?php if(has_post_thumbnail()): ?>
							<div class="scale_image_container">
								<a href="<?php the_permalink(); ?>"><img src="<?php echo $img_url[0]; ?>" alt="" class="scale_image" /></a>
							</div>
						<?php endif; ?>
							<div class="se_content">
								<p><?php echo wp_trim_words(get_the_content(), 50, '...'); ?>&nbsp;<a href="<?php the_permalink(); ?>">বিস্তারিত</a></p>
							</div>
						</div>
					</article>
			<?php
					endwhile;
				endif;
			?>
			</div>
			
			<div class="col-md-4">
				<div class="se_add_space">
					<h1><img src="" alt="Add Space" /></h1>
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

