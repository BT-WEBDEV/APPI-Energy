<?php
/**
 * Template Name: About Us Page Template
 *
 * Description: About Us Page Template
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
		<section class="bg-l-gray">
			<div class="container-fluid py-default">
				<div class="row justify-content-center">
					<div class="col-sm-5 col-md-4 text-center">
						<h1>Mission</h1>
						<p>To be the trusted energy advisor empowering clients to make well-informed decisions.</p>
						<h1>Vision</h1>
						<p>To be the world's most sought after energy advisor.</p>
					</div>
					<div class="col-sm-7 col-md-6">
						<h1 class="text-center">Values</h1>
						<div>
							<p><span style="color: #76b39e" class="font-weight-medium">Integrity</span> - We are honest, ethical and professional, committed to consistently upholding the highest standards.</p>
							<p><span style="color: #f19a47" class="font-weight-medium">Accountable</span> - We take full ownership for our decisions and actions.</p>
							<p><span style="color: #5aa3d5" class="font-weight-medium">Stewardship</span> - We are committed to serving others.</p>
							<p><span style="color: #76b39e" class="font-weight-medium">Insightful</span> - We provide accurate, timely and impartial intelligence.</p>
							<p><span style="color: #f19a47" class="font-weight-medium">Innovative</span> - We are forward thinking, continually creating better solutions.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
			<div class="container-fluid p-default">
				<div>
					<h5 class="text-blue font-weight-medium mb-header">Energy Solutions</h5>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="page-list">
							<div class="view content-wrap">
								<img src="<?php echo get_template_directory_uri()."/images/about-us/testimonials.jpg"; ?>" alt="Testimonials" class="img-fluid img-fit">
								<div class="mask rgba-white-light">
									<div class="content">
										<h1 class="font-weight-medium">Testimonials</h1>
										<p>See how we’ve helped our clients succeed.</p>
										<div>
											<a href="/about/testimonials" class="btn custom-btn">Learn More</a>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="col-md-6">
						<div class="page-list">
							<div class="view content-wrap">
								<img src="<?php echo get_template_directory_uri()."/images/about-us/affinity.jpg"; ?>" alt="Affinity Partnerships" class="img-fluid img-fit">
								<div class="mask rgba-white-light">
									<div class="content">
										<h1 class="font-weight-medium">Affinity Partnerships</h1>
										<p>Learn about our 160 Affinity Partnerships, including the American Society of Association Executives (ASAE).</p>
										<div>
											<a href="/about/affinity-partnerships/" class="btn custom-btn">Learn More</a>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
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