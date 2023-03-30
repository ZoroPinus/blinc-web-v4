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
	<div class="wrapall internship-wrap">
		<header>
			<!-- HERO SECTION -->
			<section class="hero-section employment-hero">
				<div class="text-center w-50 mx-auto hero-employment">
					<div class="hero-content text-center d-flex flex-column ">
						<div class="d-flex flex-column align-items-start">
							<h4 class="row employment-text-1">YOUR</h4>
							<h2 class="employment-title row ">FUTURE</h2>
						</div>
						<div class="d-flex flex-column align-items-end">
							<h2 class="employment-title row">BEGINS</h2>
							<h4 class="row employment-text-2">HERE</h4>
						</div>
					</div>
				</div>
			</section>
		</header>

		<section class="employment-section">
			<div id="carouselExampleIndicators" class="carousel slide">
				<div class="carousel-indicators align-items-center">
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="card-indicator active" aria-current="true" aria-label="Slide 1">
						<ion-icon name="code-slash-outline"></ion-icon>
					</button>
					<button type="button" class="card-indicator" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">
						<ion-icon name="phone-portrait-outline"></ion-icon>
					</button>
					<button type="button" class="card-indicator" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
						<ion-icon name="brush-outline"></ion-icon>
					</button>
					<button type="button" class="card-indicator" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4">
						<ion-icon name="share-social-outline"></ion-icon>
					</button>
					<button type="button" class="card-indicator" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5">
						<ion-icon name="share-social-outline"></ion-icon>
					</button>
				</div>
				<div class="carousel-inner text-end ">
					<div class="carousel-item active " data-bs-interval="false">
						<div class="row ">
							<div class="col-md-5 ">
								<img src="../images/web.png" class=" img-pair " alt="...">
							</div>
							<div class="col-md-7 carousel-content ">
								<h4 class="job-title">Web Development</h4>
								<p class="job-desc">The Web Development Team involves great problem solvers and individuals <br> with patience, and contains individuals than can ensure that the organizations/clients goals <br> and needs are met while having the natural curiousity to learn.</p>
								<br>
								<div class="btn-apply">
									<?php
									echo '<a class="apply-btn default-btn" href="../contact/?type=employment|webdev">Apply Now</a> ';
									?>
								</div>
							</div>
							<div class="container d-flex align-items-center justify-content-center text-center mx-auto">
								<div class="qualification">
									<button class="qual-btn " data-bs-toggle="collapse" data-bs-target="#collapseExample" type="button" aria-expanded="false" aria-controls="collapseExample">
										<div class="container">
											<div class="qual-toggle d-flex justify-content-center">
												<h1 class="qual-title">
													<img src="../images/down.png" class="qual-img-ico" alt="..." />
													Qualifications
												</h1>
											</div>
										</div>
									</button>

									<div class="collapse" id="collapseExample">
										<div class="qual-content">
											<h3>Duties and Responsibilities:</h3>
											<div class="bod qual-list ">
												<li>Write well designed, testable, efficient code by using best software development
													practices</li>
												<li>Integrate data from various back-end services and databases</li>
												<li>Gather and refine specifications and requirements based on technical needs</li>
												<li>Create and maintain software documentation</li>
												<li>Be responsible for maintaining, expanding, and scaling our site</li>
												<li>Stay plugged into emerging technologies/industry trends and apply them into operations
													and activities</li>
												<li>Cooperate with web designers to match visual design intent.
													Web Developer Requirements and Qualifications</li>
												<li>Cooperate with web designers to match visual design intent.</li>
												<br>
												<h3>Requirements and Qualifications:</h3>
												<li> BS in Computer Science or relevant field.</li>
												<li> Proven working experience in web programming </li>
												<li>Top-notch programming skills and in-depth knowledge of modern HTML/CSS</li>
												<li>Familiarity with at least one of the following programming languages: PHP, ASP.NET,
													Javascript or Ruby on Rails</li>
												<li>A solid understanding of how web applications work including security, session
													management, and best development practices</li>
												<li>Adequate knowledge of relational database systems, Object Oriented Programming and
													web application development</li>
												<li>Hands-on experience with network diagnostics, network analytics tools</li>
												<li>Basic knowledge of Search Engine Optimization process</li>
												<li>Aggressive problem diagnosis and creative problem solving skills</li>
												<li>Strong organizational skills to juggle multiple tasks within the constraints of time lines and
													budgets with business acumen</li>
												<li>Ability to work and thrive in a fast-paced environment, learn rapidly and master diverse web
													technologies and techniques.</li>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item ">
						<div class="row ">
							<div class="col-md-5 img-box">
								<img src="../images/mobile.png" class=" img-pair " alt="...">
							</div>
							<div class="col-md-7 carousel-content">
								<h4 class="job-title">Mobile Development</h4>
								<p class="job-desc">The Mobile App Dev Team is responsible for designing and developing mobile applications: <br> Creating, testing, deploying mobile applications that meet the needs of end-users <br> and the business.</p>
								<br>
								<div class="btn-apply">
								<?php
									echo '<a class="apply-btn default-btn" href="../contact/?type=employment|mobiledev">Apply Now</a> ';
									?>
								</div>
							</div>
							<div class="container d-flex align-items-center justify-content-center text-center mx-auto">
								<div class="qualification">
									<p>
										<button class="qual-btn " data-bs-toggle="collapse" data-bs-target="#collapseExample" type="button" aria-expanded="false" aria-controls="collapseExample">
											<div class="container">
												<div class="qual-toggle  d-flex justify-content-center ">
													<h1 class="qual-title">
														<img src="../images/down.png" class="qual-img-ico" alt="..." />
														Qualifications
													</h1>
												</div>
											</div>
										</button>
									</p>
									<div class="collapse" id="collapseExample">
										<div class="qual-content">
											<h3>Duties and Responsibilities:</h3>
											<div class="bod qual-list ">
												<li>Designing and developing mobile applications: Creating, testing, and deploying mobile
													applications that meet the needs of end-users and the business.</li>
												<li>Writing clean, efficient, and well-documented code: Ensuring that the code is
													maintainable, scalable, and meets the required performance standards.</li>
												<li>Collaborating with cross-functional teams: Working closely with designers, product
													managers, and other stakeholders to understand their needs and provide solutions.</li>
												<li>Debugging and troubleshooting: Identifying and fixing bugs, as well as improving the
													stability and reliability of the applications.</li>
												<li>Staying up-to-date with industry developments: Keeping up-to-date with the latest trends,
													tools, and technologies in the mobile development industry, and applying these to the
													company's projects.</li>
												<li>Managing the application life cycle: Ensuring that applications are deployed and updated
													efficiently and effectively.</li>
												<li>Testing and quality assurance: Testing applications to ensure they meet the required
													quality standards, and fixing any issues that are identified.</li>
												<br>
												<h3>Requirements and Qualifications:</h3>
												<li>A Bachelor's degree in Computer Science, Software Engineering, or a related field is
													typically preferred.</li>
												<li>Mobile Developers should have a strong understanding of mobile development, including
													experience with relevant programming languages, frameworks, and tools such as Swift,
													Java, React Native, and Xcode.</li>
												<li>Mobile Developers should have excellent problem-solving skills, be able to troubleshoot
													issues, and find creative solutions to complex problems.</li>
												<li>Mobile Developers should have good written and verbal communication skills, be able to
													collaborate effectively with cross-functional teams, and be able to explain technical
													concepts to non-technical stakeholders.</li>
												<li>Mobile Developers should have a passion for technology, be up-to-date with the latest
													trends and tools in the industry, and be eager to continuously learn and grow their skills.</li>
												<li> Mobile Developers should be able to adapt to new technologies, programming languages,
													and development methodologies as they arise.</li>
												<li>Mobile Developers should have a strong attention to detail, be able to test their code</li>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row ">
							<div class="col-md-5 ">
								<img src="../images/design.png" class=" img-pair " alt="...">
							</div>
							<div class="col-md-7 carousel-content">
								<h4 class="job-title">Creative Design </h4>
								<p class="job-desc">The Creative Design Team consists of inspired individuals that can turn concepts <br> into visionary designs. These are the individuals that are consistent, inventive and passionate <br> about the design they create. Familiarity with graphic design, graphic design applications, <br> design principles, and google operations are a plus.</p>
								<br>
								<div class="btn-apply">
								<?php
									echo '<a class="apply-btn default-btn" href="../contact/?type=employment|creativedesign">Apply Now</a> ';
									?>
								</div>
							</div>
							<div class="container d-flex align-items-center justify-content-center text-center mx-auto">
								<div class="qualification">
									<p>
										<button class="qual-btn " data-bs-toggle="collapse" data-bs-target="#collapseExample" type="button" aria-expanded="false" aria-controls="collapseExample">
											<div class="container">
												<div class="qual-toggle  d-flex justify-content-center">
													<h1 class="qual-title">
														<img src="../images/down.png" class="qual-img-ico" alt="..." />
														Qualifications
													</h1>
												</div>
											</div>
										</button>
									</p>
									<div class="collapse" id="collapseExample">
										<div class="qual-content">
											<h3>Duties and Responsibilities:</h3>
											<div class="bod qual-list ">
												<li>Gathering and evaluating user requirements, in collaboration with product managers and
													engineers</li>
												<li>Illustrating design ideas using storyboards, process flows and sitemaps</li>
												<li>Designing graphic user interface elements, like menus, tabs and widgets</li>
												<li>Build page navigation buttons and search fields.</li>
												<li>Develop UI mockups and prototypes that clearly illustrate how sites function and look
													like</li>
												<li>Create original graphic designs (images, sketches and tables)</li>
												<li>Prepare and present rough drafts to internal teams and key stakeholders</li>
												<li>Identify and troubleshoot UX problems (responsiveness)</li>
												<li>Conduct layout adjustments based on user feedback</li>
												<li>Adhere to style standards on fonts, colors and images</li>
												<br>
												<h3>Requirements and Qualifications:</h3>
												<li>BSC in Design, Computer Science or relevant field.</li>
												<li>Proven work experience as a UI/UX Designer or similar role</li>
												<li>Portfolio of design projects</li>
												<li>Knowledge of wireframe tools (e.g. Wireframe.cc and InVision)</li>
												<li>Up-to-date knowledge of design software like Adobe Illustrator and Photoshop</li>
												<li>Team spirit; strong communication skills to collaborate with various stakeholders</li>
												<li>Good time-management skills</li>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row ">
							<div class="col-md-5 ">
								<img src="../images/socmed.png" class=" img-pair " alt="...">
							</div>
							<div class="col-md-7 carousel-content">
								<h4 class="job-title">Social Media Specialist </h4>
								<p class="job-desc">The Social Media Team is a team that requires confidence and initiative. <br> Individuals that love to share their ideas and are not afraid to give their suggestions. <br> Fluency with SEO, social media algorithms, social media platforms, and google operations <br> are a plus.</p>
								<br>
								<div class="btn-apply">
								<?php
									echo '<a class="apply-btn default-btn" href="../contact/?type=employment|socmed">Apply Now</a> ';
									?>
								</div>
							</div>
							<div class="container d-flex align-items-center justify-content-center text-center mx-auto">
								<div class="qualification">
									<p>
										<button class="qual-btn " data-bs-toggle="collapse" data-bs-target="#collapseExample" type="button" aria-expanded="false" aria-controls="collapseExample">
											<div class="container">
												<div class="qual-toggle  d-flex justify-content-center ">
													<h1 class="qual-title">
														<img src="../images/down.png" class="qual-img-ico" alt="..." />
														Qualifications
													</h1>
												</div>
											</div>
										</button>
									</p>
									<div class="collapse" id="collapseExample">
										<div class="qual-content">
											<h3>Duties and Responsibilities:</h3>
											<div class="bod qual-list ">
												<li>Develop, implement and manage our social media strategy.</li>
												<li>Define most important social media KPIs.</li>
												<li>Manage and oversee social media content.</li>
												<li>Measure the success of every social media campaign.</li>
												<li>Stay up to date with the latest social media best practices and technologies.</li>
												<li>Use social media marketing tools such as Buffer.</li>
												<li>Attend educational conferences.</li>
												<li>Work with copywriters and designers to ensure content is informative and appealing.</li>
												<li>Collaborate with Marketing, Sales and Product Development teams.</li>
												<li>Monitor SEO and user engagement and suggest content optimization.</li>
												<li>Communicate with industry professionals and influencers via social media to create a strong network.</li>
												<li>Hire and train others in the team.</li>
												<li>Provide constructive feedback</li>
												<br>
												<h3>Requirements and Qualifications</h3>
												<li>BSC Degree in Marketing or relevant field.</li>
												<li>1 or more years of experience as a Social Media Specialist or similar role.</li>
												<li>Social Media Strategist using social media for brand awareness and impressions.</li>
												<li>Excellent knowledge of Facebook, Twitter, LinkedIn, Pinterest, Instagram, Google+ and other social media best practices.</li>
												<li>Understanding of SEO and web traffic metrics.</li>
												<li>Experience with doing audience and buyer persona research.</li>
												<li>Good understanding of social media KPIs.</li>
												<li>Familiarity with web design and publishing.</li>
												<li>Excellent multitasking skills.</li>
												<li>Critical thinker and problem-solving skills.</li>
												<li>Team player.</li>
												<li>Good time-management skills.</li>
												<li>Great interpersonal and communication skills.</li>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row ">
							<div class="col-md-5 ">
								<img src="../images/socmed.png" class=" img-pair " alt="...">
							</div>
							<div class="col-md-7 carousel-content">
								<h4 class="job-title">Virtual Assistant</h4>
								<p class="job-desc">Virtual Assistant is responsible and resourceful. Working remotely, they will organize and update files, answer calls and emails, and assist in creating presentations and sales materials. The ideal candidate should be tech-savvy, able to communicate through multiple channels, and super organized. You will also be responsible for
								</p>
								<br>
								<div class="btn-apply">
								<?php
									echo '<a class="apply-btn default-btn" href="../contact/?type=employment|va">Apply Now</a> ';
									?>
								</div>
							</div>
							<div class="container d-flex align-items-center justify-content-center text-center mx-auto">
								<div class="qualification">
									<p>
										<button class="qual-btn " data-bs-toggle="collapse" data-bs-target="#collapseExample" type="button" aria-expanded="false" aria-controls="collapseExample">
											<div class="container">
												<div class="qual-toggle  d-flex justify-content-center ">
													<h1 class="qual-title">
														<img src="../images/down.png" class="qual-img-ico" alt="..." />
														Qualifications
													</h1>
												</div>
											</div>
										</button>
									</p>
									<div class="collapse" id="collapseExample">
										<div class="qual-content">
											<h3>Duties and Responsibilities:</h3>
											<div class="bod qual-list ">
												<li>Answer direct phone calls; Organize correspondence and answer emails.</li>
												<li>Prepare and organize databases and reports.</li>
												<li>Manage social media accounts and replies.</li>
												<li>Handle confidential employer and client information.</li>
												<li>Take notes or transcribe meetings.</li>
												<li>Schedule meetings and arrange employers calendar; Schedule meeting spaces and conference rooms.</li>
												<li>Arrange payments for vendors, travel, and sales expenses.</li>
												<li>Create purchase orders and track and manage payments.</li>
												<li>Present excellent customer-service skills to customers and clients.</li>
												<li>Manage filing systems, update records, and organize documentation.</li>
												<li>Prepare and create PowerPoint presentations and materials as needed; Research materials and sources for presentations.</li>
												<br>
												<h3>Requirements and Qualifications</h3>
												<li>High School diploma or equivalent; Associalte or Bachelor's degree preferred.</li>
												<li>Proficient computer skills, including Microsoft Office Suite (Word, PowerPoint, and Excel.)</li>
												<li>Experience in Google Docs, Cloud Services, and other technology tools.</li>
												<li>Knowledgeable in technology to communicate via computer, smartphone, or text.</li>
												<li>Highly organized and able to multitask and work well with fast-paced directions and instructions.</li>
												<li>Able to manage time effectively and efficiently.</li>
												<li>Able to organize and manage large amounts of files, tasks, schedules, and information.</li>
												<li>Excellent verbal and written communication skills.</li>
												<li>Strong customer service and presentation skills.</li>
												<li>Able to work in night, weekends, extended hours, and holidays as needed.</li>
												<li>Two years' previous experience handling assistant or administrative responsibilities, or experience in customer service or related field preferred.</li>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<button class="carousel-control carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
					<span class="" aria-hidden="true">
						<img class="prev-icon" src="../images/prev.png" alt="next-icon">
					</span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
					<span class="" aria-hidden="true">
						<img class="next-icon" src="../images/next.png" alt="next-icon">
					</span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</section>
		<!-- Step-section -->
		<section class="step-section h-100">
			<div class="container h-100 ">
				<div class="row align-items-center justify-content-center">
					<h1 class="step-title text-center">Become a part of our team in 3 steps</h1>
					<div class="col-md-4 d-flex justify-content-center">
						<div class="blinc-steps">
							<h4 class="blinc-step">01</h4>
							<h5 class="head">Submit</h5>
							<br>
							<p class=" bod ">Email us your updated resume, cover letter, TOR, and necessary attachments.</p>
							<br>
							<a class="bod intern-email">bitshareslabs@gmail.com.</a>
						</div>
					</div>
					<div class="col-md-4 d-flex justify-content-center">
						<div class="blinc-steps">
							<h4 class="blinc-step">02</h4>
							<h5 class="head">Interview</h5>
							<br>
							<p class="bod ">Wait for confirmation and the schedule of your interview.
								<br>
								<br>
								Make sure you are prepared and have a strong connection before the interview to avoid inconvenience.
							</p>
						</div>
					</div>
					<div class="col-md-4 d-flex justify-content-center">
						<div class="blinc-steps">
							<h4 class="blinc-step">03</h4>
							<h5 class="head">Deployment</h5>
							<br>
							<p class="bod ">After reviewing, you will be notified thru your email for your deployment and orientation.
								<br>
								<br>
								Make sure to listen carefully and take down some notes too.
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php include('../includes/cta.php'); ?>
		<?php include('../includes/footer.php'); ?>
	</div>

	<script type="text/javascript" src="../js/global.js"></script>
	<script type="text/javascript">
		AOS.init();
	</script>

</body>

</html>