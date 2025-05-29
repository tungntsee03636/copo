<?php
/*
 Template Name: Top3
 */
get_header();
?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/calling.css"/>

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
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="content01">

                <picture class="js-fadein">
                    <?php the_post_thumbnail('full'); ?>
                </picture>

                <div class="company-box">
                    <h1 class="company-title"><?php the_title(); ?></h1>
                    <h2 class="part">
                        <?php echo get_field('part'); ?><br>
                        <?php echo get_field('address'); ?>
                    </h2>
                    <p><?php echo get_field('pr'); ?></p>
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
            <?php endwhile; endif; ?>
        </div>
    </section>


<?php
get_footer()
?>