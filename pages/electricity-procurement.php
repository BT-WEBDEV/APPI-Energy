<?php
/**
 * Template Name: Electricity Procurement Page Template
 *
 * Description: Electricity Procurement Page Template
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
				<div>
					<h1 class="font-weight-medium mb-header text-black">Proven and Effective</h1>
				</div>
				<div class="row mb-3">
					<div class="col-md-6">
						<div>
							<img src="<?php 
                                    echo get_template_directory_uri()."/images/electricity-procurement/GettyImages-1281431299.jpg"; ?>"
								alt="<?php the_title(); ?>" class="img-fluid">
						</div>
					</div>
					<div class="col-md-6">
						<!-- <img src="/wp-content/uploads/2021/07/procurement.jpg" class="img-fluid w-100 mb-3" alt="Electricity Procurement"> -->
						<p>Our procurement process is effective and proven.</p>
						<ul class="checkmark-ul">
							<li>Evaluate current supplier contracts, building energy usage profiles, historical tariffs,
								market data, risk tolerance, and current efficiency projects.</li>
							<li>Retrieve account information and usage data from the utility.</li>
							<li>Send customized RFP to multiple vetted suppliers.</li>
							<li>Provide an accurate comparison of supplier prices and contracts.</li>
							<li>Manage smooth transition to new services.</li>
							<li>Continually monitor your accounts and the energy markets to ensure customer excellence.
							</li>
							<li>Identify future cost-reducing solutions.</li>
						</ul>
						<p>APPI Energy works with only vetted suppliers and maintains working relationships with
							suppliers that we trust to serve our clients. Only a small percentage of suppliers meet our
							stringent, due diligence evaluation, which involves each supplier’s financial, managerial,
							and operational stability and performance.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 order-md-2">
						<div>
							<img src="<?php 
                                    echo get_template_directory_uri()."/images/electricity-procurement/GettyImages-876975554.jpg"; ?>"
								alt="<?php the_title(); ?>" class="img-fluid">
						</div>
					</div>
					<div class="col-md-6 order-md-1">
						<p>Our work doesn't end when the contract is signed. Our in-house, full-service customer service
							team is here to help.</p>
						<p>Our team can:</p>
						<ul class="checkmark-ul">
							<li>Assist with account adjustments, including adding or dropping meters, to ensure a smooth
								transition.</li>
							<li>Interact on your behalf with utilities and suppliers. We also verify bill accuracy and
								resolve billing and credit errors.</li>
							<li>We evaluate local utility and government policies for financial incentives &
								reimbursements that save you money. </li>
							<li>We continually monitor and identify opportunities and options for renewal. </li>
						</ul>
						<a href="/contact" class="btn custom-btn" onclick="gtag('event', 'click', { 'event_category': 'Receive a Complimentary Assessment_Electricity' });">Receive a complimentary energy assessment</a>
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
							<h1 class="mb-0 font-weight-medium">Bob Boggus</h1>
							<p class="mb-header font-italic">Owner, Boggus Motors, member of Texas Automobile Dealers
								Association</p>
							<p>“When we needed help with our electricity contracts, APPI Energy was there. I call them
								to discuss various energy proposals I receive from lighting retrofits to windmill
								projects. APPI Energy provides valuable information, excellent customer service, and a
								resource for all TADA dealers.”</p>
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
								<img src="/wp-content/uploads/2021/07/efficiency.jpg"
									alt="Efficiency & Sustainability Solutions" class="img-fluid img-fit">
								<div class="mask rgba-white-light">
									<div class="content">
										<h1 class="font-weight-medium">Efficiency & Sustainability Solutions</h1>
										<p>Customized Solutions with Proven Results</p>
										<div>
											<a href="/energy-solutions/efficiency-and-sustainability-solutions"
												class="btn custom-btn">LEARN MORE</a>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="col-md-6">
						<div class="page-list">
							<div class="view content-wrap">
								<img src="/wp-content/uploads/2021/07/gas.jpg"
									alt="Natural Gas Procurement" class="img-fluid img-fit">
								<div class="mask rgba-white-light">
									<div class="content">
										<h1 class="font-weight-medium">Natural Gas Procurement</h1>
										<p>An innovative approach to purchasing natural gas</p>
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