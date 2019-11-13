<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package nagrada
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<div class="md:flex h-screen">
					<div class="w-full flex items-center justify-center ">
						<div class="max-w-sm m-8">
						<div class="text-black text-5xl md:text-15xl font-black">Error 404</div>
						<div class="w-16 h-1 bg-purple-light my-3 md:my-6"></div>
						<p class="text-grey-darker text-2xl md:text-3xl font-light mb-8 leading-normal">Nažalost, nismo našli stranicu koju ste tražili :(</p>
						<a class="bg-transparent text-grey-darkest font-bold uppercase tracking-wide py-3 px-6 border-2 border-grey-light hover:border-grey rounded-lg mt-8" href="./">Go Home</a>
						</div>
					</div>
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
