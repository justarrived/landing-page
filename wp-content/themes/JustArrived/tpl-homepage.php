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

			<div id="content">

				<section class="
					section--hero
					module
					module--padding
					module--white
					module--bg-cover"
					style="background-image: url(<?php echo get_template_directory_uri(); ?>/library/images/bgs/couple.jpg)">
					<div class="table">
						<div class="table-cell">
							<div class="wrap">
								<div class="
								module-content">
									<h1>Helping new arrivals in Sweden enter the labour market</h1>
								</div>
							</div>
						</div>
					</div>
					<div class="module__overlay module__overlay--black"></div>
				</section>

				<section class="
					section--introduction
					module
					module--padding
					module--white
					module--black-bg">
					<div class="wrap">
						<div class="
						module-content">
							<h2 class="bordered bordered--primary module--txt-c">Job opportunities for new arrivals</h2>
							<div class="columns">
								<div class="column-1-2">
									<p>We connect newly-arrived immigrants with Swedish businesses who need help with day-to-day activities. Our digital platform enables businesses to post simple tasks and services, and match them with new arrivals looking for work.</p>
								</div>
								<div class="column-1-2">
									<p>JustArrived translates tasks into migrants’ local languages. We allow the company and migrant to review each other, which provides references that enable migrants to gain further employment. JustArrived takes the employer responsibility for the newly arrived immigrant.</p>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="
					section--how-to
					module
					module--padding
					module--black
					module--txt-c">
					<div class="wrap">
						<div class="module-content">
							<h2 class="bordered">JustArrived makes it simple for companies to engage or employ a new arrival.</h2>

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
								<p>JustArrived is a digital application that matches New Arrivals in Sweden with potential assignments provided by Swedish corporations. It is done through an intuitive web interface, accessible through all kinds of devices and with extensive language and translation support. The application work as follows;</p>
								<ul class="bullet">
									<li><strong>Swedish Corporation</strong> post an assigment (from 1 hour to 6 months) on the application without cost</li>
									<li><strong>New Arrival</strong> can register a digital CV and apply for the assigment</li>
									<li><strong>Swedish Corporation</strong> can choose a candidate based on their digital CV and reviews from other assignments</li>
									<li><strong>Swedish Corporation</strong> and New Arrival verify that the job is perfomed and an invoice is sent</li>
									<li><strong>New Arrival</strong> recieve a the full amount invoiced (after deduction of taxes and other administrative costs)</li>
								</ul>
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
								style="background-image: url(<?php echo get_template_directory_uri(); ?>/library/images/bgs/beach.jpg); background-position: 50% 50%;">
							</div>

							<div class="
								module--txt
								module--txt-right
								">
								<h2 class="bordered bordered--white bordered--left">Be the change</h2>
								<p>In 2015, more than 160,000 people applied for asylum in Sweden. These are people like you and me, with the same needs and desires. However, statistics show that it takes many years for most new arrivals to get a job and support themselves in Sweden.*</p>
		 
								<p><strong> Now, Swedish businesses have the opportunity to make a difference.</strong></p>

								<p>JustArrived exists to make it easy for businesses to help. To create a sense of belonging and community by outsourcing simple tasks and jobs.</p>

								<p><small><em>* After ten years, only 60% of all immigrants have a job by which they can support themselves. http://forte.se/artikel/svarforcerad-arbetsmarknad-for-nyanlanda </small> </em></p>
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
							<h2 class="bordered bordered--primary">Meet the team</h2>
							<div class="module--txt-l">
								<p>We're a group of 80 volunteers who have been working evenings and weekends since early autumn 2015 to make JustArrived a reality. We represent numerous competences, backgrounds and organizations, but everyone have the collective goal of making it easier for New Arrivals to get a job and the chance to get into Swedish society. We are always in need to passionate and competent people, no matter what if you represent an organization or just yourself.  For current needs see the section Join us below.</p>
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


				<!-- <section class="
					module
					module--padding
					module--bg-cover"
					style="background-image: url(<?php echo get_template_directory_uri(); ?>/library/images/bgs/people.jpg)">
					<div class="wrap">
						<div class="
						module-content
						module-content--padding
						module--white
						module--secondary-bg
						module-content--right">
							<h2>Meet the team</h2>
							<p>We’re a group of 80 volunteers, working evenings and weekends to make JustArrived a reality.</p>
							<p>We collaborate with a number of organisations. Antrop, Jacob Burenstam, Cygni and NeverEndingMonday are currently developing our product. A team comprised of people from Wintrgarden, Universum, RödaKorset and Nova is managing other areas. Our project manager is Andreas König from Wintrgarden.</p>
						</div>
					</div>
				</section> -->

				<section class="
					section--joinus
					module
					module--padding
					module--black">
					<div class="wrap">
						<div class="module-content module-content--left">
							<h2 class="bordered bordered--secondary bordered--left">Join us</h2>
							<p>JustArrived is driven by a team of volunteers that wants to make a difference. If you think you can help in any way, please click the button below.</p>
							<p>We're currently looking for programmers (AngularJS, Ruby on Rails), translators and sponsors. If you're a developer, we’d love you to contribute to our GitHub repository.</p>
						</div>
						
						<div class="module--checklist module-content module-content--right">
							<h4>Checklist</h4>
							<ul class="checklist">
								<li class="complete">
									Building landing page
									<span class="completed-by">Contributed by Company</span>
								</li>
								<li class="complete">
									Translating landing page
									<span class="completed-by">Contributed by <a href="http://nova.com" target="_blank" title="nova.com">Nova</a></span>
								</li>
								<li class="incomplete">Support with accounting services</li>
								<li class="incomplete">Development of sales collateral</li>
								<li class="incomplete">Desktop optimization of app</li>
							</ul>
						</div>
						<div class="module-content module-content--left">
							<p>
								<a href="#" class="cd-popup-trigger-signin contribute-btn border-btn border-btn--blue btn-large">I would like to contribute</a>
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
										<a class="txt-link" href="#">hej@justarrived.se</a> <br>
										<a class="txt-link" href="tel:+46 733 868656">+46 733 868656</a>
									</p>
								</div>
								<div class="column-1-3">
									<img class="profile-pic" src="<?php echo get_template_directory_uri(); ?>/library/images/profile-pictures/andreas.jpg">
									<p>
										<strong>Andreas König</strong> <br>
										Project Manager <br>
										<a class="txt-link" href="mailto:andreas@justarrived.se">andreas@justarrived.se</a>
									</p>
								</div>
								<div class="column-1-3">
									<img class="profile-pic" src="<?php echo get_template_directory_uri(); ?>/library/images/profile-pictures/fredric.jpg">
									<p>
										<strong>Fredric Ghatan</strong> <br>
										Product Development <br>
										<a class="txt-link" href="mailto:fredric@justarrived.se">fredric@justarrived.se</a>
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
									<input type="submit" value="Sign up" class="border-btn btn-large border-btn--white border-btn--white-blue">
								</div>
							</form>
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
							<h2 class="bordered bordered--primary">We've collaborated with some great companies</h2>
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
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/semantix.png">
								</div>
								<div class="company">
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/universum.png">
								</div>
								<div class="company">
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/wintrgarden.png">
								</div>
								<div class="company">
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/nova.png">
								</div>
								<div class="company">
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/rodakorset.png">
								</div>
								<div class="company">
									<img src="<?php echo get_template_directory_uri(); ?>/library/images/logos/nem.png">
								</div>
							</div>
						</div>
					</div>
				</section>


			</div>


<?php get_footer(); ?>
