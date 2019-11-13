<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Nagradna Igre
 * @since 1.0.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('md:mr-12 mb-10'); ?>>

    <div class="max-w-xs flex rounded-lg overflow-hidden shadow-lg mx-auto">
        <a href="<?php the_permalink(); ?>">
            <?php  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
            <img class="w-full" src="<?php echo $featured_img_url; ?>"  alt="Blog post" />
            <div class="px-6 py-4">
                <h3 class="font-bold text-xl mb-2 leading-normal"><?php the_title(); ?></h3>
                <p class="leading-normal font-light text-base text-gray-700"><?php echo  get_the_excerpt(); ?></p>
            </div>
            <div class="px-6 py-4"><span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2 mb-1"><span>#photography</span></span><span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2 mb-1"><span>#travel</span></span><span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2 mb-1"><span>#winter</span></span>
            </div>
        </a>
    </div>

</article><!-- #post-<?php the_ID(); ?> -->