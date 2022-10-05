<?php
/**
 * Template Name: News Page Template
 *
 * Description: News Page Template
 *
 * @package WordPress
 * @subpackage REDI
 * @since REDI 1.0
 */
get_header(); 
?>
<div id="primary" class="content-area nav-space">
    <main id="main" class="site-main">

        <!-- Main Slider -->
        <section>
            <h1 class="outline">Slider</h1>
            <?php 
			$slider_id = get_field("gka_theme_slider", $post->ID);
			if($slider_id) {
				$slider = gka_theme_get_gallery($slider_id);
				if($slider) { 
					include get_template_directory() . '/template-parts/main-slider.php'; 
				} 
			}
			else {
				include get_template_directory() . '/template-parts/no-slider.php'; 
			}
        ?>
        </section>
        <!-- #Main Slider -->

        <!-- Widget Area Before -->
        <?php
		if ( is_active_sidebar( 'gka_theme_widget_before' ) ) {
			dynamic_sidebar( 'gka_theme_widget_before' ); 
		}
		?>
        <!-- #Widget Area Before -->

        <!-- Main Content -->
        <?php while ( have_posts() ) : the_post(); ?>
        <section class="main-section">
            <div class="container">
                <?php get_template_part( 'template-parts/content', 'page' ); ?>
            </div>
        </section>
        <?php endwhile; // End of the loop. ?>
        <!-- #Main Content -->

        <!-- Additional Content -->
        <section class="news-section">
            <?php

            function pagination_bar( $custom_query ) {

                $total_pages = $custom_query->max_num_pages;
                $big = 999999999; // need an unlikely integer

                if ($total_pages > 1){
                    $current_page = max(1, get_query_var('paged'));

                    echo paginate_links(array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => $current_page,
                        'total' => $total_pages,
                        'prev_text' => '<span><img src="'.get_template_directory_uri().'/images/icons/prev.svg" alt="Prev Page"></span>',
                        'next_text' => '<span><img src="'.get_template_directory_uri().'/images/icons/next.svg" alt="Next Page"></span>'
                    ));
                }
            }

            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            // News | Post WP Query
            $args = array(  
                'post_type' => 'post',
                // 'category_name' => 'news',
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC',
                'posts_per_page' => 10,
                'paged' => $paged
            ); 
            $blog = new WP_Query($args);
            ?>
            <div class="container-fluid p-default">
                <div class="row align-items-center">
                    <ul class="nav nav-tabs" id="newsPage" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="news-tab" data-toggle="tab" href="#news" role="tab" aria-controls="news" aria-selected="true">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="press-release-tab" data-toggle="tab" href="#press-release" role="tab" aria-controls="press-release" aria-selected="false">Press Release</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="events-tab" data-toggle="tab" href="#events" role="tab" aria-controls="events" aria-selected="false">Events</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="newsPageContent">
                        <div class="tab-pane fade show active" id="news" role="tabpanel" aria-labelledby="news-tab">                                                        
                            <div class="row">
                                <div class="col-md-6 left-content">
                                    <?php 
                                    $category = "news";
                                    $count = 1;
                                    while ( $blog->have_posts() ) : $blog->the_post(); 
                                        if($count <= 1) { 
                                            get_template_part( 'template-parts/news-list-image' );  
                                        } 
                                    $count++; endwhile; wp_reset_postdata(); 
                                    ?>
                                </div>

                                <div class="col-md-6 right-content d-flex flex-column justify-content-between">
                                    <?php 
                                    $count = 1;
                                    while ( $blog->have_posts() ) : $blog->the_post(); 
                                        if($count <= 4 && $count >= 2) {
                                            get_template_part( 'template-parts/news-list' ); 
                                        } 
                                    $count++; endwhile; wp_reset_postdata(); 
                                    ?>
                                </div>

                                <?php 
                                $count = 1;
                                while ( $blog->have_posts() ) : $blog->the_post(); 
                                    if($count <= 10 && $count >= 5) {
                                ?>
                                <div class="col-md-6">
                                    <?php get_template_part( 'template-parts/news-list' ); ?>
                                </div>
                                <?php } $count++; endwhile; wp_reset_postdata(); ?>

                            </div>
                            <div>
                                <nav id="blog-pagination" class="pagination justify-content-center align-items-center">
                                    <h1 class="outline">Pagination</h1>
                                    <?php pagination_bar( $blog ); ?>
                                </nav>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="press-release" role="tabpanel" aria-labelledby="press-release-tab">.
                        <?php echo do_shortcode('[ajax_load_more container_type="div" posts_per_page="6" post_type="post" category="press-releases" offset="4" scroll="false" no_results_text="<div class=no-results>Sorry, nothing found in this query</div>]'); ?>
                        </div>
                        <div class="tab-pane fade" id="events" role="tabpanel" aria-labelledby="events-tab">
                            <?php echo do_shortcode('[ajax_load_more container_type="div" posts_per_page="6" post_type="post" category="events" offset="4" scroll="false" no_results_text="<div class=no-results>Sorry, nothing found in this query</div>]'); ?>
                        </div>
                    </div>
                </div>
                <hr>
                
            </div>
        </section>
        <!-- #Additional Content -->

        <!-- Widget Area After -->
        <?php
		if ( is_active_sidebar( 'gka_theme_widget_after' ) ) {
			dynamic_sidebar( 'gka_theme_widget_after' ); 
		}
		?>
        <!-- #Widget Area After -->

    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();