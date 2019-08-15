<?php get_header('white'); ?> <!-- dont need include syntax for wordpress -->

<!-- <h1><?php bloginfo('name'); ?></h1> -->


<!-- <?php get_the_title(); ?> -->


<div class="shopTitle"> <h1> Shop Stuff </h1> </div>

<div class ="productsCategory">
<?php wp_nav_menu( array(
            'theme_location' => 'shop'
        )); ?>
</div>

<div class="productsContainer">
<?php if( have_posts() ): // have posts - checks if theres anypost available in your feed


    while ( have_posts() ): // run as many times as many blog posts available?***
        the_post();?> <!--singular not multiple -- THIS LOADS POST CONTENT***-->


    <div class="products">
    <div class="productsThumbnail">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
    </div>

    <div class="productsInfo">
        <?php echo the_title() . '.........$' . get_field('price'); ?> 
    </div>
    </div>
    



    <?php endwhile; ?> <!--Loop ENDS-->
</div>

<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>




<?php get_footer(); ?>