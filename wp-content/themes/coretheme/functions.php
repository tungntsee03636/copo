<?php 
 function setup_vuzic_theme()
    {

        /* Automatically add RSS feed links to <head> tag. */
        add_theme_support('automatic-feed-links');

        /* Add featured image for post. */
        add_theme_support('post-thumbnails');
        add_theme_support( 'menus' );
        add_theme_support( 'widgets' );

    }

add_action('init', 'setup_vuzic_theme');


?>