<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gka_theme
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
				$slider = gka_theme_get_gallery(5);
				if($slider) { 
					include get_template_directory() . '/template-parts/main-slider.php'; 
				}
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
			<div class="container py-default">
				<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
			</div>
		</section>
		<?php endwhile; // End of the loop. ?>
		<!-- #Main Content -->

		<!-- Additional Content -->

		<!-- #Additional Content -->

		<!-- Widget Area After -->
		<?php
		if ( is_active_sidebar( 'gka_theme_widget_after' ) ) {
			dynamic_sidebar( 'gka_theme_widget_after' ); 
		}
		?>
		<!-- #Widget Area After -->

		<!-- Additional Content -->
		<section class="bg-l-blue">
			<div class="container py-default">
				<div>
					<h4 class="text-blue mb-5 font-weight-bold">NEXT POSTS</h4>
				</div>
				<div class="row">
					<?php 
						$args = array(  
							'post_type' => 'post',
							// 'category_name' => 'news',
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
					?>
				</div>
			</div>
		</section>
		<!-- #Additional Content -->


	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();