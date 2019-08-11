<?php get_header(); ?> 

<!-- <h1><?php bloginfo('name'); ?></h1> -->

    
<!-- <?php if( have_posts() ): 
echo '<h1>PAGE-ABOUT.PHP</h1>';


    while ( have_posts() ): 
        the_post();?>  -->

    <div class ="aboutTitle">
        <h2><?php the_title(); ?></h2> 
    </div>

    <div class="aboutContent">
        <?php the_content(); ?>
    </div>


    <!-- <?php endwhile; ?>  -->

    <!-- <?php the_posts_navigation(); ?> 
<?php else : ?>
        <p>No posts found</p>
<?php endif; ?> -->

<?php get_footer(); ?>