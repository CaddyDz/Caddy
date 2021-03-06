<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="Modern web developer, laravel artisan">
	<meta name="author" content="Salim Djerbouh">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Salim Djerbouh</title>
	<link rel="stylesheet" href="/assets/css/color.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Mono|Inconsolata" rel="stylesheet">
	<link href="https://cdn.materialdesignicons.com/2.0.46/css/materialdesignicons.min.css" rel="stylesheet">
</head>

<body>
	<!--Header-->
	<header class="main-header" style="background-image: url(/assets/img/img_article_photo.jpg)">
		<div class="container">
			<div class="row personal-profile">
				<div class="col-md-4 personal-profile__avatar">
					<img src="assets/img/img_avatar.jpg" alt="avatar">
				</div>
				<div class="col-md-8">
					<p class="personal-profile__name">Salim Djerbouh</p>
					<p class="personal-profile__work">backend developer, Software engineer</p>
					<div class="personal-profile__contacts">
						<dl class="contact-list contact-list__opacity-titles">
							<dt>Age:</dt>
							<dd>{{ \Carbon\Carbon::create('1994-10-02')->diff(now())->y }}</dd>
							<dt>Phone:</dt>
							<dd><a href="tel:+213551081911">+213551081911</a></dd>
							<dt>Email:</dt>
							<dd><a href="mailto:salim@zidweb.com">salim@zidweb.com</a></dd>
							<dt>Address:</dt>
							<dd>Akid Lotfi, Oran, Algeria</dd>
						</dl>
					</div>
					<p class="personal-profile__social">
						<a href="https://github.com/CaddyDz" target="_blank"><i class="fa fa-github"></i></a>
						<a href="https://linkedin.com/in/CaddyDz" target="_blank"><i class="fa fa-linkedin-square"></i></a>
						<a href="https://facebook.com/saly3301" target="_blank"><i class="fa fa-facebook-square"></i></a>
					</p>
				</div>
			</div>
		</div>
	</header>
	<!--Header-->

	<section id="hello" class="container section">
		<div class="row">
			<div class="col-md-10">
				<h2 id="hello_header" class="section__title">Hi_</h2>
				<p class="section__description">
					I am senior Web developer able to build a Web presence from the ground up - from concept,
					navigation,
					layout and programming to UX and SEO. Skilled at writing well-designed, testable and efficient code
					using current best practices in Web development. Fast learner, hard worker and team player who is
					proficient in an array of scripting languages and multimedia Web tools.
				</p>
				<a href="{{ route('cv') }}" class="section_btn site-btn">
					<img src="/assets/img/img_btn_icon.png">
					Download CV
				</a>
			</div>
		</div>
	</section>
	<section id="resume" class="container section">
		<div class="row">
			<div class="col-md-10">
				<h2 id="resume_header" class="section__title" style="text-indent: 0px;">Resume_</h2>
				<p class="section__description">
					Current Backend Engineer and DevOps assist at Belgian company Shyfter SRL,
					Chief Technology Officer and Lead Developer at start-up company Zidweb. 5+ years experience
					specializing in the backend development, infrastructure automation, and data structures and pattern
					architecture. Super nerd who loves Vim, Linux and OS X and enjoys to customize all of the
					development environment. Interested in devising a better problem-solving method for challenging
					tasks, and learning new technologies and tools if the need arises.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 section__resume resume-list">
				<h3 class="resume-list_title">education</h3>
				<div class="resume-list__block">
					<p class="resume-list__block-title">Harvard CS50</p>
					<p class="resume-list__block-date">Oct. 2017 - Jan. 2018</p>
					<p>
						Harvard University, passed final tests creating a web server and reverse proxy in C.
					</p>
				</div>
				<div class="resume-list__block">
					<p class="resume-list__block-title">Crash Course</p>
					<p class="resume-list__block-date">Feb. 2017 - Dec. 2017</p>
					<p>
						Followed the course with enthusiasm and practice upon theory, briefly dabbled in OSDev as a
						result.
					</p>
				</div>
				<div class="resume-list__block">
					<p class="resume-list__block-title">USTHB University</p>
					<p class="resume-list__block-date">Sep. 2016 - Oct. 2017</p>
					<p>
						First year Maths and Computer Science, dropped out due to outdated material and language barrier
						(French), switched to self education
					</p>
				</div>
				<div class="resume-list__block">
					<p class="resume-list__block-title">Lounici Ali University</p>
					<p class="resume-list__block-date">Sep. 2013 - Jan. 2016</p>
					<p>
						Final year English literature, dropped out due to lack of interest, switched to computer science
					</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 section__resume resume-list">
				<h3 class="resume-list_title">employment</h3>
				<div class="resume-list__block">
					<p class="resume-list__block-title">Shyfter, SRL.</p>
					<p class="resume-list__block-date">Feb. 2021 - Present</p>
					<p>
						Backend Engineer, DevOps Assist
					</p>
				</div>
				<div class="resume-list__block">
					<p class="resume-list__block-title">Zidweb, LLC.</p>
					<p class="resume-list__block-date">Feb. 2020 - Feb. 2021</p>
					<p>
						Co-Founder, CTO and Lead Developer
					</p>
				</div>
				<div class="resume-list__block">
					<p class="resume-list__block-title">Didata LLC.</p>
					<p class="resume-list__block-date">March. 2020 - April. 2020</p>
					<p>
						Full stack Software Engineer
					</p>
				</div>
				<div class="resume-list__block">
					<p class="resume-list__block-title">Upwork.</p>
					<p class="resume-list__block-date">Feb. 2020</p>
					<p>
						Freelance Backend developer
					</p>
				</div>
				<div class="resume-list__block">
					<p class="resume-list__block-title">A-Tech Solutions LLC.</p>
					<p class="resume-list__block-date">Jan. 2019 - March. 2019</p>
					<p>
						Full Stack web developer
					</p>
				</div>
				<div class="resume-list__block">
					<p class="resume-list__block-title">SARL TPHST.</p>
					<p class="resume-list__block-date">Feb. 2018 - Sep. 2019</p>
					<p>
						International Relations Consulting and IT support
					</p>
				</div>
				<div class="resume-list__block">
					<p class="resume-list__block-title">Bitshopit</p>
					<p class="resume-list__block-date">Apr. 2018 - Dec. 2018</p>
					<p>
						Co-Founder and Lead Developer
					</p>
				</div>
				<div class="resume-list__block">
					<p class="resume-list__block-title">AlgoTech Orestor LLC.</p>
					<p class="resume-list__block-date">Mar. 2017 - Dec. 2017</p>
					<p>
						Lead developer and system admin
					</p>
				</div>
				<div class="resume-list__block">
					<p class="resume-list__block-title">MNI Martship</p>
					<p class="resume-list__block-date">Jun. 2017, Aug. 2017</p>
					<p>
						Full stack web developer
					</p>
				</div>
			</div>
		</div>
		<div class="row section__resume progress-list js-progress-list">
			<div class="col-md-12">
				<h3 class="progress-list__title">general skills</h3>
			</div>
			<div class="col-md-5 mr-auto">
				<div class="progress-list__skill">
					<p>
						<span class="progress-list__skill-title">Laravel</span>
						<span class="progress-list__skill-value">90%</span>
					</p>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="progress-list__skill">
					<p>
						<span class="progress-list__skill-title">MySQL</span>
						<span class="progress-list__skill-value">70%</span>
					</p>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="progress-list__skill">
					<p>
						<span class="progress-list__skill-title">Redis</span>
						<span class="progress-list__skill-value">90%</span>
					</p>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="progress-list__skill">
					<p>
						<span class="progress-list__skill-title">DevOps</span>
						<span class="progress-list__skill-value">80%</span>
					</p>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
			</div>
			<div class="col-md-5 mr-auto">
				<div class="progress-list__skill">
					<p>
						<span class="progress-list__skill-title">VueJS</span>
						<span class="progress-list__skill-value">80%</span>
					</p>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="progress-list__skill">
					<p>
						<span class="progress-list__skill-title">Bootstrap</span>
						<span class="progress-list__skill-value">60%</span>
					</p>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="progress-list__skill">
					<p>
						<span class="progress-list__skill-title">git</span>
						<span class="progress-list__skill-value">90%</span>
					</p>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
				<div class="progress-list__skill">
					<p>
						<span class="progress-list__skill-title">NuxtJS</span>
						<span class="progress-list__skill-value">80%</span>
					</p>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Contact-->
	<div class="background" style="background-image: url(assets/img/img_bg_main.jpg)">
		<div id="contact" class="container section">
			<div class="row">
				<div class="col-md-12">
					<p id="contacts_header" class="section__title">Get in touch_</p>
				</div>
			</div>
			<div class="row contacts">
				<div class="col-md-5 col-lg-4">
					<div class="contacts__list">
						<dl class="contact-list">
							<dt>Phone:</dt>
							<dd><a href="tel:+213551081911">+213551081911</a></dd>
							<dt>Skype:</dt>
							<dd><a href="skype:tbitw.mestery">tbitw.mestery</a></dd>
							<dt>Email:</dt>
							<dd><a href="mailto:salim@zidweb.com">salim@zidweb.com</a></dd>
						</dl>
					</div>
					<div class="contacts__social">
						<ul>
							<li>
								<a href="https://facebook.com/saly3301" target="_blank">
									<i class="fa fa-facebook-square"></i>
									Facebook
								</a>
							</li>
							<li>
								<a href="https://linkedin.com/in/CaddyDz" target="_blank">
									<i class="fa fa-linkedin-square"></i>
									Linkedin
								</a>
							</li>
							<li>
								<a href="https://github.com/CaddyDz" target="_blank">
									<i class="fa fa-github"></i>
									GitHub
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-7 col-lg-5">
					<div class="contacts__form">
						<p class="contacts__form-title">Or just write me a letter here_</p>
						<form class="js-form">
							<div class="form-group">
								<input class="form-field js-field-name" type="text" placeholder="Your name" required>
								<span class="form-validation"></span>
								<span class="form-invalid-icon"><i class="mdi mdi-close" aria-hidden="true"></i></span>
							</div>
							<div class="form-group">
								<input class="form-field js-field-email" type="email" placeholder="Your e-mail" required>
								<span class="form-validation"></span>
								<span class="form-invalid-icon"><i class="mdi mdi-close" aria-hidden="true"></i></span>
							</div>
							<div class="form-group">
								<textarea class="form-field js-field-message" placeholder="Type the message here" required></textarea>
								<span class="form-validation"></span>
								<span class="form-invalid-icon"><i class="mdi mdi-close" aria-hidden="true"></i></span>
							</div>
							<button class="site-btn site-btn--form" type="submit" value="Send">Send</button>
						</form>
					</div>
					<div class="footer">
						<p>?? {{ date('Y') }} Salim Djerbouh. All Rights Reserved</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Contact-->
	<script src="/assets/js/jquery-2.2.4.min.js"></script>
	<script src="/assets/js/popper.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	<script src="/assets/js/menu.js"></script>
	<script src="/assets/js/jquery.waypoints.js"></script>
	<script src="/assets/js/progress-list.js"></script>
	<script src="/assets/js/section.js"></script>
	<script src="/assets/js/portfolio-filter.js"></script>
	<script src="/assets/js/slider-carousel.js"></script>
	<script src="/assets/js/mobile-menu.js"></script>
	<script src="/assets/js/contacts.js"></script>
	<script src="/assets/js/mbclicker.min.js"></script>
	<script src="/assets/js/site-btn.js"></script>
	<script src="/assets/js/style-switcher.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-0TKDEBR8TB"></script>
	<script>
	 window.dataLayer = window.dataLayer || [];

	 function gtag() {
	  dataLayer.push(arguments);
	 }
	 gtag('js', new Date());

	 gtag('config', 'G-0TKDEBR8TB');
	</script>
</body>

</html>
