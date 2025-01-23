<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,minimum-scale=0.5">
    <meta name="format-detection" content="telephone=no">
    <title><?php echo get_the_title(); ?></title>
<!--    <link rel="icon" href="https://blog.minnano-tokugi.com/wp-content/uploads/2023/06/favicon-3.png" sizes="32x32" />-->
<!--<link rel="icon" href="https://gbl.minnano-tokugi.com/wp-content/uploads/favicon-3.png" sizes="192x192" />-->
<!--<link rel="apple-touch-icon" href="https://gbl.minnano-tokugi.com/wp-content/uploads/favicon-3.png" />-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   
 <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    
    <?php
    wp_head();
    ?>
</head>
<?php
$var = languageString();
$language = $_SERVER['REQUEST_URI'];
?>

<body <?php body_class(); ?>>
    <header class="l-header">
    </header>

