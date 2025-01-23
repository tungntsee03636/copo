
<?php 
 get_header();
?>

<div class="contents">
                <div class="content-inner wrap fl">
                    <div class="common-main">
                        <div class="article-box">
                            <h2 class="ttl newtt">Search results:</h2>
                
                            <ul class="top-new__list">
                                <?php
                                global $query_string;
                                
                                wp_parse_str( $query_string, $search_query );
                                $getposts = new WP_Query( $search_query ); ?>
                                
                                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                    	<li class="top-new__item">
                                    	     <div class="top-new__item-cat"><?php the_category();?></div>
                                    	     <a href="<?php the_permalink(); ?>" class="top-new__item-thumb"><img src="<?php the_post_thumbnail_url(); ?>"></a>
                                              <div class="top-new__item-low">
                                                    <div class="top-new__item-inner">
                                                        <time class="top-new__item-date"><?php echo get_the_date(); ?></time>
                                                        <a href="<?php the_permalink(); ?>" class="top-new__item-ttl ops"><?php the_title(); ?></a>
                                                        <!--<p class="top-new__item-txt ops"><?php echo get_the_excerpt(); ?></p>-->
                                                    </div>
                                                    <!--<a href="<?php the_permalink(); ?>" class="top-new__item-btn btn-more01">-->
                                                    <!--    Xem tiếp      </a>-->
                                                 </div>
                                            
                                    	</li>    
                                <?php endwhile; ?> 
                                  
                                   
                            </ul>
                        </div>
                    
                    </div>
                    <div class="common-sidebar">
                        <?php get_template_part( 'sidebar' ); ?>
                    </div>
                </div>
            </div>
<script>
    $txt = $('.newtt').text()
    document.title = $txt;
</script>
<?php get_footer();?>