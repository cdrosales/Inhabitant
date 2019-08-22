<?php

        function inhabitant_files(){

        wp_enqueue_script('navigation-js', get_template_directory_uri() . '/js/navigation.js', array('jquery') , 1.0, true); 

        wp_enqueue_style('inhabitant_styles', get_stylesheet_uri('/build/css/style.min.css'), NULL, microtime()); 
        wp_enqueue_style('font-awesome', "https://use.fontawesome.com/releases/v5.8.1/css/all.css"); 

        }

    add_action('wp_enqueue_scripts', 'inhabitant_files');



    function inhabitant_features(){
        add_theme_support('post-thumbnails'); 
        add_theme_support ('title-tag'); 
        register_nav_menus( array(
            'primary' => 'Primary Menu', 
            'footer' => 'Footer Menu',
            'shop' => 'Product Categories Menu'
        ));
        
    }
    add_action('after_setup_theme', 'inhabitant_features');

    function inhabitant_login_logo() { ?>
        <style type="text/css">
            #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?> /assets/images/logos/inhabitent-logo-text-dark.svg);
            background-size: 84px 84px;
            background-repeat: no-repeat;
            }
        </style>


<?php }

add_action('login_enqueue_scripts', 'inhabitant_login_logo' );


function inhabitant_login_logo_url(){
    return home_url();
}
add_filter('login_headerurl', 'inhabitant_login_logo_url');


function inhabitant_login_logo_url_title(){
    return 'Inhabitant';
}
add_filter('login_title', 'inhabitant_login_logo_url_title');


function inhabitant_sidebar_widget(){
    register_sidebar( array(
        'name' => esc_html('Sidebar'), 
        'id' => 'sidebar-1',
        'description' => 'this is a sidebar',
        'class' => 'side-bar',
        'before_widget' => '<aside id="%1$s" class="%2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));
}

add_action('widgets_init', 'inhabitant_sidebar_widget');


function inhabitant_post_types(){
    register_post_type('products', array( 
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Products', 
            'add_new_item' => 'Add New Product',
            'edit_item' => 'Edit Product',
            'all_items' => 'All Products',
            'singular_name' => 'Product' 
        ),

        'menu_icon' => 'dashicons-cart'
    ));
}


add_action('init', 'inhabitant_post_types');


// Custom Taxonomies (categories)

function inhabitant_register_taxonomies(){
    register_taxonomy('product-type', 'products', array(
        'show_in_rest' => true,
        'hierarchical' => true, // to have sub categories
        'public' => true,
        'labels' => array(
            'name' => 'Product Types',
            'singular_name' => 'Product Type',
        )
        ));
}

add_action('init', 'inhabitant_register_taxonomies');




function inhabitant_adventures(){
    register_post_type('adventures', array( 
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Adventures', 
            'add_new_item' => 'Add New Adventure',
            'edit_item' => 'Edit Adventure',
            'all_items' => 'All Adventures',
            'singular_name' => 'Adventure' 
        ),

        'menu_icon' => 'dashicons-palmtree'
    ));
}

add_action('init', 'inhabitant_adventures');




?>

