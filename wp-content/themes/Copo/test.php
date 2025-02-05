<?php
/*
Template Name: Movie List
*/

get_header();

// Lấy trang hiện tại từ query string
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// Query bài viết của post type "movie"
$args = array(
    'post_type'      => 'movie',
    'posts_per_page' => 4, // Số bài viết mỗi trang
    'paged'          => $paged
);

$movies = new WP_Query($args);
?>

    <div id="movie-list">
        <?php if ($movies->have_posts()) : ?>
            <?php while ($movies->have_posts()) : $movies->the_post(); ?>
                <?php
                $movie_id = get_the_ID();
                $title = get_the_title();
                $link = get_permalink();
                $release_year = get_field('release_year', $movie_id);
                $director = get_field('director', $movie_id);
                ?>
                <div class="movie-item"
                     data-title="<?php echo esc_attr($title); ?>"
                     data-link="<?php echo esc_url($link); ?>"
                     data-year="<?php echo esc_attr($release_year); ?>"
                     data-director="<?php echo esc_attr($director); ?>">
                    <h3><?php echo $title; ?></h3>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p>Không có bộ phim nào.</p>
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

    <!-- Popup Modal -->
    <div id="movie-popup" class="popup">
        <div class="popup-content">
            <span class="close-btn">&times;</span>
            <h2 id="popup-title"></h2>
            <p><strong>Release Year:</strong> <span id="popup-year"></span></p>
            <p><strong>Director:</strong> <span id="popup-director"></span></p>
            <a id="popup-link" href="#" target="_blank">Xem chi tiết</a>
        </div>
    </div>

<script>
    jQuery(document).ready(function($) {
        // Mở Popup khi click vào Movie Item
        $(".movie-item").click(function() {
            var title = $(this).attr("data-title");
            var year = $(this).attr("data-year");
            var director = $(this).attr("data-director");
            var link = $(this).attr("data-link");

            $("#popup-title").text(title);
            $("#popup-year").text(year);
            $("#popup-director").text(director);
            $("#popup-link").attr("href", link);

            $("#movie-popup").fadeIn();
        });

        // Đóng Popup
        $(".close-btn").click(function() {
            $("#movie-popup").fadeOut();
        });

        $(window).click(function(event) {
            if (event.target === $("#movie-popup")[0]) {
                $("#movie-popup").fadeOut();
            }
        });
    });
</script>   



<?php get_footer(); ?>


