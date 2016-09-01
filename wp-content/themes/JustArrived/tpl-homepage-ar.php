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
						<div class="header__logo">Just Arrived</div>
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
					style="background-image: url(<?php echo get_template_directory_uri(); ?>/library/images/bgs/smiles.jpg)">
					<div class="table">
						<div class="table-cell">
							<div class="wrap">
								<div class="
								module-content">
									<h1>نساعد الوافدين الجدد في السويد للدخول إلى سوق العمل</h1>
								</div>
							</div>
						</div>
					</div>
					<div class="module__overlay"></div>
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
							<h2 class="bordered bordered--primary">فرص عمل للوافدين الجدد.</h2>
							<div class="columns">
								<div class="column-1-2 module--txt-l">
									<p>نقوم بالربط بين الوافدين الجدد من الاجئين مع الشركات السويدية التي تحتاج إلى المساعدة في الأعمال اليومية.
إن تطبيقنا هذا يسمح للشركات بالإعلان عن الأعمال والخدمات التي تحتاجها والربط مع الوافدين الجدد الراغبين في العمل.</p>
								</div>
								<div class="column-1-2 module--txt-l">
									<p>إن هذا التطبيق يقوم بترجمة الإعلانات الى لغات الاجئين المحلية.
كما يوفر هذا التطبيق إمكانية التواصل بين الشركات والوافد الجديد مع بعضهم البعض وذلك يساهم في توفير المزيد من المعلومات والمرجعيات التي تساعد الوافد الجديد في الحصول على المزيد من فرص العمل.
Just Arrived  تأخذ على عاتقها مسؤولية الوافد الجديد في سوق العمل.</p>
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
					module--white
					module--black-bg
					module--txt-c">
					<div class="wrap">
						<div class="module-content">
							<h2 class="bordered">"Just Arrived" تسهل على الشركات جذب وتوظيف الوافدين الجدد.</h2>

							<div class="columns">
								<div class="column-1-3">
									<div class="icon icon--tick">
										<p>نقوم بدفع الضرائب والتكاليف الإجتماعية والتأمينات المتعلقة بتوظيف الموظف الجديد.</p>
									</div>
								</div>
								<div class="column-1-3">
									<div class="icon icon--pen">
										<p>نخفف الأعباء الإدارية على الشركات بتحمل المسؤولية الكاملة للتوظيف.</p>
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
								<h2 class="bordered bordered--white bordered--left">عن التطبيق :</h2>
								<p>"Just Arrived" هو تطبيق يعمل على الربط بين الواصلين حديثا الى السويد وبين الوظائف المتوفرة المقدمة من الشركات السويدية. ويتم ذلك من خلال تطبيق سهل الإستخدام يمكن الوصول اليه من كافة الأجهزة المحمولة ويوفر الترجمة لمعظم لغات الوافدين الجدد.
يعمل هذا التطبيق كالتالي:</p>
								<ul class="bullet">
									<li>- تقوم الشركة السويدية باضافة مهمة او وظيفة في التطبيق ( وقد تكون مدة العمل ساعة واحدة كحد أدنى و 6 أشهر كحد أقصى) بدون تكلفة.</li>
									<li>- يمكن للوافد الجديد تسجيل سيرته الذاتية في التطبيق ومن ثم يقوم بالتقديم على الوظيفة.*</li>
									<li>- تقوم الشركة السويدية بإختيار المرشح من خلال الإطلاع على سيرتة الذاتية والتقييمات من الوظائف السابقة.</li>
									<li>- تقوم الشركة السويدية والوافد الجديد بالتحقق من أن العمل قد تم وأن الفاتورة قد أرسلت.</li>
									<li>- يحصل الوافد الجديد على كافة المبلغ المذكور في الفاتورة ( بعد خصم الضرائب والتكاليف الإدارية الاخرى)</li>
									<p><small>يتطلب AT-UND، رقم الهوية الشخصية أو رقم التنسيق والحصول على حساب مصرفي
</small></p>
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
								<h2 class="bordered bordered--white bordered--left">إصنع التغيير...</h2>
								<p>في عام 2015 اكتر من 160،000 شخص تقدم بطلب لجوء في السويد، هؤلاء الاشخاص هم مثلي ومثلك، بنفس الرغبات والاحتياجات، ومع ذلك تشير الإحصائيات بان معظم الوافدين الجدد يستغرقون العديد من السنوات للحصول على عمل وإعالة أنفسهم في السويد*.</p>
		 
								<p><strong>الان. الأعمال السويدية لديها الفرصة لتصنع التغيير.</strong></p>

								<p>"Just Arrived " تقوم بتسهيل الأعمال وتقديم المساعدة، وخلق شعور بالإندماج والدمج المجتمعي من خلال الإستعانة بأعمال ووظائف بسيطة.</p>

								<p><small><em>بعد عشر سنوات فقط 60% من المهاجرين حصلوا على عمل مكنهم من إعانة أنفسهم.
*المصدر: http://forte.se/artikel/svarforcerad-arbetsmarknad-for-nyanlanda</small> </em></p>
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
								<p>نحن مجموعة من 80 متطوع نعمل في أوقات المساء أو في عطل نهاية الاسبوع منذ خريف عام 2015 لنقدم لكم "Just Arrived" . نشكل العديد من الإختصاصات والخلفيات والمنظمات. يجمعنا هدف جماعي وهو أن نجعل من السهل على الوافد الجديد الحصول على العمل والإندماج في المجتمع السويدي. نحتاج دائما الى أشخاص متعاطفين وكفء لتلبية الإحتياجات ( بغض النظر ما إذا كانوا منظمات أو مجرد اشخاص ).
