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
            <div class="container-fluid p-default">
                <div class="row align-items-center">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="news-tab" data-toggle="tab" href="#news" role="tab" aria-controls="news" aria-selected="true">News</a>
                            <a class="nav-item nav-link" id="press-releases-tab" data-toggle="tab" href="#press-releases" role="tab" aria-controls="press-releases" aria-selected="false">Press Releases</a>
                            <a class="nav-item nav-link" id="events-tab" data-toggle="tab" href="#events-and-webcasts" role="tab" aria-controls="events" aria-selected="false">Events and Webcasts</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="news" role="tabpanel" aria-labelledby="news-tab">                                                        
                            <div class="row">
                                <?php 
                                    $args = array(  
                                        'post_type' => 'post',
                                        'category_name' => 'news',
                                        'post_status' => 'publish',
                                        'orderby' => 'date',
                                        'order' => 'DESC',
                                        'posts_per_page' => 4,
                                    ); 
                                    $blog = new WP_Query($args);
                                    $count = 1;
                                    while ( $blog->have_posts() ) : $blog->the_post(); 
                                        switch ($count) {
                                            case 1:
                                                echo '<div class="col-md-6 left-content">';
                                                get_template_part( 'template-parts/news-list-image' );
                                                echo '</div>';
                                                echo '<div class="col-md-6 right-content d-flex flex-column justify-content-between">';
                                                break;
                                            default:
                                                get_template_part( 'template-parts/news-list' ); 
                                                break;
                                        }
                                        $count++; 
                                    endwhile; 
                                    wp_reset_postdata();
                                    echo '</div>';

                                    echo do_shortcode('[ajax_load_more container_type="div" posts_per_page="6" post_type="post" category="news" offset="4" scroll="false" no_results_text="<div class=no-results>Sorry, nothing found in this query</div>]');
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="press-releases" role="tabpanel" aria-labelledby="press-releases-tab">
                            <div class="row">
                                <?php 
                                    $args = array(  
                                        'post_type' => 'post',
                                        'category_name' => 'press-releases',
                                        'post_status' => 'publish',
                                        'orderby' => 'date',
                                        'order' => 'DESC',
                                        'posts_per_page' => 4,
                                    ); 
                                    $blog = new WP_Query($args);
                                    $count = 1;
                                    while ( $blog->have_posts() ) : $blog->the_post(); 
                                        switch ($count) {
                                            case 1:
                                                echo '<div class="col-md-6 left-content">';
                                                get_template_part( 'template-parts/news-list-image' );
                                                echo '</div>';
                                                echo '<div class="col-md-6 right-content d-flex flex-column justify-content-between">';
                                                break;
                                            default:
                                                get_template_part( 'template-parts/news-list' ); 
                                                break;
                                        }
                                        $count++; 
                                    endwhile; 
                                    wp_reset_postdata();
                                    echo '</div>';

                                    echo do_shortcode('[ajax_load_more container_type="div" posts_per_page="6" post_type="post" category="press-releases" offset="4" scroll="false" no_results_text="<div class=no-results>Sorry, nothing found in this query</div>]');
                                ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="events-and-webcasts" role="tabpanel" aria-labelledby="events-tab">
                            <div class="row">
                                <?php 
                                    $args = array(  
                                        'post_type' => 'post',
                                        'category_name' => 'events-and-webcasts',
                                        'post_status' => 'publish',
                                        'orderby' => 'date',
                                        'order' => 'DESC',
                                        'posts_per_page' => 4,
                                    ); 
                                    $blog = new WP_Query($args);
                                    $count = 1;
                                    while ( $blog->have_posts() ) : $blog->the_post(); 
                                        switch ($count) {
                                            case 1:
                                                echo '<div class="col-md-6 left-content">';
                                                get_template_part( 'template-parts/news-list-image' );
                                                echo '</div>';
                                                echo '<div class="col-md-6 right-content d-flex flex-column justify-content-between">';
                                                break;
                                            default:
                                                get_template_part( 'template-parts/news-list' ); 
                                                break;
                                        }
                                        $count++; 
                                    endwhile; 
                                    wp_reset_postdata();
                                    echo '</div>';

                                    echo do_shortcode('[ajax_load_more container_type="div" posts_per_page="6" post_type="post" category="events-and-webcasts" offset="4" scroll="false" no_results_text="<div class=no-results>Sorry, nothing found in this query</div>]');
                                ?>
                            </div>
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