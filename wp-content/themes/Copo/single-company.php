<?php

get_header();
?>

    <section id="single-company" class="single template-single-company inner">
        <h2 class="single-ttl">
            <span class="en"><small>P</small>ick up COMPANY</span>
            <span class="jp">おすすめ企業</span>
        </h2>

        <div class="category-list fl">
            <div class="category-item"><a href="#">カテゴリ名</a></div>
            <div class="category-item"><a href="#">カテゴリ名</a></div>
            <div class="category-item"><a href="#">カテゴリ名</a></div>
            <div class="category-item"><a href="#">カテゴリ名</a></div>
        </div>
        <div class="inner-1468 single-content">
            <picture class="js-fadein sbanner">
                <source media="(max-width: 767px)" srcset="<?php echo get_field('company_img'); ?>">
                <source media="(min-width: 768px)" srcset="<?php echo get_field('company_img'); ?>">
                <img class="sizes" src="<?php echo get_field('company_img'); ?>" alt="">
            </picture>

            <p class="company-name"><?php echo get_field('company_name'); ?></p>
            <!--        CONTENT01-->
            <div class="content01">
                <img class="company-logo" src="<?php echo get_field('company_logo'); ?>">
                <h1 class="company-title">タイトルタイトルタイトル</h1>
                <picture class="js-fadein">
                    <?php the_post_thumbnail('full'); ?>
                </picture>
                <h2><?php echo get_field('sub_title'); ?></h2>
                <div class="company-box">
                    <?php echo get_field('description'); ?>
                    <img class="bor botren" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/botren.png">
                    <img class="bor boduoi" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/boduoi.png">
                </div>

            </div>
            <!--        CONTENT02-->
            <div class="content02">
                <dl class="person-list">
                    <?php while( have_rows('person_list') ): the_row();
                        $image = get_sub_field('person_image');
                        $title = get_sub_field('person_title');
                        $description = get_sub_field('person_description');
                        ?>
                    <dt class="person-item fl">
                        <div class="box-img">
                            <picture class="js-fadein">
                                <source media="(max-width: 767px)" srcset="<?php echo $image; ?>">
                                <source media="(min-width: 768px)" srcset="<?php echo $image; ?>">
                                <img class="sizes" src="<?php echo $image; ?>" alt="">
                            </picture>
                        </div>
                        <div class="box-text">
                            <h2 class="ttl"><?php echo $title; ?></h2>
                            <?php echo $description; ?>
                        </div>
                    </dt>
                    <?php endwhile; ?>
                </dl>
            </div>
            <!--        CONTENT03-->
            <div class="content03">
                <picture class="js-fadein">
                    <source media="(max-width: 767px)" srcset="<?php echo get_field('bottom_img'); ?>">
                    <source media="(min-width: 768px)" srcset="<?php echo get_field('bottom_img'); ?>">
                    <img class="sizes" src="<?php echo get_field('bottom_img'); ?>" alt="">
                </picture>
                <h2><?php echo get_field('bottom_title'); ?></h2>
                <?php echo get_field('bottom_description'); ?>
            </div>
        </div>
    </section>


<?php
get_footer()
?>