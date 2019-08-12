<?php get_header(); ?> <!-- dont need include syntax for wordpress -->

<div class="sidebar">
        <?php dynamic_sidebar('sidebar-1'); ?>
        </div>

<?php if( have_posts() ): // have posts - checks if theres anypost available in your feed
    while ( have_posts() ): // run as many times as many blog posts available?***
        the_post();?> <!--singular not multiple -- THIS LOADS POST CONTENT***-->

    <!-- <h2><?php the_title(); ?></h2>  -->
    <?php the_content(); ?>


    <?php endwhile; ?> <!--Loop ENDS-->

    <?php the_posts_navigation(); ?> <!--only if we have way more content than shown on page-->

<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>

<?php get_footer(); ?>