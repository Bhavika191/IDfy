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
						<a href="<?php echo get_site_url(); ?>">
							<?php echo get_field('header_logo','option'); ?>
						</a>
					</div>
					<div class="headerContent">
						<div class="nav-menu">
							<div class="scroll-nav">
								<div class="nav-wrapper">
									<ul class="nav-links">
										<li class="dropdown dropdown1">
											<?php if( have_rows('header_solution_menu','option') ): ?>
												<?php while( have_rows('header_solution_menu','option') ): the_row(); ?>
													<a href="#!" class="dropbtn"><?php echo get_sub_field('header_menu_name'); ?></a>
														<div class="dropdown-content">
															<div class="dropdown-wrapper">
																<div class="dropdown-section-idfy">
																	<div class="idfy-wrapper">
																		<?php if( have_rows('idfy360_card') ): ?>
																			<?php while( have_rows('idfy360_card') ): the_row(); ?>
																				<div class="dropdown-image">
																					<?php $idfy360image = get_sub_field('card_image'); if( !empty( $idfy360image ) ): ?>
																						<img src="<?php echo esc_url($idfy360image['url']); ?>" loading="lazy" alt="<?php echo esc_attr($idfy360image['alt']); ?>" />
																					<?php endif; ?>
																				</div>
																				<h3><?php echo get_sub_field('card_heading'); ?></h3>
																				<p><?php echo get_sub_field('card_description'); ?></p>
																				<ul>
																					<?php if( have_rows('card_pointers') ): ?>
																						<?php while( have_rows('card_pointers') ): the_row(); ?>
																							<li><img src="<?php bloginfo('template_directory'); ?>/images/360-card-rightimg.svg" alt=""><?php echo get_sub_field('pointers_text'); ?></li>
																						<?php endwhile; ?>
																					<?php endif; ?>
																				</ul>
																			<?php endwhile; ?>
																		<?php endif; ?>
																	</div>
																</div>
																<a href="" class="idfy360">
																	<img src="<?php bloginfo('template_directory'); ?>/images/mobile-360.svg" alt="" class="image360">
																	<h4>IDfy</h4>
																	<img src="<?php bloginfo('template_directory'); ?>/images/mobile-redirect-arrow.svg" alt="" class="redirectArrow">
																</a>
																<div class="dropdown-section-menu">
																	<div class="menu-wrapper">
																		<?php if( have_rows('menu_sub_items') ): ?>
																			<?php while( have_rows('menu_sub_items') ): the_row(); ?>
																				<a href="<?php echo get_sub_field('sub_items_heading'); ?>sub_items_link" class="dropdown-menu" target="_blank">
																					<h4><?php echo get_sub_field('sub_items_heading'); ?></h4>
																					<?php $value = get_sub_field( "sub_items_description" ); if ( $value ) {?>
																						<p><?php echo get_sub_field('sub_items_description'); ?></p>
																					<?php } ?>
																				</a>
																			<?php endwhile; ?>
																		<?php endif; ?>
																	</div>
																</div>
																<div class="dropdown-section-portal">
																	<div class="portal-wrapper">
																		<?php if( have_rows('secondary_menu') ): ?>
																			<?php while( have_rows('secondary_menu') ): the_row(); ?>
																				<h5><?php echo get_sub_field('menu_heading'); ?></h3>
																				<ul>
																					<?php if( have_rows('secondary_menu_items') ): ?>
																						<?php while( have_rows('secondary_menu_items') ): the_row(); ?>
																							<li><a href="<?php echo get_sub_field('menu_link'); ?>" target="_blank"><?php echo get_sub_field('menu_name'); ?></a></li>
																						<?php endwhile; ?>
																					<?php endif; ?>
																				</ul>
																			<?php endwhile; ?>
																		<?php endif; ?>
																	</div>
																</div>
															</div>
														</div>
												<?php endwhile; ?>
											<?php endif; ?>
										</li>
										<?php if( have_rows('header_menu','option') ): ?>
											<?php $counter=2; while( have_rows('header_menu','option') ): the_row(); ?>
												<li class="dropdown dropdown<?php echo $counter; ?>">
													<a href="#!" class="dropbtn"><?php echo get_sub_field('header_menu_name'); ?></a>
													<div class="dropdown-content">
														<div class="dropdown-wrapper">
															<div class="dropdown-section-menu2">
																<div class="menu-wrapper">
																	<?php if( have_rows('menu_sub_items') ): ?>
																		<?php while( have_rows('menu_sub_items') ): the_row(); ?>
																			<a href="<?php echo get_sub_field('sub_items_link'); ?>" class="dropdown-menu" target="_blank">
																				<h4><?php echo get_sub_field('sub_items_heading'); ?></h4>
																				<?php $value = get_sub_field( "sub_items_description" ); if ( $value ) {?>
																					<p><?php echo get_sub_field('sub_items_description'); ?></p>
																				<?php } ?>
																			</a>
																		<?php endwhile; ?>
																	<?php endif; ?>
																</div>
															</div>
														</div>
													</div>
												</li>
											<?php $counter=$counter+1; endwhile; ?>
										<?php endif; ?>
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
								</div>
								<div class="fixCta">
									<?php $value = get_field("header_fix_cta_link",'option'); if ( $value ) {?>
										<a href="<?php echo get_field('header_fix_cta_link','option'); ?>" class="ctaRed" target="_blank"><?php echo get_field('header_fix_cta_text','option'); ?></a>
									<?php } ?>
								</div>
							</div>
						</div>
						<div class="header-elements">
							<div class="search-icon" onclick="searchToggle();">
								<svg width="30" height="30" viewBox="0 0 30 30" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<circle cx="12" cy="12.5" r="11.25" stroke-width="1.5" class="searchWhite" />
									<line x1="20.5303" y1="20.9697" x2="28.5303" y2="28.9697" stroke-width="1.5"
										class="searchWhite" />
								</svg>

							</div>
							<div class="custom-select">
								<div class="select-selected"><img
										src="<?php bloginfo('template_directory'); ?>/images/india-flag.svg" alt=""> IND
								</div>
								<ul class="select-items">
									<li><img src="<?php bloginfo('template_directory'); ?>/images/india-flag.svg"
											alt=""> IND</li>
									<li><img src="<?php bloginfo('template_directory'); ?>/images/indonesia-flag.svg"
											alt=""> ID</li>
									<li><img src="<?php bloginfo('template_directory'); ?>/images/philippines-flag.svg"
											alt=""> PH</li>
								</ul>
							</div>
							<?php $value = get_field("header_fix_cta_link",'option'); if ( $value ) {?>
								<a href="<?php echo get_field('header_fix_cta_link','option'); ?>" class="ctaRed" target="_blank"><?php echo get_field('header_fix_cta_text','option'); ?></a>
							<?php } ?>
						</div>
						<div class="hamburger-menu">
							<div class="search-icon-mobile" onclick="searchToggleMobile();">
								<img src="<?php bloginfo('template_directory'); ?>/images/search-icon-mobile.svg"
									alt="">
							</div>
							<div class="button_toggle" id="toggle">
								<span class="top"></span>
								<span class="bottom"></span>
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
									<img src="<?php bloginfo('template_directory'); ?>/images/clock-svg.svg" alt="">
									Verification
								</a>
							</li>
							<li class="relatedTab">
								<a href="">
									<img src="<?php bloginfo('template_directory'); ?>/images/clock-svg.svg" alt="">
									Crime
								</a>
							</li>
							<li class="relatedTab">
								<a href="">
									<img src="<?php bloginfo('template_directory'); ?>/images/clock-svg.svg" alt="">
									Onboarding
								</a>
							</li>
							<li class="relatedTab">
								<a href="">
									<img src="<?php bloginfo('template_directory'); ?>/images/clock-svg.svg" alt="">
									Risk
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
								<img src="<?php bloginfo('template_directory'); ?>/images/idfy-logo-mobile.png"
									alt="IDfy Logo">
							</a>
						</div>
						<div class="search-modal-elements">
							<div class="search-icon">
								<img src="<?php bloginfo('template_directory'); ?>/images/search-icon-mobile.svg"
									alt="">
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