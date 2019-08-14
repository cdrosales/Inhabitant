<?php get_header(); ?> 


<?php if( have_posts() ): 

    while ( have_posts() ): 
        the_post();?> 

 
    <div class="aboutContent">

    <div class="heroWrapper">
        <div class="heroImage">
        <?php the_post_thumbnail(); ?>
        </div>
    </div>
    
    <img src="<?php echo get_template_directory_uri() . '/assets/images/logos/inhabitent-logo-full.svg'; ?>" class="homeLogo" />
    

        <?php the_content(); ?>
</div>


    <?php endwhile; ?> 


    <?php the_posts_navigation(); ?> 
<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>








  <!-- calling in sidebar -->


<?php get_footer(); ?>