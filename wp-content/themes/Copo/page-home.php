<?php
/*
 Template Name: singleCompany
 */
get_header();
?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/home.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

    <div id="homepage" class="single homepage inner">
<!--        SHORT MOVIES-->
        <section class="short-movie">
            <div class="short-movie-inner">
                <h2 class="single-ttl">
                    <span class="en"><small>S</small>hort <small>m</small>ovies</span>
                    <span class="jp">ショート動画</span>
                </h2>
                <?php
                $args = array(
                    'post_type'      => 'short-movies',
                    'posts_per_page' => 6,
                    'paged'          => $paged,
                );
                $short_movies = new WP_Query($args);
                ?>
<!--                SHORT MOVIE LIST-->
                <div class="short-movie-list swiper">
                    <div class="swiper-wrapper">
                        <?php if ($short_movies->have_posts()) : ?>
                            <?php while ($short_movies->have_posts()) : $short_movies->the_post(); ?>
                                <?php
                                $movie_id = get_the_ID();
                                $thumbnail_url = '';
                                $is_enviry = 'false';
                                $video_type = get_field('type_video');
                                if ($video_type == 'youtube') {
                                    $short_youtube = get_field('short_youtube');
                                    if ($short_youtube) {
                                        parse_str(parse_url($short_youtube, PHP_URL_QUERY), $yt_params);
                                        $video_id = isset($yt_params['v']) ? $yt_params['v'] : basename(parse_url($short_youtube, PHP_URL_PATH));
                                        $thumbnail_url = "https://img.youtube.com/vi/$video_id/maxresdefault.jpg";
                                    }
                                } elseif ($video_type == 'enviry') {
                                    $short_enviry = get_field('short_enviry');
                                    $is_enviry = 'true';
                                    $thumbnail_url = get_stylesheet_directory_uri() . '/assets/img/phone.png';
                                }
                                ?>
                                <div class="short-movie-item swiper-slide" data-id="<?php echo esc_attr($movie_id); ?>" data-enviry="<?php echo $is_enviry;?>">
                                    <div class="img-box">
                                        <img class="thumbnail" src="<?php echo esc_url($thumbnail_url); ?>" alt="Thumbnail">
                                    </div>

                                    <div class="text-box">
                                        <p class="title"><?php echo get_the_title(); ?></p>
                                        <p class="company"><?php echo get_field("company"); ?></p>
                                    </div>

                                </div>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <p class="novideos">No Videos Available.</p>
                        <?php endif; ?>
                    </div>
                    <?php if ($short_movies->have_posts()) : ?>
                        <?php while ($short_movies->have_posts()) : $short_movies->the_post(); ?>
                            <?php
                            $movie_id = get_the_ID();
                            $movie_title = get_the_title();
                            $video_embed  = '';
                            $is_enviry = 'false';
                            $video_type = get_field('type_video');
                            if ($video_type == 'youtube') {
                                $short_youtube = get_field('short_youtube');
                                if ($short_youtube) {
                                    parse_str(parse_url($short_youtube, PHP_URL_QUERY), $yt_params);
                                    $video_id = isset($yt_params['v']) ? $yt_params['v'] : basename(parse_url($short_youtube, PHP_URL_PATH));
                                    $video_embed = '<iframe width="100%" height="584" src="https://www.youtube.com/embed/' . esc_attr($video_id) . '?playlist=' . esc_attr($video_id) . '" frameborder="0" allowfullscreen></iframe>';
                                }
                            } elseif ($video_type == 'enviry') {
                                $short_enviry = get_field('short_enviry');
                                $is_enviry = 'true';
                                if ($short_enviry) {
                                    $video_embed = $short_enviry;
                                    $thumbnail_url = get_stylesheet_directory_uri() . '/assets/img/phone.png';
                                }
                            }
                            ?>

                            <!-- Popup Modal -->
                            <div id="short-movie-popup-<?php echo esc_attr($movie_id); ?>" class="popup">
                                <div class="popup-content">
                                    <span class="close-btn">&times;</span>

                                    <div class="popup-movie-text">
                                        <?php echo $video_embed; ?>
                                    </div>
                                    <h3 class="movie-ttl"><?php echo get_field("company"); ?></h3>
                                    <?php if( have_rows('button_list') ): ?>
                                        <ul class="link-list fl">
                                            <?php while( have_rows('button_list') ): the_row();
                                                $label = get_sub_field('label');
                                                $link = get_sub_field('link');
                                                ?>
                                                <li>
                                                    <a href="<?php echo esc_url($link); ?>" target="_blank">
                                                        <?php echo esc_html($label); ?>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/darrowl.png">
                                                    </a>
                                                </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p class="novideos">No Videos Available.</p>
                    <?php endif; ?>
                    <span class="swiper-pagination"></span>
                </div>

                <a href="/short-movie" class="mbutton">特集をもっと見る
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16.191" height="14.265" viewBox="0 0 16.191 14.265">
                        <defs>
                            <clipPath id="clip-path">
                                <rect width="16.191" height="14.265" fill="none"/>
                            </clipPath>
                        </defs>
                        <g id="arrow-r" clip-path="url(#clip-path)">
                            <g id="arrow-r-2" data-name="arrow-r" transform="translate(-355.282 -27.326)">
                                <path id="Path_734" data-name="Path 734" d="M85.593,81.679a.955.955,0,0,0-1.351-1.351l-5.507,5.506L73.23,80.328a.955.955,0,0,0-1.357,1.344l.006.006,6.182,6.182a.955.955,0,0,0,1.351,0Z" transform="translate(275.236 113.188) rotate(-90)" fill="#fff"/>
                                <path id="Path_735" data-name="Path 735" d="M85.593,81.679a.955.955,0,0,0-1.351-1.351l-5.507,5.506L73.23,80.328a.955.955,0,0,0-1.357,1.344l.006.006,6.182,6.182a.955.955,0,0,0,1.351,0Z" transform="translate(283.332 113.188) rotate(-90)" fill="#fff"/>
                            </g>
                        </g>
                    </svg>

                </a>
            </div>

        </section>

