<?php
/*
 Template Name: Homepage - Arabic
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
						<div class="header__logo">JustArrived</div>
					</a>

					<div class="header__btns">
						<div class="lang-options">
							<a href="<?php echo home_url(); ?>"><span class="lang-en">English</span></a>
							<a href="<?php echo home_url(); ?>/ar"><span class="lang-ar">العربية</span></a>
						</div>

						<a href="#" class="primary-btn cd-popup-trigger-signin">تسجيل الدخول</a>
						<a href="#" class="border-btn cd-popup-trigger-promo">تسجيل الدخول مع الرمز الترويجي</a>
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
					style="background-image: url(<?php echo get_template_directory_uri(); ?>/library/images/bgs/couple.jpg)">
					<div class="table">
						<div class="table-cell">
							<div class="wrap">
								<div class="
								module-content">
									<h1>مساعدة الوافدين الجدد في السويد للدخول الى سوق العمل</h1>
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
						module-content
						module--txt-c">
							<h2 class="bordered bordered--primary">فرص عمل للوافدين الجدد.</h2>
							<div class="columns">
								<div class="column-1-2 module--txt-l">
									<p>نحن نقوم بالربط بين الوافدين الجدد من الاجئين مع الشركات السويدية اللتي تحتاج الى المساعدة في الأعمال اليومية.
إن تطبيقنا هذا يسمح للشركات بالإعلان عن الأعمال والخدمات التي تحتاجها والربط مع الوافدين الجدد الراغبين في العمل.</p>
								</div>
								<div class="column-1-2 module--txt-l">
									<p>إن هذا التطبيق يقوم بترجمة الإعلانات الى لغات الاجئين المحلية.
كما يوفر هذا التطبيق إمكانية التواصل بين الشركات والوافد الجديد مع بعضهم البعض وذلك يساهم في توفير المزيد من المعلومات والمرجعيات التي تساعد الوافد الجديد في الحصول على المزيد من فرص العمل.
JustArrived  تأخذ على عاتقها مسؤولية الوافد الجديد في سوق العمل.</p>
								</div>
								<a href="#" class="primary-btn btn-large cd-popup-trigger-signin">تسجيل الدخول</a>
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
							<h2 class="bordered">JustArrived  تسهل على الشركات جذب او توظيف الوافادين الجدد</h2>

							<div class="columns">
								<div class="column-1-3">
									<div class="icon icon--tick">
										<p>نقوم بدفع الضرائب والتكاليف الاجتماعية والتامينات المتعلقة بتوظيف موظف جديد.</p>
									</div>
								</div>
								<div class="column-1-3">
									<div class="icon icon--pen">
										<p>نحن نخفغ الاعباء الادارية على الشركات بتحمل الكسؤولية الكاملة للتوظيف.</p>
									</div>
								</div>
								<div class="column-1-3">
									<div class="icon icon--profile">
										<p>ان قاعدة البيانات الخاصة بنا هي وسيلة فعالة في تحديد الامكانيات للموظف الجديد.</p>
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
								<h2 class="bordered bordered--white bordered--left">منتجاتنا or نتائج اعمالنا.</h2>
								<p>جست ارايفد" هو تطبيق يعمل على الربط بين الواصلين حديثا الى السويد وبين الوظائف المتوفرة القدمة من الشركات السويدية. ويتم ذلك من خلال واجهة تطبيق سهلة الاستخدام يمكن الوصول اليها من كافة انواع الاجهزة المحمولة وتدعم ترجمة لمعظم اللغات.
طريقة عمل هذا التطبيق كالتالي:
</p>
								<ul class="bullet">
									<li>تقوم الشركة السويدية باضافة مهمة او وظيفة في التطبيق ( وقد تكون مدة العمل ساعة واحدة كحد ادنى و 6 اشهر كحد اقصى) بدون تكلفة.</li>
									<li>يمكن للواصل الجديد تسجيل سيرته الذاتية ومن ثم يقوم بالتقديم على الوظيفة.</li>
									<li>تقوم الشركة السويدية باختيار المرشح من خلال الاطلاع على السيرة الذاتية والتقييمات من وظائف سابقة.</li>
									<li>تقوم الشركة السويدية والقادم الجديد بالتحقق من ان العمل قد وان اافاتورة قد ارسلت.</li>
									<li>يحصل القادم الجديد على كافة المبلغ المذكور في الفاتورة ( بعد خصم الضرائب والتكاليف الادارية الاخرى)</li>
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
								style="background-image: url(<?php echo get_template_directory_uri(); ?>/library/images/bgs/urban.jpg); background-position: 50% 50%;">
							</div>

							<div class="
								module--txt
								module--txt-right
								">
								<h2 class="bordered bordered--white bordered--left">كن انت التغيير</h2>
								<p>في عام 2015 اكتر من 160،000 شخص تقدم بطلب لجوء في السويد، هؤلاء الاشخاص هم مثلي ومثلك، بنفس الرغبات والاحتياجات، ومع ذلك تشير الاحصائيات بان معضم الوافدين الجدد يستغرقون العديد من السنوات للحصول على عمل واعالة انفسهم في السويد.</p>
		 
								<p><strong>الان. لدى الاعمال السويدية الفرصة لاحداث التقدم .</strong></p>

								<p>جست ارايفد، وجدت لتسهل على الاعمل تقديم المساعدة، وخلق شع د الانتماج والدمج المجتمعي من خلال الاستعانة باعمل بسيطة ووظائف خارجية.</p>

								<p><small><em>بعد عشر سنوات فقط 60% من المهاجرين حصلو على عمل التي منتهم من اعانة انفسهم.</small> </em></p>
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
							<h2 class="bordered bordered--primary">فريق العمل</h2>
							<div class="module--txt-l">
								<p>نحن مجموعة من 80 متطوع نعمل في اوقات المساء او في عطل نهاية الاسبوع منذ خريف عام 2015 لنجعل جست ارايفد حقيقة. نحن نشكل العديد من الاختصاصات والهلفيات والمنظمات. ولكن لدينا جميعا هدفا جماعيا بان نجعل من السهل على الوافد الجديد الحصول على العمل والاندماج في المجتمع السويدي. نحن نحتاج دائما الى اشخاص متعاطفين وكفء لتلبية الاحتياجات ( بغض النظر عما اذا كانو منظمات او مجرد اشخاص ).
يمكنك الاطلاع على ذلك من خلال الضغط على ( انضم معنا) في الاسفل</p>
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
							<h2 class="bordered bordered--secondary bordered--left">انضم معنا</h2>
							<p>جست اريفد تتقدم بجهد فريق من المتطوعين الذين يرغبون بالتغيير. اذا كنت تعتقد بانه يمكنك تقديم المساعدة باي مجال، يرجى الضعظ على الزر في الاسفل.</p>
							<p>نحن نبحث حاليا عن مبرمجين (AngularJS, Ruby on Rails) ، ومترجمون ورعاة. اذا كنت مطورا وترغب في المساهمة في موقعنا   GitHub repository. </p>
						</div>
						
						<div class="module--checklist module-content module-content--right">
							<h4>قائمة التحقق</h4>
							<ul class="checklist">
								<li class="complete">
									بناء الصفحة الرئيسية
									<span class="completed-by">شارك ب <a href="http://nova.com" target="_blank" title="nova.com">Nova</a></span>
								</li>
								<li class="complete">
									ترجمة الواجهة الرئيسية
									<span class="completed-by">شارك ب Zaher Barood</span>
								</li>
								<li class="incomplete">المساهمة في الخدمات الحسابية</li>
								<li class="incomplete">تطوير المبيعات</li>
								<li class="incomplete">تخصيصات سطح مكتب التطبيق</li>
							</ul>
						</div>
						<div class="module-content module-content--left">
							<p>
								<a href="#" class="cd-popup-trigger-signin contribute-btn border-btn border-btn--blue btn-large">ارغب بالتبرع</a>
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
							<h2 class="bordered bordered--secondary bordered--centered">رحب ب</h2>

							<div class="columns columns--inline">
								<div class="column-1-3">
									<img class="profile-pic profile-pic--no-border" src="<?php echo get_template_directory_uri(); ?>/library/images/profile-pictures/general.png">
									<p>
										<strong>للاستفسارات العامة</strong> <br>
										<a class="txt-link" href="mailto:hej@justarrived.se">hej@justarrived.se</a> <br>
										<a class="txt-link" href="tel:+46 733 868656">+46 733 868656</a>
									</p>
								</div>
								<div class="column-1-3">
									<img class="profile-pic" src="<?php echo get_template_directory_uri(); ?>/library/images/profile-pictures/andreas.jpg">
									<p>
										<strong>Andreas König</strong> <br>
										مدير المشروع <br>
										<a class="txt-link" href="mailto:andreas@justarrived.se">andreas@justarrived.se</a>
									</p>
								</div>
								<div class="column-1-3">
									<img class="profile-pic" src="<?php echo get_template_directory_uri(); ?>/library/images/profile-pictures/fredric.jpg">
									<p>
										<strong>Fredric Ghatan</strong> <br>
										مطور المشروع <br>
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
							<h2 class="bordered bordered--white">المساهمة في المشروع</h2>
							<p>
								<a href="#" class="cd-popup-trigger-signin contribute-btn border-btn btn-large border-btn--white border-btn--white-blue">ارغب بالتبرع</a>
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
							<h2 class="bordered bordered--primary">تم التعاون مع بعض الشركات الرائعة <br> Partners and Champions</h2>
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
							<h2 class="bordered bordered--secondary">تم التعاون مع بعض الشركات الرائعة <br> Enablers</h2>
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
							<h4>Caroline Olsson, Elena Rahimova</h4>
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
						<h2 class="bordered bordered--primary module--txt-c">تسجيل الدخول</h2>
						<p>نحن حاليا باختبار منصة (مايو-سبتمبر) مع مجموعة حصرية من شركات والوافدين الجدد. إذا كنت مهتما في الاستفادة من منصة بعد الافتتاح الرسمي لدينا في 1 سبتمبر، يرجى تعبئة النموذج وسوف نقوم بالرد عليك!</p>
						<div id="mc_embed_signup">
							<form action="//justarrived.us13.list-manage.com/subscribe/post?u=ac005505ee4f55f35fc7bdc5d&amp;id=4cc4f7c8c5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate signup-form" target="_blank" novalidate>

							<div class="signup-error module--txt-c">
								<label for="mce-EMAIL" class="mailchimp-error">Email Address</label>
							</div>

							    <div id="mc_embed_signup_scroll">
									
									<div class="form-col mc-field-group">
										<label>البريد الالكتروني <span class="asterisk">*</span></label>
										<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
									</div>
									<div class="form-col mc-field-group">
										<label for="mce-NAME">الاسم <span class="asterisk">*</span>
									</label>
										<input type="text" value="" name="NAME" class="required" id="mce-NAME">
									</div>
									<div class="form-col mc-field-group size1of2">
										<label for="mce-PHONE">رقم الهاتف</label>
										<input type="number" name="PHONE" class="" value="" id="mce-PHONE">
									</div>
									<div class="form-col mc-field-group">
										<label for="mce-COMPANY">الشركة</label>
										<input type="text" value="" name="COMPANY" class="" id="mce-COMPANY">
									</div>
									<div class="mc-field-group input-group">
									    <div class="input-group-content">
										    <p>أنا مهتم ب...</p>
										    <ul>
										    	<li><input type="checkbox" value="1" name="group[3729][1]" id="mce-group[3729]-3729-0"><label for="mce-group[3729]-3729-0">نشر فرص العمل</label></li>
												<li><input type="checkbox" value="2" name="group[3729][2]" id="mce-group[3729]-3729-1"><label for="mce-group[3729]-3729-1">العثور على وظائف</label></li>
												<li><input type="checkbox" value="4" name="group[3729][4]" id="mce-group[3729]-3729-2"><label for="mce-group[3729]-3729-2">يساعد خارجا</label></li>
												<li><input type="checkbox" value="8" name="group[3729][8]" id="mce-group[3729]-3729-3"><label for="mce-group[3729]-3729-3">تبرع</label></li>
												<li><input type="checkbox" value="16" name="group[3729][16]" id="mce-group[3729]-3729-4"><label for="mce-group[3729]-3729-4">معرفة المزيد</label></li>
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
							    		<input type="submit" value="تسجيل الدخول" name="subscribe" id="mc-embedded-subscribe" class="button border-btn btn-large border-btn--pink">
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
						<h2 class="bordered bordered--secondary">أدخل الشفرة الترويجية</h2>
						<p>نحن حاليا باختبار منصة (مايو-سبتمبر) مع مجموعة حصرية من شركات والوافدين الجدد التي تم توفيرها مع الرمز الترويجي للوصول إلى المنصة. إذا لم يكن لديك الرمز الترويجي وكنت مهتما في الاستفادة من منصة يرجى النقر على الاشتراك وتسجيل اهتمامك هناك. شكرا!</p>
						<form class="promo-form" onsubmit="return submitPromoCode()">
							<div class="form-col form-col--full-width">
								<input type="password" placeholder="شفرة تخفيض" id="promo-code-input" value="" />
							</div>
							<div class="form-response" id="promo-error"></div>
							<div class="form-response" id="promo-success"></div>
							<div class="form-col form-col--submit-btn">
								<input type="submit" value="يأخذني إلى تطبيق" class="border-btn btn-large border-btn--blue">
							</div>
						</form>
					</div>
					<a href="#0" class="cd-popup-close img-replace"></a>
				</section>
			</div> <!-- cd-popup-container -->
		</div> <!-- cd-popup -->

<?php get_footer(); ?>
