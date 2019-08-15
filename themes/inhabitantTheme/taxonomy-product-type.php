<?php get_header('white'); ?> 

<?php  


// get category names and links for products 
$terms = get_terms(array(
    'taxonomy' => 'product-type',
    'hide_empty' => 0 
));

// print_r($terms); 

// print_r($terms[0]->name); 

// echo $terms[0]->name;


foreach($terms as $term) :


    // echo $term->name;
    // echo '<a href="' . get_term_link($term) . '">' . $term->name . '</a>';

endforeach;



//custom wordpress loop to display atleast 3 blogs

// $args =array(
//     'post_type'=> 'post',
//     'numberposts' => 3,
//     'order' => 'ASC'
// );

// // print_r(get_posts($args));
// $posts = get_posts($args);
//     setup_postdata($posts);
//     the_title();
//     the_content();
// foreach ($posts as $post) :

// endforeach;



// $args =array(
//     'taxonomy' => 'product-type',
// );

// // print_r(get_posts($args));
// $posts = get_posts($args);
//     setup_postdata($posts);
//      echo $Posts->name;
// foreach ($posts as $post) :

// endforeach;
//wp_reset_postdata();


// custom loops using wp_query

// $blogs = new WP_Query(array(
//     'post_type' => 'products', // 'producst' -- grab taxonomies
//     'posts_per_page' => '4', //-1 will display everything
//     'order_by' => 'date',
//     'order' => 'ASC'

// ));

// while($blogs->have_posts()) :
//     echo $blogs->the_post();
//     echo '<br>';
//     echo '<h2>' . the_title() . '</h2>';

// endwhile;

// wp_reset_postdata();


// 
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