<?php get_header('white'); ?> 

    <div class="shopTitle"><h1> Latest Adventures</h1> </div>

        <div class="productsContainer">
            <?php if( have_posts() ): 
                while ( have_posts() ): 
                    the_post();?> 

                    <div class="productsThumbnail">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>

                        <?php echo the_title(); ?> 
                </div>
            <?php endwhile; ?>


            <?php else : ?>
                    <p>No posts found</p>
            <?php endif; ?>
        </div>


<?php get_footer(); ?>