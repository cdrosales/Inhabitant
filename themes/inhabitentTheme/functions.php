<?php

// Adds script and stylesheets
function inhabitant_files(){
    // NAME & LOCATION FOR PARAMETERS
    wp_enqueue_style('inhabitant_styles', get_stylesheet_uri(), NULL, microtime()); // first parameter name of styleshee & second is the location
    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Lato&display=swap');
}

add_action('wp_enqueue_scripts', 'inhabitant_files');//add stylesheet

//Adds theme support - ex: title tag
function inhabitant_features(){
    add_theme_support('post-thumbnails');
    add_theme_support ('title-tag'); // wordpress method
}
add_action('after_setup_theme', 'inhabitant_features');
?>