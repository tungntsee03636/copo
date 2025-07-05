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


// TABLE OF CONTENTS

add_filter('the_content', 'add_id_to_h2_tags', 15);

function add_id_to_h2_tags($content) {
    if (!is_singular()) return $content;

    $i = 1;
    $content = preg_replace_callback(
        '/<h2(.*?)>(.*?)<\/h2>/i',
        function ($matches) use (&$i) {
            $id = 'toc-heading-' . $i++;
            if (strpos($matches[1], 'id=') !== false) {
                return "<h2{$matches[1]}>{$matches[2]}</h2>";
            }
            return "<h2{$matches[1]} id=\"{$id}\">{$matches[2]}</h2>";
        },
        $content
    );

    return $content;
}

add_filter('the_content', 'prepend_table_of_contents', 20);

function prepend_table_of_contents($content) {
    if (!is_singular()) return $content;

    preg_match_all('/<h2[^>]*id="([^"]+)"[^>]*>(.*?)<\/h2>/', $content, $matches);
    if (empty($matches[1])) return $content;

    $toc = '<div id="table-of-contents"><strong>目次</strong><ul>';
    foreach ($matches[1] as $i => $id) {
        $title = strip_tags($matches[2][$i]);
        $toc .= '<li><a class="scroll" href="#' . esc_attr($id) . '">' . esc_html($title) . '</a></li>';
    }
    $toc .= '</ul></div>';

    return $toc . $content;
}


//ADD PAGI FOR CPT

add_action('pre_get_posts', function ($query) {
    if (!is_admin() && $query->is_main_query() && is_post_type_archive('copo-labo')) {
        $query->set('posts_per_page', 10);
    }
});

add_action('pre_get_posts', function ($query) {
    if (!is_admin() && $query->is_main_query() && is_post_type_archive('interview')) {
        $query->set('posts_per_page', 10);
    }
});
add_action('pre_get_posts', function ($query) {
    if (!is_admin() && $query->is_main_query() && is_post_type_archive('calling')) {
        $query->set('posts_per_page', 10);
    }
});



//remove P tag in the_content
function remove_p_around_images($content) {
    $content = preg_replace('/<p>\s*(<a .*?>)?\s*(<img .*?>)\s*(<\/a>)?\s*<\/p>/i', '\1\2\3', $content);
    return $content;
}
add_filter('the_content', 'remove_p_around_images');


//add avatar to h3 in posttype interview

function insert_avatar_box_inside_h3_for_interview($content) {
    if (!is_singular('interview')) {
        return $content;
    }

    $avatar_url = esc_url(get_field('avatar'));
    $avatar_name = esc_html(get_field('avatar_name'));

    if (!$avatar_url && !$avatar_name) {
        return $content;
    }

    $avatar_html = '<div class="avatar-box">
                        <img src="' . $avatar_url . '" alt="">
                        <p>' . $avatar_name . '</p>
                    </div>';

    $content = preg_replace_callback('/<h3([^>]*)>(.*?)<\/h3>/is', function($matches) use ($avatar_html) {
        $attrs = $matches[1];
        $inner = $matches[2];
        return '<h3' . $attrs . '>' . $avatar_html . $inner . '</h3>';
    }, $content);

    return $content;
}
add_filter('the_content', 'insert_avatar_box_inside_h3_for_interview');

function add_number_prefix_to_h2_for_interview($content) {
    if (!is_singular('interview')) {
        return $content;
    }

    $counter = 0;

    $content = preg_replace_callback('/<h2([^>]*)>(.*?)<\/h2>/is', function($matches) use (&$counter) {
        $attrs = $matches[1];
        $inner = $matches[2];

        $counter++;
        $number = str_pad($counter, 2, '0', STR_PAD_LEFT);

        return '<h2' . $attrs . '><span class="h2-number">' . $number . '.</span> ' . $inner . '</h2>';
    }, $content);

    return $content;
}
add_filter('the_content', 'add_number_prefix_to_h2_for_interview');

