<!DOCTYPE html>
<html lang="en">

<head>
	<title>Duong Tuan Luc</title>
	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="description" content="">
	<meta name="keywords" content="">
	<!-- FAVICON -->
	<link href="{{asset('templates/default/images/favicon.ico')}}" rel="shortcut icon" type="image/x-icon" />
	<!-- CSS FILES -->
	<link href="{{asset('templates/default/css/normalize.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('templates/default/css/animate.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('templates/default/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('templates/default/css/style.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('templates/default/css/nerveslider.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('templates/default/css/tooltipster.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('templates/default/css/scrollbar.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('templates/default/css/lightgallery.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('templates/default/css/colors.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('templates/default/css/media.css')}}" rel="stylesheet" type="text/css">
	<!--[if lt IE 9]>
	<script type="text/javascript" src="{{asset('templates/default/js/html5.js')}}"></script>
	<![endif]-->
	<!-- GOOGLE MAP -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<!-- NOSCRIPT -->
	<noscript>
		<link href="{{asset('templates/default/css/nojs.css')}}" rel="stylesheet" type="text/css">
	</noscript>
</head>

<body>
<!-- LOADING ANIMATION -->
<div id="site-loading"></div>
<!-- MAIN MENU -->
<div id="cv-menu">
	<nav id="cv-main-menu">
		<ul>
			<!-- SIDEBAR MENU ICON -->
			<li><a href="#" class="cv-menu-button fa fa-bars">Menu</a>
			</li>
			<!-- PAGE 1 LINK -->
			<li class="links-to-floor-li cv-active" data-id="1" data-slug="home"><a href="#home" class="fa fa-home tooltip-menu" title="HOME">Home</a>
			</li>
			<!-- PAGE 2 LINK -->
			<li class="links-to-floor-li" data-id="2" data-slug="about"><a href="#about" class="fa fa-user tooltip-menu" title="ABOUT">About</a>
			</li>
			<!-- PAGE 3 LINK -->
			<li class="links-to-floor-li" data-id="3" data-slug="resume"><a href="#resume" class="fa fa-graduation-cap tooltip-menu" title="RESUME">Resume</a>
			</li>
			<!-- PAGE 4 LINK -->
			<li class="links-to-floor-li" data-id="4" data-slug="portfolio"><a href="#portfolio" class="fa fa-briefcase tooltip-menu" title="PORTFOLIO">Portfolio</a>
			</li>
			<!-- PAGE 5 LINK -->
			<li class="links-to-floor-li" data-id="5" data-slug="contact"><a href="#contact" class="fa fa-send tooltip-menu" title="CONTACT">Contact</a>
			</li>
		</ul>
	</nav>
</div>
<!-- LEFT SLIDER -->
<div class="cv-left-slider">
	<div id="cv-left-slider">
		<!-- 1. SLIDE -->
		<div>
			<img src="{{asset('templates/default/images/lucduong_01.jpg')}}" alt="">
			<div id="home-slide-title">
				<span>TUAN LUC</span>
			</div>
		</div>
		<!-- 2. SLIDE -->
		<img src="{{asset('templates/default/images/lucduong_01.jpg')}}" alt="">
		<!-- 3. SLIDE -->
		<img src="{{asset('templates/default/images/lucduong_01.jpg')}}" alt="">
		<!-- 4. SLIDE -->
		<img src="{{asset('templates/default/images/lucduong_01.jpg')}}" alt="">
		<!-- 5. SLIDE -->
		<div>
			<!-- GOOGLE MAP -->
			<div class="google-map-container">
				<div id="google-map"></div>
			</div>
		</div>
	</div>
