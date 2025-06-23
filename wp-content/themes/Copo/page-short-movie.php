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
                    $movie_title = get_the_title();
                    $thumbnail_url = '';
                    $video_embed  = '';
                    $is_enviry = 'false';
                    $video_type = get_field('type_video');
                    if ($video_type == 'youtube') {
                        $short_youtube = get_field('short_youtube');
                        if ($short_youtube) {
                            parse_str(parse_url($short_youtube, PHP_URL_QUERY), $yt_params);
                            $video_id = isset($yt_params['v']) ? $yt_params['v'] : basename(parse_url($short_youtube, PHP_URL_PATH));
                            $thumbnail_url = "https://img.youtube.com/vi/$video_id/maxresdefault.jpg";
                            $video_embed = '<iframe width="100%" height="584" src="https://www.youtube.com/embed/' . esc_attr($video_id) . '?autoplay=1&mute=1&loop=1&playlist=' . esc_attr($video_id) . '" frameborder="0" allowfullscreen></iframe>';
                            $video_embed1 = '<iframe width="100%" height="584" src="https://www.youtube.com/embed/' . esc_attr($video_id) . '?playlist=' . esc_attr($video_id) . '" frameborder="0" allowfullscreen></iframe>';
                        }
                    } elseif ($video_type == 'enviry') {
                        $short_enviry = get_field('short_enviry');
                        $is_enviry = 'true';
                        if ($short_enviry) {
                            $video_embed = $short_enviry;
                            $thumbnail_url = get_stylesheet_directory_uri() . '/assets/img/phone.png';
                        }
                    }
                    ?>
                    <div class="short-movie-item" data-id="<?php echo esc_attr($movie_id); ?>" data-enviry="<?php echo $is_enviry;?>">
                        <img class="thumbnail" src="<?php echo esc_url($thumbnail_url); ?>" alt="Thumbnail">
                        <div class="preview-video">
                            <?php echo $video_embed; ?>
                            <div class="overlay"></div>
                        </div>
                    </div>

                    <!-- Popup Modal -->
                    <div id="movie-popup-<?php echo esc_attr($movie_id); ?>" class="popup">
                        <div class="popup-content">
                            <span class="close-btn">&times;</span>

                            <div class="popup-movie-text">
                                <?php echo $video_embed1; ?>
                            </div>
                            <h3 class="movie-ttl"><?php echo $movie_title; ?></h3>
                            <?php if( have_rows('button_list') ): ?>
                                <ul class="link-list fl">
                                    <?php while( have_rows('button_list') ): the_row();
                                        $label = get_sub_field('label');
                                        $link = get_sub_field('link');
                                        ?>
                                        <li>
                                            <a href="<?php echo esc_url($link); ?>" target="_blank">
                                                <?php echo esc_html($label); ?>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/darrowl.png">
                                            </a>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
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
                'prev_text'    => '<img src="' . get_template_directory_uri() . '/assets/img/next.png" alt="prev" />',
                'next_text'    => '<img src="' . get_template_directory_uri() . '/assets/img/next.png" alt="Next" />',
            ));
            ?>
        </div>
        <?php wp_reset_postdata(); ?>
    </div>
</section>



<script src="<?php bloginfo('template_directory'); ?>/assets/js/short-movie.js"></script>

<?php
get_footer();
?>
