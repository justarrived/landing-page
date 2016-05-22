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
					module--black
					">
						<h2 class="bordered bordered--primary module--txt-c">Sign up</h2>
						<!-- <form class="signup-form">
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
						</form> -->

						<div id="mc_embed_signup">
							<form action="//justarrived.us13.list-manage.com/subscribe/post?u=ac005505ee4f55f35fc7bdc5d&amp;id=4cc4f7c8c5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate signup-form" target="_blank" novalidate>

							<div class="signup-error module--txt-c">
								<label for="mce-EMAIL" class="mailchimp-error">Email Address</label>
							</div>

							    <div id="mc_embed_signup_scroll">
									
									<div class="form-col mc-field-group">
										<label>Email Address <span class="asterisk">*</span></label>
										<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
									</div>
									<div class="form-col mc-field-group">
										<label for="mce-NAME">Name <span class="asterisk">*</span>
									</label>
										<input type="text" value="" name="NAME" class="required" id="mce-NAME">
									</div>
									<div class="form-col mc-field-group size1of2">
										<label for="mce-PHONE">Phone Number</label>
										<input type="number" name="PHONE" class="" value="" id="mce-PHONE">
									</div>
									<div class="form-col mc-field-group">
										<label for="mce-COMPANY">Company</label>
										<input type="text" value="" name="COMPANY" class="" id="mce-COMPANY">
									</div>
									<div class="mc-field-group input-group">
									    <div class="input-group-content">
										    <p>I'm interested in...</p>
										    <ul>
										    	<li><input type="checkbox" value="1" name="group[3729][1]" id="mce-group[3729]-3729-0"><label for="mce-group[3729]-3729-0">Posting jobs</label></li>
												<li><input type="checkbox" value="2" name="group[3729][2]" id="mce-group[3729]-3729-1"><label for="mce-group[3729]-3729-1">Donating</label></li>
												<li><input type="checkbox" value="4" name="group[3729][4]" id="mce-group[3729]-3729-2"><label for="mce-group[3729]-3729-2">Helping out</label></li>
												<li><input type="checkbox" value="8" name="group[3729][8]" id="mce-group[3729]-3729-3"><label for="mce-group[3729]-3729-3">Knowing more</label></li>
											</ul>
										</div>
									</div>
									<div id="mce-responses" class="clear">
										<div class="response" id="mce-error-response" style="display:none"></div>
										<div class="response" id="mce-success-response" style="display:none"></div>
									</div>
									<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								    <div style="position: absolute; left: -5000px;" aria-hidden="true">
								    	<input type="text" name="b_ac005505ee4f55f35fc7bdc5d_4cc4f7c8c5" tabindex="-1" value="">
								    </div>
							    	<div class="clear">
							    		<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button border-btn btn-large border-btn--pink">
							    	</div>
							    </div>
							</form>
						</div>
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
						<form class="promo-form" onsubmit="return submitPromoCode()">
							<div class="form-col form-col--full-width">
								<input type="password" placeholder="Promo code" id="promo-code-input" value="" />
							</div>
							<div class="form-response" id="promo-error"></div>
							<div class="form-response" id="promo-success"></div>
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
