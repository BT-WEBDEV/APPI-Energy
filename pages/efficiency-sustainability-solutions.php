<?php
/**
 * Template Name: Efficiency & Sustainability Solutions Page Template
 *
 * Description: Efficiency & Sustainability Solutions Page Template
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


		<!-- Widget Area After -->
		<?php
		if ( is_active_sidebar( 'gka_theme_widget_after' ) ) {
			dynamic_sidebar( 'gka_theme_widget_after' ); 
		}
		?>
		<!-- #Widget Area After -->

		<!-- Additional Content -->
		<section class="efficiency">
			<div class="container-fluid p-default">
				<!-- <div>
					<h1 class="font-weight-medium mb-header text-black">LEDs</h1>
				</div> -->
				<div class="accordion md-accordion custom-accordion" id="EFFICIENCY" role="tablist"
					aria-multiselectable="true">

					<?php 
					$args = array(  
						'post_type' => 'page_accordions',
						'page_acc_cat' => 'ess',
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
							<a class="text-black" data-toggle="collapse" data-parent="#EFFICIENCY" href="#collapse-<?php the_ID(); ?>"
								aria-expanded="true" aria-controls="collapse-<?php the_ID(); ?>">
								<h3 class="mb-0 font-weight-normal">
									<?php the_title(); ?>
									<img src="<?php echo get_template_directory_uri(); ?>/images/icons/<?php echo ($count==0) ? "close" : "open"; ?>.svg" alt="Open or Close" class="open-close">
								</h3>
							</a>
						</div>
						<div id="collapse-<?php the_ID(); ?>" class="faq-body collapse <?php echo ($count==0) ? "show" : ""; ?>" role="tabpanel" aria-labelledby="heading-<?php the_ID(); ?>"
							data-parent="#EFFICIENCY">
							<div class="card-body">
								<div class="gka-theme-2cols-image-text">
									<div class="row m-0 custom-row">
										<div class="col-md-6 p-0 d-flex image-wrap">
											<div class="image w-100 align-self-start left-content">
												<img class="img-fluid w-100" src="<?php echo (get_the_post_thumbnail_url($post->ID, 'large')) ? get_the_post_thumbnail_url($post->ID, 'large') : get_template_directory_uri()."/images/placeholder.jpg"; ?>" alt="<?php the_title(); ?>">
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
				<div class="gka-theme-2cols-image-text" style="margin-top:75px;margin-bottom:50px;">
					<div class="row m-0 custom-row align-items-center justify-content-center">
						<div class="col-md-6 d-flex flex-column">
							<h2> Discover utility rebate programs in your area. </h2>
							<p> Search for utility program information by state, zip code or utility to get rebate estimates by product category. </p> 
						</div>
						<div class="col-md-4 p-0 d-flex justify-content-center ">
							<style>
								#m_ug_widget_container .badge {
									color: black !important; 
								}; 
							</style> 
							<div id='m_ug_widget_container' data-widget-token='74e1bbdf-61d2-482a-814b-8cffae3dd111'></div> 
						</div>
					</div>
				</div>
				<div class="text-center pt-default">
					<p class="font-weight-medium">Ready to start the conversation? Our team is here to guide you, all it
						takes to get started is a complimentary energy assessment.</p>
					<a href="/contact" class="btn custom-btn">Receive a complimentary energy assessment</a>
				</div>
			</div>
		</section>

		<section class="bg-l-gray">
			<div class="container-fluid p-default">
				<div class="row justify-content-center">
					<div class="col-10">
						<div class="text-center">
							<p class="mb-0 text-blue text-upper font-weight-medium">TESTIMONIAL</p>
							<h1 class="mb-0 font-weight-medium">Marcos Zerpa</h1>
							<p class="mb-header font-italic">Director of Procurement, Lux Global Label Company LLC</p>
							<p>“We came to APPI Energy interested in their sustainability solution technologies, specifically their LED lighting retrofit program. They listened to what we needed for our facility and our finances. They were able to secure us a complete lighting retrofit with no upfront costs and easy on-bill funding. Within the first year we saved roughly 63% on energy costs! This project also increases the safety and happiness of our employees, which ultimately increases productivity. They made the process seamless and we are thrilled with the outcome.”</p>
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
								<img src="/wp-content/uploads/2021/07/procurement.jpg" alt="Electricity Procurement"
									class="img-fluid img-fit">
								<div class="mask rgba-white-light">
									<div class="content">
										<h1 class="font-weight-medium">Electricity Procurement</h1>
										<p>Proven Results Powered by Data-Driven Strategies</p>
										<div>
											<a href="/energy-solutions/electricity-procurement" class="btn custom-btn">LEARN MORE</a>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="col-md-6">
						<div class="page-list">
							<div class="view content-wrap">
								<img src="/wp-content/uploads/2021/07/gas.jpg" alt="Natural Gas Procurement"
									class="img-fluid img-fit">
								<div class="mask rgba-white-light">
									<div class="content">
										<h1 class="font-weight-medium">Natural Gas Procurement</h1>
										<p>An innovative approach to purchasing natural gas.</p>
										<div>
											<a href="/energy-solutions/natural-gas-procurement" class="btn custom-btn">LEARN MORE</a>
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

	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();