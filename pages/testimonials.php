<?php
/**
 * Template Name: Testimonials Page Template
 *
 * Description: Testimonials Page Template
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

        <section class="gka-theme-2cols-image-text bg-l-blue">
            <div class="container-fluid testimonial-container py-default">
                <div class="row">
                    <div class="col-md-6 p-0">
                        <div class="left-text h-100 d-flex align-items-center">
                            <div>
                                <h1 class="mb-header">Colleges/Universities</h1>
                                <p class="font-italic">"The experience with APPI is professional and easy. It’s never
                                    pressing, it’s never pushy. They counterbalance what we try to do here, with
                                    opportunities that benefit us. It’s a casual, professional relationship that just
                                    works."</p>
                                <h4 class="mb-1 mt-5">Todd Otis</h4>
                                <p class="font-italic font-small">Executive Director of Physical Plant at Mount Saint Mary's University</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-0 d-flex align-items-center">
                        <div class="right-video pl-3 d-flex align-items-center">
                            <a data-fancybox="video2"
                                onclick="gtag('event', 'click', { 'event_category': 'Why APPI' });"
                                href="https://youtu.be/V7r7TQfUoBg">
                                <div class="w-100 p-relative">
                                    <img src="<?php echo get_template_directory_uri()."/images/video_thumb1.jpg"; ?>"
                                        alt="APPI Energy" class="img-fluid w-100">
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

        <section class="gka-theme-2cols-image-text bg-l-gray">
            <div class="container-fluid testimonial-container py-default">
                <div class="row">
                    <div class="col-md-6 p-0 order-md-2">
                        <div class="left-text h-100 d-flex align-items-center">
                            <div>
                                <!-- <span class="sub-header">TESTIMONIALS</span> -->
                                <!-- <h1 class="mb-header">Association</h1>
                                <p class="font-italic">“When we needed help with our electricity contracts, APPI Energy was there. I call them to discuss various energy proposals I receive from lighting retrofits to windmill projects. APPI Energy provides valuable information, excellent customer service, and a resource for all TADA dealers.”</p>
                                <h4 class="mb-1 mt-5">Bob Boggus</h4>
                                <p class="font-italic font-small">Owner, Boggus Motors, member of Texas Automobile Dealers Association</p> -->

                                <!-- <span class="sub-header">TESTIMONIALS</span> -->
                                <h1 class="mb-header">Agribusiness</h1>
                                <p class="font-italic">“They don’t just go out and try to get contracts for us, they’ll
                                    actually give us information about those contracts and advice. And it may be that
                                    ‘you don’t want to go with that company’ and I like that because we don’t know that
                                    business as well as they do. So it’s been an excellent experience.”</p>
                                <h4 class="mb-1 mt-5">Brian Hildreth</h4>
                                <p class="font-italic font-small">Chief Financial Officer, Allen Harim Foods</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-0 d-flex align-items-center order-md-1">
                        <div class="right-video pl-3 d-flex align-items-center">
                            <a data-fancybox="video1"
                                onclick="gtag('event', 'click', { 'event_category': 'Why APPI' });"
                                href="https://youtu.be/P73kuklgQlE">
                                <div class="w-100 p-relative">
                                    <img src="<?php echo get_template_directory_uri()."/images/video_thumb.jpg"; ?>"
                                        alt="APPI Energy" class="img-fluid w-100">
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

        <section class="gka-theme-2cols-image-text bg-l-blue">
            <div class="container-fluid testimonial-container py-default">
                <div class="row">
                    <div class="col-md-6 p-0">
                        <div class="left-text h-100 d-flex align-items-center">
                            <div>
                                <h1 class="mb-header">Manufacturing</h1>
                                <p class="font-italic">“We wanted to bring in a professional that takes 
                                    that burden off you on a day-to-day basis that manages the project. 
                                    All the complexity of tax credits and rebates and picking of the proper fixtures and 
                                    the engineering I am not here to do that…I’m here to make the labels.”
                                </p>
                                <h4 class="mb-1 mt-5">Rich Snyder</h4>
                                <p class="font-italic font-small">Director of Engineering at LUX Global Label</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-0 d-flex align-items-center">
                        <div class="right-video pl-3 d-flex align-items-center">
                            <a data-fancybox="video2"
                                onclick="gtag('event', 'click', { 'event_category': 'Why APPI' });"
                                href="https://youtu.be/oyS1veiDh0g">
                                <div class="w-100 p-relative">
                                    <img src="<?php echo get_template_directory_uri()."/images/video_thumb2.jpg"; ?>"
                                        alt="APPI Energy" class="img-fluid w-100">
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

        <section class="gka-theme-2cols-image-text bg-l-gray">
            <div class="container-fluid testimonial-container py-default">
                <div class="row">
                    <div class="col-md-6 p-0 order-md-2">
                        <div class="left-text h-100 d-flex align-items-center">
                            <div>
                                <h1 class="mb-header">Retail</h1>
                                <p class="font-italic">“Working with Rob is always easy; he just feels like an extension of our company. 
                                    He just takes things, and he runs them. We have everything else 
                                    we have to do…to run a project like this is time consuming. Leveraging APPI and 
                                    Rob Rose is just a huge win for us and just simple, simple and easy.”</p>
                                <h4 class="mb-1 mt-5">Clifton Dorsey</h4>
                                <p class="font-italic font-small">VP of Shared Services, Community Aid</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-0 d-flex align-items-center order-md-1">
                        <div class="right-video pl-3 d-flex align-items-center">
                            <a data-fancybox="video1"
                                onclick="gtag('event', 'click', { 'event_category': 'Why APPI' });"
                                href="https://youtu.be/Vnghd4it7rk">
                                <div class="w-100 p-relative">
                                    <img src="<?php echo get_template_directory_uri()."/images/video_thumb3.jpg"; ?>"
                                        alt="APPI Energy" class="img-fluid w-100">
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

        <section class="gka-theme-2cols-image-text d-none">
            <div class="container-fluid testimonial-container py-default">
                <div class="row">
                    <div class="col-md-6 p-0 order-md-2">
                        <div class="right-text h-100 d-flex align-items-center">
                            <div>
                                <!-- <span class="sub-header">TESTIMONIALS</span> -->
                                <h1 class="mb-header">Banking</h1>
                                <p class="font-italic">“APPI Energy has a proven track record of reducing electricity
                                    costs for banks like ours. Managing the electricity supply for our multiple
                                    branches, APPI Energy has helped us reduce our costs by thousands of dollars
                                    annually.”</p>
                                <h4 class="mb-1 mt-5">Marty Neat</h4>
                                <p class="font-italic font-small">President, First Shore Federal, member of Maryland
                                    Bankers Association</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-0 order-md-1">
                        <div class="left-video pr-3">
                            <a data-fancybox="video2" href="https://youtu.be/eqJIGCL4M4s">
                                <div class="w-100 p-relative">
                                    <img src="/wp-content/uploads/2021/07/marty-neat.jpg" alt="Marty Neat"
                                        class="img-fluid w-100">
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

        <section class="gka-theme-2cols-image-text ">
            <div class="container-fluid testimonial-container p-default">
                <div class="row">
                    <div class="col-md-6">
                        <div>
                            <!-- <span class="sub-header">TESTIMONIALS</span> -->
                            <h1 class="mb-header">Banking</h1>
                            <p>“APPI Energy is very reliable when it comes to assessing electricity procurement for your facilities. 
                                They are honest about the energy markets and whether the timing is favorable for your needs. 
                                They specifically told us to wait to sign a new contract as the market conditions would not 
                                have provided the best pricing or terms. Additionally, the APPI team was able to help our 
                                bank reach our goal of procuring 100% green power, which was important to us internally as an 
                                organization as well as to our customers. This is the type of service you want from a provider, 
                                a team that truly cares what your vision is as a company and one that will recommend 
                                the best option for your future. Thank you APPI!”</p>
                            <h4 class="mb-0">Tom Lunney</h4>
                            <p class="font-italic font-small">Senior Vice President, FNCB Bank</p>
                            <hr>
                        </div>
                        <div>
                            <!-- <span class="sub-header">TESTIMONIALS</span> -->
                            <h1 class="mb-header">Broadcasting</h1>
                            <p>“I've been working with APPI Energy for electricity procurement since 2003. APPI Energy
                                makes the process simple, answering all of my questions and keeping me informed about
                                changes in the energy market. I feel confident knowing that my electricity accounts are
                                being managed by the experts at APPI Energy.”</p>
                            <h4 class="mb-0">Joseph C. Lafornara, Sr.</h4>
                            <p class="font-italic font-small">Business Manager, WHEC-TV, LLC, member of the National
                                Association of Broadcasters</p>
                            <hr>
                        </div>
                        <!-- <div>
                            <span class="sub-header">TESTIMONIALS</span> 
                            <h1 class="mb-header">Chamber of Commerce</h1>
                            <p>“I’ve been contracting my electric supply since the first year Pennsylvania’s market
                                became competitive. Of the three consulting companies I’ve used, APPI Energy is by far
                                the best. I appreciate that their customer service team reached out to me, while none of
                                the other companies ever contacted me until it was renewal time.”</p>
                            <h4 class="mb-0">Paul Metzler</h4>
                            <p class="font-italic font-small">Terminal Manager, Carlisle Carrier Corporation,
                                Mechanicsburg, PA</p>
                            <hr>
                        </div> -->
                        <div>
                            <!-- <span class="sub-header">TESTIMONIALS</span> -->
                            <h1 class="mb-header">Government / Municipality</h1>
                            <p>“Our borough had many considerations to make about electricity procurement. APPI Energy
                                is not only endorsed by the Pennsylvania State Association of Boroughs, but also has
                                extensive experience with consulting municipalities on energy procurement. APPI Energy
                                negotiated a favorable price on our behalf, saving us time and money. The process was
                                very simple and professional with no upfront fees.”</p>
                            <h4 class="mb-0">Aaron Durso</h4>
                            <p class="font-italic font-small">Borough Manager, Borough of Birdsboro, member of
                                Pennsylvania State Association of Boroughs</p>
                            <hr>
                        </div>
                        <div class="testimonial-wrap mb-3">
                            <h1 class="mb-header text-white">Printing</h1>
                            <div class="testimonial">
                                <i>Thank you, APPI Energy, for providing an educational energy procurement process. The
                                    customer service team was even able to help us clarify and recoup unnecessary taxes
                                    paid. APPI Energy makes the transition seamless and we have now entered into our
                                    second contract for electricity supply.</i>
                            </div>
                            <div class="text-center text-white">
                                <h4 class="mb-2">Doug Yeager</h4>
                                <div class="font-small font-italic">COO, Alcom Printing Group, Inc., member of Graphic
                                    Arts Association</div>
                            </div>
                        </div>
                        <div>
                            <!-- <span class="sub-header">TESTIMONIALS</span> -->
                            <h1 class="mb-header">Property Management</h1>
                            <p>“Our property management firm learned of APPI Energy through the York County Economic
                                Alliance’s endorsement. Managing our entire energy procurement process, APPI Energy
                                provides exceptional customer service for all of our accounts, from smallest to biggest.
                                We consistently renew our contracts with APPI Energy because their price discovery
                                process delivers the best solutions.”</p>
                            <h4 class="mb-0">Leslie Yohn-Argabright</h4>
                            <p class="font-italic font-small">Property Manager, Yohn Property Management, member of York
                                County Economic Alliance</p>
                            <hr>
                        </div>
                        <div>
                            <!-- <span class="sub-header">TESTIMONIALS</span> -->
                            <h1 class="mb-header">School Districts</h1>
                            <p>“We were participating in a consortium program and locked into an electricity supply
                                contract with unclear terms and conditions. APPI Energy evaluated our existing contract
                                and recommended a course of action for negotiating the lowest price and best contract
                                terms and conditions for our next supply contract. The end result—better pricing, budget
                                certainty, and a contract that is clearly understood.”</p>
                            <h4 class="mb-0">Mark Eighner</h4>
                            <p class="font-italic font-small">Business Manager, Hoopeston Area Community Unit School
                                District 11, member of Vermillion Advantage</p>
                            <hr>
                        </div>
                        <div>
                            <!-- <span class="sub-header">TESTIMONIALS</span> -->
                            <h1 class="mb-header">Agribusiness</h1>
                            <p>“They don’t just go out and try to get contracts for us, they’ll actually give us
                                information about those contracts and advice. And it may be that ‘you don’t want to go
                                with that company’ and I like that because we don’t know that business as well as they
                                do. So it’s been an excellent experience.”</p>
                            <h4 class="mb-0">Brian Hildreth</h4>
                            <p class="font-italic font-small">Chief Financial Officer, Allen Harim Foods</p>
                            <hr>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <!-- <span class="sub-header">TESTIMONIALS</span> -->
                            <h1 class="mb-header">Manufacturing</h1>
                            <p>“Our company has been working with APPI Energy since 2009. They have helped us lock in a
                                fixed-price electricity contract that is better than the utility’s price, and provides
                                us with budget certainty. They were also able to help us with our natural gas
                                management, and secure a competitive contract for it, as well. I recommend them to all
                                PMA and Women in Manufacturing members.”</p>
                            <h4 class="mb-0">Gretchen Zierick</h4>
                            <p class="font-italic font-small">Zierick Manufacturing Corp., Mt. Kisco, NY, member of
                                Precision Metalforming Association</p>
                            <hr>
                        </div>
                        <div class="testimonial-wrap mb-3">
                            <h1 class="mb-header text-white">Healthcare</h1>
                            <div class="testimonial">
                                <i>We work with APPI Energy for electricity and natural gas procurement for several
                                    nursing homes managed by our group in Pennsylvania. We first learned about this
                                    opportunity offered as a member benefit program through the Pennsylvania Healthcare
                                    Association. APPI Energy has saved us considerable time and money by managing all
                                    aspects of our energy procurement. I highly recommend them.</i>
                            </div>
                            <div class="text-center text-white">
                                <h4 class="mb-2">Steve Franceschi</h4>
                                <div class="font-small font-italic">CFO, Complete HealthCare Resources, member of
                                    Pennsylvania Health Care Association</div>
                            </div>
                        </div>
                        <div>
                            <!-- <span class="sub-header">TESTIMONIALS</span> -->
                            <h1 class="mb-header">Nonprofit Organizations</h1>
                            <p>“APPI Energy presented quotes from many reliable suppliers, and provided a detailed cost
                                savings analysis, which made it easier for me to make my selection. APPI Energy also
                                identified that our nonprofit organization should be energy sales tax exempt. Their
                                customer service team is working on my behalf to obtain reimbursement for past paid
                                taxes.”</p>
                            <h4 class="mb-0">Ray Parker</h4>
                            <p class="font-italic font-small">Facilities-Safety Manager, Dorchester County Commission on
                                the Aging, Inc., member of Maryland Association of Nonprofit Organizations</p>
                            <hr>
                        </div>
                        <div>
                            <!-- <span class="sub-header">TESTIMONIALS</span> -->
                            <h1 class="mb-header">Recreation</h1>
                            <p>“The Shorebirds and Arthur W. Perdue Stadium have worked with APPI Energy for the past
                                several years. We have been able to reduce the cost of the electricity we use, lock in
                                prices to better stabilize our expenses, and work with our facility and staff to reduce
                                usage. This combination has enabled the Shorebirds to annually reduce a major expense
                                item.”</p>
                            <h4 class="mb-0">Chris Bitters</h4>
                            <p class="font-italic font-small">General Manager, Delmarva Shorebirds</p>
                            <hr>
                        </div>
                        <div>
                            <!-- <span class="sub-header">TESTIMONIALS</span> -->
                            <h1 class="mb-header">Restaurants</h1>
                            <p>“The unbiased consulting firm presents energy pricing from many competitive suppliers,
                                and recommends cost-saving solutions. My restaurant took advantage of this important
                                benefit to lock in today’s low electricity and natural gas prices.”</p>
                            <h4 class="mb-0">John B. Snedden</h4>
                            <p class="font-italic font-small">President, Rocklands Barbeque & Grilling Co., Secretary
                                2012-2013 of Restaurant Association of Metropolitan Washington</p>
                            <hr>
                        </div>
                        <div>
                            <!-- <span class="sub-header">TESTIMONIALS</span> -->
                            <h1 class="mb-header">Textile Services</h1>
                            <p>“We’ve been working with APPI Energy for over four years now. Their energy
                                recommendations and expertise have saved us valuable time and money. When we first began
                                working with APPI Energy, they advised us to hold off on locking into a new electricity
                                supply contract until the market was more favorable. That honesty and commitment to
                                customer service is why we continue to work with APPI Energy.”</p>
                            <h4 class="mb-0">Michael Amendola</h4>
                            <p class="font-italic font-small">Doritex Corporation, member of Textile Rental Services
                                Association of America</p>
                            <hr>
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