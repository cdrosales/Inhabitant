<?php get_header(); ?> 

<?php if( have_posts() ): 

    while ( have_posts() ): 
        the_post();?> 

 
    <div class="aboutContent">

    <div class="heroWrapper">
        <div class="heroImage">
        <?php the_post_thumbnail(); ?>
        </div>
    </div>
    
    <img src="<?php echo get_template_directory_uri() . '/assets/images/logos/inhabitent-logo-full.svg'; ?>" class="homeLogo" />
    

        <?php the_content(); ?>
</div>


    <?php endwhile; ?> 


    <?php the_posts_navigation(); ?> 
<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>





<?php 
        $terms = get_terms(array(
            'taxonomy' => 'product-type',
            'hide_empty' => 0 
        ));
    
        foreach($terms as $term) :
            echo '<a href="' . get_term_link($term) . '">' . '<h2>' . $term->name . '</h2>' . '</a>';
        endforeach;
            ?>

<?php 

$blogs = new WP_Query(array(
    'post_type' => 'products', // 'producst' -- grab taxonomies
    'posts_per_page' => '4', //-1 will display everything
    'order_by' => 'date',
    'order' => 'DSC'

));

while($blogs->have_posts()) :
    echo $blogs->the_post();
    echo '<br>';
    echo '<h2>' . the_title() . '</h2>';

endwhile;

wp_reset_postdata();

?>

<?php 

$blogs = new WP_Query(array(
    'post_type' => 'post', // 'producst' -- grab taxonomies
    'posts_per_page' => '3', //-1 will display everything
    'order_by' => 'date',
    'order' => 'DSC'

));

while($blogs->have_posts()) :
    echo $blogs->the_post();
    echo '<br>';
    echo '<h2>' . the_title() . '</h2>';
    echo date("d F Y");
    echo get_the_author();
    echo the_post_thumbnail('thumbnail');
            
    

endwhile;

wp_reset_postdata();

?>


<?php get_footer(); ?>