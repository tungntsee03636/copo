<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8"/>
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,minimum-scale=0.5">

    <meta name="format-detection" content="telephone=no">
    <title><?php echo get_the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/main.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <?php
    wp_head();
    ?>
</head>


<body>
<main class="main-wrap">

<!--HEADER-->
<div class="main-header">
    <div class="inner w-bg fl">
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.svg">
            </a>
        </div>

        <nav class="main-menu pc-br">
            <?php
            wp_nav_menu(array(
                'menu' => 2,
                'menu_class' => 'menu',
                'container' => 'ul',
                'fallback_cb' => false,
            ));
            ?>
        </nav>

        <img class="ham sp-br" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/ham.png">
    </div>
</div>


