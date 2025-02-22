<?php
/*
 Template Name: Short Movie
 */
get_header();
//$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
//
//$args = array(
//    'post_type'      => 'movie',
//    'posts_per_page' => 4, // Số bài viết mỗi trang
//    'paged'          => $paged
//);
//
//$movies = new WP_Query($args);
?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/short-movie.css"/>

    <section id="short-movie" class="single short-movie inner">
        <h2 class="single-ttl">
            <span class="en"><small>V</small>iew companies on <small>M</small>OVIES</span>
            <span class="jp">動画コンテンツ公開企業</span>
        </h2>

        <div class="category-list fl">
            <div class="category-item"><a href="#">カテゴリ名</a></div>
            <div class="category-item"><a href="#">カテゴリ名</a></div>
            <div class="category-item"><a href="#">カテゴリ名</a></div>
            <div class="category-item"><a href="#">カテゴリ名</a></div>
        </div>

        <div class="short-movie-list">
            <div class="short-movie-list-inner fl">
                <div class="short-movie-item">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/short01.png">
                    </a>
                </div>

                <div class="short-movie-item">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/short02.png">
                    </a>
                </div>

                <div class="short-movie-item">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/short03.png">
                    </a>
                </div>

                <div class="short-movie-item">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/short04.png">
                    </a>
                </div>

                <div class="short-movie-item">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/short05.png">
                    </a>
                </div>

                <div class="short-movie-item">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/short06.png">
                    </a>
                </div>

                <div class="short-movie-item">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/short01.png">
                    </a>
                </div>

                <div class="short-movie-item">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/short02.png">
                    </a>
                </div>

                <div class="short-movie-item">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/short03.png">
                    </a>
                </div>

                <div class="short-movie-item">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/short04.png">
                    </a>
                </div>

                <div class="short-movie-item">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/short05.png">
                    </a>
                </div>

                <div class="short-movie-item">
                    <a href="#">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/short06.png">
                    </a>
                </div>
            </div>
            <img class="pagen" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/pagen.png">

        </div>

    </section>


<?php
get_footer()
?>