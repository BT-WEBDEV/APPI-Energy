<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gka_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="GKA Theme | GKA Web Department" />
	<meta name="Owner" content="GKA Theme" />
	<meta name="Copyright" content="Copyright &copy; GKA Theme" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png"
		sizes="300x300">
	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
	<h1 class="outline">Header</h1>
	<a class="skip-main" href="#primary">Skip to main content</a>
	<div id="page" class="site">
		<header id="masthead" class="site-header <?php echo ($post->ID == 2) ? "black-header" : "white-header"; ?>">
			<nav class="navbar fixed-top navbar-expand-md custom-navbar">
				<h1 class="outline">Main Navigation</h1>
				<div class="container-fluid">
					<!-- Navbar brand -->
					<a class="navbar-brand" href="/">
						<img id="logo-white" class="logo"
							src="<?php echo (get_header_image()) ? get_header_image() : get_template_directory_uri()."/images/logo.svg"; ?>"
							alt="Logo">
						<img id="logo-color" class="logo"
							src="<?php echo (get_header_image()) ? get_header_image() : get_template_directory_uri()."/images/logo-color.svg"; ?>"
							alt="Logo">
					</a>

					<!-- Collapse button -->
					<button class="navbar-toggler third-button" type="button" data-toggle="collapse"
						data-target="#main-nav" aria-controls="main-nav" aria-expanded="false"
						aria-label="Toggle navigation">
						<div class="animated-icon3"><span></span><span></span><span></span></div>
					</button>

					<!-- Main navigation -->
					<div class="collapse navbar-collapse" id="main-nav">
						<ul id="secondary-nav" class="">
							<li class="">
								<a href="" class="">PRICE FINDER</a>
							</li>
							<li class="">
								<a href="" class="">800-520-6685</a>
							</li>
						</ul>
						<ul class="navbar-nav ml-auto">
							<?php $primary_nav = wp_get_nav_menu_items(2); 
									foreach ($primary_nav as $key => $item) {
										$dropdownmenu = '';
										if ($item->menu_item_parent == "0") {
											foreach ($primary_nav as $subitem) {
												if($item->ID == $subitem->menu_item_parent) {
													$dropdownmenu .= '<a class="dropdown-item" href="' . $subitem->url . '">' . $subitem->title . '</a>';
												}
											}
											if($dropdownmenu) { ?>
							<li
								class="nav-item dropdown <?php echo ($post->ID == $item->object_id) ? "active" : ""; ?>">
								<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
									aria-haspopup="true" aria-expanded="false"><?php echo $item->title; ?></a>
								<div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
									<?php echo $dropdownmenu ?>
								</div>
							</li>

							<?php } else { ?>
							<li class="nav-item <?php echo ($post->ID == $item->object_id) ? "active" : ""; ?>">
								<a class="nav-link" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a>
							</li>
							<?php } } } ?>
						</ul>
					</div>
				</div>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">