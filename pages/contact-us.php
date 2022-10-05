<?php
/**
 * Template Name: Contact Us Page Template
 *
 * Description: Contact Us Page Template
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
            <div class="gka-theme-2cols-content-content" style="background-image: url(  )">
                <div class="container-fluid p-default">
                    <div class="row custom-row">
                        <div class="col-md-6 d-flex content-wrap first_content_wrap order-md-1"
                            style="background-image: url(  )">
                            <div class="first_content align-self-start left-content">
                                <div>
                                    <div class="welcome-header">
                                        <div class="sub-header">Find Your Energy Solution</div>
                                        <h1>CONTACT US</h1>
                                    </div>
                                </div>

                                <!-- Button -->
                            </div>
                        </div>
                        <div class="col-md-6 d-flex content-wrap second_content_wrap order-md-1"
                            style="background-image: url(  )">
                            <div class="second_content align-self-start right-content">
                                <div>
                                    <div class="d-flex mt-3">
                                        <div class="mr-3 mt-2">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/location.svg"
                                                alt="location" width="23">
                                        </div>
                                        <div>
                                            <div>
                                                <h3 class="font-weight-normal mb-2">Salisbury Headquarters</h3>
                                            </div>
                                            <div>
                                                <a href="https://goo.gl/maps/zDQc9Z7PoBo42zba8" target="_blank" class="text-black">
                                                    112 E. Market Street <br>
                                                    Salisbury, MD 21801
                                                </a>
                                                <div>
                                                    <a href="https://goo.gl/maps/zDQc9Z7PoBo42zba8" target="_blank" class="text-blue">Google Maps</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-3">
                                        <div class="mr-3">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/phonenumber.svg"
                                                alt="email" width="23">
                                        </div>
                                        <div>
                                            <div>
                                                <a href="tel:800-520-6685" class="text-black" onclick="gtag('event', 'click', { 'event_category': 'Phone Call Tracking' });">
                                                    800-520-6685
                                                </a>
                                            </div>
                                            <div>
                                                    410-749-8769 (FAX)
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-3">
                                        <div class="mr-3">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/icons/email.svg"
                                                alt="phone" width="23">
                                        </div>
                                        <div>
                                            <div>
                                                <a href="mailto:info@appienergy.com" class="text-black" onclick="gtag('event', 'click', { 'event_category': 'Email Tracking' });">
                                                    info@appienergy.com
                                                </a><br>
                                                <a href="mailto:customerservice@appienergy.com" class="text-black" onclick="gtag('event', 'click', { 'event_category': 'Email Tracking' });">
                                                    customerservice@appienergy.com
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-l-green">
            <div class="container py-default">
                <div class="text-center mb-header">
                    <h3 class="font-weight-normal">Please fill out the form below with your inquiry, and an APPI Energy representative will follow up with you within 48 hours.</h3>
                </div>
                <div>
                    <?php echo do_shortcode('[wpforms id="47"]'); ?>
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