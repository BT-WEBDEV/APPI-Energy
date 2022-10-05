<?php
/**
 * Template Name: FAQ Page Template
 *
 * Description: FAQ Page Template
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
		<?php
		
		$args = array(  
			'post_type' => 'faq_accordion',
			'post_status' => 'publish',
			'orderby' => 'date',
			'order' => 'DESC',
			'posts_per_page' => 20,
		);

		$faq = new WP_Query($args);
		?>
		<section>
			<div class="container-fluid p-default">
				<div>
					<!--Accordion wrapper-->
					<div class="accordion md-accordion custom-accordion" id="FAQ" role="tablist"
						aria-multiselectable="true">
						
						
						<?php 
						$count = 0;
						while ( $faq->have_posts() ) : $faq->the_post(); ?>
						<!-- Accordion card -->
						<div id="card-<?php echo $count; ?>" class="card <?php echo ($count==0) ? "bg-l-green" : ""; ?>">

							<!-- Card header -->
							<div class="card-header" role="tab" id="faq-heading-<?php echo $count ?>">
								<a class="text-black" data-toggle="collapse" data-parent="#FAQ" href="#faq-collapse-<?php echo $count ?>"
									aria-expanded="true" aria-controls="faq-collapse-<?php echo $count ?>">
									<h5 class="mb-0 font-weight-normal">
										<?php the_title(); ?> 
										<img src="<?php echo get_template_directory_uri(); ?>/images/icons/<?php echo ($count==0) ? "close" : "open"; ?>.svg" alt="Open or Close" class="open-close">
									</h5>
								</a>
							</div>

							<!-- Card body -->
							<div id="faq-collapse-<?php echo $count ?>" class="faq-body collapse <?php echo ($count==0) ? "show" : ""; ?>" role="tabpanel"
								aria-labelledby="faq-heading-<?php echo $count ?>" data-parent="#FAQ">
								<div class="card-body">
									<?php the_content(); ?>
								</div>
							</div>

						</div>
						<!-- Accordion card -->
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