<!--        CALLING-->
        <section class="calling">
            <div class="calling-inner">
                <h2 class="single-ttl">
                    <span class="en"><small>F</small>ind your calling</span>
                    <span class="jp">特集からお仕事を探す</span>
                </h2>
                <?php

                    $args = array(
                        'post_type' => 'calling',
                        'posts_per_page' => 6,
                    );

                    $calling = new WP_Query($args);

                ?>
                <div class="calling-list">
                    <div class="swiper-wrapper">
                        <?php
                        if ($calling->have_posts()) :
                        while ($calling->have_posts()) : $calling->the_post();
                        ?>

                        <div class="calling-item swiper-slide">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('full'); ?>
                            </a>
                        </div>

                        <?php endwhile;
                            wp_reset_postdata();
                        else :
                            echo '<p>No calling Post</p>';
                        endif;
                        ?>
                    </div>
                </div>

                <a href="/calling" class="mbutton">特集をもっと見る
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16.191" height="14.265" viewBox="0 0 16.191 14.265">
                        <defs>
                            <clipPath id="clip-path">
                                <rect width="16.191" height="14.265" fill="none"/>
                            </clipPath>
                        </defs>
                        <g id="arrow-r" clip-path="url(#clip-path)">
                            <g id="arrow-r-2" data-name="arrow-r" transform="translate(-355.282 -27.326)">
                                <path id="Path_734" data-name="Path 734" d="M85.593,81.679a.955.955,0,0,0-1.351-1.351l-5.507,5.506L73.23,80.328a.955.955,0,0,0-1.357,1.344l.006.006,6.182,6.182a.955.955,0,0,0,1.351,0Z" transform="translate(275.236 113.188) rotate(-90)" fill="#fff"/>
                                <path id="Path_735" data-name="Path 735" d="M85.593,81.679a.955.955,0,0,0-1.351-1.351l-5.507,5.506L73.23,80.328a.955.955,0,0,0-1.357,1.344l.006.006,6.182,6.182a.955.955,0,0,0,1.351,0Z" transform="translate(283.332 113.188) rotate(-90)" fill="#fff"/>
                            </g>
                        </g>
                    </svg>

                </a>

            </div>
        </section>

<!--            PICKUP COMPANY-->
        <section class="pickup">
            <div class="pickup-inner">
                <h2 class="single-ttl">
                    <span class="en"><small>p</small>ick up <small>c</small>ompany</span>
                    <span class="jp">おすすめ企業</span>
                </h2>
