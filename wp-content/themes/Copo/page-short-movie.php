<?php
/*
 Template Name: Short Movie
 */
get_header();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type'      => 'short-movies',
    'posts_per_page' => 6, // Số bài viết mỗi trang
    'paged'          => $paged,
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
            <div class="category-item"><a href="#">カテゴリ名</a></div>            <div class="category-item"><a href="#">カテゴリ名</a></div>
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
                            <?php
                            if ($short_link) :
                                if (strpos($short_link, 'tiktok.com') !== false) :
                                    // Nếu là link TikTok
                                    ?>
                                    <div class="video-wrapper">
                                        <blockquote class="tiktok-embed" cite="<?php echo esc_url($short_link); ?>" data-video-id="<?php echo esc_attr(basename($short_link)); ?>" style="width: 100%;">
                                            <a href="<?php echo esc_url($short_link); ?>"></a>
                                        </blockquote>
                                        <script async src="https://www.tiktok.com/embed.js"></script>
                                    </div>
                                <?php
                                elseif (strpos($short_link, 'youtube.com') !== false || strpos($short_link, 'youtu.be') !== false) :
                                    // Nếu là link YouTube
                                    parse_str(parse_url($short_link, PHP_URL_QUERY), $yt_params);
                                    $video_id = isset($yt_params['v']) ? $yt_params['v'] : basename(parse_url($short_link, PHP_URL_PATH));
                                    ?>
                                    <div class="video-wrapper">
                                        <iframe class="youtube" width="100%" height="576px" src="https://www.youtube.com/embed/<?php echo esc_attr($video_id); ?>" frameborder="0" allowfullscreen></iframe>
                                    </div>
                                <?php
                                endif;
                            endif;
                            ?>

                        </div>

                    <?php endwhile; ?>
                <?php else : ?>
                    <p class="novideos">No Videos Available.</p>
                <?php endif; ?>
            </div>
            <div class="pagination">
                <?php
                echo paginate_links(array(
                    'total'        => $movies->max_num_pages,
                    'current'      => max(1, get_query_var('paged')),
                    'format'       => '?paged=%#%',
                    'prev_text'    => '« Prev',
                    'next_text'    => 'Next »',
                ));
                ?>
            </div>
            <?php wp_reset_postdata(); ?>
        </div>

    </section>


<?php
get_footer()
?>