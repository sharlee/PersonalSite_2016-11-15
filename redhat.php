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
										<h2>Red Hat Summer '16 Internship</h2>	
									</header>

									<cms:editable name='summary' type='richtext'>
										<p>For my summer internship, I was an Interaction Design Intern at <a href="https://www.redhat.com/en">Red Hat</a> on the End-to-End team, working on their <a href="https://access.redhat.com/">Customer Portal.</a>
										 My internship consisted of redesigning all of their blog pages, profile pages, and email notifications for desktop and mobile. 
										 I also helped with A/B testing the Search UI experience on the Customer Portal.
									</p>
									</cms:editable>

									<div class="table-wrapper">
										<table class="alt">
											<thead>
												<tr>
													<th>Client</th>
													<th>Date</th>
													<th>Technology</th>
													<th>Skills</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Red Hat</td>
													<td>Summer 2016 - present</td>
													<td>InDesign, Sketch, Proto.io, UXPin, InVision</td>
													<td>Interviews, competitive analysis, storyboarding, paper and digital wireframing, prototyping, user testing</td>
												</tr>
											</tbody>
										</table>
									</div>

									<hr class="major">

									<h3>Initial Wireframes</h3>

									<div class="posts">
										
										
										<div class="row">
											<div class="6u 12u$(small)">

												<cms:editable name='image_1' type='richtext'>
													<a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
												</cms:editable>
										
											</div>
											<div class="6u$ 12u$(small)">

												<cms:editable name='image_2' type='richtext'>
													<a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
												</cms:editable>
											</div>

											<div class="6u 12u$(small)">

												<cms:editable name='image_3' type='richtext'>
													<a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
												</cms:editable>
										
											</div>
											<div class="6u$ 12u$(small)">

												<cms:editable name='image_4' type='richtext'>
													<a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
												</cms:editable>
											</div>
										
										</div>
									</div>

									<hr class="major" />

									<h3>Live Screenshots</h3>

								<div class="posts">	
									<div class="row">

												<p class="caption">Homepage - for seeing the list of lobbies</p>
												<cms:editable name='image_5' type='richtext'>
													<a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
												</cms:editable>

												<p class="caption">Creating a lobby modal - for when someone wants to create a new matchmaking lobby</p>
												<cms:editable name='image_6' type='richtext'>
													<a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
												</cms:editable>
											
												<p class="caption">In a lobby - choosing which team and class to join</p>
												<cms:editable name='image_7' type='richtext'>
													<a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
												</cms:editable>																		

												<p class="caption">Admin panel - what a lobby looks like from an admin perspective</p>
												<cms:editable name='image_8' type='richtext'>
													<a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
												</cms:editable>										
										
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