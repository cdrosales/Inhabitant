<?php get_header('white'); ?> 

    <!-- <h1><?php bloginfo('name'); ?></h1> -->

    
    <section>

<main>
    <div class="journalContainer">
            <?php if( have_posts() ): 

            while ( have_posts() ):   //runs the loop
                the_post();?>   <!-- grab info to post -->
            
  
    
                
                <div class="journalImage"><?php the_post_thumbnail('large'); ?></div>

                <div class="journalTitle"><?php the_title(); ?></div>

                <div class="postData">

                    <p>
                        <span class="postDate"><?php echo date("d F Y") . '/'; ?></span>
            
                        <span class="postComments"><?php echo get_comments_number() . ' comments/'; ?></span>        
                        <span class="postAuthor"><?php echo 'by ' . get_the_author(); ?></span>
                    </p>
                </div>


                <div class="journalPostInfo">
                <?php the_content(); ?>
                </div>
            
                <div class="postBtn">
                <button class="like button"><a href="<?php the_permalink(); ?>"></a> <i class="fab fa-facebook-f"></i>Like </button>
                <button class="tweet button"><a href="<?php the_permalink(); ?>"></a> <i class="fab fa-twitter"></i>Tweet</button>
                <button class="pin button"><a href="<?php the_permalink(); ?>"></a> <i class="fab fa-pinterest"></i>Pin</button>
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
