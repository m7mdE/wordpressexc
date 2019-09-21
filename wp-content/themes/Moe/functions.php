<?php

function load_stylesheets(){

    wp_register_style('style', get_template_directory_uri() . '/style.css', 
    array(), false, 'all');
    wp_enqueue_style('style');

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', 
    array(), false, 'all');
    wp_enqueue_style('bootstrap');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');


add_theme_support('menus');


register_nav_menus(

    array(

        'top-menu' => __('Top Menu', theme),
        'footer-menu' => __('Footer Menu', theme),

    )
)

?>


