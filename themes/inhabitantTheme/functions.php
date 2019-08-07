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
    wp_enqueue_style('fonts', get_stylesheet_uri('/fonts/Merriweather/*'), NULL, microtime()); // first parameter name of styleshee & second is the location

    }

add_action('wp_enqueue_scripts', 'inhabitant_files');//add stylesheet

//Adds theme support - ex: title tag
function inhabitant_features(){
    add_theme_support('post-thumbnails');
    add_theme_support ('title-tag'); // wordpress method
}
add_action('after_setup_theme', 'inhabitant_features');
?>