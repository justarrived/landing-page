			<footer class="footer module-padding" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
					<div id="inner-footer" class="">

						<nav role="navigation">
							<?php wp_nav_menu(array(
	    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
	    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
	    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
	    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
	    					'theme_location' => 'footer-links',             // where it's located in the theme
	    					'before' => '',                                 // before the menu
	    					'after' => '',                                  // after the menu
	    					'link_before' => '',                            // before each link
	    					'link_after' => '',                             // after each link
	    					'depth' => 0,                                   // limit the depth of the nav
	    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
							)); ?>
						</nav>

						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

					</div>
			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

		<div class="cd-popup cd-popup-signin">
			<div class="cd-popup-container">
				<section class="section--signup-popup">
					<div class="
					module-content
					module-content--centered
					module--txt-c
					module--black
					">
						<h2 class="bordered bordered--primary">Sign up to post a job</h2>
						<form class="signup-form">
							<div class="form-col">
								<input type="text" placeholder="Name" />
							</div>
							<div class="form-col">
								<input type="email" placeholder="Email" />
							</div>
							<div class="form-col">
								<input type="number" placeholder="Phone" />
							</div>
							<div class="form-col">
								<input type="text" placeholder="Company" />
							</div>
							<div class="form-col form-col--submit-btn">
								<input type="submit" value="Sign up" class="border-btn btn-large border-btn--pink">
							</div>
						</form>
					</div>
					<a href="#0" class="cd-popup-close img-replace"></a>
				</section>
			</div> <!-- cd-popup-container -->
		</div> <!-- cd-popup -->

		<div class="cd-popup cd-popup-promo">
			<div class="cd-popup-container">
				<section class="section--signup-popup">
					<div class="
					module-content
					module-content--centered
					module--txt-c
					module--black
					">
						<h2 class="bordered bordered--secondary">Enter your promo code</h2>
						<form class="promo-form">
							<div class="form-col form-col--full-width">
								<input type="text" placeholder="Promo code" id="promo-code-input" />
							</div>
							<div class="form-col form-col--submit-btn">
								<input type="submit" value="Take me to the app" class="border-btn btn-large border-btn--blue">
							</div>
						</form>
					</div>
					<a href="#0" class="cd-popup-close img-replace"></a>
				</section>
			</div> <!-- cd-popup-container -->
		</div> <!-- cd-popup -->

	</body>

</html> <!-- end of site. what a ride! -->
