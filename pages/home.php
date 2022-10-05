<?php
/**
 * Template Name: Home Page Template
 *
 * Description: Home Page Template
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
            <div>
                <div class="hero-video view">
                    <video class="video-fluid z-depth-1 img-fit" autoplay loop muted>
                        <source src="<?php echo get_template_directory_uri(); ?>/images/home/hero.mp4"
                            type="video/mp4" />
                    </video>
                    <div class="mask rgba-black-light d-flex align-items-center justify-content-center">
                        <div class="slider-caption">
                            <div class="text-white text-center">
                                <p class="mb-0 text-blue text-upper font-weight-medium">Data-Driven, Holistic Energy
                                    Management</p>
                                <h1 class="font-reem font-weight-normal">TRUSTED SERVICE. TAILORED SOLUTIONS.</h1>
                                <a href="/energy-solutions"
                                    class="btn custom-btn bg-transparent text-white border-1-white"
                                    onclick="gtag('event', 'click', { 'event_category': 'See Our Solutions' });">SEE OUR
                                    SOLUTIONS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- #Main Slider -->

        <!-- Additional Content -->
        <!-- <section>
            <div class="container">
                <div class="text-center py-default">
                    <p class="mb-0 text-blue font-weight-medium">Lorem ipsum</p>
                    <h1 class="mb-header font-weight-medium">Lorem ipsum dolor sit amet.</h1>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                </div>
            </div>
        </section> -->
        <!-- #Additional Content -->

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
        <!-- #Additional Content -->

        <!-- Widget Area After -->
        <?php
		if ( is_active_sidebar( 'gka_theme_widget_after' ) ) {
			dynamic_sidebar( 'gka_theme_widget_after' ); 
		}
		?>
        <!-- #Widget Area After -->

        <section class="gka-theme-2cols-image-text">
            <div class="container-fluid testimonial-container py-default">
                <div class="row">
                    <div class="col-md-6 p-0">
                        <div class="left-text h-100 d-flex align-items-center">
                            <div class="content">
                                <div>
                                    <h1>About Us</h1>
                                    <p>APPI Energy is a full-service energy consulting firm with over 25 years of
                                        experience in researching, recommending, and procuring customized energy
                                        solutions. Our tenure and expertise in the industry has earned the endorsements
                                        of 160 affinity groups, trade associations, and chambers of commerce.</p>
                                </div>

                                <!-- Button -->
                                <div class="text-left smooth-scroll">
                                    <a target="" href="https://www.appienergy.com/about/"
                                        class="btn custom-btn waves-effect waves-light">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-0 d-flex align-items-center">
                        <div class="right-video pl-3 d-flex align-items-center">
                            <a data-fancybox="AboutUs"
                                onclick="gtag('event', 'click', { 'event_category': 'Why APPI' });"
                                href="https://www.youtube.com/watch?v=GHzvkjQ2D9Y">
                                <div class="w-100 p-relative">
                                    <img src="/wp-content/uploads/2021/10/team-meeting-appi.jpg"
                                        alt="About Us" class="img-fluid w-100">
                                    <div class="play-btn">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/icons/play-button.svg"
                                            alt="Play Button">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Additional Content -->
        <section class="news-section">
            <?php
            // News | Post WP Query
            $args = array(  
                'post_type' => 'post',
                'post_status' => 'publish',
                'orderby' => 'date',
                'order' => 'DESC',
                'posts_per_page' => 4,
                'paged' => $paged
            ); 
            $blog = new WP_Query($args);
            ?>
            <div class="container-fluid p-default">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div>
                            <h1 class="font-weight-normal">News</h1>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <a href="/news" class="btn custom-btn">VIEW ALL</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 left-content">
                        <?php 
                        $count = 1;
                        while ( $blog->have_posts() ) : $blog->the_post(); 
							if($count <= 1) {
                                get_template_part( 'template-parts/news-list-image' );  
                            } 
                        $count++; 
                        endwhile; wp_reset_postdata(); 
                        ?>
                    </div>
                    <div class="col-md-6 right-content">
                        <?php 
                        $count = 1;
                        while ( $blog->have_posts() ) : $blog->the_post(); 
							if($count <= 4 && $count >= 2) {
                                 get_template_part( 'template-parts/news-list' ); 
                            } 
                        $count++; 
                        endwhile; wp_reset_postdata(); 
                        ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="gka-theme-2cols-image-text">
            <div class="container-fluid testimonial-container p-default">
                <div class="row">
                    <div class="col-md-6 left-content">
                        <div>
                            <span class="sub-header">TESTIMONIALS</span>
                            <h1 class="mb-header">Better service starts here.</h1>
                            <p>APPI Energy currently manages 10.1 billion kilowatt hours and 20 million dekatherms for
                                34,400 service accounts in the manufacturing, consumer goods, healthcare. property
                                management and government industries. Over the years, we’ve advised thousands of
                                companies on energy solutions, helped companies minimize budget risks, and maintained
                                partnerships well beyond the signed contract.</p>
                            <div>
                                <a href="/about/testimonials" class="btn custom-btn">HEAR WHAT THEY SAY</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 right-content">
                        <div class="testimonial-wrap">
                            <div class="swiper-container mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div>
                                            <div class="testimonial">
                                                <i>When we needed help with our electricity contracts, APPI Energy was
                                                    there. I call them to discuss various energy proposals I receive
                                                    from lighting retrofits to windmill projects. APPI Energy provides
                                                    valuable information, excellent customer service, and a resource for
                                                    all TADA dealers.</i>
                                            </div>
                                            <div class="text-center text-white">
                                                <h3 class="mb-2">Bob Boggus</h3>
                                                <div>Owner, Boggus Motors</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div>
                                            <div class="testimonial">
                                                <i>APPI Energy has a proven track record of reducing electricity costs
                                                    for banks like ours. Managing the electricity supply for our
                                                    multiple branches, APPI Energy has helped us reduce our costs by
                                                    thousands of dollars annually.</i>
                                            </div>
                                            <div class="text-center text-white">
                                                <h3 class="mb-2">Marty Neat</h3>
                                                <div>President, First Shore Federal</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div>
                                            <div class="testimonial">
                                                <i>I've been working with APPI Energy for electricity procurement since
                                                    2003. APPI Energy makes the process simple, answering all of my
                                                    questions and keeping me informed about changes in the energy
                                                    market. I feel confident knowing that my electricity accounts are
                                                    being managed by the experts at APPI Energy.</i>
                                            </div>
                                            <div class="text-center text-white">
                                                <h3 class="mb-2">Joseph C. Lafornara, Sr.</h3>
                                                <div>Business Manager, WHEC-TV, LLC</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div>
                                            <div class="testimonial">
                                                <i>I’ve been contracting my electric supply since the first year
                                                    Pennsylvania’s market became competitive. Of the three consulting
                                                    companies I’ve used, APPI Energy is by far the best. I appreciate
                                                    that their customer service team reached out to me, while none of
                                                    the other companies ever contacted me until it was renewal time.</i>
                                            </div>
                                            <div class="text-center text-white">
                                                <h3 class="mb-2">Paul Metzler</h3>
                                                <div>Terminal Manager, Carlisle Carrier Corporation</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Custom HTML -->
        <div class="text-center py-default">
            <p class="mb-0 text-blue text-upper font-weight-medium">LEARN MORE ABOUT OUR</p>
            <h1 class="mb-header font-weight-medium">Affinity Partnerships</h1>
            <a target="" href="/about/affinity-partnerships" class="btn custom-btn waves-effect waves-light">SEE
                MORE</a>
        </div>
        <!-- #Additional Content -->

    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();