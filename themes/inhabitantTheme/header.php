<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
     <?php wp_head(); ?> 
     <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class();?>> 

<div class="navContainer">

    <a href="http://localhost:8888/Inhabitant/home">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/logos/inhabitent-logo-tent-white.svg'; ?>" class="navLogo" />
    </a>


    <div class ="nav">
        <?php wp_nav_menu( array('theme_location' => 'primary')); ?>
        <div class="header-search">
        <?php get_search_form(); ?>
        </div>
        </div>

</div>

 
<title><?php bloginfo('title');?></title>
