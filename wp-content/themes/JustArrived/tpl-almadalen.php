<?php
/*
 Template Name: Almedalen
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>
			


					<div class="almedalen-logo"></div>

					<div class="almedalen-content-container">

						<div class="almedalen-signup equal-height">

							<section class="section--signup-popup">
								<div class="
								module-content
								module-content--centered
								module--black
								">
									<h1 class="bordered bordered--primary module--txt-c">Sign up</h1>
									<p>We are currently testing the platform (May - September) with an exclusive group of companies and new arrivals. If you are interested in utilizing the platform after our official launch on the 1st of September, please fill in the form and we will get back to you!</p>
									<div id="mc_embed_signup">
										<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" class="signup-form">
				
											<input type=hidden name="oid" value="00D58000000cNvl">
											<input type=hidden name="retURL" value="justarrived.se" id="salesforce_retURL">
											<input type=hidden name="lead_source" value="Web">
				
											<script>
												function getCurrentURIForRedirect() {
												    var ele = document.getElementById("salesforce_retURL");
												    console.log('ele');
												    ele.setAttribute("value", window.location.href + "?message=thanks");
												}
				
												getCurrentURIForRedirect();
											</script>	
				
											<!--  ----------------------------------------------------------------------  -->
											<!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
											<!--  these lines if you wish to test in debug mode.                          -->
											<!--  <input type="hidden" name="debug" value=1>                              -->
											<!--  <input type="hidden" name="debugEmail" value="richard.dearn@eins.se">   -->
											<!--  ----------------------------------------------------------------------  -->
				
											<div class="signup-error module--txt-c">
												<label for="mce-EMAIL" class="mailchimp-error">Email Address</label>
											</div>
				
										    <div id="mc_embed_signup_scroll">
												
												<div class="form-col mc-field-group">
													<label>Email Address <span class="asterisk">*</span></label>
													<input type="email" value="" name="email" class="required email" id="mce-EMAIL" required>
												</div>
												<div class="form-col mc-field-group">
													<label for="mce-NAME">Name <span class="asterisk">*</span>
												</label>
													<input type="text" value="" maxlength="80" name="last_name" class="required" id="mce-LASTNAME" required>
												</div>
												<div class="form-col mc-field-group size1of2">
													<label for="mce-PHONE">Phone Number</label>
													<input type="number" maxlength="40" name="phone" class="" value="" id="mce-PHONE">
												</div>
												<div class="form-col mc-field-group">
													<label for="mce-COMPANY">Company</label>
													<input type="text" value="" maxlength="40" name="company" class="" id="mce-COMPANY">
												</div>
												<div class="form-col form-col--full-width mc-field-group">
													<label for="mce-LOCATION">Location</label>
													<input type="text" value="" name="00N580000088gDR" class="" id="mce-LOCATION">
												</div>
												<div class="mc-field-group input-group">
													<div class="input-group-content">
														<p>I'm interested in...</p>
														<ul>
															<li><input type="radio" value="Posting jobs" name="00N580000088fVu" id="mce-MMERGE5-0"><label for="mce-MMERGE5-0">Posting jobs</label></li>
															<li><input type="radio" value="Finding jobs" name="00N580000088fVu" id="mce-MMERGE5-1"><label for="mce-MMERGE5-1">Finding jobs</label></li>
															<li><input type="radio" value="Helping out" name="00N580000088fVu" id="mce-MMERGE5-2"><label for="mce-MMERGE5-2">Helping out</label></li>
															<li><input type="radio" value="Donating" name="00N580000088fVu" id="mce-MMERGE5-3"><label for="mce-MMERGE5-3">Donating</label></li>
															<li><input type="radio" value="Knowing more" name="00N580000088fVu" id="mce-MMERGE5-4"><label for="mce-MMERGE5-4">Knowing more</label></li>
														</ul>
													</div>
												</div>
												<div id="mce-responses" class="clear">
													<div class="response" id="mce-error-response" style="display:none"></div>
													<div class="response" id="mce-success-response" style="display:none"></div>
												</div>
												<!-- prevent bot signups -->
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

						</div> <!-- /almedalen-signup --> 

						<div class="almedalen-copy equal-height">

							<h1 class="bordered bordered--lightblue module--txt-c">Om Just Arrived</h1>
							<p>avgörande skillnad för alla de nyanlända som kommer till Sverige. Just Arrived skulle drivas som ett icke vinstdrivande företag och ligga under en stiftelse. Initiativet skulle dessutom byggas upp pro bono, av människor och företag som frivilligt ger av sin tid, pengar och sitt engagemang. Idag engagerar Just Arrived över 100 personer som representerar 20 olika företag och myndigheter i Sverige.</p>
							<p>Tillsammans har vi lagt tusentals timmar på att ta fram den webb-applikation som matchar nyanlända med jobbmöjligheter. Vi tar fullt arbetsgivaransvar genom att betala skatter, sociala avgifter och försäkringar för de nyanlända. Detta innebär minimal administration för de företag som lägger upp uppdrag på vår sida. Framför allt för Just Arrived ihop två grupper i samhället som letar efter varandra; företag som vill hjälpa nyanlända samt nyanlända som letar efter jobb.</p>
							<ul class="social-list">
								<li class="social-list__link">
									<a class="facebook-link" href="#" title="Facebook" target=""><i class="fa fa-facebook-official" aria-hidden="true"></a></i>
								</li>
								<li class="social-list__link">
									<a class="twitter-link" href="#" title="Twitter" target=""><i class="fa fa-twitter" aria-hidden="true"></a></i>
								</li>
								<li class="social-list__link">
									<a class="instagram-link" href="#" title="Instagram" target=""><i class="fa fa-instagram" aria-hidden="true"></a></i>
								</li>
								<li class="social-list__link social-list__text-link">
									<a class="justarrived-link" href="http://justarrived.se" title="JustArrived.se">Visit <strong>JustArrived.se</strong></a>
								</li>
							</ul>
						</div> <!-- /almedalen-copy -->

						<div class="almedalen-wrapper">
							<div class="almedalen-sponsors">

								<h2 class="bordered bordered--primary module--txt-c">Our Almedalen Sponsors</h2>
								<ul class="almedalen-sponsors__logos">
									<li class="almedalen-sponsors__logo">
										<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/welcome-al.png">
									</li>
									<li class="almedalen-sponsors__logo">
										<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/refugee-tech-al.png">
									</li>
									<li class="almedalen-sponsors__logo --eins">
										<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/eins-al.png">
									</li>
									<li class="almedalen-sponsors__logo">
										<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/hallvarsson-al.png">
									</li>
									<li class="almedalen-sponsors__logo --ryska">
										<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/ryska-al.png">
									</li>
								</ul>

							</div>

							<div class="almedalen-profiles">
								<h2 class="bordered bordered--secondary module--txt-c">Together we're building JustArrived</h2>
								<ul class="almedalen-profiles__profiles">
									<li class="almedalen-profiles__profile">
										<img src="<?php echo get_template_directory_uri(); ?>/library/images/profile-pictures/almedalen/andreas-al.png">
										<h4>Andreas</h4>
									</li>
									<li class="almedalen-profiles__profile">
										<img src="<?php echo get_template_directory_uri(); ?>/library/images/profile-pictures/almedalen/fredric-al.png">
										<h4>Fredric</h4>
									</li>
									<li class="almedalen-profiles__profile">
										<img src="<?php echo get_template_directory_uri(); ?>/library/images/profile-pictures/almedalen/jacob-al.png">
										<h4>Jacob</h4>
									</li>
									<li class="almedalen-profiles__profile">
										<img src="<?php echo get_template_directory_uri(); ?>/library/images/profile-pictures/almedalen/anna-al.png">
										<h4>Anna</h4>
									</li>
									<li class="almedalen-profiles__profile">
										<img src="<?php echo get_template_directory_uri(); ?>/library/images/profile-pictures/almedalen/per-al.png">
										<h4>Per</h4>
									</li>
									<li class="almedalen-profiles__profile">
										<img src="<?php echo get_template_directory_uri(); ?>/library/images/profile-pictures/almedalen/yuliya-al.png">
										<h4>Yuliya</h4>
									</li>
									<li class="almedalen-profiles__profile">
										<img src="<?php echo get_template_directory_uri(); ?>/library/images/profile-pictures/almedalen/carolin-al.png">
										<h4>Carolin</h4>
									</li>
									<li class="almedalen-profiles__profile">
										<img src="<?php echo get_template_directory_uri(); ?>/library/images/profile-pictures/almedalen/olof-al.png">
										<h4>Olof</h4>
									</li>
								</ul>
							</div>
						</div>

					</div>
				

				



<?php get_footer(); ?>
