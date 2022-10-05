<?php
/**
 * Template Name: Leadership Page Template
 *
 * Description: Leadership Page Template
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
        <section>
            <?php
            $args = array(  
                'post_type' => 'employees',
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC',
                'posts_per_page' => 99,
            ); 
            $employees = new WP_Query($args);
            ?>
            <div class="container py-default">
                <div class="row">
                    <?php while ( $employees->have_posts() ) : $employees->the_post(); ?>
                    <?php if(get_field('leadership')) { ?>
                    <div class="col-md-6">
                        <div class="employee-list">
                            <div class="image">
                                <img src="<?php 
                                    echo (get_the_post_thumbnail_url(get_the_ID(),'full')) ? get_the_post_thumbnail_url(get_the_ID(),'full') : get_template_directory_uri()."/images/placeholder.jpg"; ?>"
                                    alt="<?php the_title(); ?>" class="img-fluid img-fit">
                            </div>
                            <div class="content">
                                <h3 class="font-weight-normal mb-0"><?php the_title(); ?></h3>
                                <div class="title text-blue"><?php the_field("employee_field_title", $post->ID); ?>
                                </div>
                                <div>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn custom-btn" data-toggle="modal"
                                        data-target="#bioModal-<?php the_ID(); ?>">
                                        READ BIO
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php endwhile; wp_reset_postdata(); ?>
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

        <?php do_shortcode(''); ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php while ( $employees->have_posts() ) : $employees->the_post(); ?>
<?php if(get_field('leadership')) { ?>
<!-- Central Modal Small -->
<div class="modal top fade bio-modal" id="bioModal-<?php the_ID(); ?>" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-lg  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="image">
                    <img src="<?php echo (get_the_post_thumbnail_url(get_the_ID(),'full')) ? get_the_post_thumbnail_url(get_the_ID(),'full') : get_template_directory_uri()."/images/placeholder.jpg"; ?>"
                        alt="<?php the_title(); ?>" class="img-fluid img-fit">
                </div>
                <div>
                    <h5 class="font-weight-normal mb-0"><?php the_title(); ?></h5>
                    <div class="title text-blue"><?php the_field("employee_field_title", $post->ID); ?></div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<?php endwhile; wp_reset_postdata(); ?>
<!-- Central Modal Small -->

<?php
get_footer();