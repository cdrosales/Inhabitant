<?php get_header('white'); ?> 

    <div class="shopTitle"><h1> Shop Stuff </h1> </div>



    <div class ="productsCategory">
        <?php 
        $terms = get_terms(array(
            'taxonomy' => 'product-type',
            'hide_empty' => 0 
        ));
    
        foreach($terms as $term) :
            echo '<a href="' . get_term_link($term) . '">' . '<h2>' . $term->name . '</h2>' . '</a>';
        endforeach;
            ?>
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
                        <?php echo  '<span class="title">' . the_title() . '..........</span>' . '<span class="price">$' . get_field('price') .'</span>'; ?> 
                    </div>
                </div>
            <?php endwhile; ?>


            <?php else : ?>
                    <p>No posts found</p>
            <?php endif; ?>
        </div>


<?php get_footer(); ?>