يمكنك الإطلاع على ذلك من خلال الضغط على ( إنضم معنا ) في الأسفل.</p>
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
							<h2 class="bordered bordered--secondary bordered--left">انضم معنا</h2>
							<p>"Just Arrived" تتقدم بجهد فريق من المتطوعين الذين يرغبون بصناعة التغيير. إذا كنت تعتقد أنه بإمكانك تقديم المساعدة في أي مجال، يرجى الضعظ على الزر في الأسفل.</p>
							<p>نبحث حاليا عن مبرمجين (AngularJS, Ruby on Rails) ، ومترجمين وداعمين. إذا كنت مطور برمجة وترغب في المساهمة في موقعنا   GitHub repository. </p>
						</div>
						
						<div class="module--checklist module-content module-content--right">
							<h4>قائمة التحقق</h4>
							<ul class="checklist">
								<li class="complete">
									بناء الصفحة الرئيسية
									<span class="completed-by">تم من قبل <a href="http://nova.com" target="_blank" title="nova.com">Nova</a></span>
								</li>
								<li class="complete">
									ترجمة الواجهة الرئيسية
									<span class="completed-by">تم من قبل Zaher Barood</span>
								</li>
								<li class="incomplete">المساهمة في الخدمات الحسابية </li>
								<li class="incomplete">تطوير المبيعات </li>
								<li class="incomplete">تخصيصات سطح مكتب التطبيق</li>
								<li class="incomplete">ترجمة التطبيق لالكورمانجية، الداري والباشتو أو التغرينية</li>
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
							<h2 class="bordered bordered--secondary bordered--centered">للتواصل مع:</h2>

							<div class="columns columns--inline">
								<div class="column-1-3">
									<img class="profile-pic profile-pic--no-border" src="<?php echo get_template_directory_uri(); ?>/library/images/profile-pictures/general.png">
									<p>
										<strong>للاستفسارات العامة</strong> <br>
										<a class="txt-link" href="mailto:hej@justarrived.se">hej@justarrived.se</a> <br>
									</p>
								</div>
								<div class="column-1-3">
									<img class="profile-pic" src="<?php echo get_template_directory_uri(); ?>/library/images/profile-pictures/andreas_konig.jpg">
									<p>
										<strong>Andreas König</strong> <br>
										مدير المشروع <br>
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
							<h2 class="bordered bordered--white">للمساهمة في المشروع</h2>
							<p>
								<a href="#" class="cd-popup-trigger-signin contribute-btn border-btn btn-large border-btn--white border-btn--white-blue">للمساهمة في المشروع</a>
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
							<h2 class="bordered bordered--primary">الشركاء والداعمون</h2>
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
							<h2 class="bordered bordered--secondary">بالتعاون مع</h2>
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
						<h2 class="bordered bordered--primary module--txt-c">تسجيل الدخول</h2>
						<p>نحن حاليا باختبار منصة (مايو-سبتمبر) مع مجموعة حصرية من شركات والوافدين الجدد. إذا كنت مهتما في الاستفادة من منصة بعد الافتتاح الرسمي لدينا في 1 سبتمبر، يرجى تعبئة النموذج وسوف نقوم بالرد عليك!</p>
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
									<label for="mce-EMAIL" class="mailchimp-error">البريد الالكتروني</label>
								</div>
	
							    <div id="mc_embed_signup_scroll">
									
									<div class="form-col mc-field-group">
										<label>البريد الالكتروني <span class="asterisk">*</span></label>
										<input type="email" value="" name="email" class="required email" id="mce-EMAIL" required>
									</div>
									<div class="form-col mc-field-group">
										<label for="mce-NAME">الاسم <span class="asterisk">*</span>
									</label>
										<input type="text" value="" maxlength="80" name="last_name" class="required" id="mce-LASTNAME" required>
									</div>
									<div class="form-col mc-field-group size1of2">
										<label for="mce-PHONE">رقم الهاتف</label>
										<input type="number" maxlength="40" name="phone" class="" value="" id="mce-PHONE">
									</div>
									<div class="form-col mc-field-group">
										<label for="mce-COMPANY">الشركة</label>
										<input type="text" value="" maxlength="40" name="company" class="" id="mce-COMPANY">
									</div>
									<div class="form-col form-col--full-width mc-field-group">
										<label for="mce-LOCATION">موقع</label>
										<input type="text" value="" name="00N580000088gDR" class="" id="mce-LOCATION">
									</div>
									<div class="mc-field-group input-group">
										<div class="input-group-content">
											<p>أنا مهتم ب... <span class="asterisk">*</span></p>
											<ul>
												<li><input type="radio" value="Posting jobs" name="00N580000088fVu" id="mce-MMERGE5-0"><label for="mce-MMERGE5-0">نشر فرص العمل</label></li>
												<li><input type="radio" value="Finding jobs" name="00N580000088fVu" id="mce-MMERGE5-1"><label for="mce-MMERGE5-1">العثور على وظائف</label></li>
												<li><input type="radio" value="Helping out" name="00N580000088fVu" id="mce-MMERGE5-2"><label for="mce-MMERGE5-2">يساعد خارجا</label></li>
												<li><input type="radio" value="Donating" name="00N580000088fVu" id="mce-MMERGE5-3"><label for="mce-MMERGE5-3">تبرع</label></li>
												<li><input type="radio" value="Knowing more" name="00N580000088fVu" id="mce-MMERGE5-4" checked><label for="mce-MMERGE5-4">معرفة المزيد</label></li>
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
