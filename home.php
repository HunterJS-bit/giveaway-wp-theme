<?php /* Template Name: Blog Template */ ?>
<?php get_header() ?>
<section class="container mx-auto px-6 p-10">
<div class="container mx-auto blog flex flex-wrap justify-between">
  <div class="mb-10">
            <nav class="bg-grey-light p-3 rounded font-sans w-full">
                 <h2><a href="/" class="font-bold text-3xl text-gray-800">Blog</a></h2>       
            </nav>
            <?php 
                $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
 
                $args = array(
                    'post_type' => 'post',
                    'post_status'=>'publish',
                    'posts_per_page' => 6,
                    'paged' => $paged,
                );
                $query = new WP_Query( $args );

                global $wp_query;
            
                if ( $query->have_posts() ) : 
                ?>
                 <div class="posts flex flex-wrap content-between mt-10">
                  <?php while( $query->have_posts() ) : $query->the_post() ?>
                      <?php get_template_part( 'template-parts/content', 'card'); ?>
                    <!-- Display Post Here -->
                  <?php endwhile ?>
                  </div>
                  <div class="pagination text-center pt-16">
            
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
                  </div>
                <?php else : ?>
                  <!-- Content If No Posts -->
              <?php endif ?>
          </div>
    </div>

</section>

<?php get_footer() ?>