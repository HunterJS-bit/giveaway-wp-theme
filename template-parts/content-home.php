<div class="flex h-full bg-white rounded overflow-hidden shadow-lg mb-10" id="post-<?php the_ID(); ?>" <?php post_class('', 'flex-1'); ?>>
	<a href="<?php the_permalink(); ?>" class="flex flex-wrap no-underline hover:no-underline">
        <div class="rounded-t md:w-1/2">	
            <?php  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
            <img class="w-full" src="<?php echo $featured_img_url; ?>" class="h-full w-full shadow" />
		</div>

		<div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
							<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
								<p class="w-full text-gray-600 text-xs md:text-sm pt-6 px-6">NOVO</p>
								<div class="w-full font-bold text-2xl text-gray-900 px-6">👋 <?php the_title(); ?></div>
								<p class="text-gray-800 w-10/12 font-serif text-base mt-3 px-6 mb-5">
                                <?php echo  get_the_excerpt(); ?>
								</p>
			</div>
		</div>
   </a>
</div>