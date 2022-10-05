<?php
/**
 * Template Name: Search Rebate Page Template
 *
 * Description: Search Rebate Page Template
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
		<div class="container"> 
			<div id='fp_ug_widget_container' data-widget-token='0372c42f-d9ae-4be1-8756-01d062b88ff5' style="margin-top:50px;margin-bottom:25px;"></div> 
			<p style="margin-left:15px;margin-right:15px;">Let APPI Energy help your business secure the best energy efficiency rebates. 
				Our team goes to task for you, working with your local utility to capture 
				rebates and ensure the process is a seamless as possible on your end. In many cases, 
				APPI energy can provide the rebate to our clients up front, collecting 
				it from the utility after the project is complete, 
				significantly reducing the risk and wait time for our clients.
			</p>
			<p style="margin-left:15px;margin-right:15px;margin-bottom:50px;">To learn more, or to get started on the programs that your search (above) yielded, 
				connect with us here via the chat box, <a href="/contact/" target="_blank">our website contact form</a>, 
				or by calling <a href="tel:18005206685">800-520-6685 </a>.
			</p>

		</div>
		<!-- #Additional Content -->

	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();