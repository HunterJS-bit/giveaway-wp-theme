<?php
/**
 * Template part for displaying single post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nagrada
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('w-full flex flex-column justify-center ng-post cardo'); ?>>
    <div class="flex flex-col items-center post">
        <div class="text-center pt-5">
            <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                echo '<a href="'.esc_url($featured_img_url).'" rel="lightbox">'; 
                the_post_thumbnail('full');
                echo '</a>';
            ?>
            <p class="text-sm pt-5 md:text-base text-teal-500 font-bold"><?php echo get_the_date(); ?>
            </p>
            <?php the_title( '<h1 class="entry-title font-bold break-normal text-3xl md:text-5xl">', '</h1>' ); ?>
            <hr class="border-0 border-b border-gray-400 mt-5 w-1/2"> 
        </div>
        <div id="posttext" class="content leading-normal pb-10 lg:mt-0 lg:w-4/5 text-gray-700 w-full">
            <?php the_content(); ?>
            <div class="post-meta">
                <a class="mark" href="<?php echo get_post_meta(get_the_ID(), 'meta-box-text', true); ?>" target="_blank">Link do Objave</a>
            </div>
        </div>
    </div>
    <div class='border-gray-300 border-t mt-10 py-10'>
    </div>
    
 <?php ?>
</article>