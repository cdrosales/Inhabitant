<?php get_header('white'); ?> 

    <div class="shopTitle"><h1> Shop Stuff </h1> </div>

    <div class ="productsCategory">
        <?php wp_nav_menu( array(
                'theme_location' => 'shop'
            )); ?>
    </div>

        <div class="productsContainer">
            <?php if( have_posts() ): 
                while ( have_posts() ): 
                    the_post();?> 

                <div class="products">
                    <div class="productsThumbnail">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                    </div>

                    <div class="productsInfo">
                        <?php echo the_title() . '.........$' . get_field('price'); ?> 
                    </div>
                </div>
            <?php endwhile; ?>


            <?php else : ?>
                    <p>No posts found</p>
            <?php endif; ?>
        </div>


<?php get_footer(); ?>