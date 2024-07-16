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
					<a href="#">
						<img src="<?php bloginfo('template_directory'); ?>/images/footer-logo.svg" alt="">
					</a>
				</div>
				<div class="socialmediaIcons">
					<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/linkdin-footer-icon.svg" alt=""></a>
					<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/youtube-footer-icon.svg" alt=""></a>
					<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/insta-footer-icon.svg" alt=""></a>
				</div>
			</div>
			<div class="footerLinks">
				<div class="innerLinks">
					<h3>Corporate</h3>
					<ul>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms and Conditions</a></li>
						<li><a href="#">SSS Agreement</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
				<div class="innerLinks">
					<h3>Quick links</h3>
					<ul>
						<li><a href="#">Company</a></li>
						<li><a href="#">Life at IDfy</a></li>
						<li><a href="#">Clients</a></li>
						<li><a href="#">Partners</a></li>
						<li><a href="#">Our team</a></li>
						<li><a href="#">IDfy in the news</a></li>
						<li><a href="#">Careers</a></li>
					</ul>
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
					<h3>Solutions</h3>
					<ul>
						<li><a href="#">KYC API Suite</a></li>
						<li><a href="#">Video Solutions</a></li>
						<li><a href="#">Background Verification</a></li>
						<li><a href="#">IDfy360</a></li>
						<li><a href="#">Privy</a></li>
						<li><a href="#">Bank Statement Analysis</a></li>
						<li><a href="#">CrimeCheck</a></li>
						<li><a href="#">Risk and Fraud</a></li>
					</ul>
				</div>
				<div class="innerLinks">
					<h3>Industries</h3>
					<ul>
						<li><a href="#">Banking</a></li>
						<li><a href="#">eCom & Payments</a></li>
						<li><a href="#">Capital Markets & Wealth</a></li>
						<li><a href="#">Insurance</a></li>
						<li><a href="#">Gaming</a></li>
						<li><a href="#">Fintech</a></li>
						<li><a href="#">HR & Recruitment</a></li>
						<li><a href="#">Payment Aggregators and Payment Gateways</a></li>
						<li><a href="#">Gig Workers</a></li>
						<li><a href="#">Logistics</a></li>
						<li><a href="#">Digital Natives</a></li>
						<li><a href="#">FMCG</a></li>
						<li><a href="#">IT</a></li>
					</ul>
				</div>
				<div class="innerLinks">
					<h3>Use Cases</h3>
					<ul>
						<li><a href="#">Digital Onboarding</a></li>
						<li><a href="#">AML</a></li>
						<li><a href="#">ID Verification</a></li>
						<li><a href="#">Legal History Checks</a></li>
						<li><a href="#">KYC</a></li>
						<li><a href="#">KYB I Merchant Onboarding</a></li>
						<li><a href="#">Background Verification</a></li>
						<li><a href="#">Privacy & Data Protection</a></li>
					</ul>
				</div>
				<div class="innerLinks">
					<h3>Resources</h3>
					<ul>
						<li><a href="#">Blogs</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Casestudies</a></li>
						<li><a href="#">Webinars</a></li>
						<li><a href="#">Industry Insights</a></li>
						<li><a href="#">BGV Cost Calculator</a></li>
					</ul>
				</div>
			</div>

		</div>
		<div class="copyright">
			<h3>Baldor Technologies Pvt Ltd, CIN: U74900MH2011PTC291275</h3>
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