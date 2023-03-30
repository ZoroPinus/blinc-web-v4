<?php
include("../connect/session_check.php");


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include('../includes/header.php'); ?>
</head>

<body>
	<?php include('../includes/header_nav.php'); ?>
	<div class="wrapall services-page">

		<!-- SECTION SERVICES -->
		<section class="services-section">
			<div class="container">
				<div class="service-title-txt d-flex flex-column align-items-center">
					<h2 class="services-title text-uppercase">
						Services we offer
					</h2>
					<p class="services-text-desc">
						Helping businesses establish their digital presence and thrive in the online world with our team of developers, designers, and digital strategists.
					</p>
				</div>
				<div class="row flex-column">
					<!-- APPEAR ON MOBILE -->
					<div class="feature-mobile">
						<ul class="nav nav-tabs services-nav-mobile d-flex mx-auto justify-content-center" id="myTab" role="tablist">
							<li class="nav-item service-tab-item" role="presentation">
								<button class="nav-link service-link d-flex flex-column active" id="webDev" data-bs-toggle="tab" data-bs-target="#web" type="button" role="tab" aria-controls="web" aria-selected="true">
									<img src="../images/icons/web-svg.svg" alt="" class="services-icon">
									<span class="services-icon-txt">Web Dev</span>
								</button>
							</li>
							<li class="nav-item service-tab-item" role="presentation">
								<button class="nav-link service-link d-flex flex-column" id="mobileDev" data-bs-toggle="tab" data-bs-target="#mobile" type="button" role="tab" aria-controls="mobile" aria-selected="false">
									<img src="../images/icons/mobile-svg.svg" alt="" class="services-icon">
									<span class="services-icon-txt">Mobile Dev</span>
								</button>
							</li>
							<li class="nav-item service-tab-item" role="presentation">
								<button class="nav-link service-link d-flex flex-column" id="graphicsDesign" data-bs-toggle="tab" data-bs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="false">
									<img src="../images/icons/graphics-svg.svg" alt="" class="services-icon">
									<span class="services-icon-txt">Graphics</span>
								</button>
							</li>
							<li class="nav-item service-tab-item" role="presentation">
								<button class="nav-link service-link d-flex flex-column" id="otherServices" data-bs-toggle="tab" data-bs-target="#other" type="button" role="tab" aria-controls="other" aria-selected="false">
									<img src="../images/icons/other-service-svg.svg" alt="" class="services-icon">
									<span class="services-icon-txt">Other</span>
								</button>
							</li>
						</ul>
					</div>
					<!-- DEFAULT - DESKTOP SIZES -->
					<ul class="nav nav-tabs services-nav d-flex  align-items-center justify-content-center" id="myTab" role="tablist">
						<li class="nav-item service-tab-item" role="presentation">
							<button class="nav-link service-link d-flex flex-column active" id="webDev" data-bs-toggle="tab" data-bs-target="#web" type="button" role="tab" aria-controls="web" aria-selected="true">
								<img src="../images/icons/web-svg.svg" alt="" class="services-icon">
								<span class="services-icon-txt">Web <br class="first-word">Development</span>
							</button>
						</li>
						<li class="nav-item service-tab-item" role="presentation">
							<button class="nav-link service-link d-flex flex-column" id="mobileDev" data-bs-toggle="tab" data-bs-target="#mobile" type="button" role="tab" aria-controls="mobile" aria-selected="false">
								<img src="../images/icons/mobile-svg.svg" alt="" class="services-icon">
								<span class="services-icon-txt">Mobile<br class="first-word"> Development</span>
							</button>
						</li>
						<li class="nav-item service-tab-item" role="presentation">
							<button class="nav-link service-link d-flex flex-column" id="graphicsDesign" data-bs-toggle="tab" data-bs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="false">
								<img src="../images/icons/graphics-svg.svg" alt="" class="services-icon">
								<span class="services-icon-txt">Graphics<br class="first-word"> Design</span>
							</button>
						</li>
						<li class="nav-item service-tab-item" role="presentation">
							<button class="nav-link service-link d-flex flex-column" id="otherServices" data-bs-toggle="tab" data-bs-target="#other" type="button" role="tab" aria-controls="other" aria-selected="false">
								<img src="../images/icons/other-service-svg.svg" alt="" class="services-icon">
								<span class="services-icon-txt">Other <br class="first-word">Services</span>
							</button>
						</li>
					</ul>
					<div class="tab-content services-tab d-flex  align-items-center justify-content-center" id="myTabContent">
						<div class="tab-pane fade show active" id="web" role="tabpanel" aria-labelledby="webDev">
							<div class="row">
								<div class="col-sm-6">
									<div class="services-content">
										<p class="services-sub-title">
										WEB DEVELOPMENT
										</p>
										<h1>Establishing your brand's digital presence</h1>
										<p class="txt-description">Customizing your brand's development project. Ensuring the quality made is exactly to your needs at a customizable and affordable packages.</p>
										<!-- <a href="#" class="services-btn">Learn more</a> -->
									</div>
								</div>
								<div class="col-sm-6">
									<div class="services-content">
										<img src="../images/s-web.webp" alt="" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="mobile" role="tabpanel" aria-labelledby="mobileDev">
							<div class="row">
								<div class="col-sm-6">
									<div class="services-content">
										<p class="services-sub-title">
										MOBILE DEVELOPMENT
										</p>
										<h1>End-to-end mobile app solutions</h1>
										<p class="txt-description">Designed to help businesses build intuitive and engaging mobile applications that enhance user experiences and drive engagement.</p>
										<!-- <a href="#" class="services-btn">Learn more</a> -->
									</div>
								</div>
								<div class="col-sm-6">
									<div class="services-content">
										<img src="../images/s-mobile.webp" alt="" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="services" role="tabpanel" aria-labelledby="graphicsDesign">
							<div class="row">
								<div class="col-sm-6">
									<div class="services-content">
										<p class="services-sub-title">
										GRAPHICS DESIGN
										</p>
										<h1>Visually stunning and impactful designs</h1>
										<p class="txt-description">Delivering a message that connects with your target audience and help stand out in a crowded marketplace.</p>
										<!-- <a href="#" class="services-btn">Learn more</a> -->
									</div>
								</div>
								<div class="col-sm-6">
									<div class="services-content">
										<img src="../images/s-design.webp" alt="" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="otherServices">
							<div class="row">
								<div class="col-sm-6">
									<div class="services-content">
										<p class="services-sub-title">
										RELATED SERVICES
										</p>
										<h1>Enabling the success of a business</h1>
										<p class="txt-description">Open Source & White Label Solutions, Digital & Crypto Asset Marketing, dApp Development, Online Business Consulting, and Trainings & Workshops.</p>
										<!-- <a href="#" class="services-btn">Learn more</a> -->
									</div>
								</div>
								<div class="col-sm-6">
									<div class="services-content">
										<img src="../images/s-others.webp" alt="" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- Website Prices -->
		<section class="section-price my-5">
			<div class="container">

				<!-- MOBILE/TABLET -->
				<div class="price-nav d-flex justify-content-center mobile">
					<div class="row">
						<!-- basic -->
						<div class="col-12">
							<div class="price-tab-item card card-body h-100" role="presentation">
								<div class="price-link">
									<div class="card-header-bg d-flex align-items-center">
										<h5 class="card-title-color mx-auto">Basic</h5>
									</div>
									<div class="ul-div d-flex flex-column align-items-center">
										<ul class="card-text d-flex flex-column align-items-center">
											<li>Premium template</li>
											<li>Contact form</li>
											<li>Lead generation form</li>
											<li>Social media integration</li>
											<li>Mobile responsive  bdesign</li>
										</ul>
										<div class="price-num text-center mb-5">
											<span>starts at</span>
											<span>&#8369; 32,000</span>
											<h1 class="gradient-price ">&#8369; 30,000</h1>
										</div>
										<div class="price-desc text-center">
											<p class="txt-description mb-5">Best for small businesses, individuals, or organizations that are just starting out and need a simple online presence to showcase their products, services, or information.</p>
											<a href="../contact" class="default-btn">Contact Us</a>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- end col -->
						
						<!-- Standard -->
						<div class="col-12">
							<div class="price-tab-item card card-body h-100" role="presentation">
								<div class="price-link">
									<div class="card-header-bg d-flex align-items-center">
										<h5 class="card-title-color mx-auto">Standard</h5>
									</div>
									<div class="ul-div d-flex flex-column align-items-center">
										<ul class="card-text d-flex flex-column align-items-center">
											<li>Basic design customization</li>
											<li>5 custom pages</li>
											<li>Basic SEO setup</li>
											<li>Social media integration</li>
											<li>Mobile responsive design</li>
										</ul>
										<div class="price-num text-center mb-5">
											<span>starts at</span>
											<span>&#8369; 65,000</span>
											<h1 class="gradient-price ">&#8369; 60,000</h1>
										</div>
										<div class="price-desc text-center">
											<p class="txt-description mb-5">Best for small to medium-sized businesses that require more features and functionalities than a basic website can offe, a more comprehensive and flexible solution.</p>
											<a href="../contact" class="default-btn">Contact Us</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Premium -->
						<div class="col-12">
							<div class="price-tab-item card card-body h-100" role="presentation">
								<div class="price-link">
									<div class="card-header-bg d-flex align-items-center">
										<h5 class="card-title-color mx-auto">Premium</h5>
									</div>
									<div class="ul-div d-flex flex-column align-items-center">
										<ul class="card-text d-flex flex-column align-items-center">
											<li>Design customization</li>
											<li>SEO Setup</li>
											<li>Social media integration</li>
											<li>3 rounds of revision</li>
											<li>60 days warranty</li>
										</ul>
										<div class="price-num text-center mb-5">
											<h1 class="gradient-price ">&#8369; 100,000</h1>
										</div>
										<div class="price-desc text-center">
											<p class="txt-description mb-5">Best for medium to large-sized businesses that require a highly customized and advanced web presence to effectively promote their products or services.</p>
											<a href="../contact" class="default-btn">Contact Us</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Customize -->
						<div class="col-12">
							<div class="price-tab-item card card-body h-100" role="presentation">
								<div class="price-link">
									<div class="card-header-bg d-flex align-items-center">
										<h5 class="card-title-color mx-auto">Customize</h5>
									</div>
									<div class="ul-div d-flex flex-column align-items-center">
										<div class="price-desc text-center">
											<p class="txt-description mb-5" style="font-size: 2rem">Contact us now to have a free consultation for website customization.</p> 
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- end row -->
				</div>

				<!-- DESKTPOP SIZES -->
				<div class="nav nav-tabs price-nav d-flex justify-content-center" id="myTabPice" role="tablist">
					<!-- basic -->
					<div class="row">
						<div class="col-lg-3">
							<div class="nav-item price-tab-item card card-body h-100" role="presentation">
								<button class="price-link nav-link active" id="basicButton" data-bs-toggle="tab" data-bs-target="#basic" type="button" role="tab" aria-controls="basic" aria-selected="true">
									<div class="card-header-bg d-flex align-items-center">
										<h5 class="card-title-color mx-auto">Basic</h5>
									</div>
									<div class="ul-div">
										<ul class="card-text d-flex flex-column">
										<li>Premium template</li>
										<li>Contact form</li>
										<li>Lead generation form</li>
										<li>Social media integration</li>
										<li>Mobile responsive design</li>
										</ul>
										<div class="price-num text-center">
											<span>starts at</span>
											<span>&#8369; 32,000</span>
											<h1 class="gradient-price ">&#8369; 30,000</h1>
										</div>
									</div>
								</button>
							</div>
						</div>
						<!-- Standard -->
						<div class="col-lg-3">
							<div class="nav-item price-tab-item card card-body h-100" role="presentation">
								<button class="price-link nav-link" id="basicButton" data-bs-toggle="tab" data-bs-target="#standard" type="button" role="tab" aria-controls="basic" aria-selected="true">
									<div class="card-header-bg d-flex align-items-center">
										<h5 class="card-title-color mx-auto">Standard</h5>
									</div>
									<div class="ul-div">
										<ul class="card-text d-flex flex-column">
											<li>Basic design customization</li>
											<li>5 custom pages</li>
											<li>Basic SEO setup</li>
											<li>Social media integration</li>
											<li>Mobile responsive design</li>
										</ul>
										<div class="price-num text-center">
											<span>starts at</span>
											<span>&#8369; 65,000</span>
											<h1 class="gradient-price ">&#8369; 60,000</h1>
										</div>
									</div>
								</button>
							</div>
						</div>
						<!-- Premium -->
						<div class="col-lg-3">
							<div class="nav-item price-tab-item card card-body h-100" role="presentation">
								<button class="price-link nav-link" id="basicButton" data-bs-toggle="tab" data-bs-target="#premium" type="button" role="tab" aria-controls="basic" aria-selected="true">
									<div class="card-header-bg d-flex align-items-center">
										<h5 class="card-title-color mx-auto">Premium</h5>
									</div>
									<div class="ul-div">
										<ul class="card-text d-flex flex-column">
											<li>Design customization</li>
											<li>SEO Setup</li>
											<li>Social media integration</li>
											<li>3 rounds of revision</li>
											<li>60 days warranty</li>
										</ul>
										<div class="price-num text-center premium">
											<span>starts at</span>
											<span>&#8369; 115,000</span>
											<h1 class="gradient-price ">&#8369; 100,000</h1>
										</div>
									</div>
								</button>
							</div>
						</div>
						<!-- Customize -->
						<div class="col-lg-3">
							<div class="nav-item price-tab-item card card-body h-100" role="presentation">
								<button class="price-link nav-link d-flex flex-column text-center justify-content-center" id="basicButton" data-bs-toggle="tab" data-bs-target="#customize" type="button" role="tab" aria-controls="basic" aria-selected="true">
									<div class="card-header-bg customize-header d-flex mx-auto mb-auto">
										<h5 class="card-title-color my-auto mx-auto">Customize</h5>
									</div>
									<div class="ul-div customize-info d-flex flex-column align-items-center">
										<p class="customize-txt mb-auto" style="font-size: 2rem">
											Contact us now to have a free consultation for website customization.
										</p>
									</div>
								</button>
							</div>
						</div>
					</div> <!-- end row -->
					

					<div class="tab-content price-tab d-flex  align-items-center justify-content-center" id="myTabContent">
						<!-- basic -->
						<div class="tab-pane prices-tab-pane fade show active" id="basic" role="tabpanel" aria-labelledby="basicButton">
							<div class="row d-flex justify-content-center">
								<div class="col-lg-10 price-info">
									<div class="price-txt-box d-flex flex-column">
										<p class="txt-description">Best for small businesses, individuals, or organizations that are just starting out and need a simple online presence to showcase their products, services, or information.</p>
										<a href="../contact" class="services-btn">Contact Us</a>
									</div>
								</div>
							</div>
						</div>
						<!-- standard -->
						<div class="tab-pane prices-tab-pane fade" id="standard" role="tabpanel" aria-labelledby="basicButton">
							<div class="row d-flex justify-content-center">
								<div class="col-lg-10 price-info">
									<div class="price-txt-box d-flex flex-column">
										<p class="txt-description">Best for small to medium-sized businesses that require more features and functionalities than a basic website can offe, a more comprehensive and flexible solution.</p>
										<a href="../contact" class="services-btn">Contact Us</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Premium -->
						<div class="tab-pane prices-tab-pane fade" id="premium" role="tabpanel" aria-labelledby="basicButton">
							<div class="row d-flex justify-content-center">
								<div class="col-lg-10 price-info">
									<div class="price-txt-box d-flex flex-column">
										<p class="txt-description">Best for medium to large-sized businesses that require a highly customized and advanced web presence to effectively promote their products or services.</p>
										<a href="../contact" class="services-btn">Contact Us</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Customize -->
						<div class="tab-pane prices-tab-pane fade" id="customize" role="tabpanel" aria-labelledby="basicButton">
							<div class="row d-flex justify-content-center">
								<div class="col-lg-10 price-info">
									<div class="price-txt-box d-flex flex-column">
										<p class="txt-description">Best for businesses and organizations that want to create a unique and tailored online presence that aligns with their brand, values, and goals.</p>
										<a href="../contact" class="services-btn">Contact Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- How it works -->
		<section class="section-how section-default my-5">
			<div class="container">
				<div class="text-center">
					<h3 class="section-title">How it Works</h3>
				</div>
				<div class="how-content d-flex justify-content-center align-items-center">
					<div class="nav how-nav flex-column align-items-center justify-content-center nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<button class="nav-link active " id="v-pills-one-tab" data-bs-toggle="pill" data-bs-target="#v-pills-one" type="button" role="tab" aria-controls="v-pills-one" aria-selected="true">01</button>
						<button class="nav-link" id="v-pills-two-tab" data-bs-toggle="pill" data-bs-target="#v-pills-two" type="button" role="tab" aria-controls="v-pills-two" aria-selected="false">02</button>
						<button class="nav-link" id="v-pills-three-tab" data-bs-toggle="pill" data-bs-target="#v-pills-three" type="button" role="tab" aria-controls="v-pills-three" aria-selected="false">03</button>
					</div>

					<div class="tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-one" role="tabpanel" aria-labelledby="v-pills-one-tab" tabindex="0">
							<div class="row how-content-box">
								<div class="col-8 how-card">
									<h5 class="card-title">STAY IN TOUCH</h5>
									<p class="services-text-desc">Choose the right package for you and if you have any inquiries and concerns, please don't hesitate to contact us.
										If you're eager to continue, we'll schedule meeting consultations for ideas, proposals, and everything you need to know about our process.
										<br><br>
										Don't worry, there's not harm in asking questions and inquiring. We’ll surely get back to you.
									</p>
									<!-- <p class="services-text-desc">Don't worry, there's not harm in asking questions and inquiring. We’ll surely get back to you.</p> -->
								</div>
								<div class="col-4">
									<img src="" alt="">
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-two" role="tabpanel" aria-labelledby="v-pills-two-tab" tabindex="0">
							<div class="row how-content-box">
								<div class="col-8 how-card">
									<h5 class="card-title">ON BOARD</h5>
									<p class="services-text-desc">After choosing the right package for you, contact us for any additional information and concerns.
										<br><br>
										We assure you that we are fully committed and passionate on our works.
									</p>
									<!-- <p class="services-text-desc">We assure you that we are fully committed and passionate on our works.</p> -->
								</div>
								<div class="col-4">
									<img src="" alt="">
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="v-pills-three" role="tabpanel" aria-labelledby="v-pills-three-tab" tabindex="0">
							<div class="row how-content-box">
								<div class="col-8 how-card">
									<h5 class="card-title">CONCLUSION</h5>
									<p class="services-text-desc">After your project is done, we will comply with the contracts as to whatever stated there and we'll keep a follow-up communication to ensure a satisfactory work.
										<br><br>
										We'll be grateful for trusting our company and the pleasure of being a part of the start of the success of your endeavors.
									</p>
									<!-- <p class="services-text-desc">We'll be grateful for trusting our company and the pleasure of being a part of the start of the success of your endeavors.</p> -->
								</div>
								<div class="col-4">
									<img src="" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- End Section -->
		<?php include('../includes/cta.php'); ?>
		<?php include('../includes/footer.php'); ?>
	</div>
	<script type="text/javascript" src="../js/global.js"></script>
	<script type="text/javascript">
		AOS.init();
	</script>
</body>

</html>