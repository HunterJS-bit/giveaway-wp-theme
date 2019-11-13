<article  id="post-<?php the_ID(); ?>" class="w-full md:w-1/4 md:mr-12 flex flex-col flex-grow flex-shrink mb-10">
	<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
		<a href="<?php the_permalink(); ?>"  class="flex flex-wrap no-underline hover:no-underline">
			<?php  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
			<img src="<?php echo $featured_img_url; ?>" class="h-64 w-full rounded-t pb-6">
			<p class="w-full text-gray-600 text-xs md:text-sm px-6">NOVO</p>
			<div class="w-full font-bold text-xl text-gray-900 px-6 mb-3">👋 <?php the_title(); ?></div>
			<p class="text-gray-800 font-serif text-base px-6 mb-5">
				<?php echo  get_the_excerpt(); ?>
			</p>
		</a>
		</div>
		<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
			<div class="flex items-center justify-between">
					<p class="text-gray-600 text-xs md:text-sm"><?php echo time_ago(); ?></p>
			</div>
	</div>
</article>