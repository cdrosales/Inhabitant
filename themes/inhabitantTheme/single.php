<?php get_header('white'); ?> 
  
    <section>

        <main>
            <?php if( have_posts() ): 

            while ( have_posts() ):   //runs the loop
                the_post();?>   <!-- grab info to post -->
            

            <div class="journalTitle">
                <h2><?php the_title(); ?></h2> 

                <div class="postData">
                    <p>
                        <span class="postDate"><?php echo date("d F Y"); ?></span>
                        /
                        <span class="postComments"><?php echo get_comments(); ?></span>        
                        / by
                        <span class="postAuthor"><?php echo get_the_author(); ?></span>
                    </p>
                </div>
            </div>
            
            <div class="journalContent">
                <?php the_content(); ?> 
            </div>



            <?php endwhile; ?>   <!-- loop ends -->
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
