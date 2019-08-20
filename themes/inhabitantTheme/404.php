<?php get_header('white'); ?> <!-- dont need include syntax for wordpress -->


<section class="error">
    <main>
        <h1> Oops! That page can't be found. </h1>
        <p>It looks like nothing was found at this location. Maybe try one of the links below or a search?</p>
   
   
        
        <h2>Recent Posts</h2>

        <div class="recentPosts">

            <?php 
            $blogs = new WP_Query(array(
                'post_type' => 'post', 
                'posts_per_page' => '5', 
                'order' => 'DSC'

            ));

            while($blogs->have_posts()) :
            echo '<div class="recentPostsInfo">';
                echo $blogs->the_post();
                ?>
                

                <a href="<?php the_permalink();?>">
                    <?php echo the_title(); ?>
                </a>
                
            <?php
            echo '</div>';

            endwhile;

            wp_reset_postdata();

            ?>
        </div>



        <h2>Most Used Categories</h2>


        <ul class="errorCategories">
        <?php wp_list_categories( array(
            'title_li'=> __( '' ),
            'orderby'=> 'name',
            'show_count' => true,
        )); ?> 
        </ul>


        <h2>Archives</h2>


   
   
   
    </main>


    <div class="sidebarContent">

        <div class="sidebar">
        <?php dynamic_sidebar('sidebar-1'); ?>
        </div>
    </div>


</section>


<?php get_footer(); ?>
