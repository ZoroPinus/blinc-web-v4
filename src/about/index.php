<?php
include("../connect/session_check.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('../includes/header.php'); ?>
</head>

<body>

	<div class="wrapall about-wrap">
		<header>
			<?php include('../includes/header_nav.php'); ?>
			<!-- HERO SECTION -->
			<section class="hero-section">
				<div class="container h-100 d-flex align-items-center justify-content-center">
					<div class="row align-items-center justify-content-center">
						<div class="hero-content text-center d-flex flex-column">
							<h2 class="hero-title typewrite" style="font-size: 10rem"
							data-period="2000" data-type='[ "BUILDING A BETTER FUTURE", "CHANGING THE GAME", "LEADING THE CHANGE" ]'><span class="wrap"></span>
							</h2>
							<h2 class="hero-title">Bit by Bit.</h2>
						</div>
					</div>
				</div>
			</section>
		</header>
		<!-- About section -->
		<section class="services-section">
			<div class="container">
				<div class="service-title-txt about-content ">
					<h2 class="services-title ">
						About Bitshares Labs Inc.
					</h2>
					<div class="row">
						<div class="col-md about-cont">
							<h4 class="about-subtitle">WHO WE ARE</h4>
							<h2 class="about-title">Passionate. Competitive. Flexible.</h2>
							<p class="about-text">We are a start-up that offers blockchain solutions as well
								as web development and design services to businesses globally
								from Baguio City, Philippines.</p>
						</div>
						<div class="col-md">
							<img class="img-fluid" src="../images/who-we-are.png" alt="what we do image">
						</div>
					</div>
					<div class="row">
						<div class="col-md switch-1 ">
							<img class="img-fluid" src="../images/what-we-do.png" alt="what we do image">
						</div>
						<div class="col-md switch-2 about-cont">
							<h4 class="about-subtitle">WHAT WE DO</h4>
							<h2 class="about-title">Empower. Develop. Inspire.</h2>
							<p class="about-text">Our company offers an integrated Blockchain Technology to modernize online transactions and businesses, including Digital and Crypto Asset marketing and online consulting.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md about-cont ">
							<h4 class="about-subtitle">WHAT TO EXPECT FROM US</h4>
							<h2 class="about-title">Reliability. Quality. Affordability</h2>
							<p class="about-text">We deliver fully functional websites on time and within your budget. Get ready to serve your customers on the global stage.</p>
						</div>
						<div class="col-md ">
							<img class="img-fluid" src="../images/what-to-expect.png" alt="what we do image">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Mission section -->
		<section class=" gradient-bg-light " style="height:217px">
			<div class="container h-100 d-flex align-items-center justify-content-center text-center">
				<h4 class="about-goal">
					“Our goal is to be the premier web development solutions provider in the ASEAN Region <br>
					specializing in e-commerce and blockchain technology integration.”
				</h4>
			</div>
		</section>
		<!-- Team Section -->
		<section class="team-section container">
			<!-- The team -->
			<div class="container about-content">
				<h6 class="about-subtitle">THE TEAM</h6>
				<h4 class="about-title">Team Competetive Advantage</h4>
				<p class="about-text">Our team is our strength. We have skilled designers, programmers, and developers specializing in <br>
					various areas of web design. We follow industry standards, meet targets, and prioritize building strong <br>
					relationships with our partners and clients.</p>
			</div>
			<div class="img-container">
				<img class="team-img-1" src="../images/team-image.png" alt="team image">
				<!-- <div class="bg-primary img-1" style="width:922px; height:510px;"></div> -->
				<img class="team-img-2 position-absolute bg-white rounded-3" src="../images/team-logo.png" />
			</div>
			<div class="container ">
				<div class="row">
					<div class="col-lg-6"></div>
					<div class="ms-auto col-lg-6 about-content">
						<h6 class="about-subtitle">OUR SERVICE COMMITMENT</h6>
						<h4 class="about-title">Company Culture</h4>
						<p class="about-text">Our company advocates the integration of a highly technological <br>
							methodologies which practice the integration of blockchain in any online and/<br>
							or cyber related matters. We promote a culture of fast but secure<br>
							transactions through blockchain integration.</p>
					</div>

				</div>
			</div>
		</section>
		<footer>
			<?php include('../includes/footer.php'); ?>
		</footer>
	</div>
	<script type="text/javascript" src="../js/global.js"></script>
	<script type="text/javascript">
		AOS.init();
	</script>
</body>

</html>