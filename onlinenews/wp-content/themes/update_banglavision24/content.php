<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 <header class="entry-header">
 <br>
<div style="float:left">
            <h5> 			 
			</h5>
						 
                        </div> <br>
		<?php
			if ( is_single() ) :
				the_title( '<h2 class="entry-title">', '</h2>' ); //echo get_secondary_title(); 

			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?> <br><br> <?php echo addthis_print_widget()?>
	</header><!-- .entry-header -->
<br/>
	<h3 align="center">
<?php
		// Post thumbnail.
		 //twentyfifteen_post_thumbnail();
	?>
	</h3>
	<br />

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page') . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php
		// Author bio.
		//if ( is_single() && get_the_author_meta( 'description' ) ) :
			//get_template_part( 'author-bio' );
		//endif;
	?>

	

</article><!-- #post-## -->
