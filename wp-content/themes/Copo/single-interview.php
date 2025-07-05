<?php

get_header();
?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/interview.css"/>

    <section id="interview" class="single interview inner">
        <h2 class="single-ttl">
            <span class="en"><small>I</small>nterview</span>
            <span class="jp">インタビュー記事</span>
        </h2>

        <div class="category-list fl">
            <div class="category-item"><a href="#">カテゴリ名</a></div>
            <div class="category-item"><a href="#">カテゴリ名</a></div>
            <div class="category-item"><a href="#">カテゴリ名</a></div>
            <div class="category-item"><a href="#">カテゴリ名</a></div>
        </div>
        <div class="inner-1468 single-content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="post-head fl">
                    <ul class="tag-list fl">
                        <li><a href="#">東京都</a></li>
                        <li><a href="#">運送</a></li>
                        <li><a href="#">正社員</a></li>
                    </ul>

                    <p class="time-stamp"><?php echo get_the_date(); ?></p>
                </div>

                <h1><?php echo get_the_title(); ?></h1>
                <p class="company-name"><?php echo get_field('company_name'); ?></p>


                <picture class="js-fadein feature-img">
                    <?php the_post_thumbnail('full'); ?>
                </picture>

                <div class="feature-img-description"><?php echo get_field('feature_img_description');?></div>

                <div class="post-content">
                    <?php echo the_content(); ?>
                </div>

            <?php endwhile; endif; ?>
            <div class="address">
                <?php echo get_field('address'); ?>
            </div>

            <ul class="button-list">
                <li><a href=" <?php echo get_field('link_recruitment'); ?>">採用サイトはこちら</a></li>
                <li><a href=" <?php echo get_field('link_job'); ?>">求人サイトはこちら</a></li>
            </ul>
        </div>
    </section>


<?php
get_footer()
?>