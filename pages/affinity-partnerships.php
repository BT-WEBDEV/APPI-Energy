<?php
/**
 * Template Name: Affinity Partnerships Page Template
 *
 * Description: Affinity Partnerships Page Template
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
        <section class="efficiency">
            <div class="container-fluid p-default">
                <div>
                    <!--Accordion wrapper-->
                    <div class="accordion md-accordion custom-accordion" id="affinity" role="tablist"
					aria-multiselectable="true">
                        <?php 
                        $args = array(  
                            'post_type' => 'page_accordions',
                            'page_acc_cat' => 'aes',
                            'post_status' => 'publish',
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'posts_per_page' => 20,
                        ); 
                        $accordions = new WP_Query($args);
                        $count = 0;
                        while ( $accordions->have_posts() ) : $accordions->the_post(); 
                        ?>
                        <div id="card-<?php the_ID(); ?>" class="card <?php echo ($count==0) ? "bg-l-green" : ""; ?>">
                            <div class="card-header pr-3 pr-md-0" role="tab" id="heading-<?php the_ID(); ?>">
                                <a class="text-black" data-toggle="collapse" data-parent="#affinity"
                                    href="#collapse-<?php the_ID(); ?>" aria-expanded="true"
                                    aria-controls="collapse-<?php the_ID(); ?>">
                                    <h3 class="mb-0 font-weight-normal">
                                        <?php the_title(); ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/<?php echo ($count==0) ? "close" : "open"; ?>.svg"
                                            alt="Open or Close" class="open-close">
                                    </h3>
                                </a>
                            </div>
                            <div id="collapse-<?php the_ID(); ?>"
                                class="faq-body collapse <?php echo ($count==0) ? "show" : ""; ?>" role="tabpanel"
                                aria-labelledby="heading-<?php the_ID(); ?>" data-parent="#affinity">
                                <div class="card-body">
                                    <div class="gka-theme-2cols-image-text">
                                        <div class="row m-0 custom-row">
                                            <div class="col-md-6 p-0 d-flex image-wrap">
                                                <div class="image w-100 align-self-start left-content">
                                                    <img class="img-fluid w-100"
                                                        src="<?php echo (get_the_post_thumbnail_url($post->ID, 'large')) ? get_the_post_thumbnail_url($post->ID, 'large') : get_template_directory_uri()."/images/placeholder.jpg"; ?>"
                                                        alt="<?php the_title(); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 p-0 d-flex content-wrap">
                                                <div class="content right-content pt-3">
                                                    <div>
                                                        <?php the_content(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $count++; endwhile; wp_reset_postdata(); ?>
                    </div>
                    <!-- Accordion wrapper -->
                </div>
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