</div>
<!-- PAGES -->
<div id="ascensorBuilding">
	<!-- PAGE 1 -->
	<section class="floor floor-1">
		<div id="home-image">
			<div id="home-title">
				<h1><span class="mobile-title">TUAN LUC</span><span>DUONG</span></h1>
				<p>Web Designer & Developer</p>
			</div>
			<!-- SOCIAL ICONS -->
			<div id="cv-home-social-bar-container">
				<nav id="cv-home-social-bar">
					<ul>
						<li>
							<a href="https://facebook.com/duongtuanluc" class="fa fa-facebook-f tooltip-social" title="FACEBOOK">Facebook</a>
						</li>
						<li>
							<a href="https://twitter.com/duongtuanluc" class="fa fa-twitter tooltip-social" title="TWITTER">Twitter</a>
						</li>
						<li>
							<a href="https://www.linkedin.com/in/duongtuanluc" class="fa fa-linkedin tooltip-social" title="LINKEDIN">Linkedin</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</section>
	<!-- PAGE 2 -->
	<section class="floor floor-2">
		<!-- THIS IMAGE WILL BE DISPLAYED ONLY ON MOBILE MODE ( 1024PX AND BELOW ) -->
		<div class="img-mobile-only">
			<img src="{{asset('templates/default/images/photos/1000.png')}}" alt="" />
		</div>
		<!-- PAGE CONTENT -->
		<div class="cv-page-content">
			<h2 class="border">ABOUT ME</h2>
			<p>I am Luc Duong. I am a very dynamic person. I love technology, art of life and I love speaker.
			I always looking for the best way to do something but I know, the smartest way is better. <br />That's me.</p>
			<!-- TABLE -->
			<ul class="cv-table">
				<li>
					<div class="cv-table-left"><i class="cv-icon fa fa-user"></i>Date of birth</div>
					<div class="cv-table-right">April 11th</div>
				</li>
				<li>
					<div class="cv-table-left"><i class="cv-icon fa fa-language"></i>Languages</div>
					<div class="cv-table-right">Vietnamese, English</div>
				</li>
				<li>
					<div class="cv-table-left"><i class="cv-icon fa fa-futbol-o"></i>Hobbies</div>
					<div class="cv-table-right">Soccer, Travelling, Speaking</div>
				</li>
				<li>
					<div class="cv-table-left"><i class="cv-icon fa fa-external-link-square"></i>Website</div>
					<div class="cv-table-right"><a href="http://duongtuanluc.com">duongtuanluc.com</a>
					</div>
				</li>
			</ul>
			<p>I have 3 years of experience in Java and Web Development and 2 years in project management.</p>
			<p></p>
			<a href="#contact" class="cv-button primary go-to-floor" data-id="5" data-slug="contact">Hire Me</a>
			<a href="#" class="cv-button">Download Resume</a>
			<hr/>
			<h2 class="border">WHAT CAN I DO</h2>
			<div class="cv-main-icon-container">
				<!-- ICON BLOCK -->
				<div class="cv-icon-block">
					<div class="cv-icon-container">
						<a href="#" class="fa fa-paint-brush">Web Design</a>
					</div>
					<div class="cv-icon-text">
						<h4>Web Design</h4>
						<p>I have finish 3 big web applications using java framework and 10 web projects using PHP.</p>
					</div>
				</div>
				<!-- ICON BLOCK -->
				<div class="cv-icon-block">
					<div class="cv-icon-container">
						<a href="#" class="fa fa-wordpress">WordPress</a>
					</div>
					<div class="cv-icon-text">
						<h4>WordPress</h4>
						<p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut possumus.</p>
					</div>
				</div>
				<!-- ICON BLOCK -->
				<div class="cv-icon-block">
					<div class="cv-icon-container">
						<a href="#" class="fa fa-eye">SEO</a>
					</div>
					<div class="cv-icon-text">
						<h4>SEO</h4>
						<p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut possumus.</p>
					</div>
				</div>
				<!-- ICON BLOCK -->
				<div class="cv-icon-block">
					<div class="cv-icon-container">
						<a href="#" class="fa fa-android">Application</a>
					</div>
					<div class="cv-icon-text">
						<h4>Application</h4>
						<p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut possumus.</p>
					</div>
				</div>
			</div>
			<hr/>
			<!-- TESTIMONIALS -->
			<h2 class="border">Testimonials</h2>
			<div id="testimonials">
				<div>
					<blockquote>
						<p>Fugiat qui se amet nostrud eu fore imitar quam tamen quam, nostrud eram expet non ipsum possumus se relinq ut ut possumus.</p>
						<p class="cite">John Doe</p>
					</blockquote>
				</div>
				<div>
					<blockquote>
						<p>Offendit graviterq ne quem ea excepteur o lorem, amet non quibusdam ut expeten ad nostrud, laboris ita esse, an arbitror.</p>
						<p class="cite">Walter White</p>
					</blockquote>
				</div>
				<div>
					<blockquote>
						<p>Doctrina institue an quibusdam, possumus quid occaecat senserit, a cillum cernantur mandaremus aut ita quae varias.</p>
						<p class="cite">Mary Jennings</p>
					</blockquote>
				</div>
				<div>
					<blockquote>
						<p>Nulla ita quamquam non fugiat est possumus quem a admodum exquisita, ut esse officia, quorum expetendis o tempor, cernantur.</p>
						<p class="cite">Michael Stone</p>
					</blockquote>
				</div>
			</div>
		</div>
	</section>
	<!-- PAGE 3 -->
	<section class="floor floor-3">
		<!-- THIS IMAGE WILL BE DISPLAYED ONLY ON MOBILE MODE ( 1024PX AND BELOW ) -->
		<div class="img-mobile-only">
			<img src="{{asset('templates/default/images/photos/1000.png')}}" alt="" />
		</div>
		<!-- PAGE CONTENT -->
		<div class="cv-page-content">
			<h2 class="border">EXPERIENCE</h2>
			<div class="cv-resume-box">
				<div class="cv-resume-title">
					<h5>Senior Developer - Google Inc</h5>
					<p>2010 to present</p>
				</div>
				<p>Nescius malis eram si malis, elit de officia, quibusdam summis pariatur appellat se litteris ad legam, irure ubi offendit do te irure nescius comprehenderit, mandaremus eram ullamco e eu esse malis in officia. Quae vidisse expetendis se quem litteris ubi despica.</p>
			</div>
			<div class="cv-resume-box">
				<div class="cv-resume-title">
					<h5>Art Director - Designs Ltd</h5>
					<p>2008-2010</p>
				</div>
				<p>Nescius malis eram si malis, elit de officia, quibusdam summis pariatur appellat se litteris ad legam, irure ubi offendit do te irure nescius comprehenderit, mandaremus eram ullamco e eu esse malis in officia. Quae vidisse expetendis se quem litteris ubi despica.</p>
			</div>
			<div class="cv-resume-box">
				<div class="cv-resume-title">
					<h5>Web Designer - Web Agency</h5>
					<p>2005-2008</p>
				</div>
				<p>Nescius malis eram si malis, elit de officia, quibusdam summis pariatur appellat se litteris ad legam, irure ubi offendit do te irure nescius comprehenderit, mandaremus eram ullamco e eu esse malis in officia. Quae vidisse expetendis se quem litteris ubi despica.</p>
			</div>
			<hr/>
			<h2 class="border">EDUCATION</h2>
			<div class="cv-resume-box">
				<div class="cv-resume-title">
					<h5>The University of Texas</h5>
					<p>1997-2002</p>
				</div>
				<p>Nescius malis eram si malis, elit de officia, quibusdam summis pariatur appellat se litteris ad legam, irure ubi offendit do te irure nescius comprehenderit, mandaremus eram ullamco e eu esse malis in officia. Quae vidisse expetendis se quem litteris ubi despica.</p>
			</div>
			<div class="cv-resume-box">
				<div class="cv-resume-title">
					<h5>Institue of Design</h5>
					<p>1994-1997</p>
				</div>
				<p>Nescius malis eram si malis, elit de officia, quibusdam summis pariatur appellat se litteris ad legam, irure ubi offendit do te irure nescius comprehenderit, mandaremus eram ullamco e eu esse malis in officia. Quae vidisse expetendis se quem litteris ubi despica.</p>
			</div>
			<hr/>
			<h2 class="border">SKILLS</h2>
			<p>Minim singulis pariatur. De eram exercitation, cillum admodum non expetendis. Te qui sunt mandaremus.</p>
			<!-- SKILL BARS -->
			<div class="skills">
				<div class="skillbar" data-percent="70%">
					<div class="skillbar-title"><span>HTML5</span>
					</div>
					<div class="skillbar-bar"></div>
					<div class="skill-bar-percent">70%</div>
				</div>
				<div class="skillbar" data-percent="65%">
					<div class="skillbar-title"><span>CSS3</span>
					</div>
					<div class="skillbar-bar"></div>
					<div class="skill-bar-percent">65%</div>
				</div>
				<div class="skillbar" data-percent="50%">
					<div class="skillbar-title"><span>jQuery</span>
					</div>
					<div class="skillbar-bar"></div>
					<div class="skill-bar-percent">50%</div>
				</div>
				<div class="skillbar" data-percent="80%">
					<div class="skillbar-title"><span>PHP</span>
					</div>
					<div class="skillbar-bar"></div>
					<div class="skill-bar-percent">80%</div>
				</div>
				<div class="skillbar" data-percent="100%">
					<div class="skillbar-title"><span>Wordpress</span>
					</div>
					<div class="skillbar-bar"></div>
					<div class="skill-bar-percent">100%</div>
				</div>
				<div class="skillbar" data-percent="75%">
					<div class="skillbar-title"><span>SEO</span>
					</div>
					<div class="skillbar-bar"></div>
					<div class="skill-bar-percent">75%</div>
				</div>
				<div class="skillbar" data-percent="70%">
					<div class="skillbar-title"><span>Photoshop</span>
					</div>
					<div class="skillbar-bar"></div>
					<div class="skill-bar-percent">70%</div>
				</div>
				<!-- End Skill Bars -->
			</div>
		</div>
	</section>
	<!-- PAGE 4 -->
	<section class="floor floor-4">
		<!-- THIS IMAGE WILL BE DISPLAYED ONLY ON MOBILE MODE ( 1024PX AND BELOW ) -->
		<div class="img-mobile-only">
			<img src="{{asset('templates/default/images/photos/1000.png')}}" alt="" />
		</div>
		<!-- PAGE CONTENT -->
		<div class="cv-page-content">
			<h2 class="border">PORTFOLIO</h2>
			<!-- PORTFOLIO FILTERS -->
			<ul id="cv-portfolio-filter" class="cvfilters">
				<li data-filter="all" class="gridactive">All</li>
				<li data-filter="cat1">Category 1</li>
				<li data-filter="cat2">Category 2</li>
			</ul>
			<div class="clear"></div>
			<!-- PORTFOLIO GRID -->
			<ul id="cv-portfolio" class="cvgrid">
				<li data-filter-class='["all","cat2"]'>
					<figure>
						<a id="gallery1" href="#" class="cvgrid-img">
							<img src="{{asset('templates/default/images/photos/480.png')}}" alt="" />
						</a>
						<figcaption>
							<div class="cvgrid-title">A Photo Gallery</div>
						</figcaption>
					</figure>
				</li>
				<li data-filter-class='["all","cat1","cat2"]'>
					<figure>
						<a id="gallery2" href="#" class="openlightbox cvgrid-video">
							<img src="{{asset('templates/default/images/photos/480.png')}}" alt="" />
						</a>
						<figcaption>
							<div class="cvgrid-title">A Video Gallery</div>
						</figcaption>
					</figure>
				</li>
				<li data-filter-class='["all","cat1"]'>
					<figure>
						<a id="gallery3" href="#" class="openlightbox cvgrid-img">
							<img src="{{asset('templates/default/images/photos/480.png')}}" alt="" />
						</a>
						<figcaption>
							<div class="cvgrid-title">Autoplay On</div>
						</figcaption>
					</figure>
				</li>
				<li data-filter-class='["all","cat2"]'>
					<figure>
						<a href="http://themeforest.net?ref=egemenerd" class="cvgrid-link" target="_blank">
							<img src="{{asset('templates/default/images/photos/480.png')}}" alt="" />
						</a>
						<figcaption>
							<div class="cvgrid-title">An External Link</div>
						</figcaption>
					</figure>
				</li>
				<li data-filter-class='["all","cat2"]'>
					<figure>
						<a id="gallery4" href="#" class="cvgrid-img">
							<img src="{{asset('templates/default/images/photos/480.png')}}" alt="" />
						</a>
						<figcaption>
							<div class="cvgrid-title">Another Gallery</div>
						</figcaption>
					</figure>
				</li>
			</ul>
			<div class="clear"></div>
		</div>
	</section>
	<!-- PAGE 5 -->
	<section class="floor floor-5">
		<!-- MOBILE GOOGLE MAP -->
		<div class="mobile-map-container">
			<div id="mobile-map"></div>
		</div>
		<!-- PAGE CONTENT -->
		<div class="cv-page-content">
			<h2 class="border">CONTACT</h2>
			<p>Quibusdam noster aut laborum despicationes. Malis appellat o enim tamen. O amet quibusdam. Magna occaecat ex coniunctione, quis in mentitum, multos excepteur offendit, id a dolore illum.</p>
			<!-- TABLE -->
			<ul class="cv-table">
				<li>
					<div class="cv-table-left"><i class="cv-icon fa fa-phone-square"></i>Phone</div>
					<div class="cv-table-right">(+84) 93 26 26 007</div>
				</li>
				<li>
					<div class="cv-table-left"><i class="cv-icon fa fa-envelope"></i>E-mail</div>
					<div class="cv-table-right"><a href="#">luc@e4u.vn</a>
					</div>
				</li>
				<li>
					<div class="cv-table-left"><i class="cv-icon fa fa-map"></i>Address</div>
					<div class="cv-table-right">3.11 Gia Phu Apartment, No. 5 St, Binh Hung Hoa Ward, Binh Tan Dist, HCMC</div>
				</li>
				<li>
					<div class="cv-table-left"><i class="cv-icon fa fa-fax"></i>Homephone</div>
					<div class="cv-table-right">(+84) 66 56 69 69</div>
				</li>
			</ul>
			<p>Amet litteris ingeniis in eiusmod et legam aliquip, anim consequat ubi incididunt ubi eram cernantur adipisicing, ab fore illustriora, amet voluptate.</p>
			<hr/>
			<h2 class="border">GET IN TOUCH</h2>
			<p>E fugiat mentitum illustriora, te noster tractavissent. Eu aute occaecat domesticarum id si quem non enim. Ab velit nisi si commodo ne dolor domesticarum quamquam malis officia, et legam laboris ne qui cupidatat qui singulis, fabulas.</p>
			<!-- CONTACT FORM -->
			<form class="form-box" action="processform.php" method="post">
				<label>Full name :</label>
				<input type="text" name="senderName" id="senderName" required="required" maxlength="50" />
				<label>Phone Number :</label>
				<input type="text" name="phoneNumber" id="phoneNumber" required="required" maxlength="50" />
				<label>Email address :</label>
				<input type="email" name="senderEmail" id="senderEmail" required="required" maxlength="50" />
				<label>Message :</label>
				<textarea name="message" id="message" required="required"></textarea>
				<input type="submit" id="sendMessage" name="sendMessage" class="cv-button primary" value="Send Message" />
			</form>
		</div>
	</section>
	<!-- FOOTER -->
	<footer id="footer">
		<div class="cv-credits">
			Copyright <a href="http://duongtuanluc.com">Luc Duong</a> - All rights reserved
		</div>
		<!-- BACK TO TOP BUTTON -->
		<div id="cv-back-to-top" class="tooltip-gototop" title="Go to top"></div>
	</footer>
