<?php
/*
 Template Name: Short Movie
 */
get_header();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type'      => 'short-movies',
    'posts_per_page' => 6,
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
                    $short_link = get_field('link-short-movie', $movie_id);
                    $thumbnail_url = '';


                    if ($short_link) {
                        if (strpos($short_link, 'youtube.com') !== false || strpos($short_link, 'youtu.be') !== false) {
                            parse_str(parse_url($short_link, PHP_URL_QUERY), $yt_params);
                            $video_id = isset($yt_params['v']) ? $yt_params['v'] : basename(parse_url($short_link, PHP_URL_PATH));
                            $thumbnail_url = "https://img.youtube.com/vi/$video_id/maxresdefault.jpg";
                        } else{
                            preg_match('/Eviry\.Player\.embedkey="([^"]+)"/', $short_link, $matches);
                            $short_link = $matches[1];
                            $thumbnail_url = get_field('eviry_thumbnail', $movie_id);
                        }
                    }
                    ?>
                    <div class="short-movie-item" data-src="<?php echo $short_link; ?>">
                        <p class="check" style="display: none"></p>
                        <img class="thumbnail" src="<?php echo esc_url($thumbnail_url); ?>" alt="Thumbnail">
                        <div class="preview-video"></div>
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


<!-- Popup Video -->
<div id="video-popup" class="popup-overlay">
    <div class="popup-content">
        <span class="popup-close">✖</span>
        <div id="popup-video-container"></div>
    </div>
</div>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/short-movie.js"></script>

<?php
get_footer();
?>
