<?php

get_header();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type'      => 'movies',
    'posts_per_page' => 6,
    'paged'          => $paged,
);

$movies = new WP_Query($args);
?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/movie.css"/>

<section id="movie" class="single movie inner">
    <h2 class="single-ttl">
        <span class="en"><small>R</small>ECRUIT <small>M</small>OVIES</span>
        <span class="jp">採用動画</span>
    </h2>
    <div class="category-list fl">
        <div class="category-item"><a href="#">カテゴリ名</a></div>
        <div class="category-item"><a href="#">カテゴリ名</a></div>
        <div class="category-item"><a href="#">カテゴリ名</a></div>
        <div class="category-item"><a href="#">カテゴリ名</a></div>
    </div>
    <div class="movie-list">
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
                    $youtube = get_field('youtube');
                    if ($youtube) {
                        parse_str(parse_url($youtube, PHP_URL_QUERY), $yt_params);
                        $video_id = isset($yt_params['v']) ? $yt_params['v'] : basename(parse_url($youtube, PHP_URL_PATH));
                        $thumbnail_url = "https://img.youtube.com/vi/$video_id/sddefault.jpg";
                        $video_embed = '<iframe width="100%" height="584" src="https://www.youtube.com/embed/' . esc_attr($video_id) . '?playlist=' . esc_attr($video_id) . '" frameborder="0" allowfullscreen></iframe>';
                    }
                } elseif ($video_type == 'enviry') {
                    $enviry = get_field('enviry');
                    $is_enviry = 'true';
                    if ($enviry) {
                        $video_embed = $enviry;
                        $thumbnail_url = get_stylesheet_directory_uri() . '/assets/img/phone.png';
                    }
                }
                ?>
                <div class="movie-wrap">
                    <div class="movie-item" data-id="<?php echo esc_attr($movie_id); ?>" data-enviry="<?php echo $is_enviry;?>">
                        <img class="thumbnail" src="<?php echo esc_url($thumbnail_url); ?>" alt="Thumbnail">
                        <div class="overlay"></div>
                        <h2 class="movie-title"><?php echo $movie_title; ?></h2>
                        <p class="company"><?php echo get_field("company"); ?></p>
                    </div>

                    <!-- Popup Modal -->
                    <div id="movie-popup-<?php echo esc_attr($movie_id); ?>" class="popup">
                        <div class="popup-content">
                            <span class="close-btn">&times;</span>

                            <div class="popup-movie-text">
                                <?php echo $video_embed; ?>
                            </div>
                            <h3 class="movie-ttl"><?php echo get_field("company"); ?></h3>

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


                            <!--                        <ul class="link-list fl">-->
                            <!--                            <li><a href="#">動画詳細を見る<img src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/assets/img/darrowl.png"></a></li>-->
                            <!--                            <li><a href="#">動画詳細を見る<img src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/assets/img/darrowl.png"></a></li>-->
                            <!--                        </ul>-->
                        </div>
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
            'prev_text'    => '« Prev',
            'next_text'    => 'Next »',
        ));
        ?>
    </div>
    <?php wp_reset_postdata(); ?>
</section>



<script src="<?php bloginfo('template_directory'); ?>/assets/js/movie.js"></script>

<?php
get_footer();
?>