</div>
<!-- SIDEBAR -->
<aside id="cv-sidebar">
	<div id="cv-sidebar-inner">
		<!-- MENU WIDGET -->
		<div class="cv-sidebar-title">
			<h5>SUBMENU</h5>
		</div>
		<div class="cv-panel-widget">
			<nav class="cv-submenu">
				<ul>
					<li><a href="blog.html">Blog</a>
					</li>
					<li><a href="single.html">Single Post/Page</a>
					</li>
					<li><a href="features.html">Other Features</a>
					</li>
					<li><a href="#">Dropdown</a>
						<ul>
							<li><a href="#">Item 1</a>
							</li>
							<li><a href="#">Item 2</a>
							</li>
							<li><a href="#">Item 3</a>
							</li>
							<li><a href="#">Item 4</a>
							</li>
						</ul>
					</li>
					<li><a href="http://www.themeforest.net?ref=egemenerd" target="_blank">External Link</a>
					</li>
					<li><a href="#">Another Dropdown</a>
						<ul>
							<li><a href="#">Item 1</a>
							</li>
							<li><a href="#">Item 2</a>
							</li>
							<li><a href="#">Item 3</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
		<!-- SEARCH BOX -->
		<div class="cv-sidebar-title">
			<h5>SEARCH</h5>
		</div>
		<div class="cv-panel-widget">
			<form id="searchform" class="searchbox">
				<input type="text" id="search" class="searchtext" placeholder="Keyword..." />
				<input type="submit" class="cv-button" name="submit" value="" />
			</form>
		</div>
		<!-- LATEST POSTS WIDGET -->
		<div class="cv-sidebar-title">
			<h5>LATEST POSTS</h5>
		</div>
		<div class="cv-panel-widget">
			<ul class="cv-sidebar-posts">
				<li>
					<div class="cv-sidebar-posts-img">
						<a href="single.html">
							<img src="{{asset('templates/default/images/photos/70.png')}}" alt="" />
						</a>
					</div>
					<a href="single.html" class="cv-sidebar-post-title">Malis imita offend irure nostrud non deserunt</a>
					<p class="cv-sidebar-post-date">21 Oct 2015</p>
				</li>
				<li>
					<div class="cv-sidebar-posts-img">
						<a href="single.html">
							<img src="{{asset('templates/default/images/photos/70.png')}}" alt="" />
						</a>
					</div>
					<a href="single.html" class="cv-sidebar-post-title">Nostrud aute mandaremus, fabulas aute occaecat</a>
					<p class="cv-sidebar-post-date">19 Oct 2015</p>
				</li>
				<li>
					<div class="cv-sidebar-posts-img">
						<a href="single.html">
							<img src="{{asset('templates/default/images/photos/70.png')}}" alt="" />
						</a>
					</div>
					<a href="single.html" class="cv-sidebar-post-title">Nulla aut occaecat. Possumus lorem nostrud doctrina</a>
					<p class="cv-sidebar-post-date">17 Oct 2015</p>
				</li>
				<li>
					<div class="cv-sidebar-posts-img">
						<a href="single.html">
							<img src="{{asset('templates/default/images/photos/70.png')}}" alt="" />
						</a>
					</div>
					<a href="single.html" class="cv-sidebar-post-title">Litteris ipsum mandaremus, et labore esse quae</a>
					<p class="cv-sidebar-post-date">14 Oct 2015</p>
				</li>
			</ul>
		</div>
		<!-- CATEGORIES WIDGET -->
		<div class="cv-sidebar-title">
			<h5>CATEGORIES</h5>
		</div>
		<div class="cv-panel-widget">
			<ul class="cv-sidebar-list">
				<li>
					<a href="single.html">O irure nostrud non</a>
				</li>
				<li>
					<a href="single.html">Eu multos eiusmod deserunt</a>
				</li>
				<li>
					<a href="single.html">Ab cupidatat philosophari</a>
				</li>
				<li>
					<a href="single.html">Commodo dolore te nostrud</a>
				</li>
			</ul>
		</div>
		<!-- FLICKR FEED -->
		<div class="cv-sidebar-title">
			<h5>FLICKR</h5>
		</div>
		<div class="cv-panel-widget">
			<ul id="cv-flickr-box" class="cv-flickr-box"></ul>
			<div class="clear"></div>
		</div>
		<!-- TAGS WIDGET -->
		<div class="cv-sidebar-title">
			<h5>TAGS</h5>
		</div>
		<div class="cv-panel-widget">
			<div class="cv-tags-container">
				<a class="cv-tags" href="#">Voluptate</a>
				<a class="cv-tags" href="#">Deserani</a>
				<a class="cv-tags" href="#">Quo eram</a>
				<a class="cv-tags" href="#">Mentitum amet sit</a>
				<a class="cv-tags" href="#">Cillum</a>
				<a class="cv-tags" href="#">Incurreret</a>
				<a class="cv-tags" href="#">Mauris</a>
				<a class="cv-tags" href="#">Admodum</a>
				<a class="cv-tags" href="#">Singulis</a>
				<a class="cv-tags" href="#">Quit</a>
				<a class="cv-tags" href="#">Eram amet aliqua</a>
			</div>
		</div>
	</div>
