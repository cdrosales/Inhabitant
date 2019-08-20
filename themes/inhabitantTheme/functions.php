<?php

    //Filter stylesheet to point to minified CSS

    // function inhabitant_min_css(){
    //     if (file_exists (get_template_directory() . '/build/css/style.min.css')){
    //         $stylesheet_uri = '/build/css/style.min.css';
    //     }
    // }

    // add_filter('stylesheet_uri', 'inhabitant_min_css');

    // Adds script and stylesheets

        function inhabitant_files(){

        wp_enqueue_script('navigation-js', get_template_directory_uri() . '/js/navigation.js', array('jquery') , 1.0, true); // 1st - name  // 2nd where is located // 3 accepts array  // 4 is version // 5 true is gonna load to footer - false going to header

        // NAME & LOCATION FOR PARAMETERS
        wp_enqueue_style('inhabitant_styles', get_stylesheet_uri('/build/css/style.min.css'), NULL, microtime()); // first parameter name of styleshee & second is the location
        // wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Lato&display=swap');
        wp_enqueue_style('font-awesome', "https://use.fontawesome.com/releases/v5.8.1/css/all.css"); //font awesome site
        // wp_enqueue_style('fonts', get_stylesheet_uri('/fonts/Merriweather/*'), NULL, microtime()); // first parameter name of styleshee & second is the location

        }

    add_action('wp_enqueue_scripts', 'inhabitant_files');//add stylesheet // first parameter is most likely wordpress function ... second parameter is just the name we make for the function



    //Adds theme support - ex: title tag
    function inhabitant_features(){
        add_theme_support('post-thumbnails'); // title thumbnails
        add_theme_support ('title-tag'); // wordpress method -- just adding Title Tag
        register_nav_menus( array( // activates menu
            'primary' => 'Primary Menu', // location => name of menu -- can be anyname
            'footer' => 'Footer Menu',
            'shop' => 'Product Categories Menu'
        ));
        
    }
    add_action('after_setup_theme', 'inhabitant_features');




    // change logo on login - and url title

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




//Initialize sidebbar widget

function inhabitant_sidebar_widget(){
    register_sidebar( array(
        'name' => esc_html('Sidebar'), // any html invalid will script away -- takes out html tag
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



// initialize custom post type: products
// make sure to go to settings & change permalinks to 'post name' anytime you make custom  -- to flush permalinks

function inhabitant_post_types(){
    register_post_type('products', array( // first - type & second -array of properties
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'labels' => array(
            'name' => 'Products', //name in the side dashboard
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

