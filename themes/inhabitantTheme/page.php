<?php get_header('white'); ?> 

<section>

    <main>

    <div class="contactContent">
        <?php if( have_posts() ): 
        while ( have_posts() ): 
            the_post();?> 

        <h2><?php the_title(); ?></h2> 
        <?php the_content(); ?>
        


        <?php endwhile; ?> 

        <?php the_posts_navigation(); ?> 

        <?php else : ?>
            <p>No posts found</p>
        <?php endif; ?>
    </div>    
        
    
    </main>
    <div class="sidebarContent">

        <div class="sidebar">
        <?php dynamic_sidebar('sidebar-1'); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>