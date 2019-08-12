    <?php get_header(); ?> 

    <!-- <h1><?php bloginfo('name'); ?></h1> -->

    
    <div class="journalContainer">
        <aside>
        <div class="sidebar">
        <?php dynamic_sidebar('sidebar-1'); ?>
        </div>
        </aside>


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

        </main>
    </div>    


        <?php endwhile; ?>   <!-- loop ends -->

        <?php the_posts_navigation(); ?> 
        <?php else : ?>
            <p>No posts found</p>
    <?php endif; ?>

    

    <?php get_footer(); ?>
