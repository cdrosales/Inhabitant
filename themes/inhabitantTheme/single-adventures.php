<?php get_header(); ?> 

<!-- <h1><?php bloginfo('name'); ?></h1> -->

    
<?php if( have_posts() ): 
    while ( have_posts() ): 
        the_post();?>  

   
    

<div class="aboutContent">

    <div class="heroWrapper">
        <div class ="aboutTitle">
        <?php the_title(); ?> 
        </div>
        <div class="heroImage">
        <?php the_post_thumbnail(); ?>
        </div>
        

    </div>

        <?php the_content(); ?>
</div>


    <?php endwhile; ?> 

    <?php the_posts_navigation(); ?> 
<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>

<?php get_footer(); ?>