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
<!--                SHORT MOVIE LIST-->
                <div class="short-movie-list swiper">
                    <div class="swiper-wrapper">
                        <div class="short-movie-item swiper-slide">
                            <a href="#">
                                <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/short01.png" alt="">
                            </a>
                        </div>
                        <div class="short-movie-item swiper-slide">
                            <a href="#">
                                <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/short02.png" alt="">
                            </a>
                        </div>
                        <div class="short-movie-item swiper-slide">
                            <a href="#">
                                <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/short03.png" alt="">
                            </a>
                        </div>
                        <div class="short-movie-item swiper-slide">
                            <a href="#">
                                <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/short04.png" alt="">
                            </a>
                        </div>
                        <div class="short-movie-item swiper-slide">
                            <a href="#">
                                <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/short05.png" alt="">
                            </a>
                        </div>
                        <div class="short-movie-item swiper-slide">
                            <a href="#">
                                <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/short06.png" alt="">
                            </a>
                        </div>

                        <div class="short-movie-item swiper-slide">
                            <a href="#">
                                <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/short03.png" alt="">
                            </a>
                        </div>
                    </div>
                    <span class="swiper-pagination"></span>
                </div>

                <a href="#" class="mbutton">ショート動画をもっと見る
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

                <div class="calling-list">
                    <div class="swiper-wrapper">
                        <div class="calling-item swiper-slide">
                            <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top3.png" alt="">
                        </div>
                        <div class="calling-item swiper-slide">
                            <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top3.png" alt="">
                        </div>
                        <div class="calling-item swiper-slide">
                            <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top3.png" alt="">
                        </div>
                    </div>
                </div>

                <a href="#" class="mbutton">ショート動画をもっと見る
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
                        <span class="en"><small>V</small>iew companies on <small>M</small>OVIES</span>
                        <span class="jp">動画コンテンツ公開企業</span>
                    </h2>


                    <div class="company-movie-list">
                        <div class="swiper-wrapper">
                            <div class="movie-item swiper-slide">
                                <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/m1.png" alt="">
                            </div>
                            <div class="movie-item swiper-slide">
                                <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/m2.png" alt="">
                            </div>
                            <div class="movie-item swiper-slide">
                                <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/m3.png" alt="">
                            </div>
                            <div class="movie-item swiper-slide">
                                <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/m4.png" alt="">
                            </div>
                            <div class="movie-item swiper-slide">
                                <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/m5.png" alt="">
                            </div>

                        </div>
                        <span class="paginationn"></span>
                    </div>

                    <a href="#" class="mbutton trans">ショート動画をもっと見る
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
                        <div class="interviews-list-inner fl">
                            <div class="interview-item">
                                <div class="interview-item-inner">
                                    <img class="logo-interview" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo01.png" alt="">
                                    <img class="avatar" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/avt01.png" alt="">
                                    <h4 class="ttl">インタビュー記事見出し</h4>
                                    <p class="text">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                                    <a class="readmore">READ MORE</a>
                                </div>
                            </div>

                            <div class="interview-item">
                                <div class="interview-item-inner">
                                    <img class="logo-interview" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo02.png" alt="">
                                    <img class="avatar" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/avt02.png" alt="">
                                    <h4 class="ttl">インタビュー記事見出し</h4>
                                    <p class="text">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                                    <a class="readmore">READ MORE</a>
                                </div>
                            </div>

                            <div class="interview-item">
                                <div class="interview-item-inner">
                                    <img class="logo-interview" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo03.png" alt="">
                                    <img class="avatar" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/avt03.png" alt="">
                                    <h4 class="ttl">インタビュー記事見出し</h4>
                                    <p class="text">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                                    <a class="readmore">READ MORE</a>
                                </div>
                            </div>

                            <div class="interview-item">
                                <div class="interview-item-inner">
                                    <img class="logo-interview" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo04.png" alt="">
                                    <img class="avatar" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/avt04.png" alt="">
                                    <h4 class="ttl">インタビュー記事見出し</h4>
                                    <p class="text">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                                    <a class="readmore">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="mbutton trans">ショート動画をもっと見る
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
                    <h2>TENSHOKU HINT
                        <img class="avatar" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/lamp.png" alt="">
                    </h2>
                    <p class="subt">～転職・就職応援マガジン～</p>
                    <p class="text">全国各地のお仕事の最新情報を伝える、転職サイトtenichiの求人紹介メディア</p>
                </div>
            </div>

        </section>

        <div class="hint-list">
            <div class="hint-list-inner fl">
                <div class="hint-item">
                    <img class="avatar" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hint01.png" alt="">
                </div>

                <div class="hint-item">
                    <img class="avatar" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hint02.png" alt="">
                </div>

                <div class="hint-item">
                    <img class="avatar" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hint03.png" alt="">
                </div>

                <div class="hint-item">
                    <img class="avatar" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hint04.png" alt="">
                </div>
            </div>

            <a href="#" class="mbutton trans">ショート動画をもっと見る
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
                        <picture >
                            <source media="(max-width: 767px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banner-bottom-sp.png 2x">
                            <source media="(min-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/tenbanner.png 2x">
                            <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/tenbanner.png" alt="">
                        </picture>
                    </a>
            </div>
        </div>
    </div>


    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper(".short-movie-list", {
            centeredSlides: true,
            simulateTouch:true,
            slidesPerView: 4.29,
            grabCursor: true,
            freeMode: false,
            spaceBetween: 55.6,
            loop: true,
            mousewheel: false,
            keyboard: {
                enabled: true
            },

            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },

            pagination: {
                el: ".short-movie-list .swiper-pagination",
                dynamicBullets: false,
                clickable: true
            },

        });

        const swiper01 = new Swiper(".calling-list", {
            centeredSlides: true,
            simulateTouch:true,
            slidesPerView: 1.95,
            grabCursor: true,
            freeMode: false,
            spaceBetween: 43.1,
            loop: true,
            mousewheel: false,
            keyboard: {
                enabled: true
            },

            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },

        });

        const swiper02 = new Swiper(".company-movie-list", {
            centeredSlides: true,
            simulateTouch:true,
            slidesPerView: 3.414,
            // slidesPerView: "auto",
            grabCursor: true,
            freeMode: false,
            spaceBetween: 24,
            loop: true,
            mousewheel: false,
            keyboard: {
                enabled: true
            },

            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },

            pagination: {
                el: ".company-movie-list .paginationn",
                dynamicBullets: false,
                clickable: true
            },

        });

        $(document).ready(function() {
            if ($("#homepage").length) {
                $(".banner-bottom").remove();
            }
        });
    </script>
<?php
get_footer()
?>