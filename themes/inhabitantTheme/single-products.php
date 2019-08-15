<?php get_header('white'); ?> <!-- dont need include syntax for wordpress -->

<!-- <h1><?php bloginfo('name'); ?></h1> -->

<div class="singleProducts">

    <?php if( have_posts() ): // have posts - checks if theres anypost available in your feed
    while ( have_posts() ): // run as many times as many blog posts available?***
        the_post();?> <!--singular not multiple -- THIS LOADS POST CONTENT***-->


    <div class="singleProductThumbnail">
    <?php the_post_thumbnail(); ?>
    </div>

    <div class="singleProductInfo">

        <div class="singleProductTitle">
          <?php the_title(); ?>
          </div> 

        <div class="singleProductPrice">
        <?php echo '$' . get_field('price'); ?> 
        </div>

        <div class="singleProductContainer">
        <?php the_content(); ?> 
        </div>

        <div class="shopBtn">
        <button class="like button"><a href="<?php the_permalink(); ?>"> <i class="fab fa-facebook-f"></i>Like</a> </button>
        <button class="tweet button"><a href="<?php the_permalink(); ?>"> <i class="fab fa-twitter"></i>Tweet</a> </button>
        <button class="pin button"><a href="<?php the_permalink(); ?>"> <i class="fab fa-pinterest"></i>Pin</a> </button>
        </div>
    </div>



 </div>






    <?php endwhile; ?> <!--Loop ENDS-->

    <?php the_posts_navigation(); ?> <!--only if we have way more content than shown on page-->

<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>

<?php get_footer(); ?>