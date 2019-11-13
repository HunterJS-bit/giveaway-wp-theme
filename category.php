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
                $car_id = get_the_category()[0]->cat_ID;
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array( 
                  'order'=>'DESC',
                  'cat' => $car_id,
                  'posts_per_page' => 6,
                  'paged' => $paged
                );
                $scheduled = new WP_Query( $args );

                global $wp_query;
            
                if ( $scheduled->have_posts() ) : 
                ?>
                 <div class="posts flex flex-wrap content-between mt-4">
                  <?php while( $scheduled->have_posts() ) : $scheduled->the_post() ?>
                      <?php get_template_part( 'template-parts/content', 'card'); ?>
                    <!-- Display Post Here -->
                  <?php endwhile ?>
                  </div>
                  <?php 
                        echo "<div class='page-nav-container mt-10'>" . paginate_links(array(
                          'total' => $scheduled->max_num_pages,
                          'prev_text' => __('<<'),
                          'next_text' => __('>>')
                      )) . "</div>"; 
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