<!--                LOGO LIST-->
                <div class="logo-list">
                    <div class="logo-list-inner fl">
                        <div class="logo-item">
                            <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clogo01.png" alt="">
                        </div>
                        <div class="logo-item">
                            <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clogo02.png" alt="">
                        </div>
                        <div class="logo-item">
                            <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clogo03.png" alt="">
                        </div>
                        <div class="logo-item">
                            <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clogo04.png" alt="">
                        </div>
                        <div class="logo-item">
                            <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clogo05.png" alt="">
                        </div>
                        <div class="logo-item">
                            <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clogo06.png" alt="">
                        </div>
                        <div class="logo-item">
                            <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clogo07.png" alt="">
                        </div>
                        <div class="logo-item">
                            <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/clogo08.png" alt="">
                        </div>
                    </div>
                </div>

<!--                ARTICLES-->
                <div class="company-articles">
                    <div class="company-articles-inner inner-1468">
                        <h3 class="ttl">おすすめ企業記事</h3>
                        <div class="articles-list fl">
                            <div class="article-item">
                                <a href="#">
                                    <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/a01.png" alt="">
                                </a>
                            </div>

                            <div class="article-item">
                                <a href="#">
                                    <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/a02.png" alt="">
                                </a>
                            </div>

                            <div class="article-item">
                                <a href="#">
                                    <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/a03.png" alt="">
                                </a>
                            </div>

                            <div class="article-item">
                                <a href="#">
                                    <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/a04.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

