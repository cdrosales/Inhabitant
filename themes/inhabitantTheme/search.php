<?php get_header('white'); ?> 

<section>

    <main>
<div class="searchPageTitle"> Search results for: </div>


    <div class="searchContent">
        <?php if( have_posts() ): 
        while ( have_posts() ): 
            the_post();?> 

        <h2><?php the_title(); ?></h2> 
        
        <div class="resultsInfo">
        <?php echo wp_trim_words( get_the_content(), 40, ' [...]' );?>
        </div>
        
        <div class="resultsReadMore">
        <button class="readMore"><a href="<?php the_permalink(); ?>">Read More</a> <i class="fas fa-long-arrow-alt-right"></i> </button>
        </div>

        <?php endwhile; ?> 

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