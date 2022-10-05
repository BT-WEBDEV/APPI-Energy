<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gka_theme
 */

get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<!-- Main Slider -->
		<section>
			<?php include get_template_directory() . '/template-parts/no-slider.php'; ?>
		</section>
		<!-- #Main Slider -->

		<section class="error-404 not-found py-3">
			<div class="container">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'gka_theme' ); ?>
					</h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'gka_theme' ); ?>
					</p>

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'gka_theme' ); ?></h2>
						<ul>
							<?php
							// wp_list_categories( array(
							// 	'orderby'    => 'count',
							// 	'order'      => 'DESC',
							// 	'show_count' => 1,
							// 	'title_li'   => '',
							// 	'number'     => 10,
							// ) );
							?>
							<?php 
							$category_ids = get_all_category_ids(); 
							$args = array( 
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							); 
							$categories = get_categories( $args ); 
							foreach ( $categories as $category ) { 
								echo 	'<li>
										<a href="/news/#' . $category->slug . '" rel="bookmark">' . $category->name . '</a>  
										</li>'; 
							} 
 							?>
						</ul>
					</div><!-- .widget -->

					<?php
					/* translators: %1$s: smiley */
					$gka_theme_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'gka_theme' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$gka_theme_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

				</div><!-- .page-content -->
			</div>
		</section><!-- .error-404 -->
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();