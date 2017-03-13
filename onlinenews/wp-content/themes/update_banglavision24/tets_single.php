<?php
get_header();
?>
<?php
	if(have_posts()): 
		while(have_posts()): the_post();
			topViewPost(get_the_ID());
?>
		<div class="clearfix" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
			<div class="row">
				<div class="col-md-8">
					<div class="n_title">
						<h1><?php if($post->ID){ the_title();} ?></h1>
						<p><?php echo do_shortcode('[english_date]'); ?></p>
					</div>
					<div class="share_social">
						<?php echo addthis_print_widget(); ?>
					</div>
					<div class="p_single_content">
						<?php if($post->ID){ echo get_the_content();} ?>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="add_space">
					
					</div>
					
					<div class="related_news">
					
					</div>
				</div>
			</div>
		</div>
		
		<div class="clearfix" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
			<div class="row">
				<div class="related_news_block">
					
				</div>
			</div>
		</div>

<?php
		endwhile;
	endif;
?>

<?php
get_template_part("footer_one");
?>

