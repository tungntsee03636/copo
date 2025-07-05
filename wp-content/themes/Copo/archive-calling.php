<?php

get_header();

?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/calling.css"/>

<section id="calling-archive" class="single calling-archive inner">
    <h2 class="single-ttl">
        <span class="en"><small>F</small>ind <small>Y</small>our <small>C</small>alling</span>
        <span class="jp">特集一覧</span>
    </h2>
    <div class="category-list fl">
        <div class="category-item"><a href="#">カテゴリ名</a></div>
        <div class="category-item"><a href="#">カテゴリ名</a></div>
        <div class="category-item"><a href="#">カテゴリ名</a></div>
        <div class="category-item"><a href="#">カテゴリ名</a></div>
    </div>

    <div class="calling-inner">
        <h1>特集一覧</h1>
        <?php if (have_posts()) : ?>
            <div class="calling-list fl">
                <?php while (have_posts()) : the_post(); ?>
                   <div class="calling-item">
                           <a href="<?php the_permalink(); ?>">
                               <picture class="js-fadein feature-img">
                                   <?php the_post_thumbnail('full'); ?>
                               </picture>
                               <h3><?php the_title(); ?></h3>
                           </a>

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
