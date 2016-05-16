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
					section--introduction
					module
					module--padding
					module--white
					module--bg-cover"
					style="background-image: url(<?php echo get_template_directory_uri(); ?>/library/images/bgs/couple.jpg)">
					<div class="wrap">
						<div class="
						module-content">
							<h2>Job opportunities for new arrivals</h2>
							<div class="columns">
								<div class="column-1-2">
									<p>We connect newly-arrived immigrants with Swedish businesses who need help with day-to-day activities. Our digital platform enables businesses to post simple tasks and services, and match them with new arrivals looking for work.</p>
								</div>
								<div class="column-1-2">
									<p>JustArrived translates tasks into migrants’ local languages. We allow the company and migrant to review each other, which provides references that enable migrants to gain further employment. JustArrived also includes secure payment processing.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="module__overlay module__overlay--black"></div>
				</section>

				<section class="
					section--how-to
					module--txt-c
					module
					module--padding
					module--black">
					<div class="wrap">
						<div class="module-content">
							<h2>JustArrived makes it simple for companies to engage or employ a new arrival.</h2>

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
						section--change
						module
						module--txt-img">
						<div class="wrap">

							<div class="module--img"
								style="background-image: url(<?php echo get_template_directory_uri(); ?>/library/images/bgs/beach.jpg); background-position: 50% 50%;">
							</div>

							<div class="
								module--txt
								module--primary
								module--primary-bg">
								<h2>Be the change</h2>
								<p>In 2015, more than 160,000 people applied for asylum in Sweden. These are people like you and me, with the same needs and desires. However, statistics show that it takes many years for most new arrivals to get a job and support themselves in Sweden.*</p>
		 
								<p><strong> Now, Swedish businesses have the opportunity to make a difference.</strong></p>

								<p>JustArrived exists to make it easy for businesses to help. To create a sense of belonging and community by outsourcing simple tasks and jobs.</p>

								<p><small><em>* After ten years, only 60% of all immigrants have a job by which they can support themselves. http://forte.se/artikel/svarforcerad-arbetsmarknad-for-nyanlanda </small> </em></p>
							</div>

							

						</wrap>

				</section>


				<section class="
					section--meet-team
					module
					module--padding
					module--white
					module--bg-cover"
					style="background-image: url(<?php echo get_template_directory_uri(); ?>/library/images/bgs/couple.jpg)">
				</section>

				<section class="
					module--meet-team-text
					module--padding
					module--white
					module--black-bg">
					<div class="wrap">
						<div class="
						module-content
						module-content--centered
						module--txt-c
						">
							<h2>Meet the team</h2>
							<div class="module--txt-l">
								<p>We’re a group of 80 volunteers, working evenings and weekends to make JustArrived a reality.</p>
								<p>We collaborate with a number of organisations. Antrop, Jacob Burenstam, Cygni and NeverEndingMonday are currently developing our product. A team comprised of people from Wintrgarden, Universum, RödaKorset and Nova is managing other areas. Our project manager is Andreas König from Wintrgarden.</p>
							</div>
						</div>
					</div>
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
					module
					module--joinus
					module--padding
					module--white
					module--secondary-bg">
					<div class="wrap">
						<div class="
						module-content
						module-content--centered
						module--txt-c
						">
							<h2>Join us</h2>
							<div class="module--txt-l">
								<p>JustArrived is driven by a team of volunteers that wants to make a difference. If you think you can help in any way, please <a class="txt-link" href="hej@justarrived.se">get in touch</a>.</p>
 
							<p>We're currently looking for programmers (AngularJS, Ruby on Rails), translators and sponsors. If you're a developer, we’d love you to contribute to our GitHub repository.</p>
							<br>
							<a href="#" class="border-btn transparent-btn--blue btn-large">Join us</a>
							</div>
						</div>
					</div>
				</section>

				<section class="
					section--say-hej
					module--txt-c
					module
					module--padding
					module--black">
					<div class="wrap">
						<div class="module-content">
							<h2>Say hej</h2>

							<div class="columns">
								<div class="column-1-3">
									<img class="profile-pic" src="http://placehold.it/80x80" width="80" height="80">
									<p>
										General enquiries <br>
										<a class="txt-link" href="#">hej@justarrived.se</a> <br>
										<a class="txt-link" href="tel:+46 733 868656">+46 733 868656</a>
									</p>
								</div>
								<div class="column-1-3">
									<img class="profile-pic" src="http://placehold.it/80x80" width="80" height="80">
									<p>
										Andreas König <br>
										Project Manager <br>
										<a class="txt-link" href="mailto:andreas@justarrived.se">andreas@justarrived.se</a>
									</p>
								</div>
								<div class="column-1-3">
									<img class="profile-pic" src="http://placehold.it/80x80" width="80" height="80">
									<p>
										Fredric Ghatan <br>
										Product Development <br>
										<a class="txt-link" href="mailto:fredric@justarrived.se">fredric@justarrived.se</a>
									</p>
								</div>
							</div>
							
						</div>
					</div>
				</section>

				<section class="
					module
					module--malinglist
					module--padding
					module--white
					module--primary-bg">
					<div class="wrap">
						<div class="
						module-content
						module-content--centered
						module--txt-c
						">
							<h2>Join our mailing list to find out more</h2>
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
								<input type="submit" value="Sign up" class="border-btn">
							</div>
						</form>
						</div>
					</div>
				</section>


			</div>


<?php get_footer(); ?>
