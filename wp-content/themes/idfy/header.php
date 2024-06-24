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
			<nav class="navbar">
				<div class="logo">
					<a href="">
						<img src="<?php bloginfo('template_directory'); ?>/images/header-logo.svg" alt="IDfy Logo">
					</a>
				</div>
				<ul class="nav-links">
					<li class="dropdown dropdown1">
						<a href="#" class="dropbtn">SOLUTIONS</a>
						<div class="dropdown-content">
							<div class="dropdown-wrapper">
								<div class="dropdown-section-idfy">
									<div class="idfy-wrapper">
										<div class="dropdown-image">
											<img src="<?php bloginfo('template_directory'); ?>/images/360-img.svg" alt="">
										</div>
										<h3>IDfy360</h3>
										<p>Comprehensive Identity Verification Solution</p>
										<ul>
											<li><img src="<?php bloginfo('template_directory'); ?>/images/360-card-rightimg.svg"
													alt="">No-code Onboarding</li>
											<li><img src="<?php bloginfo('template_directory'); ?>/images/360-card-rightimg.svg"
													alt="">Fast, secure onboarding for customers</li>
											<li><img src="<?php bloginfo('template_directory'); ?>/images/360-card-rightimg.svg"
													alt="">Tailored solutions delivered to industries</li>
										</ul>
									</div>
								</div>
								<div class="dropdown-section-menu">
									<div class="menu-wrapper">
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Trust with Every Inquiry</p>
										</div>
										<div class="dropdown-menu">
											<h4>Background Verification</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
										<div class="dropdown-menu">
											<h4>Risk and Fraud</h3>
											<p>Safeguard Against Deception</p>
										</div>
										<div class="dropdown-menu">
											<h4>Video Solutions</h3>
											<p>Seamless Visual Communication Solutions</p>
										</div>
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
										<div class="dropdown-menu">
											<h4>CrimeCheck</h3>
											<p>Your Shield Against Criminal Activity</p>
										</div>
										<div class="dropdown-menu">
											<h4>Privy Suite</h3>
											<p>Elevate Privacy Standards Today</p>
										</div>
									</div>
								</div>
								<div class="dropdown-section-portal">
									<div class="portal-wrapper">
										<h5>SELF SERVE PORTAL</h3>
											<ul>
												<li>API Central</li>
												<li>BGV Self Serve</li>
											</ul>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="dropdown dropdown2">
						<a href="#" class="dropbtn">industries</a>
						<div class="dropdown-content">
							<div class="dropdown-wrapper">
								<div class="dropdown-section-menu2">
									<div class="menu-wrapper">
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="dropdown dropdown3">
						<a href="#" class="dropbtn">usecases</a>
						<div class="dropdown-content">
							<div class="dropdown-wrapper">
								<div class="dropdown-section-menu2">
									<div class="menu-wrapper">
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="dropdown dropdown4">
						<a href="#" class="dropbtn">about us</a>
						<div class="dropdown-content">
							<div class="dropdown-wrapper">
								<div class="dropdown-section-menu2">
									<div class="menu-wrapper">
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="dropdown dropdown5">
						<a href="#" class="dropbtn">resources</a>
						<div class="dropdown-content">
							<div class="dropdown-wrapper">
								<div class="dropdown-section-menu2">
									<div class="menu-wrapper">
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
										<div class="dropdown-menu">
											<h4>KYC API Suite</h3>
											<p>Streamline Identity Verification Effortlessly</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
				<div class="header-elements">
					<div class="search-icon">
						<img src="<?php bloginfo('template_directory'); ?>/images/search-icon.svg" alt="">
					</div>
					<a href="#" class="btn ctaRed">Contact Us</a>
				</div>
			</nav>
		</header>