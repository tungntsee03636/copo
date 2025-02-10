<?php get_header();
global $post, $wp_query;
?>
<?php
$category = get_queried_object();
if ($category && isset($category->name)) {
    $category_name = $category->name;
}
?>

<link rel="stylesheet" href="/assets/css/camp.css">

<style>
    .lowerTtl .lowerTtl_h1 {
        flex-direction: column;
    }
    .title-tag {
        display:block;
        font-size:16px
    }

    .result-count-txt {
        display:block;
        font-size:16px
    }
    .lowerTtl {
        padding:50px 0px 20px
    }
</style>

<?php
$obj = get_queried_object();

function my_result_count() {
    global $wp_query;
    $paged = get_query_var( 'paged' ) - 1;
    $ppp   = get_query_var( 'posts_per_page' );
    $count = $total = $wp_query->post_count;
    $from  = 0;
    if ( 0 < $ppp ) {
        $total = $wp_query->found_posts;
        if ( 0 < $paged )
            $from  = $paged * $ppp;
    }
    printf(
        '<span class="result-count-txt">全<span>%1$s</span>件<span>%2$s%3$s</span>件を表示中</span>',
        $total,
        ( 1 < $count ? ($from + 1 . '〜') : '' ),
        ($from + $count )
    );
}
?>
<main id="main">
    <section class="lowerTtl">
        <div class="contentInner">
            <nav class="breadcrumb" >
                <ol class="breadList" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                    <li itemscope="" class="breadcrumb_item" itemprop="itemListElement" itemtype="https://schema.org/ListItem"><a itemprop="item" href="<?= home_url(''); ?> "><span itemprop="name">TOP</span></a><meta itemprop="position" content="1"></li>
                    <li itemscope="" class="breadcrumb_item" itemprop="itemListElement" itemtype="https://schema.org/ListItem"><a itemprop="item" href="<?= home_url('/news'); ?> "><span itemprop="name">NEWS</span></a><meta itemprop="position" content="1"></li>
                    <li class="breadcrumb_item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem"><span itemprop="name"><?= esc_html($obj->name); ?></span><meta itemprop="position" content="2"></li>
                </ol>
            </nav>
            <h1 class="lowerTtl_h1">
                <?php  echo $obj->name;
                ?>
            </h1>
        </div>
    </section>

    <div class="mainContent" id="mainContent">
        <section class="articles blurInTrigger">
            <div class="contentInner">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $terms_id = get_queried_object()->term_id;
                $args = array(
                    'post_type' => 'news',
                    'post_status' => 'publish',
                    'order' => 'DESC',
                    'paged' => $paged,
                    'posts_per_page' => 9,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'news-tag',
                            'field' => 'term_id',
                            'terms' => $terms_id
                        )
                    )
                );
                $result = new WP_Query($args);?>

                <?php if ($result->have_posts()) : ?>
                    <div class="cardContainer fade">
                        <?php while ($result->have_posts()) : $result->the_post(); ?>

                            <?php
                            // Liên kết bài viết
                            $link = esc_url(get_permalink());

                            // Ảnh đại diện và xử lý alt
                            $img = get_the_post_thumbnail_url(get_the_ID());
                            $thumbID = get_post_thumbnail_id(get_the_ID());
                            $alt = get_post_meta($thumbID, '_wp_attachment_image_alt', true);
                            $noimage = home_url('/assets/images/camp/noimage.png');

                            // Alt fallback
                            $alt_text = $alt ? esc_attr($alt) : esc_attr($title);
                            ?>

                            <article class="campCard scroll">
                                <div>
                                    <a href="<?php echo $link; ?>" class="campCard_img hoverScale">
                                        <img src="<?php echo $img ? esc_url($img) : esc_url($noimage); ?>"  alt="<?php echo $alt_text; ?>">
                                    </a>
                                    <div class="campCard_txt">
                                        <a href="<?php echo $link; ?>">
                                            <h2 class="campCard_ttl"><span><?php the_title(); ?></span></h2>
                                        </a>
                                        <div class="campCard_info">
                                            <time datetime="<?php echo get_the_time('Y-m-d'); ?>"><?php echo get_the_time('Y.n.j'); ?></time>
                                            <?php
                                            $terms = get_the_terms(get_the_ID(), 'news__tag');
                                            if (!empty($terms) && !is_wp_error($terms)) {
                                                echo '<div class ="tagList">';
                                                foreach ($terms as $term) {
                                                    $term_link = get_term_link($term);
                                                    if (!is_wp_error($term_link)) {
                                                        echo '<a href="' . esc_url($term_link) . '" class="tagList_item">' . esc_html($term->name) . '</a>';
                                                    }
                                                }
                                                echo '</div>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        <?php endwhile;?>
                    </div>
                <?php endif; ?>

                <?php if ($result->max_num_pages > 1) : ?>
                    <section class="pagerContainer blurInTrigger">
                        <div class="contentInner">
                            <?php pagination2($result->max_num_pages); ?>
                        </div>
                    </section>
                <?php endif; ?>
            </div>
        </section>
    </div>

</main>

<script src="/assets/js/camp.js"></script>
<?php get_footer(); ?>

<style>
    .camcomGroup-link .subItem-footerLink a {
        color: white;
    }
</style>