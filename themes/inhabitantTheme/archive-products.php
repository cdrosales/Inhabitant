<?php get_header(); ?> <!-- dont need include syntax for wordpress -->

<!-- <h1><?php bloginfo('name'); ?></h1> -->




<?php if( have_posts() ): // have posts - checks if theres anypost available in your feed


    while ( have_posts() ): // run as many times as many blog posts available?***
        the_post();?> <!--singular not multiple -- THIS LOADS POST CONTENT***-->

    <h2><?php the_title(); ?></h2> 

    <!-- customizable to what you wanna grab ex URL can be grabbbed -->
   <!-- <?php the_post_thumbnail(); ?> -->
   <!-- <?php the_permalink(); ?> -->

<?php if ( has_post_thumbnail() ) : ?>

<!-- <?php the_post_thumbnail(); ?> -->
<?php endif; ?>

<!-- <?php the_content(); ?>  -->

 
    <?php echo '$' . get_field('price'); ?> 
  <!--  echo out the $ with price from custom fields in wordpress -->





    <?php endwhile; ?> <!--Loop ENDS-->

    <!-- <?php the_posts_navigation(); ?> -->
     <!--only if we have way more content than shown on page-->

<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>

<?php get_footer(); ?>