<!--        MOVIES-INTERVIEWS-->

        <section class="movies-interviews">
            <div class="movies-interviews-inner">
                <div class="company-movies">
                    <h2 class="single-ttl">
                        <span class="en"><small>R</small>ECRUIT <small>M</small>OVIES</span>
                        <span class="jp">採用動画</span>
                    </h2>

                    <?php
                    $args = array(
                        'post_type'      => 'movies',
                        'posts_per_page' => 5,
                        'paged'          => $paged,
                    );
                    $movies = new WP_Query($args);
                    ?>

                    <div class="company-movie-list">
                        <div class="swiper-wrapper">
                            <?php if ($movies->have_posts()) : ?>
                                <?php while ($movies->have_posts()) : $movies->the_post(); ?>
                                    <?php
                                    $movie_id = get_the_ID();
                                    $movie_title = get_the_title();
                                    $thumbnail_url = '';
                                    $is_enviry = 'false';
                                    $video_type = get_field('type_video');
                                    if ($video_type == 'youtube') {
                                        $youtube = get_field('youtube');
                                        if ($youtube) {
                                            parse_str(parse_url($youtube, PHP_URL_QUERY), $yt_params);
                                            $video_id = isset($yt_params['v']) ? $yt_params['v'] : basename(parse_url($youtube, PHP_URL_PATH));
                                            $video_id = isset($yt_params['v']) ? $yt_params['v'] : basename(parse_url($youtube, PHP_URL_PATH));
                                            $thumbnail_url = "https://img.youtube.com/vi/$video_id/sddefault.jpg";
                                        }
                                    } elseif ($video_type == 'enviry') {
                                        $enviry = get_field('enviry');
                                        $is_enviry = 'true';
                                        $thumbnail_url = "";
                                    }
                                    ?>
                                    <div class="movie-item swiper-slide" data-id="<?php echo esc_attr($movie_id); ?>" data-enviry="<?php echo $is_enviry;?>">
                                        <img class="thumbnail" src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_url($movie_title); ?>">
                                        <div class="box-text">
                                            <p class="title"><?php echo get_the_title(); ?></p>
                                            <p class="company"><?php echo get_field("company"); ?></p>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <p class="novideos">No Videos Available.</p>
                            <?php endif; ?>
                        </div>
                        <span class="paginationn"></span>

                    </div>
                    <?php if ($movies->have_posts()) : ?>
                        <?php while ($movies->have_posts()) : $movies->the_post(); ?>
                            <?php
                            $movie_id = get_the_ID();
                            $movie_title = get_the_title();
                            $is_enviry = 'false';
                            $video_type = get_field('type_video');
                            $video_embed  = '';
                            if ($video_type == 'youtube') {
                                $youtube = get_field('youtube');
                                if ($youtube) {
                                    parse_str(parse_url($youtube, PHP_URL_QUERY), $yt_params);
                                    $video_id = isset($yt_params['v']) ? $yt_params['v'] : basename(parse_url($youtube, PHP_URL_PATH));
                                    $video_embed = '<iframe width="100%" height="100%" src="https://www.youtube.com/embed/' . esc_attr($video_id) . '?playlist=' . esc_attr($video_id) . '" frameborder="0" allowfullscreen></iframe>';

                                }
                            } elseif ($video_type == 'enviry') {
                                $enviry = get_field('enviry');
                                $is_enviry = 'true';
                                $video_embed = $enviry;
                            }
                            ?>
                            <!-- Popup Modal -->
                            <div id="movie-popup-<?php echo esc_attr($movie_id); ?>" class="popup">
                                <div class="popup-content">
                                    <span class="close-btn">&times;</span>

                                    <div class="popup-movie-text">
                                        <?php echo $video_embed; ?>
                                    </div>
                                    <h3 class="movie-ttl"><?php echo get_field("company"); ?></h3>

                                    <?php if( have_rows('button_list') ): ?>
                                        <ul class="link-list fl">
                                            <?php while( have_rows('button_list') ): the_row();
                                                $label = get_sub_field('label');
                                                $link = get_sub_field('link');
                                                ?>
                                                <li>
                                                    <a href="<?php echo esc_url($link); ?>" target="_blank">
                                                        <?php echo esc_html($label); ?>
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/darrowl.png">
                                                    </a>
                                                </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p class="novideos">No Videos Available.</p>
                    <?php endif; ?>


                    <a href="/movie" class="mbutton trans">採用動画をもっと見る

                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16.191" height="14.265" viewBox="0 0 16.191 14.265">
                            <defs>
                                <clipPath id="clip-path">
                                    <rect width="16.191" height="14.265" fill="none"></rect>
                                </clipPath>
                            </defs>
                            <g id="arrow-r" clip-path="url(#clip-path)">
                                <g id="arrow-r-2" data-name="arrow-r" transform="translate(-355.282 -27.326)">
                                    <path id="Path_734" data-name="Path 734" d="M85.593,81.679a.955.955,0,0,0-1.351-1.351l-5.507,5.506L73.23,80.328a.955.955,0,0,0-1.357,1.344l.006.006,6.182,6.182a.955.955,0,0,0,1.351,0Z" transform="translate(275.236 113.188) rotate(-90)" fill="#fff"></path>
                                    <path id="Path_735" data-name="Path 735" d="M85.593,81.679a.955.955,0,0,0-1.351-1.351l-5.507,5.506L73.23,80.328a.955.955,0,0,0-1.357,1.344l.006.006,6.182,6.182a.955.955,0,0,0,1.351,0Z" transform="translate(283.332 113.188) rotate(-90)" fill="#fff"></path>
                                </g>
                            </g>
                        </svg>

                    </a>

                </div>

                <div class="company-interviews">
                    <h2 class="single-ttl">
                        <span class="en"><small>I</small>nterview</span>
                        <span class="jp">インタビュー記事で企業を知る</span>
                    </h2>
                    <div class="interviews-list">
                        <?php

                        $args = array(
                            'post_type' => 'interview',
                            'posts_per_page' => 6,
                        );

                        $interview = new WP_Query($args);

                        ?>

                        <div class="interviews-list-inner swiper">
                            <div class="swiper-wrapper">
                                <?php
                                if ($interview->have_posts()) :
                                    while ($interview->have_posts()) : $interview->the_post();
                                        ?>

                                        <div class="interview-item swiper-slide">
                                            <div class="interview-item-inner">
                                                <div class="avatar">
                                                    <?php the_post_thumbnail('full'); ?>
                                                </div>
                                                <ul class="tag-list fl">
                                                    <li><a href="#">東京都</a></li>
                                                    <li><a href="#">運送</a></li>
                                                    <li><a href="#">正社員</a></li>
                                                </ul>
                                                <h4 class="ttl"><?php echo get_the_title(); ?></h4>
                                                <p class="text"><?php echo get_field('company_name'); ?></p>
                                                <a class="readmore" href="<?php echo get_permalink(); ?>">READ MORE</a>
                                            </div>
                                        </div>

                                    <?php endwhile;
                                    wp_reset_postdata();
                                else :
                                    echo '<p>No interview Post</p>';
                                endif;
                                ?>
                            </div>

                            <span class="paginationn"></span>
                        </div>
                    </div>

                    <a href="/interview" class="mbutton trans">インタビュー記事をもっと見る
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16.191" height="14.265" viewBox="0 0 16.191 14.265">
                            <defs>
                                <clipPath id="clip-path">
                                    <rect width="16.191" height="14.265" fill="none"></rect>
                                </clipPath>
                            </defs>
                            <g id="arrow-r" clip-path="url(#clip-path)">
                                <g id="arrow-r-2" data-name="arrow-r" transform="translate(-355.282 -27.326)">
                                    <path id="Path_734" data-name="Path 734" d="M85.593,81.679a.955.955,0,0,0-1.351-1.351l-5.507,5.506L73.23,80.328a.955.955,0,0,0-1.357,1.344l.006.006,6.182,6.182a.955.955,0,0,0,1.351,0Z" transform="translate(275.236 113.188) rotate(-90)" fill="#fff"></path>
                                    <path id="Path_735" data-name="Path 735" d="M85.593,81.679a.955.955,0,0,0-1.351-1.351l-5.507,5.506L73.23,80.328a.955.955,0,0,0-1.357,1.344l.006.006,6.182,6.182a.955.955,0,0,0,1.351,0Z" transform="translate(283.332 113.188) rotate(-90)" fill="#fff"></path>
                                </g>
                            </g>
                        </svg>

                    </a>
                </div>
            </div>
        </section>

        <section class="pickup tenshoku">
            <div class="pickup-inner">
                <div class="hint">
                    <h2>COPO LABO
                        <img class="avatar" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lamp.png" alt="">
                    </h2>
                    <p class="note">コポラボ</p>
                    <p class="subt">～仕事選びの新しい視点と、役立つ情報を発信～</p>
                </div>
            </div>

        </section>

        <div class="hint-list">
            <?php

            $args = array(
                'post_type' => 'copo-labo',
                'posts_per_page' => 6,
            );

            $hint = new WP_Query($args);

            ?>

            <div class="hint-list-inner swiper">
                <div class="swiper-wrapper">
                    <?php
                    if ($hint->have_posts()) :
                        while ($hint->have_posts()) : $hint->the_post();
                            ?>

                            <div class="hint-item swiper-slide">
                                <div class="hint-item-inner">
                                    <div class="avatar">
                                        <?php the_post_thumbnail('full'); ?>
                                    </div>
                                    <ul class="tag-list fl">
                                        <li><a href="#">東京都</a></li>
                                        <li><a href="#">運送</a></li>
                                        <li><a href="#">正社員</a></li>
                                    </ul>
                                    <h4 class="ttl"><?php echo get_the_title(); ?></h4>
                                    <a class="readmore" href="<?php echo get_permalink(); ?>">READ MORE</a>
                                </div>
                            </div>

                        <?php endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p>No interview Post</p>';
                    endif;
                    ?>
                </div>

                <span class="paginationn"></span>
            </div>

            <a href="/copo-labo" class="mbutton trans">ノウハウ記事をもっと見る
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16.191" height="14.265" viewBox="0 0 16.191 14.265">
                    <defs>
                        <clipPath id="clip-path">
                            <rect width="16.191" height="14.265" fill="none"></rect>
                        </clipPath>
                    </defs>
                    <g id="arrow-r" clip-path="url(#clip-path)">
                        <g id="arrow-r-2" data-name="arrow-r" transform="translate(-355.282 -27.326)">
                            <path id="Path_734" data-name="Path 734" d="M85.593,81.679a.955.955,0,0,0-1.351-1.351l-5.507,5.506L73.23,80.328a.955.955,0,0,0-1.357,1.344l.006.006,6.182,6.182a.955.955,0,0,0,1.351,0Z" transform="translate(275.236 113.188) rotate(-90)" fill="#fff"></path>
                            <path id="Path_735" data-name="Path 735" d="M85.593,81.679a.955.955,0,0,0-1.351-1.351l-5.507,5.506L73.23,80.328a.955.955,0,0,0-1.357,1.344l.006.006,6.182,6.182a.955.955,0,0,0,1.351,0Z" transform="translate(283.332 113.188) rotate(-90)" fill="#fff"></path>
                        </g>
                    </g>
                </svg>

            </a>


            <div class="banner-home">
                    <a class="#">
                        <picture>
                            <source media="(max-width: 767px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banner-bottom-sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/tenbanner.png 2x">
                            <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/tenbanner.png" alt="">
                        </picture>
                    </a>
            </div>
        </div>
    </div>


    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/home.js"></script>

<?php
get_footer()
?>

