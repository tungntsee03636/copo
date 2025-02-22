<?php
/*
 Template Name: Movie
 */
get_header();
// Lấy trang hiện tại từ query string
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// Query bài viết của post type "movie"
$args = array(
    'post_type'      => 'movies',
    'posts_per_page' => 2, // Số bài viết mỗi trang
    'paged'          => $paged
);

$movies = new WP_Query($args);
?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/movie.css"/>

    <section id="movie" class="single movie inner">
        <h2 class="single-ttl">
            <span class="en"><small>V</small>iew companies on <small>M</small>OVIES</span>
            <span class="jp">動画コンテンツ公開企業</span>
        </h2>

        <div class="category-list fl">
            <div class="category-item"><a href="#">カテゴリ名</a></div>
            <div class="category-item"><a href="#">カテゴリ名</a></div>
            <div class="category-item"><a href="#">カテゴリ名</a></div>
            <div class="category-item"><a href="#">カテゴリ名</a></div>
        </div>
        <div class="movie-content">
            <div class="movie-list">
                <?php if ($movies->have_posts()) : ?>
                    <?php while ($movies->have_posts()) : $movies->the_post(); ?>
                        <?php
                        $movie_id = get_the_ID();
                        $movie_content = get_field('movie', $movie_id); // Lấy custom field "movie"
                        $default_image =  get_stylesheet_directory_uri() . '/assets/img/movie01.png';
                        $movie_title = get_the_title();
                        $movie_link = get_permalink();
                        $feature_image = get_the_post_thumbnail_url($movie_id, 'medium');

                        if (!$feature_image) {
                            $feature_image = $default_image; // Nếu không có ảnh, dùng ảnh mặc định
                        }
                        // Kiểm tra nếu là link YouTube
                        if (preg_match('/youtube\.com|youtu\.be/', $movie_content)) {
                            preg_match('/(youtu\.be\/|embed\/|watch\?v=|\/v\/|\/e\/|watch\?.+&v=)([^#\&\?]*)/', $movie_content, $matches);
                            $video_id = isset($matches[2]) ? $matches[2] : '';
                            $video_embed = '<iframe width="100%" height="100%" src="https://www.youtube.com/embed/' . esc_attr($video_id) . '" frameborder="0" allowfullscreen></iframe>';
                        }
                        // Kiểm tra nếu là link TikTok
                        elseif (preg_match('/tiktok\.com\/@([^\/]+)\/video\/(\d+)/', $movie_content, $matches)) {
                            $video_embed = '<blockquote class="tiktok-embed" cite="' . esc_url($movie_content) . '" data-video-id="' . esc_attr($matches[2]) . '" style="max-width: 100%; min-width: 300px;">
                                <a href="' . esc_url($movie_content) . '">View in TikTok</a>
                              </blockquote>
                            <script async src="https://www.tiktok.com/embed.js"></script>';
                        }
                        // Nếu là script Eviry
                        else {
                            $video_embed = $movie_content . '<script type="text/javascript" src="https://d1euehvbqdc1n9.cloudfront.net/001/eviry/js/eviry.player.min.js"></script>';
                        }
                        ?>

                        <div class="movie-item" data-id="<?php echo esc_attr($movie_id); ?>" style="cursor:pointer;">

                            <img src="<?php echo esc_url($feature_image); ?>" alt="Movie Image">
                        </div>

                        <!-- Popup Modal -->
                        <div id="movie-popup-<?php echo esc_attr($movie_id); ?>" class="popup">
                            <div class="popup-content">
                                <span class="close-btn">&times;</span>
                                <div class="popup-movie-text">
                                    <?php echo $video_embed; ?>
                                </div>
                                <h3 class="movie-ttl"><?php echo $movie_title; ?></h3>

                                <ul class="link-list fl">
                                    <li><a href="#">動画詳細を見る<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/darrowl.png"></a></li>
                                    <li><a href="#">動画詳細を見る<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/darrowl.png"></a></li>
                                </ul>
                            </div>
                        </div>


                    <?php endwhile; ?>
                <?php else : ?>
                    <p class="novideos">No Videos Available.</p>
                <?php endif; ?>
            </div>

            <!-- Pagination -->
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



        </div>
        <?php wp_reset_postdata(); ?>
        <script>
            jQuery(document).ready(function($) {
                $(".movie-item").click(function() {
                    var movieID = $(this).attr("data-id");

                    // Hiển thị popup của bài viết được chọn
                    $("#movie-popup-" + movieID).fadeIn();
                });

                // Đóng Popup
                $(".close-btn").click(function() {
                    $(this).closest(".popup").fadeOut();
                });

                $(window).click(function(event) {
                    if ($(event.target).hasClass("popup")) {
                        $(event.target).fadeOut();
                    }
                });
            });
        </script>

    </section>


<?php
get_footer()
?>