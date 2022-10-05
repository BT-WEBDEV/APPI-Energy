<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gka_theme
 */

?>

</div><!-- #content -->

<footer id="footer" class="site-footer">
	<?php if($post->ID != 14) { ?>
	<div class="footer-form">
		<div class="container-fluid px-default">
			<div class="row justify-content-between align-items-center">
				<div class="col-md-6 text-left">
					<h1 class="font-weight-medium mb-header text-black">The APPI Energy Advisor</h1>
					<p class="mb-0">Access premium content only available to our email subscribers.</p>
				</div>
				<div class="col-md-5">
					<div id="newsletter-form">
						<?php echo do_shortcode('[wpforms id="48"]'); ?>
					</div>
					<div class="pl-1">
						<a href="/news"><u>Explore our recent articles and newsletters</u></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<div class="container-fluid footer-bottom px-default">
		<div class="row justify-content-between">
			<div class="col-md-6 col-lg-5">
				<div>
					<img src="<?php echo get_template_directory_uri()."/images/logo-color.svg"; ?>" alt="APPI Energy"
						class="img-fluid logo-horizontal d-none d-md-block">
					<img src="<?php echo get_template_directory_uri()."/images/logo-color-vertical.svg"; ?>"
						alt="APPI Energy" class="img-fluid logo-vertical d-md-none">
				</div>
			</div>
			<div class="col-md-5 col-lg-5">
				<div class="footer-menu">
					<ul class="list-unstyled mx-auto">
						<?php 
							$footer_nav = wp_get_nav_menu_items(3);
							foreach ($footer_nav as $key => $item) {    				        
							?>
						<li class="">
							<a class="text-black" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
						</li>
						<?php 
							} 
							?>
					</ul>
				</div>
			</div>
		</div>
		<div class="row justify-content-between pt-3">
			<div class="col-md-6 col-lg-5">
				<h6 class="text-blue font-weight-bold mb-3">Salisbury Headquarters</h6>
				<div class="mt-2">
					<a href="https://goo.gl/maps/zDQc9Z7PoBo42zba8" target="_blank">112 E. Market Street <br>
						Salisbury, MD 21801</a>
				</div>
				<div class="mt-2">
					<a href="tel:800-520-6685">(800) 520-6685</a>
				</div>
				<div class="mt-2">
					<a href="/privacy" class="text-underline"><u>Privacy Policy</u></a>
				</div>
			</div>
			<div class="col-md-5 col-lg-5">
				<div class="footer-social">
					<h6 class="text-blue font-weight-bold mb-3">Follow</h6>
					<div>
						<a href="https://www.linkedin.com/company/appi-energy" target="_blank" class="text-black"><i
								class="fab fa-linkedin"></i></a>
						<a href="https://www.facebook.com/energizeyourbiz" target="_blank" class="text-black"><i
								class="fab fa-facebook"></i></a>
						<!-- <a href="" class="text-black"><i class="fab fa-twitter"></i></a> -->
						<a href="https://www.youtube.com/channel/UCbBO6RFy0cUwP5Qa7aDqtEQ" target="_blank"
							class="text-black"><i class="fab fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container copyright">
		<p class="mb-0">© <?php echo getdate()['year']; ?> APPI Energy. All rights reserved.</p>
	</div>
</footer>

</div><!-- #page -->
<?php wp_footer(); ?>

<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
	window.__lc = window.__lc || {};
	window.__lc.license = 7578661;
	(function () {
		var lc = document.createElement('script');
		lc.type = 'text/javascript';
		lc.async = true;
		lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(lc, s);
	})();
</script>
<!-- End of LiveChat code -->

</body>

</html>