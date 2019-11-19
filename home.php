<?php /* Template Name: Blog Template */ ?>
<?php get_header() ?>
<section class="container mx-auto px-6 p-10">
<div class="container mx-auto blog flex flex-wrap justify-between">
  <div class="mb-10">
            <nav class="bg-grey-light p-3 rounded font-sans w-full">
                 <h2><a href="/" class="font-bold text-3xl text-gray-800">Blog</a></h2>       
            </nav>
            <?php 
                $car_id = get_the_category()[0]->cat_ID;
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array( 
                  'order'=>'DESC',
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

<?php get_footer() ?>