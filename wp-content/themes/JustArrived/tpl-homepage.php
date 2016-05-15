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



				<section class="module__intro module-primary module-padding">
					
					<div class="module__intro--inner wrap cf">

						<div class="module__intro--text">
							<h3 class="bordered">Job opportunities for new arrivals</h3>
							<p>We connect newly-arrived immigrants with Swedish businesses who need help with day-to-day activities. Our digital platform enables businesses to post simple tasks and services, and match them with new arrivals looking for work.</p>
							<p>JustArrived translates tasks into migrants’ local languages. We allow the company and migrant to review each other, which provides references that enable migrants to gain further employment. JustArrived also includes secure payment processing.</p>
						</div>

					</div>

				</section>

				<section class="module__how module-padding">
					
					<div class="module__how--inner wrap">

						<h3>JustArrived makes it simple for companies to engage or employ a new arrival.</h3>

						<div class="col-wrapper">
							<div class="col-3 col--icon icon--tick">
								<p>We pay the taxes, social fees and insurance associated with hiring a new employee.</p>
							</div>

							<div class="col-3 col--icon icon--pen">
								<p>We lower companies' administrative burden by taking full employment responsibility.</p>
							</div>

							<div class="col-3 col--icon icon--profile">
								<p>Our database is an effective way to locate potential new employees.</p>
							</div>
						</div>

					</div>

				</section>

				<section class="module__btc module-tertiary module-padding">
					
					<div class="module__btc--inner wrap">

						<div class="module__btc--image">
							<img src="http://placehold.it/488x320" style="width:100%;">
						</div>

						<div class="module__btc--text">
							<h3 class="bordered">Be the change</h3>
							<p>In 2015, more than 160,000 people applied for asylum in Sweden. These are people like you and me, with the same needs and desires. However, statistics show that it takes many years for most new arrivals to get a job and support themselves in Sweden.*</p>
 
							<p><strong> Now, Swedish businesses have the opportunity to make a difference.</strong></p>
 
							<p>JustArrived exists to make it easy for businesses to help. To create a sense of belonging and community by outsourcing simple tasks and jobs.</p>

							<p><small><em>* After ten years, only 60% of all immigrants have a job by which they can support themselves. http://forte.se/artikel/svarforcerad-arbetsmarknad-for-nyanlanda/</small></em></p>
						</div>

					</div>

				</section>

				<section class="module__mtt module-secondary module-padding">
					
					<div class="module__mtt--inner wrap">

						<div class="module__mtt--image">
							<img src="http://placehold.it/488x320" style="width:100%;">
						</div>

						<div class="module__mtt--text">
							<h3 class="bordered">Meet the team</h3>
							<p>We’re a group of 80 volunteers, working evenings and weekends to make JustArrived a reality.</p>

							<p>We collaborate with a number of organisations. Antrop, Jacob Burenstam, Cygni and NeverEndingMonday are currently developing our product. A team comprised of people from Wintrgarden, Universum, RödaKorset and Nova is managing other areas. Our project manager is Andreas König from Wintrgarden.</p>
						</div>

					</div>

				</section>

				<section class="module__joinus module-white module-padding">
					
					<div class="module__joinus--inner wrap cf">

						<div class="module__joinus--text">
							<h3 class="bordered">Join us</h3>
							<p>JustArrived is driven by a team of volunteers that wants to make a difference. If you think you can help in any way, please <a class="txt-link" href="hej@justarrived.se">get in touch</a>.</p>
 
							<p>We're currently looking for programmers (AngularJS, Ruby on Rails), translators and sponsors. If you're a developer, we’d love you to contribute to our GitHub repository.</p>
							<br>
							<a href="#" class="border-btn btn-large">Join us</a>

						</div>

					</div>

				</section>

				<section class="module__sayhi module-primary module-padding">
					
					<div class="module__sayhi--inner wrap">

						<h3>Say hej</h3>

						<div class="col-wrapper">
							<div class="col-3 col--icon">
								<img class="profile-pic" src="http://placehold.it/80x80" width="80" height="80">
								<p>
									General enquiries <br>
									<a class="txt-link" href="#">hej@justarrived.se</a> <br>
									<a class="txt-link" href="tel:+46 733 868656">+46 733 868656</a>
								</p>
							</div>

							<div class="col-3 col--icon">
								<img class="profile-pic" src="http://placehold.it/80x80" width="80" height="80">
								<p>
									Andreas König <br>
									Project Manager <br>
									<a class="txt-link" href="mailto:andreas@justarrived.se">andreas@justarrived.se</a>
								</p>
							</div>

							<div class="col-3 col--icon">
								<img class="profile-pic" src="http://placehold.it/80x80" width="80" height="80">
								<p>
									Fredric Ghatan <br>
									Product Development <br>
									<a class="txt-link" href="mailto:fredric@justarrived.se">fredric@justarrived.se</a>
								</p>
							</div>
						</div>

					</div>

				</section>

				<section class="module__sayhi module-tertiary module-padding">
					
					<div class="module__sayhi--inner wrap">

						<h3>Join our mailing list to find out more</h3>

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
								<input type="submit" value="Sign up" class="primary-btn">
							</div>
						</form>

					</div>


				</section>

			</div>


<?php get_footer(); ?>
