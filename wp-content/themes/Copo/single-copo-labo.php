<?php

get_header();
?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/copo-labo.css"/>

    <section id="copo-labo" class="single copo-labo inner">
        <h2 class="single-ttl">
            <span class="en"><small>C</small>opo Labo</span>
            <span class="jp">～仕事選びの新しい視点と、役立つ情報を発信～</span>
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

            <picture class="js-fadein feature-img">
                <?php the_post_thumbnail('full'); ?>
            </picture>

            <div class="post-content">
                <?php echo wpautop(the_content()); ?>
            </div>


        <?php endwhile; endif; ?>

        </div>
    </section>


<?php
get_footer()
?>