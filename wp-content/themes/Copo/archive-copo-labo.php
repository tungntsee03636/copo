<?php

get_header();

?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/copo-labo.css"/>

<section id="copo-labo-archive" class="single copo-labo-archive inner">
    <h2 class="single-ttl">
        <span class="en"><small>C</small>opo <small>L</small>abo</span>
        <span class="jp">コポラボ記事一覧</span>
    </h2>
    <div class="category-list fl">
        <div class="category-item"><a href="#">カテゴリ名</a></div>
        <div class="category-item"><a href="#">カテゴリ名</a></div>
        <div class="category-item"><a href="#">カテゴリ名</a></div>
        <div class="category-item"><a href="#">カテゴリ名</a></div>
    </div>

    <div class="labo-inner">
        <h1>新着の記事一覧</h1>
        <?php if (have_posts()) : ?>
        <div class="labo-list">
            <?php while (have_posts()) : the_post(); ?>
            <div class="labo-item">
                <div class="labo-item-inner fl">
                    <div class="box-img">
                        <a href="<?php the_permalink(); ?>">
                        <picture class="js-fadein feature-img">
                            <?php the_post_thumbnail('full'); ?>
                        </picture>
                        </a>
                    </div>

                    <div class="box-text">
                        <ul class="tag-list fl">
                            <li><a href="#">東京都</a></li>
                            <li><a href="#">運送</a></li>
                            <li><a href="#">正社員</a></li>
                        </ul>
                        <h3><?php echo get_the_title(); ?></h3>
                        <p class="time-stamp"><?php echo get_the_date(); ?></p>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>


        <?php
        the_posts_pagination([
                'prev_text'    => '<img src="' . get_template_directory_uri() . '/assets/img/next.png" alt="prev" />',
                'next_text'    => '<img src="' . get_template_directory_uri() . '/assets/img/next.png" alt="Next" />',
                'mid_size' => 2,
                'screen_reader_text' => ' ',
        ]);
        ?>
    <?php wp_reset_postdata(); ?>
</section>



<script src="<?php bloginfo('template_directory'); ?>/assets/js/movie.js"></script>

<?php
get_footer();
?>
