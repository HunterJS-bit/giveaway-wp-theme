<?php if (!empty($related_posts)) { ?>
    <div class="related-posts border-t-2 border-gray-200 pt-5 pb-5">
        <div class="container mx-auto px-16">
            <h3 class="font-bold mb-3 text-3xl text-gray-800 tracking-wide"><?php _e('Povezani članci', 'wpcrumbs'); ?></h3>

            <ul class="related-posts-list w-full flex flex-wrap mt-5">
                <?php
                foreach ($related_posts as $post) {
                    setup_postdata($post);
                ?>
                <li>
                    <a class="title" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php if (has_post_thumbnail()) { ?>
                        <div class="thumb">
                            <?php echo get_the_post_thumbnail(null, 'medium', array('alt' => the_title_attribute(array('echo' => false)))); ?>
                        </div>
                        <?php } ?>
                        <h4 class="w-8/12 gray-400 p-2 text-gray-900 font-medium tracking-wide"><?php the_title(); ?></h4>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
<?php
}