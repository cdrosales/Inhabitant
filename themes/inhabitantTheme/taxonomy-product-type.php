<?php get_header('white'); ?> 

<?php  


$terms = get_terms(array(
    'taxonomy' => 'product-type',
    'hide_empty' => 0 
));

foreach($terms as $term) :

endforeach;

?>


<div class="categoryTitle"><h1><?php echo single_cat_title();?></h1></div>

<div class="categoryDescription"><p><?php echo category_description();?></p></div>


<div class="productsContainer">


<?php if( have_posts() ): 

    while ( have_posts() ): 
        the_post();?> 


<div class="products">
    <div class="productsThumbnail">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
    </div>

    <div class="productsInfo">
        <?php echo the_title() . '.........$' . get_field('price'); ?> 
    </div>
    </div>
    <?php endwhile; ?> 
   


    <?php the_posts_navigation(); ?> 
<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>
</div>



<?php get_footer(); ?>