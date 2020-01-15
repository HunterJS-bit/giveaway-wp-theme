<?php
/**
 * The template for category posts
 *
 */

get_header();
?>
<section class="container mx-auto px-6 p-10">
    <div class="container mx-auto blog flex flex-wrap justify-between">
          <div class="">
            <nav class="bg-grey-light p-3 rounded font-sans w-full">
                <ol class="list-reset flex text-grey-dark">
                    <li><a href="/" class="text-blue font-bold">Home</a></li>
                    <li><span class="mx-2">/</span></li>
                    <li><?php single_cat_title(); ?></li>
                </ol>
            </nav>
            <?php 
                $cat_id = get_the_category()[0]->cat_ID;
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array( 
                  'order'=>'DESC',
                  'cat' => $cat_id,
                  'posts_per_page' => 6,
                  'paged' => $paged
                );
                $query = new WP_Query( $args );

                global $wp_query;
            
                if ( $query->have_posts() ) : 
                ?>
                 <div class="posts flex flex-wrap content-between mt-10 ">
                  <?php while( $query->have_posts() ) : $query->the_post() ?>
                      <?php get_template_part( 'template-parts/content', 'card'); ?>
                    <!-- Display Post Here -->
                  <?php endwhile ?>
                  </div>
                  <?php 
                       $big = 999999999; // need an unlikely integer
                     
                       echo paginate_links( array(
                           'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                           'format' => '?paged=%#%',
                           'current' => max( 1, get_query_var('paged') ),
                           'total' => $query->max_num_pages,
                           'prev_text' => __('&#8592; Prethodna '),
                           'next_text' => __('Sledeca &#8594;'),
                       ));
                  ?>
                <?php else : ?>
                  <!-- Content If No Posts -->
              <?php endif ?>
          </div>
    </div>
</section>
<?php
/**
 * The template for category posts
 *
 */

get_footer();
?>
