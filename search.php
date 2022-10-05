<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package gka_theme
 */

get_header();
?>

<main id="primary" class="site-main">

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

    <section class="py-3">
        <div class="container search-result">
            <div class="main-desc">
                <?php if ( have_posts() ) : ?>
                <header class="page-header">
                    <h3 class="page-title">
                        <?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'gka_theme' ), '<span>' . get_search_query() . '</span>' );
						?>
                    </h3>
                </header><!-- .page-header -->

                <?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );

				endwhile;

				the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
            </div>
        </div>
    </section>
</main><!-- #main -->

<?php
// get_sidebar();
get_footer();