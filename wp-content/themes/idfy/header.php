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
		<header class="nav-down">
			<nav class="navbar">
				<div class="logo">
					<a href="">
						<img src="<?php bloginfo('template_directory'); ?>/images/header-logo.svg" alt="IDfy Logo" class="desktop-logo">
						<img src="<?php bloginfo('template_directory'); ?>/images/idfy-logo-mobile.png" alt="IDfy Logo" class="mobile-logo">
					</a>
				</div>
				<div class="headerContent">
					<ul class="nav-links">
						<li class="dropdown dropdown1">
							<a href="#!" class="dropbtn">SOLUTIONS</a>
							<div class="dropdown-content">
								<div class="dropdown-wrapper">
									<div class="dropdown-section-idfy">
										<div class="idfy-wrapper">
											<div class="dropdown-image">
												<img src="<?php bloginfo('template_directory'); ?>/images/360-img.svg"
													alt="">
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
											<a href="" class="dropdown-menu">
												<h4>KYC API Suite</h4>
												<p>Trust with Every Inquiry</p>
											</a>
											<a href="" class="dropdown-menu">
												<h4>Background Verification</h4>
												<p>Streamline Identity Verification Effortlessly</p>
											</a>
											<a href="" class="dropdown-menu">
												<h4>Risk and Fraud</h4>
												<p>Safeguard Against Deception</p>
											</a>
											<a href="" class="dropdown-menu">
												<h4>Video Solutions</h4>
												<p>Seamless Visual Communication Solutions</p>
											</a>
											<a href="" class="dropdown-menu">
												<h4>KYC API Suite</h4>
												<p>Streamline Identity Verification Effortlessly</p>
											</a>
											<a href="" class="dropdown-menu">
												<h4>CrimeCheck</h4>
												<p>Your Shield Against Criminal Activity</p>
											</a>
											<a href="" class="dropdown-menu">
												<h4>Privy Suite</h4>
												<p>Elevate Privacy Standards Today</p>
											</a>
										</div>
									</div>
									<div class="dropdown-section-portal">
										<div class="portal-wrapper">
											<h5>SELF SERVE PORTAL</h3>
												<ul>
													<li><a href="">API Central</a></li>
													<li><a href="">BGV Self Serve</a></li>
												</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="dropdown dropdown2">
							<a href="#!" class="dropbtn">industries</a>
							<div class="dropdown-content">
								<div class="dropdown-wrapper">
									<div class="dropdown-section-menu2">
										<div class="menu-wrapper">
											<a href="" class="dropdown-menu">
												<h4>Banking</h4>
												<p>Secure Identity Solutions for Banks</p>
											</a>
											<a href="" class="dropdown-menu">
												<h4>Gig Workers</h4>
												<p>Identity Solutions for Freelancers</p>
											</a>
											<a href="" class="dropdown-menu">
												<h4>eCom & Payments</h4>
												<p>Simplifying Online Transactions</p>
											</a>
											<a href="" class="dropdown-menu">
												<h4>Payment Aggregators and Payment Gateways</h4>
												<p>Reliable Identity Verification for Shipping</p>
											</a>
											<a href="" class="dropdown-menu">
												<h4>KYC API Suite</h4>
												<p>Streamline Identity Verification Effortlessly</p>
											</a>
											<a href="" class="dropdown-menu">
												<h4>Capital Markets & Wealth</h4>
												<p>Identity Solutions for Financial Markets</p>
											</a>
											<a href="" class="dropdown-menu">
												<h4>Digital Natives</h4>
												<p>Identity Solutions for the Digital Generation</p>
											</a>
											<a href="" class="dropdown-menu">
												<h4>Insurance</h4>
												<p>Trustworthy Identity Verification for Insurers</p>
											</a>
											<a href="" class="dropdown-menu">
												<h4>FMCG</h4>
												<p>Identity Solutions for Fast-Moving Consumer Goods</p>
											</a>
											<a href="" class="dropdown-menu">
												<h4>Gaming</h4>
												<p>Identity Solutions for Fast-Moving Consumer Goods</p>
											</a>
											<a href="" class="dropdown-menu">
												<h4>IT</h4>
												<p>Secure Identity Solutions for the Tech Industry</p>
											</a>
											<a href="" class="dropdown-menu">
												<h4>Fintech</h4>
												<p>Your Shield Against Criminal Activity</p>
											</a>
											<a href="" class="dropdown-menu">
												<h4>Logistics</h4>
												<p>Elevate Privacy Standards Today</p>
											</a>
											<a href="" class="dropdown-menu">
												<h4>HR & Recruitment</h4>
												<p>Streamlined Identity Verification for Hiring</p>
											</a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="dropdown dropdown3">
							<a href="#!" class="dropbtn">usecases</a>
							<div class="dropdown-content">
								<div class="dropdown-wrapper">
									<div class="dropdown-section-menu2">
										<div class="menu-wrapper">
											<a href="" class="dropdown-menu">
												<h4>Digital Onboarding</h4>
												<p>Seamlessly Verify New Users</p>
											</a>
											<a href="" href="" class="dropdown-menu">
												<h4>AML</h4>
												<p>Ensure Compliance Effortlessly</p>
											</a>
											<a href="" class="dropdown-menu">
												<h4>ID Verification</h4>
												<p>Verify Identities with Ease</p>
											</a>
											<a href="" class="dropdown-menu">
												<h4>Legal History Checks</h4>
												<p>Trustworthy Legal Background Checks</p>
											</a>
											<a href="" class="dropdown-menu">
												<h4>KYC API Suite</h4>
												<p>Streamline Identity Verification Effortlessly</p>
											</a>
											<a href="" class="dropdown-menu">
												<h4>KYC</h4>
												<p>Simplify Know Your Customer Processes</p>
											</a>
											<a href="" class="dropdown-menu">
												<h4>KYB I Merchant Onboarding</h4>
												<p>Streamlined Merchant Verification</p>
											</a>
											<a href="" class="dropdown-menu">
												<h4>Background Verification</h4>
												<p>Thorough and Reliable Checks</p>
											</a>
											<a href="" class="dropdown-menu">
												<h4>Privacy & Data Protection</h4>
												<p>Safeguarding Data and Privacy</p>
											</a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="dropdown dropdown4">
							<a href="#!" class="dropbtn">about us</a>
							<div class="dropdown-content">
								<div class="dropdown-wrapper">
									<div class="dropdown-section-menu2">
										<div class="menu-wrapper">
											<a href="" class="dropdown-menu">
												<h4>Company</h3>
											</a>
											<a href="" class="dropdown-menu">
												<h4>Life at IDfy</h3>
											</a>
											<a href="" class="dropdown-menu">
												<h4>Clients</h3>
											</a>
											<a href="" class="dropdown-menu">
												<h4>Partners</h3>
											</a>
											<a href="" class="dropdown-menu">
												<h4>Our Team</h3>
											</a>
											<a href="" class="dropdown-menu">
												<h4>IDfy in the News</h3>
											</a>
											<a href="" class="dropdown-menu">
												<h4>Careers</h3>
											</a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="dropdown dropdown5">
							<a href="#!" class="dropbtn">resources</a>
							<div class="dropdown-content">
								<div class="dropdown-wrapper">
									<div class="dropdown-section-menu2">
										<div class="menu-wrapper">
											<a href="" class="dropdown-menu">
												<h4>Blogs</h3>
											</a>
											<a href="" class="dropdown-menu">
												<h4>Testimonials</h3>
											</a>
											<a href="" class="dropdown-menu">
												<h4>Casestudies</h3>
											</a>
											<a href="" class="dropdown-menu">
												<h4>Webinars</h3>
											</a>
											<a href="" class="dropdown-menu">
												<h4>Industry Insights</h3>
											</a>
											<a href="" class="dropdown-menu">
												<h4>BGV Cost Calculator</h3>
											</a>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<div class="header-elements">
						<div class="search-icon" onclick="searchToggle();">
							<img src="<?php bloginfo('template_directory'); ?>/images/search-icon.svg" alt="">
						</div>
						<div class="custom-select">
							<div class="select-selected">IND</div>
							<ul class="select-items">
								<li>IND</li>
								<li>PH</li>
							</ul>
						</div>
						<a href="#" class="btn ctaRed">Contact Us</a>
					</div>
				</div>
				<div class="hamburger-menu">
					<div class="search-icon-mobile" onclick="searchToggleMobile();">
						<img src="<?php bloginfo('template_directory'); ?>/images/search-icon-mobile.svg" alt="">
					</div>
					<div class="button_toggle" id="toggle">
						<span class="top"></span>
						<span class="bottom"></span>
					</div>
					<div class="overlay" id="overlay">
						<div class="overlay-wrapper">
							<div class="scrollDiv">
								<nav class="overlay-menu">
									<ul class="main-menu">
										<li class="main-list">
											<a href="#" class="main-nav">Solutions</a>
											<ul class="sub-menu">
												<a href="" class="idfy360">
													<img src="<?php bloginfo('template_directory'); ?>/images/mobile-360.svg" alt="" class="image360">
													<h4>IDfy</h4>
													<img src="<?php bloginfo('template_directory'); ?>/images/mobile-redirect-arrow.svg" alt="" class="redirectArrow">
												</a>
												<li class="sub-list">
													<a href="" class="sub-nav">KYC API Suite</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">Video Solutions</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">CrimeCheck</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">Risk and Fraud</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">Privy Suite</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">Bank Statement Analysis</a>
												</li>
												<div class="mobilePortal">
													<h5>Self Serve Portal</h5>
													<ul class="portalHeading">
														<li class="portalMenu"><a href="">API Central</a></li>
														<li class="portalMenu"><a href="">BGV Self Serve</a></li>
													</ul>
												</div>
											</ul>
										</li>
										<li class="main-list">
											<a href="#" class="main-nav">Industries</a>
											<ul class="sub-menu">
												<li class="sub-list">
													<a href="" class="sub-nav">Banking</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">eCom & Payments</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">Capital Markets & Wealth</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">Insurance</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">Gaming</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">Fintech</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">HR & Recruitment</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">Payment Aggregators and Payment Gateways</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">Gig Workers</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">Logistics</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">Digital Natives</a>
												</li>
											</ul>
										</li>
										<li class="main-list">
											<a href="#" class="main-nav">Use Cases</a>
											<ul class="sub-menu">
												<li class="sub-list">
													<a href="" class="sub-nav">Digital Onboarding</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">AML</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">ID Verification</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">Legal History Checks</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">KYC</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">KYB I Merchant Onboarding</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">Background Verification</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">Privacy & Data Protection</a>
												</li>
											</ul>
										</li>
										<li class="main-list">
											<a href="#" class="main-nav">About Us</a>
											<ul class="sub-menu">
												<li class="sub-list">
													<a href="" class="sub-nav">Company</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">Life at IDfy</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">Clients</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">Our Team</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">IDfy in the news</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">Careers</a>
												</li>
											</ul>
										</li>
										<li class="main-list">
											<a href="#" class="main-nav">Resources</a>
											<ul class="sub-menu">
												<li class="sub-list">
													<a href="" class="sub-nav">Blogs</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">Testimonials</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">Casestudies</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">Webinars</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">Industry Insights</a>
												</li>
												<li class="sub-list">
													<a href="" class="sub-nav">BGV Cost Calculator</a>
												</li>
											</ul>
										</li>
										<div class="custom-select-mobile">
											<p>Global</p>
											<div class="select-selected-mobile">India</div>
											<ul class="select-items-mobile">
												<li>India</li>
												<li>Philippines</li>
											</ul>
										</div>
									</ul>
								</nav>
							</div>
							<div class="fixCta">
								<a href="" class="ctaRed">Contact Us</a>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</header>

		<div class="search-modal" id="search-modal">
			<div class="modal-container">
				<div class="search-input">
					<div class="search-icon">
						<img src="<?php bloginfo('template_directory'); ?>/images/search-icon-modal.svg" alt="">
					</div>
					<input type="text" placeholder="Solutions, APIs, Industries">
					<div class="closeButton" onclick="closeSearch();">
						<img src="<?php bloginfo('template_directory'); ?>/images/close-logo.svg" alt="">
					</div>
				</div>
				<div class="relatedSearch">
					<h2>Recent Search</h2>
					<ul class="relatedMenu">
						<li class="relatedTab">
							<a href="">
								<img src="<?php bloginfo('template_directory'); ?>/images/clock-svg.svg" alt=""> KYC
							</a>
						</li>
						<li class="relatedTab">
							<a href="">
								<img src="<?php bloginfo('template_directory'); ?>/images/clock-svg.svg" alt=""> Verification
							</a>
						</li>
						<li class="relatedTab">
							<a href="">
								<img src="<?php bloginfo('template_directory'); ?>/images/clock-svg.svg" alt=""> Crime
							</a>
						</li>
						<li class="relatedTab">
							<a href="">
								<img src="<?php bloginfo('template_directory'); ?>/images/clock-svg.svg" alt=""> Onboarding
							</a>
						</li>
						<li class="relatedTab">
							<a href="">
								<img src="<?php bloginfo('template_directory'); ?>/images/clock-svg.svg" alt=""> Risk
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="search-modal-mobile" id="search-modal-mobile">
			<div class="search-container">
				<div class="search-wrapper">
					<div class="logo">
						<a href="">
							<img src="<?php bloginfo('template_directory'); ?>/images/idfy-logo-mobile.png" alt="IDfy Logo">
						</a>
					</div>
					<div class="search-modal-elements">
						<div class="search-icon">
							<img src="<?php bloginfo('template_directory'); ?>/images/search-icon-mobile.svg" alt="">
						</div>
						<div class="search-close-button" onclick="closeSearchMobile();">
							<img src="<?php bloginfo('template_directory'); ?>/images/close-logo.svg" alt="">
						</div>
					</div>
				</div>
				<div class="search-input">
					<input type="text" placeholder="Solutions, APIs, industries" name="" id="">
				</div>
			</div>
		</div>
