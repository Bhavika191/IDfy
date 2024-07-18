<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IDfy
 */

?>

<footer>
	<div class="footerWrapper">
		<div class="topFooter">
			<div class="footerlogo">
				<div class="logoDiv">
					<?php the_custom_logo();?>
				</div>
				<div class="socialmediaIcons">
					<?php if( have_rows('social_links','option') ): ?>
						<?php while( have_rows('social_links','option') ): the_row(); ?>
							<a href="<?php echo get_sub_field('social_site_link'); ?>" target="_blank">
								<?php $socialimg = get_sub_field('social_site_image'); if( !empty( $socialimg ) ): ?>
									<img src="<?php echo esc_url($socialimg['url']); ?>" loading="lazy" alt="<?php echo esc_attr($socialimg['alt']); ?>" />
								<?php endif; ?>
							</a>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="footerLinks">
				<div class="innerLinks">
					<h3><?php echo get_field('top_first_menu_heading','option'); ?></h3>
					<?php wp_nav_menu([
						'menu'            => 'corporate-menu',
						'theme_location'  => 'corporate-menu',
						'menu_class'      => '',
					]); ?>
				</div>
				<div class="innerLinks">
					<h3><?php echo get_field('top_second_menu_heading','option'); ?></h3>
					<?php wp_nav_menu([
						'menu'            => 'quicklinks-menu',
						'theme_location'  => 'quicklinks-menu',
						'menu_class'      => '',
					]); ?>
				</div>
			</div>
			<div class="footerForm">
				<h3>Signup for our newsletter</h3>
				<div class="checkboxForm">
					<form>
						<div class="form-group">
							<input type="checkbox" id="bgv">
							<label for="bgv">Background verification (BGV)</label>
						</div>
						<div class="form-group">
							<input type="checkbox" id="fs">
							<label for="fs">Financial services (FS)</label>
						</div>
						<div class="emailDiv">
							<label for="email">Email address</label>
							<input type="email" id="email" placeholder="john.doe@email.com" />
						</div>
						<input type="submit" value="Sign Up" class="ctaRed">
					</form>
				</div>
			</div>
		</div>
		<div class="showmore-lessdiv">
			<button id="trigger" class="showDiv">Show More</button>
		</div>
		<div class="view-more-content footerBottom" id="more-content">
			<div class="footerLinks">
				<div class="innerLinks">
					<h3><?php echo get_field('bottom_first_menu_heading','option'); ?></h3>
					<?php wp_nav_menu([
						'menu'            => 'solutions-menu',
						'theme_location'  => 'solutions-menu',
						'menu_class'      => '',
					]); ?>
				</div>
				<div class="innerLinks">
					<h3><?php echo get_field('bottom_second_menu_heading','option'); ?></h3>
					<?php wp_nav_menu([
						'menu'            => 'industries-menu',
						'theme_location'  => 'industries-menu',
						'menu_class'      => '',
					]); ?>
				</div>
				<div class="innerLinks">
					<h3><?php echo get_field('bottom_third_menu_heading','option'); ?></h3>
					<?php wp_nav_menu([
						'menu'            => 'usecases-menu',
						'theme_location'  => 'usecases-menu',
						'menu_class'      => '',
					]); ?>
				</div>
				<div class="innerLinks">
					<h3><?php echo get_field('bottom_fourth_menu_heading','option'); ?></h3>
					<?php wp_nav_menu([
						'menu'            => 'resources-menu',
						'theme_location'  => 'resources-menu',
						'menu_class'      => '',
					]); ?>
				</div>
			</div>
		</div>
		<div class="copyright">
			<h3><?php echo get_field('company_registration_text','option'); ?></h3>
		</div>
	</div>
</footer>


</div><!-- #page -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>

<?php wp_footer(); ?>

</body>

</html>