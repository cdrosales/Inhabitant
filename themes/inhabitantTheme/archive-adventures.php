<?php get_header('white'); ?> 

    <div class="adventureMainTitle"><h1> Latest Adventures</h1> </div>

        <div class="adventuresContainer">
            <?php if( have_posts() ): 
                while ( have_posts() ): 
                    the_post();?> 

                    <div class="adventuresThumbnail">
                        <?php the_post_thumbnail('medium'); ?>
                        <div class="adventureInfo">
                            <div class="adventureCaption"><?php echo the_title(); ?></div>
                            <div class="adventureMoreBtn">
                                <button class="readMore"><a href="<?php the_permalink(); ?>">Read More</a></button>
                            </div>
                        </div>
                    </div>



                
            <?php endwhile; ?>


            <?php else : ?>
                    <p>No posts found</p>
            <?php endif; ?>
        </div>


<?php get_footer(); ?>