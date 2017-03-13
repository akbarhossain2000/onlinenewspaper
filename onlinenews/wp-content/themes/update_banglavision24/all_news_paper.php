<?php
/*
Template Name: NewsPaper

*/
get_header();
?>

<div class="clearfix">
	<div class="row">
		<div class="col-md-6" data-appear-animation="fadeInLeft" data-appear-animation-delay="1150">
			<div class="add_space">
				<h1><img src="" alt="Add Space" /></h1>
			</div>
		</div>
		<div class="col-md-6" data-appear-animation="fadeInRight" data-appear-animation-delay="1150">
			<div class="add_space">
				<h1><img src="" alt="Add Space" /></h1>
			</div>
		</div>
	</div>
</div>

<div class="clearfix" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
	<div class="row">
		<div class="col-md-12">
			<div class="n_title">
				<h2>All Bangla Newspapers</h2>
			</div>
			<div class="bangla_news">
				<div class="row">
					<div class="news">
					<?php 
						$bn_news	= array(
							'post_type'		=> 'bangla_newspaper',
							'order'			=> 'ASC',
						);
						
						$bn_data		= new WP_Query($bn_news);
						
						if(have_posts()):
						while($bn_data->have_posts()): $bn_data->the_post();
						
						$bn_img_id 	= get_post_thumbnail_id();
						$bn_img_url	= wp_get_attachment_image_src($bn_img_id, '', true);
					?>
						<div class="col-md-2">
							<div class="news_list">
								<div class="scale_image_container">
									<?php 
									
										$str = get_the_title();
										$str_get = explode(".", $str);
										$str_concate = $str_get[1];
									
									?>
									<a href="<?php the_title(); ?>" target="_blank"><img src="<?php echo $bn_img_url[0]; ?>" alt="" class="scale_image" /></a>
									<div class="news_caption">
										<a href="<?php the_title(); ?>" target="_blank">
											<h4><?php echo $str_concate; ?></h4>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php
						endwhile;
						endif;
					?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="clearfix" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
	<div class="row">
		<div class="col-md-12">
			<div class="n_title">
				<h2>All Online Newspapers</h2>
			</div>
			<div class="bangla_news">
				<div class="row">
					<div class="news">
					<?php 
						$on_args	= array(
							'post_type'		=> 'online_newspaper',
							'order'			=> 'ASC',
						);
						
						$on_data		= new WP_Query($on_args);
						if(have_posts()):
						while($on_data->have_posts()): $on_data->the_post();
						
						$on_img_id		= get_post_thumbnail_id();
						$on_img_url		= wp_get_attachment_image_src($on_img_id, '', true);
						
					?>
						<div class="col-md-2">
							<div class="news_list">
								<div class="scale_image_container">
									<?php 
									
										$str = get_the_title();
										$str_get = explode(".", $str);
										$str_concate = $str_get[1];
									
									?>
									<a href="<?php the_title(); ?>"><img src="<?php echo $on_img_url[0]; ?>" alt="" class="scale_image" /></a>
									<div class="news_caption">
										<a href="<?php the_title(); ?>">
											<h4><?php echo $str_concate; ?></h4>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php
						endwhile;
						endif;
					?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="clearfix" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
	<div class="row">
		<div class="col-md-12">
			<div class="n_title">
				<h2>All Local Newspapers</h2>
			</div>
			<div class="bangla_news">
				<div class="row">
					<div class="news">
					<?php
						$local_args		= array(
							'post_type'		=> 'local_newspaper',
							'order'			=> 'ASC',
						);
						$local_data			= new WP_Query($local_args);
						if(have_posts()):
						while($local_data->have_posts()): $local_data->the_post();
						
						$local_img_id		= get_post_thumbnail_id();
						$local_img_url		= wp_get_attachment_image_src($local_img_id, '', true);
					?>
						<div class="col-md-2">
							<div class="news_list">
								<div class="scale_image_container">
									<?php 
									
										$str = get_the_title();
										$str_get = explode(".", $str);
										$str_concate = $str_get[1];
									
									?>
									<a href="<?php the_title(); ?>"><img src="<?php echo $local_img_url[0]; ?>" alt="" class="scale_image" /></a>
									<div class="news_caption">
										<a href="<?php the_title(); ?>">
											<h4><?php echo $str_concate; ?></h4>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php
						endwhile;
						endif;
					?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="clearfix" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
	<div class="row">
		<div class="col-md-12">
			<div class="n_title">
				<h2>International Newspapers</h2>
			</div>
			<div class="bangla_news">
				<div class="row">
					<div class="news">
					<?php  
						$int_args		= array(
								'post_type'		=> 'inter_newspaper',
								'order'			=> 'ASC',
						);
						$inter_data			= new WP_Query($int_args);
						if(have_posts()):
						while($inter_data->have_posts()): $inter_data->the_post();
						
						$inter_img_id		= get_post_thumbnail_id();
						$inter_img_url		= wp_get_attachment_image_src($inter_img_id, '', true);
					?>
						<div class="col-md-2">
							<div class="news_list">
								<div class="scale_image_container">
									<?php 
									
										$str = get_the_title();
										$str_get = explode(".", $str);
										$str_concate = $str_get[1];
									
									?>
									<a href="<?php the_title(); ?>"><img src="<?php echo $inter_img_url[0]; ?>" alt="" class="scale_image" /></a>
									<div class="news_caption">
										<a href="<?php the_title(); ?>">
											<h4><?php echo $str_concate; ?></h4>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php
						endwhile;
						endif;
					?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="clearfix" data-appear-animation="fadeInUp" data-appear-animation-delay="1150">
	<div class="row">
		<div class="col-md-12">
			<div class="add_space">
				<h1><img src="" alt="Add Space" /></h1>
			</div>
		</div>
	</div>
</div>

<?php
get_template_part('footer_one');
?>