<?php get_header(); ?> 


    
<?php if( have_posts() ): 
    while ( have_posts() ): 
        the_post();?>  

   

<div class="aboutContent">

    <div class="heroWrapperAdventures">
        
        <div class="heroImage">
        <?php the_post_thumbnail(); ?>
        </div>
    </div>

    <div class="adventureTitle">
        <?php the_title(); ?> 
        </div>
        <div class="adventureAuthor"><?php echo 'by ' . get_the_author(); ?></div>

        <div class="adventurePost">    
        <?php the_content(); ?>
    </div>
</div>


    <?php endwhile; ?> 

    

    <?php the_posts_navigation(); ?> 
<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>

<div class="adventureSingleBtn">
<div class="postBtn">
    <button class="like button"><a href="http://www.facebook.com"></a> <i class="fab fa-facebook-f"></i>Like </button>
    <button class="tweet button"><a href="http://www.twitter.com"></a> <i class="fab fa-twitter"></i>Tweet</button>
    <button class="pin button"><a href="http://www.pinterest.com"></a> <i class="fab fa-pinterest"></i>Pin</button>
</div>
</div>

<?php get_footer(); ?>