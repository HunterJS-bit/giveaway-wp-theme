<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package nagrada
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<div class="wrapper container px-6 mx-auto">
			<?php
				get_template_part( 'template-parts/content', 'single');
			?>
			</div>
			<?php 

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
		<?php wcr_related_posts(); ?>
	</div><!-- #primary -->

<?php
get_footer();
