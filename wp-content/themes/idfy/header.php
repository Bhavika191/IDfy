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
		<?php if (is_page('homepage')) { ?>
			<header class="nav-down" id="main-header">
			<?php } else { ?>
				<header class="nav-down navColor">
				<?php } ?>
				<nav class="navbar">
					<div class="logo">
						<a href="">
							<svg viewBox="0 0 110 72" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_1_1164)">
									<path class="logoColor" d="M99.097 66.469C99.3667 66.455 99.7744 66.3759 100.04 66.3262C100.433 66.2522 100.816 66.1298 101.181 65.9627C102.168 65.5163 103.383 64.4374 103.852 62.9528C104.004 62.4733 104.087 61.9733 104.097 61.4683C104.099 61.3612 104.097 61.2515 104.097 61.1443V55.4243C104.097 55.3057 104.1 55.0825 104.097 54.9626C104.097 54.9626 104.04 54.9983 104.004 55.02C103.935 55.0659 103.861 55.1054 103.788 55.1437C103.16 55.4689 102.5 55.7278 101.819 55.9153C101.208 56.0875 100.582 56.201 99.9491 56.252C99.5743 56.2852 99.1983 56.2979 98.8223 56.289C97.2005 56.2444 95.6597 55.8758 94.2253 55.0812C92.4832 54.1132 90.6867 52.3213 89.7675 50.1404C89.432 49.3471 89.2003 48.5118 89.0775 47.6573C88.9927 47.0527 88.9509 46.4406 88.9547 45.8296L88.8876 38.6149L78.9073 38.7041V56.2813H73.795V24.7298C73.7925 24.2388 73.8178 23.7465 73.8723 23.2581C74.0799 21.4164 74.7243 19.7533 75.846 18.2905C76.5031 17.4283 77.2868 16.672 78.168 16.0484C79.2834 15.2615 80.5507 14.7271 81.8851 14.4822C82.4181 14.3815 82.9562 14.3368 83.4955 14.3024C83.5778 14.2973 83.8779 14.2973 83.9589 14.2986L83.9804 19.4766C83.8095 19.4842 83.5335 19.5085 83.3664 19.5212C83.2271 19.5391 83.0866 19.5557 82.9486 19.5812C82.1345 19.7304 81.3736 20.0977 80.7456 20.6461C80.143 21.1614 79.6581 21.771 79.334 22.5069C79.101 23.0323 78.963 23.5973 78.9301 24.1725C78.9187 24.3766 78.9162 24.5806 78.9162 24.7834L78.9466 34.1765L94.0772 34.1791L94.0847 46.2148C94.1189 47.3461 94.4924 48.346 95.2014 49.2145C95.7775 49.9172 96.4713 50.4554 97.322 50.7717C97.774 50.9439 98.2488 51.0421 98.7324 51.0625C99.1553 51.0778 99.5769 51.0702 99.9972 50.9975C100.8 50.8585 101.554 50.509 102.187 49.9848C102.565 49.6775 102.9 49.3204 103.185 48.9237C103.781 48.0947 104.074 47.1611 104.107 46.1396C104.113 45.9597 104.109 45.7799 104.109 45.6001V34.2301L109.118 34.2072V60.0909C109.11 60.4875 109.113 63.278 108.919 64.2754C108.591 65.5444 107.985 66.5711 107.196 67.6067C106.568 68.4318 105.826 69.1601 104.993 69.7672C103.705 70.7046 102.276 71.2721 100.711 71.4978C100.339 71.5514 99.963 71.5731 99.5895 71.605C99.4617 71.6165 99.2401 71.605 99.1122 71.605L99.1021 66.4665L99.097 66.469Z" fill="white" />
									<path class="logowordInner" d="M53.8013 35.4342C53.7987 35.7211 53.781 36.0119 53.7582 36.2951C53.6785 37.374 53.4253 38.43 53.0151 39.4274C52.0908 41.6644 50.5893 43.3963 48.5649 44.6602C47.2431 45.4841 45.81 45.9879 44.278 46.2073C43.8602 46.2723 43.4412 46.3067 43.0171 46.3093H38.4238V24.5654H42.836C44.2628 24.5654 45.634 24.8524 46.9583 25.3919C48.1724 25.8829 49.2903 26.5984 50.2576 27.4924C51.8845 28.9986 52.9859 30.8326 53.5139 33.0148C53.6569 33.5951 53.7443 34.1894 53.7709 34.7876C53.7785 35.0018 53.8038 35.2174 53.8013 35.4316V35.4342Z" fill="white" />
									<path class="logoBG" d="M35.2595 0C15.7876 0 0 16.1182 0 36C0 55.8818 15.7876 72 35.2608 72C54.7339 72 70.5202 55.8831 70.5202 36C70.5202 16.1169 54.7339 0 35.2595 0ZM22.2318 56.3269H12.2617V24.0459C12.2617 18.8169 16.4118 14.5814 21.5342 14.5814H22.2318V56.3282V56.3269ZM63.5899 37.4654C63.5202 38.1554 63.4202 38.8454 63.2873 39.5277C63.0695 40.6169 62.7669 41.6894 62.377 42.7314C61.5933 44.832 60.483 46.7858 59.0815 48.5216C56.2291 52.0557 52.3436 54.5707 47.9909 55.6918C47.33 55.8652 46.6641 56.0017 45.9893 56.105C45.5816 56.1624 45.1752 56.2147 44.765 56.2555C44.4042 56.2925 44.0408 56.3001 43.6774 56.3269C43.0064 56.3818 42.3405 56.3677 41.6695 56.3677H28.5368L28.5798 23.1302C28.6532 22.2566 28.8533 21.3982 29.1673 20.5858C29.6749 19.2582 30.4713 18.0619 31.4917 17.0887C32.5122 16.1156 33.7364 15.3887 35.0708 14.964C35.6748 14.7701 36.2976 14.6439 36.9319 14.5775C37.2598 14.5469 37.589 14.5303 37.9157 14.5303C39.5033 14.5227 41.0871 14.5227 42.676 14.5303C43.3331 14.5329 43.9902 14.5648 44.6434 14.6222C49.1164 15.0188 53.3463 16.8592 56.7178 19.8793C58.4447 21.4225 59.9095 23.2501 61.0477 25.2856C62.0516 27.0788 62.7821 29.0161 63.2202 31.0311C63.4076 31.8984 63.5405 32.7759 63.6139 33.661C63.6709 34.3777 63.7215 35.0958 63.6912 35.8163C63.6671 36.3648 63.6431 36.9144 63.5899 37.4654Z" fill="white" />
									<path class="logoWord" d="M63.6114 33.6588C63.5379 32.775 63.4037 31.8963 63.2176 31.029C62.7808 29.0139 62.0503 27.0779 61.0451 25.2834C59.9082 23.2479 58.4433 21.4203 56.7152 19.8771C53.3437 16.857 49.1138 15.0167 44.6409 14.62C43.9876 14.5626 43.3292 14.5308 42.6734 14.5282C41.0858 14.5205 39.502 14.5205 37.9131 14.5282C37.5852 14.5282 37.256 14.5461 36.9294 14.5754C36.2963 14.6404 35.6722 14.7667 35.0683 14.9618C33.7338 15.3853 32.5096 16.1135 31.4891 17.0866C30.4687 18.0597 29.6711 19.256 29.1647 20.5837C28.852 21.3974 28.6519 22.2544 28.5772 23.1281L28.5342 56.3656H41.6669C42.3379 56.3656 43.0039 56.3796 43.6749 56.3248C44.0382 56.298 44.4016 56.2903 44.7624 56.2534C45.1726 56.2125 45.5803 56.1615 45.9867 56.1029C46.6602 56.0008 47.3274 55.8644 47.9883 55.6896C52.341 54.5699 56.2277 52.0561 59.0789 48.5195C60.4804 46.785 61.5907 44.8311 62.3744 42.7293C62.7644 41.6873 63.0682 40.6147 63.2847 39.5255C63.4176 38.8432 63.5177 38.1532 63.5873 37.4633C63.6405 36.9136 63.6645 36.3639 63.6873 35.8129C63.7177 35.0923 63.6683 34.3756 63.6114 33.6588ZM53.759 36.3001C53.6792 37.3791 53.426 38.4351 53.0158 39.4324C52.0916 41.6695 50.59 43.4014 48.5656 44.6653C47.2439 45.4892 45.8107 45.993 44.2788 46.2123C43.861 46.2774 43.4419 46.3118 43.0178 46.3144H38.4246V24.5705H42.8367C44.2636 24.5705 45.6347 24.8575 46.959 25.3969C48.1731 25.888 49.2911 26.6034 50.2583 27.4975C51.8852 29.0037 52.9867 30.8377 53.5146 33.0199C53.6577 33.6002 53.745 34.1945 53.7716 34.7926C53.7792 35.0082 53.8045 35.2224 53.802 35.438C53.7982 35.7237 53.7817 36.0144 53.759 36.2976V36.3001Z" fill="#CE1010" />
									<path class="logoWord" d="M22.2327 14.584V56.3295H12.2625V24.0485C12.2625 18.8195 16.4126 14.584 21.5351 14.584H22.2327Z" fill="#CE1010" />
								</g>
								<defs>
									<clipPath id="clip0_1_1164">
										<rect width="109.113" height="72" fill="white" />
									</clipPath>
								</defs>
							</svg>
						</a>
					</div>
					<div class="headerContent">
						<ul class="nav-links">
							<li class="dropdown dropdown1">
								<a href="#!" class="dropbtn">Solutions</a>
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
													<li><img src="<?php bloginfo('template_directory'); ?>/images/360-card-rightimg.svg" alt="">No-code Onboarding</li>
													<li><img src="<?php bloginfo('template_directory'); ?>/images/360-card-rightimg.svg" alt="">Fast, secure onboarding for customers</li>
													<li><img src="<?php bloginfo('template_directory'); ?>/images/360-card-rightimg.svg" alt="">Tailored solutions delivered to industries</li>
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
												<a href="" class="dropdown-menu">
													<h4>IDfy360</h4>
													<p>Comprehensive Identity Verification Solution</p>
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
								<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="12" cy="12.5" r="11.25" stroke-width="1.5" class="searchWhite" />
									<line x1="20.5303" y1="20.9697" x2="28.5303" y2="28.9697" stroke-width="1.5" class="searchWhite" />
								</svg>

							</div>
							<div class="custom-select">
								<div class="select-selected"><img src="<?php bloginfo('template_directory'); ?>/images/india-flag.svg" alt=""> IND</div>
								<ul class="select-items">
									<li><img src="<?php bloginfo('template_directory'); ?>/images/india-flag.svg" alt=""> IND</li>
									<li><img src="<?php bloginfo('template_directory'); ?>/images/indonesia-flag.svg" alt=""> ID</li>
									<li><img src="<?php bloginfo('template_directory'); ?>/images/philippines-flag.svg" alt=""> PH</li>
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
													<li class="sub-list">
														<a href="" class="sub-nav">IDfy 360</a>
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
												<div class="select-selected-mobile"><img src="<?php bloginfo('template_directory'); ?>/images/india-flag.svg" alt=""> IND</div>
												<ul class="select-items-mobile">
													<li><img src="<?php bloginfo('template_directory'); ?>/images/india-flag.svg" alt=""> IND</li>
													<li><img src="<?php bloginfo('template_directory'); ?>/images/indonesia-flag.svg" alt=""> ID</li>
													<li><img src="<?php bloginfo('template_directory'); ?>/images/philippines-flag.svg" alt=""> PH</li>
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

				<div class="Stickybtn">
					<a href="#">
						<img src="<?php bloginfo('template_directory'); ?>/images/sticky-mailbtn.svg" alt="">
					</a>
				</div>
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