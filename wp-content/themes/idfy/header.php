<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IDfy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="<?php bloginfo('template_directory'); ?>/css/slick-theme.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/css/slick.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory'); ?>/css/main.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<header>
			<div class="headerWrapper">
				<div class="logoBox">
					<a href="#">
						<img src="<?php bloginfo('template_directory'); ?>/images/header-logo.svg" alt="">
					</a>
				</div>
				<div class="mainLinks">
					<nav>
						<ul>
							<li>
								<a href="#" class="solutionLink">solutions</a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="dropdownsolution">
					<div class="Card360">
						<div class="Img360">
							<img src="<?php bloginfo('template_directory'); ?>/images/360-img.svg" alt="">
						</div>
						<h3>IDfy360</h3>
						<p>Comprehensive Identity Verification Solution</p>
						<ul>
							<li><img src="<?php bloginfo('template_directory'); ?>/images/360-card-rightimg.svg" alt="">No-code Onboarding</li>
							<li><img src="<?php bloginfo('template_directory'); ?>/images/360-card-rightimg.svg" alt="">Fast, secure onboarding for customers</li>
							<li><img src="<?php bloginfo('template_directory'); ?>/images/360-card-rightimg.svg" alt="">Tailored solutions delivered to industries</li>
						</ul>
					</div>
					<div class="subLinks">
						<div class="innerBoxes">
							<h3>KYC API Suite</h3>
							<p>Streamline Identity Verification Effortlessly</p>
						</div>
						<div class="innerBoxes">
							<h3>KYC API Suite</h3>
							<p>Streamline Identity Verification Effortlessly</p>
						</div>
						<div class="innerBoxes">
							<h3>KYC API Suite</h3>
							<p>Streamline Identity Verification Effortlessly</p>
						</div>
						<div class="innerBoxes">
							<h3>KYC API Suite</h3>
							<p>Streamline Identity Verification Effortlessly</p>
						</div>
						<div class="innerBoxes">
							<h3>KYC API Suite</h3>
							<p>Streamline Identity Verification Effortlessly</p>
						</div>
						<div class="innerBoxes">
							<h3>KYC API Suite</h3>
							<p>Streamline Identity Verification Effortlessly</p>
						</div>
						<div class="innerBoxes">
							<h3>KYC API Suite</h3>
							<p>Streamline Identity Verification Effortlessly</p>
						</div>
					</div>
					<div class="selfService">
						<h3>Self Serve Portal</h3>
						<div class="innerLinks">
							<a href="#">API Central</a>
							<a href="#">BGV Self Serve</a>
						</div>
					</div>
				</div>
			</div>
		</header>