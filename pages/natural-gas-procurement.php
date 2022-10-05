<?php
/**
 * Template Name: Natural Gas Procurement Page Template
 *
 * Description: Natural Gas Procurement Page Template
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
		
		<section>
			<div class="container-fluid p-default">
				<div class="mb-header">
					<!-- <h1 class="font-weight-medium text-black">We Tailor Energy Solutions from Start to Finish.</h1> -->
					<h2 class="font-weight-medium text-black">Working with You, for You</h2>
				</div>
				<div class="row">
					<div class="col-md-6">						
						<img src="/wp-content/uploads/2021/07/gas.jpg" class="img-fluid w-100 mb-3" alt="Natural Gas Procurement">
					</div>
					<div class="col-md-6">
						<p>The APPI Energy team of experts will:</p>
						<ul class="checkmark-ul">
							<li>Review each supplier’s and utility’s specifications, and make cost-reduction recommendations that are specific to each account and are the most financially advantageous to you.</li>
							<li>Evaluate historical usage and billing statements, and verify the accuracy of each utility and supplier invoice.</li>
							<li>Discuss all findings in depth with no risk, cost, or obligation.</li>
							<li>Structure a Request for Proposal (RFP—based on your unique requirements, including terms and monthly volumes) to send to several qualified, licensed suppliers.</li>
							<li>Notify you of opportunities to take advantage of dips in NYMEX pricing.</li>
							<li>Represent your best interests, explaining all contract conditions and negotiating any supplier requirements that are disadvantageous.</li>
							<li>Interface with your utility and your chosen supplier to ensure a seamless transition.</li>
							<li>Monitor your account and the utility, provide tariff updates, and identify future cost-reduction opportunities.</li>
						</ul>
						<a href="/contact" class="btn custom-btn" onclick="gtag('event', 'click', { 'event_category': 'Receive a Complimentary Assessment_Natural Gas' });">Receive a complimentary energy assessment</a>
					</div>
				</div>
			</div>
		</section>

		<section class="bg-l-gray">
			<div class="container-fluid p-default">				
				<div class="row justify-content-center">
					<div class="col-10">
						<div class="text-center">
							<p class="mb-0 text-blue text-upper font-weight-medium">TESTIMONIAL</p>
							<h1 class="mb-0 font-weight-medium">John B. Snedden</h1>
							<p class="mb-header font-italic">President, Rocklands Barbeque & Grilling Co., Secretary 2012-2013 of Restaurant Association of Metropolitan Washington</p>
							<p>“The unbiased consulting firm presents energy pricing from many competitive suppliers, and recommends cost-saving solutions. My restaurant took advantage of this important benefit to lock in today’s low electricity and natural gas prices.”</p>
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
								<img src="/wp-content/uploads/2021/07/efficiency.jpg" alt="Efficiency & Sustainability Solutions" class="img-fluid img-fit">
								<div class="mask rgba-white-light">
									<div class="content">
										<h1 class="font-weight-medium">Efficiency & Sustainability Solutions</h1>
										<p>Customized Solutions with Proven Results</p>
										<div>
											<a href="/energy-solutions/efficiency-and-sustainability-solutions" class="btn custom-btn">LEARN MORE</a>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="col-md-6">
						<div class="page-list">
							<div class="view content-wrap">
								<img src="/wp-content/uploads/2021/07/procurement.jpg" alt="Electricity Procurement" class="img-fluid img-fit">
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
				</div>
			</div>
		</section>
		<!-- #Additional Content -->

	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();