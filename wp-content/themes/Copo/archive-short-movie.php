<?php
/*
 Template Name: Short Movie
 */
get_header();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type'      => 'short-movie',
    'posts_per_page' => 6, // Số bài viết mỗi trang
    'paged'          => $paged
);

$movies = new WP_Query($args);
?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/short-movie.css"/>

    <section id="short-movie" class="single short-movie inner">
        <h2 class="single-ttl">
            <span class="en"><small>S</small>hort <small>M</small>OVIES</span>
            <span class="jp">ショート動画</span>
        </h2>

        <div class="category-list fl">
            <div class="category-item"><a href="#">カテゴリ名</a></div>
            <div class="category-item"><a href="#">カテゴリ名</a></div>
            <div class="category-item"><a href="#">カテゴリ名</a></div>
            <div class="category-item"><a href="#">カテゴリ名</a></div>
        </div>

        <div class="short-movie-list">
            <div class="short-movie-list-inner fl">
                <?php if ($movies->have_posts()) : ?>
                    <?php while ($movies->have_posts()) : $movies->the_post(); ?>
                        <?php
                        $movie_id = get_the_ID();
                        $short_link = get_field('link-short-movie', $movie_id); // Lấy custom field "short-link"
                        ?>

                        <div class="short-movie-item" data-id="<?php echo esc_attr($movie_id); ?>" style="cursor:pointer;">
                            <div class="tiktok-video-wrapper">
                                <blockquote class="tiktok-embed" cite="<?php echo esc_url($short_link); ?>" data-video-id="<?php echo esc_attr(basename($short_link)); ?>">
                                    <a href="<?php echo esc_url($short_link); ?>" style="width: 100%"></a>
                                </blockquote>
                                <script async src="https://www.tiktok.com/embed.js"></script>
                            </div>

                        </div>

                    <?php endwhile; ?>
                <?php else : ?>
                    <p class="novideos">No Videos Available.</p>
                <?php endif; ?>
            </div>

        </div>

    </section>


<?php
get_footer()
?>