</aside>
<!-- MAIN JS FILES -->
<script type="text/javascript" src="{{asset('templates/default/js/jquery-1.11.3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('templates/default/js/jquery-ui-custom.min.js')}}"></script>
<script type="text/javascript" src="{{asset('templates/default/js/jquery.ascensor.min.js')}}"></script>
<script type="text/javascript" src="{{asset('templates/default/js/nerveslider.min.js')}}"></script>
<!-- BACKSTRETCH (HOMEPAGE RIGHT SIDE BG IMAGE) -->
<script type="text/javascript" src="{{asset('templates/default/js/backstretch.min.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function () {
		"use strict";
		jQuery('#home-image').backstretch("{{asset('templates/default/images/lucduong_02.jpg')}}");
	});
</script>
<!-- PORTFOLIO -->
<script type="text/javascript" src="{{asset('templates/default/js/wookmark.js')}}"></script>
<script type="text/javascript" src="{{asset('templates/default/js/portfolio-trigger.js')}}"></script>
<!-- TOOLTIPS -->
<script type="text/javascript" src="{{asset('templates/default/js/jquery.tooltipster.min.js')}}"></script>
<!-- TESTIMONIALS -->
<script type="text/javascript" src="{{asset('templates/default/js/quovolver.js')}}"></script>
<!-- SIDEBAR SCROLLBAR -->
<script type="text/javascript" src="{{asset('templates/default/js/scrollbar.js')}}"></script>
<!-- LIGHTGALLERY -->
<script type="text/javascript" src="{{asset('templates/default/js/lightgallery.js')}}"></script>
<script type="text/javascript" src="{{asset('templates/default/js/galleries.js')}}"></script>
<!-- FLICKR -->
<script type="text/javascript" src="{{asset('templates/default/js/jflickrfeed.min.js')}}"></script>
<!-- GOOGLE MAP -->
<script type="text/javascript" src="{{asset('templates/default/js/googlemap.js')}}"></script>
<!-- CUSTOM JS -->
<script type="text/javascript" src="{{asset('templates/default/js/home-custom.js')}}"></script>
</body>

</html>