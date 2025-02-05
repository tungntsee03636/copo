<?php
/*
 Template Name: Top3
 */
get_header();
?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/top3.css"/>

    <section id="top3" class="single top3 inner">
        <h2 class="single-ttl">
            <span class="en"><small>F</small>ind your calling</span>
            <span class="jp">特集からお仕事を探す</span>
        </h2>

        <div class="category-list fl">
            <div class="category-item"><a href="#">カテゴリ名</a></div>
            <div class="category-item"><a href="#">カテゴリ名</a></div>
            <div class="category-item"><a href="#">カテゴリ名</a></div>
            <div class="category-item"><a href="#">カテゴリ名</a></div>
        </div>
        <div class="inner-1468 single-content">

            <!--        CONTENT01-->
            <div class="content01">

                <picture class="js-fadein">
                    <source media="(max-width: 767px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top3.png 2x">
                    <source media="(min-width: 768px)" srcset="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top3.png 2x">
                    <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/top3.png" alt="">
                </picture>
                <h1 class="company-title">タイトルタイトルタイトル</h1>
                <h2>リード文リード文リード文リード文リード文リード文<br>
                    リード文リード文リード文リード文リード文リード文リード文</h2>
                <div class="company-box">
                    <p>記事内容文面記事内容文面記事内容文面記事内容文面記事内容文面記事内容文面<br class="pc-br">
                        事内容文面記事内容文面記事内容文面記事内容文面記事内容文面<br class="pc-br">
                        記事内容文面記事内容文面記事内容文面記事内容文面記事内容文面記事内容文面<br class="pc-br">
                        記事内容文面記事内容文面記事内容文面記事内容文面記事内容文面<br class="pc-br">
                        記事内容文面記事内容文面記事内容文面<br class="pc-br">
                        記事内容文面記事内容文面記事内容文面記事内容文面<br class="pc-br">
                        記事内容文面記事内容文面記事内容文面記事内容文面記事内容文面
                    </p>
                    <img class="bor boduoi" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/boduoi.png">
                </div>

            </div>

            <div class="calling-list">
                <div class="calling-item js-fadein">
                    <p class="label">応募受付中</p>
                    <div class="calling-item-inner fl">
                        <div class="box-logo">
                            <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/toyota.png" alt="">
                        </div>
                        <div class="box-text">
                            <ul class="tag">
                                <li>スペシャルメッセージ</li>
                                <li>動画</li>
                            </ul>
                            <h3 class="ttl">株式会社XXXXXXX</h3>
                            <p class="text">XXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                            <p class="text map"><span> <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mappen.png" alt=""></span>XXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                            <p class="text phone">000-0000-0000</p>
                            <p class="text">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                        </div>
                        <div class="box-img">
                            <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/callimg.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="calling-item js-fadein">
                    <p class="label">応募受付中</p>
                    <div class="calling-item-inner fl">
                        <div class="box-logo">
                            <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/toyota.png" alt="">
                        </div>
                        <div class="box-text">
                            <ul class="tag">
                                <li>スペシャルメッセージ</li>
                                <li>動画</li>
                            </ul>
                            <h3 class="ttl">株式会社XXXXXXX</h3>
                            <p class="text">XXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                            <p class="text map"><span> <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mappen.png" alt=""></span>XXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                            <p class="text phone">000-0000-0000</p>
                            <p class="text">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                        </div>
                        <div class="box-img">
                            <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/callimg.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="calling-item js-fadein">
                    <p class="label">応募受付中</p>
                    <div class="calling-item-inner fl">
                        <div class="box-logo">
                            <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/toyota.png" alt="">
                        </div>
                        <div class="box-text">
                            <ul class="tag">
                                <li>スペシャルメッセージ</li>
                                <li>動画</li>
                            </ul>
                            <h3 class="ttl">株式会社XXXXXXX</h3>
                            <p class="text">XXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                            <p class="text map"><span> <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mappen.png" alt=""></span>XXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                            <p class="text phone">000-0000-0000</p>
                            <p class="text">XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX</p>
                        </div>
                        <div class="box-img">
                            <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/callimg.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


<?php
get_footer()
?>