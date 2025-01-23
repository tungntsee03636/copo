<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,minimum-scale=0.5">
    <meta name="format-detection" content="telephone=no">
    <title><?php echo get_the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">



    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    
    <?php
    wp_head();
    ?>
</head>


<body <?php body_class(); ?>>
<!--HEADER-->
<header class="main-header">
    <div class="inner w-bg fl">
        <!-- Logo -->
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg">
            </a>
        </div>

        <!-- Main Menu -->
        <nav class="main-menu">
            <?php
            wp_nav_menu(array(
                'menu' => 2, // ID của menu (2 trong trường hợp này)
                'menu_class' => 'menu',
                'container' => 'ul', // Loại bỏ container mặc định
                'fallback_cb' => false, // Không hiển thị nếu không có menu
            ));
            ?>
        </nav>
    </div>
</header>

