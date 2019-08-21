<?php get_header('white'); ?> 

<section>

<main>
<div class="categoryPageTitle"> Month: <?php single_month_title( ' ' ); ?> </div>

    <div class="journalContainer">
            <?php if( have_posts() ): 

            while ( have_posts() ): 
                the_post();?> 
            
                <div class="journalImage"><?php the_post_thumbnail('large'); ?></div>

                <div class="journalTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>

                <div class="postData">
                    <p>
                        <span class="postDate"><?php echo date("d F Y") . '/'; ?></span>
            
                        <span class="postComments"><?php echo get_comments_number() . ' comments/'; ?></span>        
                        <span class="postAuthor"><?php echo 'by ' . get_the_author(); ?></span>
                    </p>
                </div>
  
            <div class="journalPostInfo">
                <?php
                    echo wp_trim_words( get_the_content(), 50, ' [...]' );
                    ?>
            </div>

            
            
            <div class="dateReadMore">
            <button class="readMore"><a href="<?php the_permalink(); ?>">Read More</a> <i class="fas fa-long-arrow-alt-right"></i> </button>
            </div> 

            
            <?php endwhile; ?>  
            </div>
</main>

        <div class="sidebarContent">
            <div class="sidebar">
            <?php dynamic_sidebar('sidebar-1'); ?>
            </div>
        </div>
    </section>    


        <?php the_posts_navigation(); ?> 
        <?php else : ?>
            <p>No posts found</p>
    <?php endif; ?>
    

<?php get_footer(); ?>
