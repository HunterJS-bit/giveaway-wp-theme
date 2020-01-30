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
					<div class="flex flex-col items-center text-grey-darker justify-center h-screen animated-gradient text-white">
					
						<h1 class="text-xl md:text-3xl lg:text-6xl xl:text-6xl font-light leading-none mb-2 font-bold text-gray-700">404</h1>
						<h2 class="text-gray-600">Nažalost, nismo našli stranicu koju ste tražili</h1>
						<hr class="block w-1/2  lg:w-full max-w-sm mx-auto border my-8">
						<p class="text-xl"><a href="/" class="hover:underline text-gray-700">Vratite se nazad</a></p>
					</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
