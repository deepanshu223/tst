<html>
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no"/>
		<title><?php echo Yii::app()->params->site_title; ?></title>
		<?php $this->display_seo(); ?>
		<meta property="og:locale" content="en_US">
		<meta property="og:site_name" content="<?php echo Yii::app()->params->site_name; ?>">
		<?php $urlBase = Yii::app()->request->baseUrl; ?>		
		
		<link rel='stylesheet' type='text/css' href='<?php echo $urlBase; ?>/themes/home/bootstrap/css/bootstrap.min.css' >
		<link rel='stylesheet' type='text/css' href='<?php echo $urlBase; ?>/themes/home/css/animate.min.css' >
		<link rel='stylesheet' type='text/css' href='<?php echo $urlBase; ?>/themes/home/css/ionicons.min.css' >
		<link rel='stylesheet' type='text/css' href='<?php echo $urlBase; ?>/themes/home/css/linea.css' >
		<link rel='stylesheet' type='text/css' href='<?php echo $urlBase; ?>/themes/home/css/waves.min.css' >
		<link rel='stylesheet' type='text/css' href='<?php echo $urlBase; ?>/themes/home/css/owl.carousel.css' >
		<link rel='stylesheet' type='text/css' href='<?php echo $urlBase; ?>/themes/home/css/magnific-popup.css' >
		<link rel='stylesheet' type='text/css' href='<?php echo $urlBase; ?>/themes/home/css/style.css' >
		<link rel="Shortcut Icon" href="<?php echo $urlBase; ?>/favicon.png" type="image/png">
	</head>
	
	<body>
		
		
		<div id='preloader' >
			<div class='loader' >
				<img src='<?php echo $urlBase; ?>/themes/home/img/loader.gif' alt>
			</div>
		</div>
		
		<nav class='navbar navbar-fixed-top' >
			
			<div class='container' >
				
				
				<div class='navbar-header' >
					
					
					<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#nav-collapse' aria-expanded='false'>
						<span class='sr-only' >Toggle navigation</span>
						<span class='icon-bar' ></span>
						<span class='icon-bar' ></span>
						<span class='icon-bar' ></span>
					</button>
					
					
					<a href='#' class='navbar-brand' >
						<img class='logo-light' src='<?php echo $urlBase; ?>/themes/home/img/logo.png' alt>
						<img class='logo-dark' src='<?php echo $urlBase; ?>/themes/home/img/logo.png' alt>
					</a>
					
				</div>
				
				
				
				<div class='collapse navbar-collapse' id='nav-collapse' >
					
					<ul class='nav navbar-nav navbar-right' >
						
						<li class='active'>
							<a href='#intro' data-scroll>Home</a>
						</li>
						
						<li>
							<a href='#features-1' data-scroll>Features</a>
						</li>
						
						<li>
							<a href='#download' target="_blank" data-scroll>Contact</a>
						</li>
						
						<li>
							<a href='https://play.google.com/store/apps/details?id=com.thestartuptoday.news&hl=en' target="_blank">Download</a>
						</li>

					</ul>
				
				</div>
				
			</div>
			
		</nav>
		
		<section id='intro' class='main-section parallax' data-parallax='scroll' data-image-src='<?php echo $urlBase; ?>/themes/home/img/bg-main.jpg' >
			
			<div class='particle-bg' id='particles' ></div>
			
			
			<div class='container' >
				
				
				<div class='row' >
					
					<div class='col-md-6' >
						
						<div class='intro-text' >
							
							<h1 class='wow fadeInUp' data-wow-delay='.2s' >
								The Startup Today
							</h1>
							
							<p class='font-alt wow fadeInUp' data-wow-delay='.4s' >One Stop Destination for all Startup Stories</p>
							
							
							<div class='btns' >
								
																
								<a href='https://play.google.com/store/apps/details?id=com.thestartuptoday.news&hl=en' target="_blank" class='app-btn wow bounceIn' data-wow-delay='.8s' >
									<i class='ion-android-playstore' ></i>
									Google Play
								</a>
								
								
								
							</div>
							
						</div>
						
						
					</div>
					
					<div class='col-md-6' >
						
						<div class='mockup' >
							<img src='' class='front wow fadeInDown' data-wow-duration='.7s' data-wow-delay='1.6s' alt>
							<img src='<?php echo $urlBase; ?>/themes/home/img/mockup1-front.png' class='back wow fadeInDown' data-wow-duration='.7s' data-wow-delay='1.3s' alt>
						</div>
						
					</div>
					
					
				</div>
				
				
			</div>
			
		</section>
		
		<section id='features-1' class='mockup-section' >
			
			<div class='container' >
				
				<div class='row' >
					
					<div class='col-md-7' >
						
						<div class='screens-mockup' >
							
							<img class='phone wow fadeInUp' data-wow-duration='.8s' data-wow-delay='.2s' src='<?php echo $urlBase; ?>/themes/home/img/mockup2-phone.png' alt>
							
						
							
						</div>
						
					</div>
					
					<div class='col-md-5' >
						
						<div class='mockup-text' >
							
							<span class='font-alt wow fadeInUp' data-wow-delay='.2s' >Mordern &</span>
							<h2 class='wow fadeInUp' data-wow-delay='.4s' >Minimalist Design</h2>
							
							<p class='wow fadeInUp' data-wow-delay='.6s' >
							Minimalist Design of the App Enables the users to read a news item in a single screen, with no unnecessary interaction, the app gives a great user experience 
							</p>
							
							
							
						</div>
						
					</div>
					
				</div>
				
				
			</div>
			
		</section>
		
		<section id='features-2' class='mockup-section section-2' >
			
			<div class='container' >
				
				<div class='row' >
					
					<div class='col-md-7 col-md-push-5' >
						
						<div class='mockup-shadow' >
							
							<img class='shadow wow fadeIn' data-wow-delay='.4s' data-wow-offset='200' data-wow-duration='1.2s' src='<?php echo $urlBase; ?>/themes/home/img/mockup3-shadow.png' alt>
							<img class='phone wow fadeInDown' data-wow-delay='.2s' data-wow-offset='200' data-wow-duration='1.2s' src='<?php echo $urlBase; ?>/themes/home/img/mockup3-phone.png' alt>
							
						</div>
						
					</div>
					
					<div class='col-md-5 col-md-pull-7' >
						
						<div class='mockup-text' >
							
							<span class='font-alt wow fadeInUp' data-wow-delay='.2s' >all you need is</span>
							<h2 class='wow fadeInUp' data-wow-delay='.4s' >60 seconds</h2>
							
							<p class='wow fadeInUp' data-wow-delay='.6s' >
								Read the News Summary in under 60 seconds, and to the next one, and not just that also read the full piece in your leasure time 
							</p>
							
						
							
						</div>
						
					</div>
					
				</div>
				
				
			</div>
			
		</section>
		
		<section id='features-3' class='features-section' >
			
			<div class='container' >
				
				<div class='section-header text-center' >
					
					<h2 class='wow fadeInUp' data-wow-delay='.2s' >Features</h2>
					
					<p class='wow fadeInUp' data-wow-delay='.4s' >We've got a lot of amaing and cool features</p>
					
				</div>
				
				<div class='row' >
					
					<div class='col-md-4' >
						
						<div class='col-features text-right' >
							
							<div class='col-feature wow fadeInLeft' data-wow-delay='.2s' >
								<i class='icon-basic-heart' ></i>
								<h4>Most Loved Content</h4>
								<p>
									sourced from the most loved startup websites and curated for your daily dose of the startup world 
								</p>
							</div>
							
							<div class='col-feature wow fadeInLeft' data-wow-delay='.4s' >
								<i class='icon-basic-paperplane' ></i>
								<h4>Direct Share</h4>
								<p>
									Read something you love, go share it with your colleagues, update them about the happening of the startup scenario 
								</p>
							</div>
							
						</div>
						
					</div>
					
					<div class='col-md-4' >
						<div class='mockup wow fadeInUp' data-wow-delay='.2s' >
							<img src='<?php echo $urlBase; ?>/themes/home/img/mockup4.png' alt>
						</div>
					</div>
					
					<div class='col-md-4' >
						
						<div class='col-features text-left' >
							
							<div class='col-feature wow fadeInRight' data-wow-delay='.2s' >
								<i class='icon-basic-bolt' ></i>
								<h4>Minimalist</h4>
								<p>
									No need to spend a lot of time managing the app, everything on the screen, read in 60 secs and move on ! just for you 
								</p>
							</div>
							
							<div class='col-feature wow fadeInRight' data-wow-delay='.4s' >
								<i class='icon-ecommerce-wallet' ></i>
								<h4>No Ads</h4>
								<p>
									we all hate ads, so we promise not to show any ads in the app, all the content is community curated and free of cost 
								</p>
							</div>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
		</section>
		
		
		<section id='features-4' class='features-2-section' >
			
			<div class='container' >
				
				<div class='section-header text-center' >
					
					<h2 class='wow fadeInUp' data-wow-delay='.2s' >Topics We Cover</h2>
					
					<p class='wow fadeInUp' data-wow-delay='.4s' >We've got a lot of themes, here are the broad categories</p>
					
				</div>
				
				<div class='row' >
					
					<div class='col-md-4' >
						
						<div class='icon-feature wow fadeInUp' data-wow-delay='.2s' >
							
														
							<div class='content' >
								
								<h4>BootStrapped - The Self Funded startups </h4>
								
								<p>
									
									Read Tales of self funded startups, follow their success stories and get your morning inspiration .
									
								</p>
								
							</div>
							
						</div>
						
					</div>
					
					<div class='col-md-4' >
						
						<div class='icon-feature wow fadeInUp' data-wow-delay='.4s' >
							
														
							<div class='content' >
								
								<h4>Wallet Diaries - The Investment Tales</h4>
								
								<p>
									
								Who invested, How much was invested, What Equity was given ? if that's your question, then this is section to look for
									
								</p>
								
							</div>
							
						</div>
						
					</div>
					
					<div class='col-md-4' >
						
						<div class='icon-feature wow fadeInUp' data-wow-delay='.6s' >
							
														
							<div class='content' >
								
								<h4>The Makers - The innovators </h4>
								
								<p>
									
									Keep the Engineer in you alive, follow the latest happening in the design world and see what they are upto 

									
								</p>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
				
				<div class='row' >
					
					<div class='col-md-4' >
						
						<div class='icon-feature wow fadeInUp' data-wow-delay='.2s' >
							
							
							
							<div class='content' >
								
								<h4>Disrupters - People Who Disrupt the Market</h4>
								
								<p>
									
									Update yourself of stories of people who broke the market, follow their mantra and you might end up here one day 
									
								</p>
								
							</div>
							
						</div>
						
					</div>
					
					<div class='col-md-4' >
						
						<div class='icon-feature wow fadeInUp' data-wow-delay='.4s' >
							
							
							
							<div class='content' >
								
								<h4>Paparazzi - The Media Tales</h4>
								
								<p>
									
									Never forget the media guys, the people behind the scenes, look into their lives and studios and see what happens there 
									
								</p>
								
							</div>
							
						</div>
						
					</div>
					
					<div class='col-md-4' >
						
						<div class='icon-feature wow fadeInUp' data-wow-delay='.6s' >
							
							
							
							<div class='content' >
								
								<h4>Unicorns - the big players</h4>
								
								<p>
									
									Who Bought who, who became a billionaire, who bought a plane, stay in touch with the happenings of the billionare's club
									
								</p>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
				
				
				<div class='mockup' >
					
					<img class='shadow wow zoomIn animated' src='<?php echo $urlBase; ?>/themes/home/img/perspective-shadow.png' alt>
					<img class='phone wow fadeInDown animated' src='<?php echo $urlBase; ?>/themes/home/img/perspective-phone.png' alt>
				
				</div>
				
			</div>
			
		</section>
		
		
		
		<section id='testimonials' class='testimonials-section' >
			<div class='container' >
				
				<div class='testimonials-slider wow fadeInUp' data-wow-delay='.2s' >
					
					<div class='testimonial' >
						
						<div class='icon' >
							<i class='ion-quote' ></i>
						</div>
						
						<div class='content' >
							<p>
								Saves time. A lot of it. It helps be get content from multiple publications together in one place curated for startup lovers.
							</p>
						</div>
						
						<div class='author' >
						
							<!-- Author Image --
							<img class='author-img' src='<?php echo $urlBase; ?>/themes/home/img/people2.jpg' alt>
							-->
							
														
							<h4>Chirag Dodiya</h4>
							
							<span>Co-Founder & CEO at Milo</span>
							
						</div>						
					</div>
					
					<div class='testimonial'>
						
						<div class='icon'>
							<i class='ion-quote' ></i>
						</div>
						
						<div class='content'>
							<p>
								Great app for those who wish to keep themselves abreast of the daily startup news and yet do not have the time for lengthy articles. In just 60 words this app conveys precisely what the reader needs to know and is also equipped with an option for detailed version of the news by providing a link for the same. .
							</p>
						</div>
						
						<div class='author' >
						
							<!-- Author Image --
							<img class='author-img' src='<?php echo $urlBase; ?>/themes/home/img/people2.jpg' alt>
							-->
							
														
							<h4>Preeti Bala</h4>
							
							<span>PR Specialist</span>
							
						</div>
					</div>
					<div class='testimonial' >
						
						<div class='icon' >
							<i class='ion-quote' ></i>
						</div>
						
						<div class='content' >
							<p>
								The Startup Today App Has Truly Simplified My Search For All The Startup Related News.
								Now I Am Able To Easy Access Every Important New At A Single Place.
								Neatly Categorized and Summarized News In 100 Words.
								Truly One Stop Solution For Startup Related News.
							</p>
						</div>
						
						<div class='author' >
						
							<!-- Author Image --
							<img class='author-img' src='<?php echo $urlBase; ?>/themes/home/img/people2.jpg' alt>
							-->
														
							<h4>Durgesh Jain</h4>
							
							<span>Influencer</span>
							
						</div>
					</div>
					
										
						
					</div>
					
				</div>
		</section>
		
		<section id='download' class='cta-section parallax' data-parallax='scroll' data-image-src='<?php echo $urlBase; ?>/themes/home/img/bg.jpg' >
			
			<div class='container' >
				
				
				<div class='download-app' >
					
					
					<h2 class='wow fadeInUp' data-wow-delay='.2s' >Download this app now</h2>
					
					
					<div class='download-btns' >
						
						<a href='https://play.google.com/store/apps/details?id=com.thestartuptoday.news&hl=en' target="_blank" class='wow bounceIn' data-wow-delay='.4s' >
							<img src='<?php echo $urlBase; ?>/themes/home/img/android.png' alt>
						</a>
						
					
						
					</div>
					
					
				</div>
				
				
				<div class='newsletter' >
					
					<h4 class='wow fadeInUp' data-wow-delay='.2s' >Stay Updated</h4>
					
					<div class='row' >
						
						<div class='col-md-8 col-md-offset-2' >
							
							<form class='newsletter-form' method='post' action='http://example.us11.list-manage.com/subscribe/post?u=5e52e42b5fdb949fb5ed82047&amp;id=826e149b9d' >
								
								<div class='subscribe-input wow fadeInUp' data-wow-delay='.4s' >
									
									<input class='txt' type='email' id='newsletter-email' name='email' placeholder='Your Email' >
									<span></span>
									
									<button class='subscribe' type='submit' >Subscribe</button>
									
								</div>
								
								<label for='newsletter-email' ></label>
							
							</form>
							
							
						</div>
						
					</div>
					
				</div>
				
				
			</div>
			
		</section>
		
		
		
		<footer>
			<div class='container' >
				
				<div class='row' >
					
					<div class='col-sm-6' >
						
						<p class='wow fadeInLeft' data-wow-delay='.2s' >
							&copy; 2017 TheStartupToday. All Rights Reserved.
						</p>
						
					</div>
					
					<div class='col-sm-6' >
						
						<ul class='footer-social wow fadeInRight' data-wow-delay='.2s' >
							
							<li>
								<a href='https://www.facebook.com/Thestartuptoday/' >
									<i class='ion-social-facebook' ></i>
								</a>
							</li>
							
							<li>
								<a href='https://twitter.com/thestartuptoday' >
									<i class='ion-social-twitter' ></i>
								</a>
							</li>
							
							
						</ul>
					
					</div>
					
				</div>
				
			</div>
		</footer>
		
		<script src='<?php echo $urlBase; ?>/themes/home/js/jquery.min.js' ></script>
		<script src='<?php echo $urlBase; ?>/themes/home/bootstrap/js/bootstrap.min.js' ></script>
		<script src='<?php echo $urlBase; ?>/themes/home/js/jquery.magnific-popup.min.js' ></script>
		<script src='<?php echo $urlBase; ?>/themes/home/js/jquery.ajaxchimp.min.js' ></script>
		<script src='<?php echo $urlBase; ?>/themes/home/js/parallax.min.js' ></script>
		<script src='<?php echo $urlBase; ?>/themes/home/js/particles.min.js' ></script>
		<script src='<?php echo $urlBase; ?>/themes/home/js/waves.min.js' ></script>
		<script src='<?php echo $urlBase; ?>/themes/home/js/owl.carousel.min.js' ></script>
		<script src='<?php echo $urlBase; ?>/themes/home/js/wow.min.js' ></script>
		<script src='<?php echo $urlBase; ?>/themes/home/js/validator.min.js' ></script>
		<script src='<?php echo $urlBase; ?>/themes/home/js/smooth-scroll.min.js' ></script>
		<script src='<?php echo $urlBase; ?>/themes/home/js/script.js' ></script>
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		
		ga('create', 'UA-96228315-2', 'auto');
		ga('send', 'pageview');
		</script>
		
	</body>
</html>