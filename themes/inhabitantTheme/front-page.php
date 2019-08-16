<?php get_header(); ?> 

<?php if( have_posts() ): 
    while ( have_posts() ): 
        the_post();?> 

 
    <div class="aboutContent">
        <div class="heroWrapper">
            <div class="heroImage"><?php the_post_thumbnail(); ?></div>
        </div>
    
        <img src="<?php echo get_template_directory_uri() . '/assets/images/logos/inhabitent-logo-full.svg'; ?>" class="homeLogo" />
    </div>

<?php endwhile; ?> 
    <?php the_posts_navigation(); ?> 
<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>

<div class="productIcons">
<img src="<?php echo get_template_directory_uri() . '/assets/images/product-type-icons/do.svg'; ?>" class="doStuff" />
<img src="<?php echo get_template_directory_uri() . '/assets/images/product-type-icons/eat.svg'; ?>" class="eatStuff" />
<img src="<?php echo get_template_directory_uri() . '/assets/images/product-type-icons/sleep.svg'; ?>" class="sleepStuff" />
<img src="<?php echo get_template_directory_uri() . '/assets/images/product-type-icons/wear.svg'; ?>" class="wearStuff" />
</div>

<div class="shopContainer">
<?php 
        // echo '<h2>' . get_the_title() . '</h2>';
        $terms = get_terms(array(
            'taxonomy' => 'product-type',
            'hide_empty' => 0 
        ));
    
        foreach($terms as $term) :
            echo '<div class="shopInfoContainer">';
            echo '<div class="descriptionStuff">' . category_description($term) . '</div>';
            echo '<button class="stuffBTN">'. '<a href="' . get_term_link($term) . '" class="categoryStuff">' . '<h2>' . $term->name . ' stuff' . '</h2>' . '</a>' . '</button>';
            echo '</div>';
        endforeach;
?>
</div>


<div class="journalHomeContainer">

    <?php 
        $blogs = new WP_Query(array(
            'post_type' => 'post', 
            'posts_per_page' => '3', 
            'order_by' => 'date',
            'order' => 'DSC'

        ));

        while($blogs->have_posts()) :
        echo '<div class="journalHomeInfo">';
            echo $blogs->the_post();

            echo '<div class="journalIcon">';
            echo the_post_thumbnail('medium_large');
            echo '</div>';


            echo '<div class="journalHomePostInfo">';
            echo date("d F Y") . ' / ';
            echo get_comments_number() . ' comments';
            echo '</div>';

            echo '<h2 class="journalHomePostTitle">';
            echo the_title();
            echo '</h2>';
            echo '<button class="readEntry"><a href="the_permalink()">Read Entry</a></button>' ;

        echo '</div>';

        endwhile;

        wp_reset_postdata();

    ?>

            <!-- <button class="readMore"><a href="<?php the_permalink(); ?>">Read More</a> <i class="fas fa-long-arrow-alt-right"></i> </button> -->
</div>

<?php get_footer(); ?>