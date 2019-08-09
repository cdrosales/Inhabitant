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
        'footer' => 'Footer Menu'
    ));
    
}
add_action('after_setup_theme', 'inhabitant_features');


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


function inhabitant_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logos/inhabitent-logo-text-dark.svg);
		background-size: 84px 84px;
		background-repeat: no-repeat;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'inhabitant_login_logo' );


function inhabitant_login_logo_url(){
    return home_url();
}
add_filter('login_headerurl', 'inhabitant_login_logo_url');


function inhabitant_login_logo_url_title(){
    return 'Inhabitant';
}
add_filter('login_title', 'inhabitant_login_logo_url_title');


?>