<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,minimum-scale=0.5">
    <meta name="format-detection" content="telephone=no">
    <title><?php echo get_the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <?php
    wp_head();
    ?>
</head>


<body <?php body_class(); ?>>
    <header class="l-header">
    </header>

