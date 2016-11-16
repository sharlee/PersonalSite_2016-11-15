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
										<h2>TF2.gg - Competitive Matchmaking</h2>	
									</header>

									<cms:editable name='summary' type='richtext'>
									<p>TF2.gg was a lobby system created for competitive players of the first-person shooter game Team Fortress 2. 
										This web app featured an ELO-based ranking system, our own hosted servers, and full Mumble integration. 
										Players first start on the lobby homepage, where they have a choice of picking which lobby they would like to
										join based on map choice, needed player requirements and/or the competitive level of the lobby. After picking 
										the lobby, they are directed to a page that shows the current players and status of the lobby. They are then 
										able to pick a class and connect directly to the game server and Mumble when the lobby is ready.
										<br><br>
										After three months of work, the co-developer and I held several rounds of moderated user tests where we gathered 
										players to test the system and provide us feedback through a Google survey. After incorporating their feedback and 
										fixing some major bugs, we then left the system live for players to use. At our peak, we had around 50 players online
										at a time.
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
													<td>Self</td>
													<td>Fall 2013</td>
													<td>HTML/CSS, Javascript, Photoshop</td>
													<td>Wireframing, programming, user testing, promoting</td>
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

												<div class="table-wrapper table-margin">
													<table class="alt center">
													<tbody>
													<tr>
													<td class="table-caption">Homepage - for seeing the list of lobbies</td>

													</tr>
													</tbody>
													</table>
												</div>

												<cms:editable name='image_5' type='richtext'>
													<a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
												</cms:editable>


												<div class="table-wrapper table-margin">
													<table class="alt">
													<tbody>
													<tr>
													<td class="table-caption">Creating a lobby modal - for when someone wants to create a new matchmaking lobby</td>

													</tr>
													</tbody>
													</table>
												</div>
												<cms:editable name='image_6' type='richtext'>
													<a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
												</cms:editable>
											
												<cms:editable name='image_7' type='richtext'>
													<a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
												</cms:editable>																		

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