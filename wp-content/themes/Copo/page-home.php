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
                    <span class="en"><small>F</small>ind your calling</span>
                    <span class="jp">特集からお仕事を探す</span>
                </h2>
            </div>

        </section>
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
                disableOnInteraction: false
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
                disableOnInteraction: false
            },

        });
    </script>
<?php
get_footer()
?>