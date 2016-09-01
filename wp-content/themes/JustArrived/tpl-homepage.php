<?php
/*
 Template Name: Homepage
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
		

			<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="wrap cf">


					<a href="<?php echo home_url(); ?>" rel="nofollow">
						<div class="header__logo">Just Arrived</div>
					</a>

					<div class="header__btns">
						<div class="lang-options">
							<a href="<?php echo home_url(); ?>"><span class="lang-en">English</span></a>
							<a href="<?php echo home_url(); ?>/ar"><span class="lang-ar">Arabic</span></a>
						</div>

						<a href="#" class="primary-btn cd-popup-trigger-signin">I want a job</a>
						<a href="#" class="border-btn cd-popup-trigger-promo">Sign in with promo code</a>
					</div>


				</div>

			</header>

			<div id="content">

				<section class="
					section--hero
					module
					module--padding
					module--white
					module--bg-cover"
					style="background-image: url(<?php echo get_template_directory_uri(); ?>/library/images/bgs/smiles.jpg)">
					<div class="table">
						<div class="table-cell">
							<div class="wrap">
								<div class="
								module-content">
									<h1>Helping new arrivals in Sweden enter the labour market</h1>
									<div class="section--hero__social-media">
										<span>Find us on:</span>
          								<a href="https://www.facebook.com/JustArrivedSE/" class="border-btn border-btn--white-blue" title="Just Arrived Facebook page" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i>&nbsp; Facebook</a>
          								<a href="https://twitter.com/JustArrivedSE" class="border-btn border-btn--white-blue" title="Just Arrived Twitter page" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i>&nbsp; Twitter</a>
          							</div>
								</div>
							</div>
						</div>
					</div>
					<div class="module__overlay module__overlay--light-black"></div>
				</section>

				<section class="
					section--introduction
					module
					module--padding
					module--black
					module--white-bg">
					<div class="wrap">
						<div class="
						module-content
						module--txt-c">
							<h2 class="bordered bordered--primary ">Job opportunities for new arrivals</h2>
							<div class="columns">
								<div class="column-1-2 module--txt-l">
									<p>We connect newly-arrived immigrants with Swedish companies who need help with day-to-day activities. Our digital platform enables companies to post simple tasks and services, and match them with new arrivals looking for work.</p>
								</div>
								<div class="column-1-2 module--txt-l">
									<p>Just Arrived translates tasks into migrants' local languages. We allow the company and migrant to review each other, which provides references that enable migrants to gain further employment. Just Arrived assumes employer responsibilities for all those who obtain work through the platform.</p>
								</div>
								<a href="#" class="primary-btn btn-large cd-popup-trigger-signin">Sign up</a>
							</div>
						</div>
					</div>
				</section>

				<section class="
					section--how-to
					module
					module--padding
					module--black
					module--gray-bg
					module--txt-c">
					<div class="wrap">
						<div class="module-content">
							<h2 class="bordered">Just Arrived makes it simple for companies to engage or employ a new arrival.</h2>

							<div class="columns">
								<div class="column-1-3">
									<div class="icon icon--tick">
										<p>We pay the taxes, social fees and insurance associated with hiring a new employee.</p>
									</div>
								</div>
								<div class="column-1-3">
									<div class="icon icon--pen">
										<p>We lower companies' administrative burden by taking full employment responsibility.</p>
									</div>
								</div>
								<div class="column-1-3">
									<div class="icon icon--profile">
										<p>Our database is an effective way to locate potential new employees.</p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</section>

				<section class="
						section--product
						module
						module--padding
						module--txt-img
						module--white
						module--charcoal-bg">
						<div class="wrap">
							<div class="product-image">
								<img src="<?php echo get_template_directory_uri(); ?>/library/images/inline/iphone6.png">
							</div>
							<div class="product-summary">
								<h2 class="bordered bordered--white bordered--left">Our Product</h2>
								<p>Just Arrived is a digital application that matches New Arrivals in Sweden with potential assignments provided by Swedish companies. It is done through an intuitive web interface, accessible through all kinds of devices and with extensive language and translation support. The application work as follows:</p>
								<ul class="bullet">
									<li><strong>Swedish company</strong> posts an assigment (from 1 hour to 6 months) on the application without cost</li>
									<li><strong>New Arrival</strong> can register a digital CV and apply for the assigment*</li>
									<li><strong>Swedish company</strong> can choose a candidate based on their digital CV and reviews from other assignments</li>
									<li><strong>Swedish company</strong> and New Arrival verify that the job is perfomed and an invoice is sent</li>
									<li><strong>New Arrival</strong> recieves the full amount invoiced (after deduction of taxes and other administrative costs)</li>
								</ul>
								<p><small>* Requires AT-UND, personal identity number or co-ordination number and access to bank account.</small></p>
							</div>
						</div>
				</section>

				<section class="
						section--change
						module
						module--txt-img
						module--white
						module--secondary-bg">
							<div class="module--img module--img-left"
								style="background-image: url(<?php echo get_template_directory_uri(); ?>/library/images/bgs/bethechange.jpg); background-position: 50% 50%;">
							</div>

							<div class="
								module--txt
								module--txt-right
								">
								<h2 class="bordered bordered--white bordered--left">Be the Change</h2>
								<p>In 2015, more than 160,000 people applied for asylum in Sweden. These are people like you and me, with the same needs and desires. However, statistics show that it takes many years for most new arrivals to get a job and support themselves in Sweden.*</p>
		 
								<p><strong> Now, Swedish companies have the opportunity to make a difference.</strong></p>

								<p>Just Arrived exists to make it easy for companies to help. To create a sense of belonging and community by outsourcing simple tasks and jobs.</p>

								<p><small><em>* After ten years, only 60% of all immigrants have a job by which they can support themselves. http://forte.se/artikel/svarforcerad-arbetsmarknad-for-nyanlanda.</small></em></p>
							</div>

				</section>


				<section class="
					module--meet-team-text
					module--padding
					module--black">
					<div class="wrap">
						<div class="
						module-content
						module-content--centered
						module--txt-c
						">
							<h2 class="bordered bordered--primary">Meet the Team</h2>
							<div class="module--txt-l">
								<p>We're a group of 80 volunteers who have been working evenings and weekends since early autumn 2015 to make Just Arrived a reality. We represent numerous competences, backgrounds and organizations, but everyone shares the collective goal of making it easier for New Arrivals to get a job and the chance to get into Swedish society. We're always on the lookout for passionate and talented people, irrespective of whether they represent an organisation or just themselves. For current needs, see the Join Us section below.</p>
							</div>
						</div>
					</div>
				</section>

				<section class="
					section--meet-team
					module
					module--padding
					module--white
					module--bg-cover"
					style="background-image: url(<?php echo get_template_directory_uri(); ?>/library/images/bgs/team.jpg)">
				</section>

				<section class="
					section--joinus
					module
					module--padding
					module--black">
					<div class="wrap">
						<div class="module-content module-content--left">
							<h2 class="bordered bordered--secondary bordered--left">Join us</h2>
							<p>Just Arrived is driven by a team of volunteers that wants to make a difference. If you think you can help in any way, please click the button below.</p>
							<p>We're currently looking for programmers (AngularJS, Ruby on Rails), translators and sponsors. If you're a developer, we’d love you to contribute to our GitHub repository.</p>
						</div>
						
						<div class="module--checklist module-content module-content--right">
							<h4>Checklist</h4>
							<ul class="checklist">
								<li class="complete">
									Building landing page
									<span class="completed-by">Contribution by <a href="http://nova.com" target="_blank" title="nova.com">Nova</a></span>
								</li>
								<li class="complete">
									Translating landing page
									<span class="completed-by">Contribution by Zaher Barood</span>
								</li>
								<li class="incomplete">Support with accounting services</li>
								<li class="incomplete">Development of sales collateral</li>
								<li class="incomplete">Desktop optimization of app</li>
								<li class="incomplete">Translating application to kurmanji, dari, pushto or tigrinya</li>
							</ul>
						</div>
						<div class="module-content module-content--left">
							<p>
								<a href="#" class="cd-popup-trigger-signin contribute-btn border-btn border-btn--blue btn-large">I would like to help out</a>
							</p>
						</div>
					</div>
				</section>

				<section class="
					section--say-hej
					module
					module--txt-c
					module--padding
					module--white
					module--black-bg">
					<div class="wrap">
						<div class="module-content">
							<h2 class="bordered bordered--secondary bordered--centered">Say hej</h2>

							<div class="columns columns--inline">
								<div class="column-1-3">
									<img class="profile-pic profile-pic--no-border" src="<?php echo get_template_directory_uri(); ?>/library/images/profile-pictures/general.png">
									<p>
										<strong>General enquiries</strong> <br>
										<a class="txt-link" href="mailto:hej@justarrived.se">hej@justarrived.se</a> <br>
									</p>
								</div>
								<div class="column-1-3">
									<img class="profile-pic" src="<?php echo get_template_directory_uri(); ?>/library/images/profile-pictures/andreas_konig.jpg">
									<p>
										<strong>Andreas König</strong> <br>
										Project Manager <br>
										<a class="txt-link" href="mailto:andreas@justarrived.se">andreas@justarrived.se</a> <br>
										<a class="txt-link" href="tel:+46 73 386 86 56">+46 73 386 86 56</a>
									</p>
								</div>
								<div class="column-1-3">
									<img class="profile-pic" src="<?php echo get_template_directory_uri(); ?>/library/images/profile-pictures/jacob_burenstam.jpg">
									<p>
										<strong>Jacob Burenstam</strong> <br>
										CTO <br>
										<a class="txt-link" href="mailto:jacob@justarrived.se">jacob@justarrived.se</a> <br>
										<a class="txt-link" href="tel:+46 73 500 50 04">+46 73 500 50 04</a>
									</p>
								</div>
								<div class="column-1-3">
									<img class="profile-pic profile-pic--no-border" src="<?php echo get_template_directory_uri(); ?>/library/images/profile-pictures/general.png">
									<p>
										<strong>Per Clingweld</strong> <br>
										CMO <br>
										<a class="txt-link" href="mailto:per@justarrived.se">per.clingweld@justarrived.se</a> <br>
										<a class="txt-link" href="tel:+46 72 301 91 91">+46 72 301 91 91</a>
									</p>
								</div>
								<div class="column-1-3">
									<img class="profile-pic" src="<?php echo get_template_directory_uri(); ?>/library/images/profile-pictures/yazan_al_rayyes.jpg">
									<p>
										<strong>Yazan Al Ryyes</strong> <br>
										Business Development Manager <br>
										<a class="txt-link" href="mailto:yazan.alryyes@justarrived.se">yazan.alryyes@justarrived.se</a> <br>
										<a class="txt-link" href="tel:++46 76 271 30 92">+46 76 271 30 92</a>
									</p>
								</div>
								<div class="column-1-3">
									<img class="profile-pic" src="<?php echo get_template_directory_uri(); ?>/library/images/profile-pictures/anna_hornmark.jpg">
									<p>
										<strong>Anna Hörnmark</strong> <br>
										Operations Manager <br>
										<a class="txt-link" href="mailto:anna.hornmark@justarrived.se">anna.hornmark@justarrived.se</a> <br>
										<a class="txt-link" href="tel:+46 76 802 59 97">+46 76 802 59 97</a>
									</p>
								</div>
							</div>
							
						</div>
					</div>
				</section>

				<section class="
					section--mailinglist
					module
					module--padding
					module--white
					module--secondary-bg">
					<div class="wrap">
						<div class="
						module-content
						module-content--centered
						module--txt-c
						">
							<h2 class="bordered bordered--white">Contribute to the project</h2>
							<p>
								<a href="#" class="cd-popup-trigger-signin contribute-btn border-btn btn-large border-btn--white border-btn--white-blue">I would like to contribute</a>
							</p>
						</div>



					</div>
				</section>

				<section class="
					section--companies
					module
					module--padding
					module--black">
					<div class="wrap">
						<div class="
						module-content
						module--txt-c
						">
							<h2 class="bordered bordered--primary">Partners and Champions</h2>
							<div class="companies">
								<div class="company">
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/janssonnorin.png">
								</div>
								<div class="company">
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/antrop.png">
								</div>
								<div class="company">
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/frilansfinans.png">
								</div>
								<div class="company">
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/cygni.png">
								</div>
								<div class="company">
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/universum.png">
								</div>
								<div class="company">
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/nova.png">
								</div>
								<div class="company">
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/bondstreet.png">
								</div>
								<div class="company">
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/jacobburenstam.png">
								</div>
							</div>
							<h4><br>Yuliga Bilinskaya, Caroline He, Mattias Bengtsson</h4>
						</div>
					</div>
				</section>

				<section class="
					section--companies
					module
					module--padding
					module--black">
					<div class="wrap">
						<div class="
						module-content
						module--txt-c
						">
							<h2 class="bordered bordered--secondary">Enablers</h2>
							<div class="companies">
							<div class="company">
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/hero.png">
								</div>
								<div class="company">
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/migrationsverket.png">
								</div>
								<div class="company">
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/rodakorset.png">
								</div>
								<div class="company">
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/nem.png">
								</div>
								<div class="company">
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/skrivbyra.png">
								</div>
								<div class="company">
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/wintrgarden.png">
								</div>
								<div class="company">
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/semantix.png">
								</div>
								<div class="company">
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/skeppsbron.png">
								</div>
								<div class="company">
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/welcome.png">
								</div>
							</div>
							<h4>Caroline Olsson, Elena Rahimova, Olle Norgren</h4>
						</div>
					</div>
				</section>


			</div>

			<div class="cd-popup cd-popup-signin">
			<div class="cd-popup-container">
				<section class="section--signup-popup">
					<div class="
					module-content
					module-content--centered
					module--black
					">
						<h2 class="bordered bordered--primary module--txt-c">Sign up to the beta</h2>
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

								//getCurrentURIForRedirect();
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
									<label for="mce-CITY">City</label>
									<input type="text" value="" name="00N580000088gDR" class="" id="mce-CITY">
								</div>
								<div class="mc-field-group input-group">
									<div class="input-group-content">
										<p>I'm interested in... <span class="asterisk">*</span></p>
										<ul>
											<li><input type="radio" value="Posting jobs" name="00N580000088fVu" id="mce-MMERGE5-0"><label for="mce-MMERGE5-0">Posting jobs</label></li>
											<li><input type="radio" value="Finding jobs" name="00N580000088fVu" id="mce-MMERGE5-1" checked><label for="mce-MMERGE5-1">Finding jobs</label></li>
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
						    		<input type="submit" value="Submit" name="submit" id="mc-embedded-subscribe" class="button border-btn btn-large border-btn--pink">
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
						<p class="module--txt-l">We are currently testing the platform (May - September) with an exclusive group of companies and new arrivals that have been provided with a promo code to access the platform. If you don't have a promo code and you are interested in utilizing the platform please click on sign up  and register your interest there. Thank you!</p>
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


<?php get_footer(); ?>
