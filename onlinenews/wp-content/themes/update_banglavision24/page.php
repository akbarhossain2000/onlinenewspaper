<?php 
get_header();
?>

<div class="clearfix" data-appear-animation="fadeInDown" data-appear-animation-delay="1150">
	<div class="row">
		<div class="col-md-12">
		<?php
			if(have_posts()):
				while(have_posts()): the_post();
		?>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<div class="font_content">
					<p><?php the_content(); ?></p>
				</div>
		<?php
				endwhile;
			endif;
		?>
		</div>
	</div>
</div>




<?php
get_template_part('footer_one');
?>