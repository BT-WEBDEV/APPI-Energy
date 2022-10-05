<?php
/**
 * Template Name: Siteplan Template
 *
 * Description: Siteplan Template
 *
 * @package WordPress
 * @subpackage REDI
 * @since REDI 1.0
 */
get_header();
?>
<div id="primary" class="content-area nav-space">
    <main id="main" class="site-main">
        <h1 class="outline">Main</h1>
        <section>
			<h1 class="outline">Slider</h1>
			<div class="gka-theme-no-slider">
            </div>		
        </section>
        <section>
            <div class="container py-default">
                <div>
                    <h1 class="mb-header text-blue font-weight-bold">SITE MAP</h1>
                </div>
                <div class="row">

                    <!-- Pages -->
                    <ul class="col-md-3 list-unstyled">
                        <h5 class="font-weight-medium text-red">Navigation:</h5>
                        <?php
                        $pages = get_pages();
                        foreach ( $pages as $page ) {
                            $child_nav = '';
                            if($page->post_parent == 0) {
                                foreach ( $pages as $child_page ) {
                                    if($page->ID == $child_page->post_parent) {
                                    $child_nav = ' <li class="my-1 mb-2">
                                                        <a href="' . get_page_link( $child_page->ID ) . '" class="text-blue font-weight-normal">' . $child_page->post_title . '</a>
                                                    </li>';
                                    }
                                }
                        ?>
                        <?php if($child_nav) { ?>
                        <li class="ml-3 my-1">
                            <a href="<?php echo get_page_link( $page->ID ); ?> "
                                class="text-blue font-weight-normal"><?php echo $page->post_title; ?></a>
                            <ul>
                                <?php echo $child_nav; ?>
                            </ul>
                        </li>
                        <?php } else { ?>
                        <li class="ml-3 my-1">
                            <a href="<?php echo get_page_link( $page->ID ); ?> "
                                class="text-blue font-weight-normal"><?php echo $page->post_title; ?></a>
                        </li>
                        <?php } } } ?>
                    </ul>

                    <!-- News -->
                    <ul class="col-md-3 list-unstyled">
                        <h5 class="font-weight-medium text-red">News & Events:</h5>
                        <?php
                        $posts = get_posts();
                        foreach ( $posts as $post ) {
                        ?>
                        <li class="ml-3 my-1"><a href="<?php echo get_page_link( $post->ID ); ?> "
                                class="text-blue font-weight-normal"><?php echo $post->post_title; ?></a></li>
                        <?php } ?>
                    </ul>

                    <ul class="col-md-3 list-unstyled d-none">
                        <h5 class="font-weight-medium text-red">Custom Post Type:</h5>
                        <?php
                        $args = array(  
                            'post_type' => 'custom_post_type',
                            'post_status' => 'publish',
                            'orderby' => 'title',
                            'order' => 'ASC'
                        ); 

                        $post_type = new WP_Query($args);

                        while ( $post_type->have_posts() ) : $post_type->the_post();
                        ?>
                        <li class="ml-3 my-1">
                            <a href="<?php echo get_page_link( $post->ID ); ?> "
                                class="text-blue font-weight-normal"><?php echo $post->post_title; ?></a>
                        </li>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
        </section>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();