<?php require_once( 'couch/cms.php' ); ?>

<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->


<html>
	<head>
		<title>Sharon Lee - UI/UX Designer</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link href="https://fonts.googleapis.com/css?family=Quattrocento+Sans" rel="stylesheet">
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
										<ul>
										  <li><a href="index.php">ABOUT</a></li>
										  <li><a href="portfolio.php">PORTFOLIO</a></li>
										  <li><a href="music.php">MUSIC</a></li>
										  <li><a href="contact.php">CONTACT</a></li>
										</ul>
								
									<ul class="icons">
										<li><a href="mailto:sharonleeweb@gmail.com" class="icon fa-envelope"><span class="label">Email</span></a></li>
										<li><a href="#" class="icon fa-linkedin"><span class="label">Linkedin</span></a></li>
										<li><a href="#" class="icon fa-youtube"><span class="label">Youtube</span></a></li>
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									</ul>							
								</header>
						

							<!-- Banner -->
							<cms:editable name='main_content' type='richtext'>
								<section id="banner">
									<div class="content">
										<header>
											<h1>Sharon Lee - UX Designer & Musician</h1>
											<p>WHO AM I?</p>
										</header>
										<p>I’m a User Experience Designer who is passionate about creating digital interfaces that will excite and motivate users to use them. While my favorite part of UX is wireframing and rapid prototyping, I’m often participating in a variety of other UX activities: user research, usability testing, competitive analysis… and some non-UX activites too: graphic design, front end development, and video editing. Let me help you create an innovative yet practical user experience!
										<br><br>
										I’m also a private violin and viola teacher at the Atlanta Music Academy. Check out my YouTube channel for videos of myself and my students playing.</p>
									</div>
									<span class="image object">
										<img src="images/pic10.jpg" alt="" />
									</span>
								</section>
							</cms:editable>
						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>

<?php COUCH::invoke(); ?>