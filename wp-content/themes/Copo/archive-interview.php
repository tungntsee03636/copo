<?php

get_header();

?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/interview.css"/>

<section id="interview-archive" class="single interview-archive inner">
    <h2 class="single-ttl">
        <span class="en"><small>I</small>nterview</span>
        <span class="jp">インタビュー記事一覧</span>
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
                                    <a href="<?php the_permalink(); ?>"><h3><?php echo get_the_title(); ?></h3></a>
                                    <p class="time-stamp"><?php echo get_the_date(); ?></p>
                                    <p class="company-name"><?php echo get_field('company_name'); ?></p>
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
