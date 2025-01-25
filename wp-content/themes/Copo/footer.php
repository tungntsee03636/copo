
<?php
?>


<div class="banner-bottom">
    <div class="inner">
        <a class="#">
            <picture >
                <source media="(max-width: 767px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banner-bottom-sp.png 2x">
                <source media="(min-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/tenbanner.png 2x">
                <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/tenbanner.png" alt="">
            </picture>
        </a>

    </div>
</div>
<!--            FOOTER-->
<footer>
    <picture>
        <source media="(max-width: 767px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer-sp.png 2x">
        <source media="(min-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer.png 2x">
        <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/footer.png" alt="">
    </picture>
</footer>
     <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
</div>
</body>
</html>