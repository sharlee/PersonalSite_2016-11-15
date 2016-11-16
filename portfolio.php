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


							<!-- Section -->
								<section>
									<header class="major">
										<h2>Portfolio</h2>
										
									</header>

									<p id="portfolio-subtitle">Resume can be found <a href="#" id="resume-link">HERE</a>.</p>
									
									<div class="posts">
										
										
										<div class="4u 12u$(medium)">
										<cms:editable name='tf2gg' type='richtext'>
											<a href="portfolio/tf2gg.php" class="image"><img src="images/pic01.jpg" alt="" /></a>
								
											<h3>TF2.gg - Competitive Matchmaking</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
										</cms:editable>
											<ul class="actions">
												<li><a href="portfolio/tf2gg.php" class="button">See More</a></li>
											</ul>
										</div>
				
										
										<div class="4u 12u$(medium)">
										<cms:editable name='redhat' type='richtext'>
											<a href="portfolio/tf2gg.php" class="image"><img src="images/pic01.jpg" alt="" /></a>
								
											<h3>Red Hat Summer '16 Internship</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
										</cms:editable>
											<ul class="actions">
												<li><a href="portfolio/tf2gg.php" class="button">See More</a></li>
											</ul>
										</div>


										<div class="4u 12u$(medium)">
										<cms:editable name='tf2gg' type='richtext'>
											<a href="portfolio/tf2gg.php" class="image"><img src="images/pic01.jpg" alt="" /></a>
								
											<h3>TF2.gg - Competitive Matchmaking</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
										</cms:editable>
											<ul class="actions">
												<li><a href="portfolio/tf2gg.php" class="button">See More</a></li>
											</ul>
										</div>


										<article>
											<a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
											<h3>Feugiat lorem aenean</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
											<h3>Amet varius aliquam</h3>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
											<ul class="actions">
												<li><a href="#" class="button">More</a></li>
											</ul>
										</article>
										
									</div>
								</section>

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