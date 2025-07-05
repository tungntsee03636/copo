<?php
/*
 Template Name: Top3
 */
get_header();
?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/calling.css"/>

    <section id="top3" class="single top3 inner">
        <h2 class="single-ttl">
            <span class="en"><small>F</small>ind <small>Y</small>our <small>C</small>alling</span>
            <span class="jp">特集からお仕事を探す</span>
        </h2>

        <h3 class="sub-t"><?php echo get_field('name'); ?></h3>


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
<!--                    <p class="label">応募受付中</p>-->
                    <div class="calling-item-inner fl">
                        <div class="box-logo">
                            <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/toyota.png" alt="">
                        </div>
                        <div class="box-text">
<!--                            <ul class="tag">-->
<!--                                <li>スペシャルメッセージ</li>-->
<!--                                <li>動画</li>-->
<!--                            </ul>-->
                            <h3 class="ttl">株式会社エヌデーシー</h3>
                            <p class="text">自動車部品製造業</p>
                            <p class="text map"><span> <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mappen.png" alt=""></span>千葉県習志野市実籾2-39-1</p>
<!--                            <p class="text phone">000-0000-0000</p>-->
                            <p class="text">ワーク・ライフ・バランスに力を入れている企業として、「“社員いきいき!元気な会社”宣言企業」に登録！”ものづくり”に興味のある方、自動車業界を一緒に支えていきませんか？</p>
                        </div>
                        <div class="box-img">
                            <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/callimg.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="calling-item js-fadein">
                    <!--                    <p class="label">応募受付中</p>-->
                    <div class="calling-item-inner fl">
                        <div class="box-logo">
                            <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/toyota.png" alt="">
                        </div>
                        <div class="box-text">
                            <h3 class="ttl">株式会社エヌデーシー</h3>
                            <p class="text">ミネラルウォーター、茶系飲料、炭酸飲料、<br>茶葉製品等の製造・販売及び付帯する業務</p>
                            <p class="text map"><span> <img class="sizes" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mappen.png" alt=""></span>大阪府大阪市北区梅田3丁目3-10 梅田ダイビル10階</p>
                            <!--                            <p class="text phone">000-0000-0000</p>-->
                            <p class="text">ワーク・ライフ・バランスに力を入れている企業として、「“社員いきいき!元気な会社”宣言企業」に登録！”ものづくり”に興味のある方、自動車業界を一緒に支えていきませんか？</p>
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