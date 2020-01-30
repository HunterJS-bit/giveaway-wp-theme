<?php /* Template Name: CustomPageT1 */ ?>
<?php get_header() ?>

<!--Hero-->

<div class="main-content gradient">
  <div class="md:flex relative flex-row-reverse items-center container mx-auto py-16">
      <div class="w-full md:w-1/2 h-full text-center">
          <div class="relative">
              <div>
                  <div class="mx-auto md:w-full mx-auto text-center flex align-center items-center justify-center animate-pop-bottom">
                    <img
                      src="<?php bloginfo('template_url'); ?>/images/nagrada_main.svg"
                      alt="Nagradna Igra"
                    />
                  </div>
              </div>
          </div>
      </div>
      <div class="left_block w-full md:w-1/2 text-center md:text-left py-2 md:py-16">
      <div class="md:w-full">
        <h1 class="py-4 md:py-8 pb-8 text-white text-4xl md:text-5xl font-bold animate-pop-in header-title">
         Učestvujte u nagradnim igrama i osvojite vredne nagrade</h1>
      </div> 
          <h2 class="text-gray-300 text-base md:text-2xl mx-auto leading-normal md:pr-4 animate-pop-in header-subtitle">
          Pratite sve nagradne igre i konkurse na jednom mestu
          </h2> 
          <a class="mx-auto rounded-lg mt-10 inline-block px-16 py-4 text-white text-lg bg-green-500 font-semibold shadow-xl cursor-pointer animate-pop-in header-button"
            href="/blog">
          Priključite se </a>
  </div>   
</div>
</div>
<div class="container  mx-auto px-2 pt-12 md:pt-8 flex flex-col">
<section class="mx-auto flex flex-col mt-10">
      <div id="primary" class="content-area container py-8 pt-12 lf-padding">
		    <main id="main" class="site-main">
          <div class="blog">
          <div class="flex flex-wrap content-between">

              <?php 
                $args = array( 
                  'post_type'   => 'post',
                  'order'=>'DESC',
                  'posts_per_page' => '7',
                );

                $args1 = array(
                  'post_type' => 'post',
                  'posts_per_page' => 1
                );
                $scheduled = new WP_Query( $args );
                if ( $scheduled->have_posts() ) : $postCount = 1;
                ?>
                  <?php while( $scheduled->have_posts() ) : $postCount++; $scheduled->the_post() ?>
                  <?php if($postCount == 2) { ?>
                    <?php get_template_part( 'template-parts/content', 'home'); ?>
                  <?php } else { ?>
                    <?php get_template_part( 'template-parts/content', 'homecard'); ?>
                  <?php } ?>
                    <!-- Display Post Here -->
                  <?php endwhile ?>
                <?php else : ?>
                  <!-- Content If No Posts -->
              <?php endif ?>

              </div>
          </div>
		    </main><!-- #main -->
	  </div><!-- #primary -->
  </section>

    <section class="container lf-padding mx-auto flex flex-col py-8 pt-4">    
      <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">
        O Nama
      </h2>
      <div class="md:flex justify-around text-center">
        <div class="w-full max-w-xs px-10 mb-10 ">
            <div class="mx-auto text-center">
              <img src="<?php bloginfo('template_url'); ?>/images/pobednik.svg" alt="Nagrada Osvoji" class="mx-auto">
            </div>
            <h3 class="text-3xl text-gray-800 font-bold mb-3">Vidi i osvoji</h3>
            <p class="text-center">Otkrijte široku ponudu nagradnih igara, konkursa i online nagradnih igara</p>
        </div>
        <div class="w-full max-w-xs px-10 mb-10">
            <div class="mx-auto text-center">
              <img src="<?php bloginfo('template_url'); ?>/images/pobedi.svg" alt="Nagrada PC" class="mx-auto">
            </div>
            <h3 class="text-3xl text-gray-800 font-bold mb-3">Prati objave</h3>
            <p class="text-center">Objavljujemo i delimo svakog dana nagradne igre sa celog Balkana sa vama</p>
        </div>
        <div class="w-full max-w-xs px-10 mb-10">
          <div class="mx-auto text-center">
            <img src="<?php bloginfo('template_url'); ?>/images/osvoji.svg" alt="Nagrada Budi Pobednik" class="mx-auto css-v7v99c">
          </div>
          <h3 class="text-3xl text-gray-800 font-bold mb-3">Budi dobitnik</h3>
          <p class="text-center">Budite i vi danas jedan od srećnih dobitnika i osvojite ključeve novog auta, vaučere i druge nagrade</p>
      </div>
  </section>
  <section class="container lf-padding mx-auto flex flex-col py-8 pt-4">
  <div class="container mx-auto flex flex-col">
      <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">
        Nagradne Igre u Brojevima
      </h2>
    <div class="flex flex-row flex justify-between py-6">
      <div class="max-w-xs	 flex flex-col mb-4 text-center px-5">
      <h3 class="font-lf-light font-light text-4xl md:text-5xl">314</h3>
      <p class="text-sm md:text-lg text-grey-darker pt-4 px-2">Nagradnih Igara</p>
    </div> 
    <div class="flex flex-col mb-4 text-center px-5">
     <h3 class="font-lf-light font-light text-4xl md:text-5xl">520</h3>
     <p class="text-sm md:text-lg text-grey-darker pt-4 px-2">Dobitnika</p>
     </div> 
     <div class="flex flex-col mb-4 text-center px-5">
     <h3 class="font-lf-light font-light text-4xl md:text-5xl">360</h3> 
     <p class="text-sm md:text-lg text-grey-darker pt-4 px-2">Konkursa</p></div></div></div>
  </section>






  <?php get_footer() ?>