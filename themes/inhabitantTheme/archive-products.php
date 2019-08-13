<?php get_header(); ?> <!-- dont need include syntax for wordpress -->

<!-- <h1><?php bloginfo('name'); ?></h1> -->




<?php if( have_posts() ): // have posts - checks if theres anypost available in your feed


    while ( have_posts() ): // run as many times as many blog posts available?***
        the_post();?> <!--singular not multiple -- THIS LOADS POST CONTENT***-->

<div class="productsContainer">

    <div class="productsThumbnail">
      <?php the_post_thumbnail('medium'); ?>
    </div>

    <div class="productsInfo">
        <?php echo the_title() . '............$' . get_field('price'); ?> 
    </div>
    
</div>


    <?php endwhile; ?> <!--Loop ENDS-->

<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>

<?php get_footer(); ?>