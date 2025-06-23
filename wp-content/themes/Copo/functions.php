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


//function get_post_types_with_id_slug() {
//    return ['calling', 'video', 'short-video'];
//}
//
//function custom_multiple_post_type_link($post_link, $post) {
//    if (in_array($post->post_type, get_post_types_with_id_slug())) {
//        return site_url($post->post_type . '/' . $post->ID . '/');
//    }
//    return $post_link;
//}
//add_filter('post_type_link', 'custom_multiple_post_type_link', 10, 2);
//
//function custom_multiple_post_type_rewrite_rules() {
//    foreach (get_post_types_with_id_slug() as $post_type) {
//        add_rewrite_rule(
//            '^' . $post_type . '/([0-9]+)/?$',
//            'index.php?post_type=' . $post_type . '&p=$matches[1]',
//            'top'
//        );
//    }
//}
//add_action('init', 'custom_multiple_post_type_rewrite_rules');


?>