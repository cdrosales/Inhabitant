<?php get_header('white'); ?> 

    
<section>

<main>
    <div class="journalContainer">
            <?php if( have_posts() ): 

            while ( have_posts() ):
                the_post();?> 
            
                
                <div class="journalImage"><?php the_post_thumbnail('large'); ?></div>

                <div class="journalSingleTitle"><?php the_title(); ?></div>

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

            
                <?php $cat =  get_the_category(); 
                    $catTitle = $cat[0]->slug;?>

                <?php $tags =  get_the_tags(); 
                $tagTitle = $tags[0]->slug?>
                
                
                <div class="categoryPosted">
                    <p>Posted in <i class="fas fa-long-arrow-alt-right"></i><span class="categoryInfo"><?php print_r($catTitle); ?></span></p> 
                    <p>Tagged in <i class="fas fa-long-arrow-alt-right"></i><span class="categoryInfo"><?php print_r($tagTitle); ?></span></p> 
                    
                </div>


                <button class="like button"><a href="http://www.facebook.com"></a> <i class="fab fa-facebook-f"></i>Like </button>
                <button class="tweet button"><a href="http://www.twitter.com"></a> <i class="fab fa-twitter"></i>Tweet</button>
                <button class="pin button"><a href="http://www.pinterest.com"></a> <i class="fab fa-pinterest"></i>Pin</button>
         
            <?php endwhile; ?> 
            
      
            <div class="commentContainer">


            <h1> Post a comment</h1>
            <p> Want to join the discussion? Feel free to contribute!</p>
        
            <?php comment_form(); ?>

        

     

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


