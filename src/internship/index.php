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
            <section class="hero-section intern-hero">
                <div class="container h-100 d-flex align-items-center justify-content-center">
                    <div class="row align-items-center justify-content-center">
                        <div class="hero-content text-center d-flex flex-column">
                            <!-- <h2 class="hero-title"><img src="../images/Header.png" alt="png"></h2> -->
                            <div class="hero-intern">
                                <div>
                                    <div class="hero-intern-title d-flex flex-column align-items-start">
                                        <p class="intern-rotate">BLINC</p>
                                        <h2 class="intern-title">INTERNSHIP</h2>
                                    </div>
                                </div>
                                <div class="d-flex flex-column align-items-end">
                                    <p class="intern-sub">PROGRAM</p>
                                </div>
                            </div>
                            <div class="intern-sub-hero d-flex flex-column align-items-center justify-content-center">
                                <h1 class="sub-title">APPLY AND ENHANCE YOUR SKILLS</h1>
                                <p class="sub-text">We offer BLIP (Bitshares Labs Internship Program) to college students in programs with Technology, Business, and Communication.
                                    Providing an opportunity to develop their skills, explore career options, and possibly secure a full-time employment after graduation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </header>

        <br>
        <br>
        <!-- SLIDES -->
        <section class="employment-section">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators align-items-center">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="card-indicator active" aria-current="true" aria-label="Slide 1">
                        <ion-icon name="code-slash-outline"></ion-icon>
                    </button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="card-indicator "aria-label="Slide 2">
                        <ion-icon name="phone-portrait-outline"></ion-icon>
                    </button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="card-indicator "aria-label="Slide 3">
                        <ion-icon name="brush-outline"></ion-icon>
                    </button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" class="card-indicator "aria-label="Slide 4">
                        <ion-icon name="share-social-outline"></ion-icon>
                    </button>
                </div>
                <div class="carousel-inner text-end ">
                    <div class="carousel-item active " data-bs-interval="false">
                        <div class="row">
                            <div class="col-md-5 img-box">
                                <img src="../images/web.png" class="img-pair " alt="...">
                            </div>
                            <div class="col-md-7 carousel-content ">
                                <h4 class="job-title">Web Development</h4>
                                <p class="job-desc">The Web Development Team involves great problem solvers and individuals <br> with patience, and contains individuals than can ensure that the organizations/clients goals <br> and needs are met while having the natural curiousity to learn.</p>
                                <br>
                                <div class="btn-apply">
                                    <?php
                                        echo '<a class="apply-btn default-btn" href="../contact/?type=internship|webdev">Apply Now</a>';
                                    ?>
                                </div>
                            </div>
                            <div class="container d-flex align-items-center justify-content-center text-center mx-auto">
                                <div class="qualification">
                                    <button class="qual-btn" data-bs-toggle="collapse" data-bs-target="#collapseExample" type="button" aria-expanded="false" aria-controls="collapseExample">
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
                                            <br>
                                            <div class="bod qual-list ">
                                                <li>Writes well designed codes that is efficient and demonstrable (also able to debug)</li>
                                                <li>Responsible for maintaining, expanding, and scaling of websites.</li>
                                                <li>Creates website layouts and user interfaces using HTML, CSS, Java, Javascript, and PHP languages.</li>
                                                <li>Collaborates with the other teams to have a neautral visual intent.</li>
                                                <li>Gather information/refine the specifications and requirements base on the technical needs.</li>
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
                                        echo '<a class="apply-btn default-btn" href="../contact/?type=internship|mobiledev">Apply Now</a> ';
                                    ?>
                                </div>
                            </div>
                            <div class="container d-flex align-items-center justify-content-center text-center mx-auto">
                                <div class="qualification">
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
                                    <div class="collapse" id="collapseExample">
                                        <div class="qual-content">
                                            <h3>Duties and Responsibilities:</h3>
                                            <br>
                                            <div class="bod qual-list ">
                                                <li>Debugging and troubleshooting to improve stability and reliability of the applications.</li>
                                                <li>Manages the application file, ensuring that the applications deployed are running smoothly</li>
                                                <li>Conducts testing for quality assurance that must meet the required standards.</li>
                                                <li>Collaborates with the different teams to understand the system needs and provide solutions.</li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row ">
                            <div class="col-md-5 img-box ">
                                <img src="../images/design.png" class=" img-pair " alt="...">
                            </div>
                            <div class="col-md-7 carousel-content">
                                <h4 class="job-title">Creative Design Interns</h4>
                                <p class="job-desc">The Creative Design Team consists of inspired individuals that can turn concepts <br> into visionary designs. These are the individuals that are consistent, inventive and passionate <br> about the design they create. Familiarity with graphic design, graphic design applications, <br> design principles, and google operations are a plus.</p>
                                <br>
                                <div class="btn-apply">
                                <?php 
                                        echo '<a class="apply-btn default-btn" href="../contact/?type=internship|creativedesign">Apply Now</a> ';
                                    ?>
                                </div>
                            </div>
                            <div class="container d-flex align-items-center justify-content-center text-center mx-auto">
                                <div class="qualification">
                                    <button class="qual-btn" data-bs-toggle="collapse" data-bs-target="#collapseExample" type="button" aria-expanded="false" aria-controls="collapseExample">
                                        <div class="container">
                                            <div class="qual-toggle  d-flex justify-content-center">
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
                                            <br>
                                            <div class="bod qual-list ">
                                                <li>Illustrates design ideas with storyboards, process flows and sitemaps.</li>
                                                <li>Gathers and evaluates user requirements including consultation with other teams.</li>
                                                <li>Creates and prepare original graphic designs such as: Sketches, Images, Logos, etc.</li>
                                                <li>Conducts layout adjustments based on the team, supervisor, and user's feedback.</li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row ">
                            <div class="col-md-5 img-box ">
                                <img src="../images/socmed.png" class=" img-pair " alt="...">
                            </div>
                            <div class="col-md-7 carousel-content">
                                <h4 class="job-title">Social Media Specialist Interns</h4>
                                <p class="job-desc">The Social Media Team is a team that requires confidence and initiative. <br> Individuals that love to share their ideas and are not afraid to give their suggestions. <br> Fluency with SEO, social media algorithms, social media platforms, and google operations <br> are a plus.</p>
                                <br>
                                <div class="btn-apply">
                                <?php 
                                        echo '<a class="apply-btn default-btn" href="../contact/?type=internship|socmed">Apply Now</a> ';
                                    ?>
                                </div>
                            </div>
                            <div class="container d-flex align-items-center justify-content-center text-center mx-auto">
                                <div class="qualification">
                                    <button class="qual-btn" data-bs-toggle="collapse" data-bs-target="#collapseExample" type="button" aria-expanded="false" aria-controls="collapseExample">
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
                                            <br>
                                            <div class="bod qual-list ">
                                                <li>Formulate a social media strategy.</li>
                                                <li>Communicate with the industry professionals to create a strong social network.</li>
                                                <li>Stay up-to-date with the latest news, technology, blockchain, crypto, etc.</li>
                                                <li>Collaborate with the other departments to create content appopriate for Bitshares Labs Inc.</li>
                                                <li>Manage and oversee the content throughout the social media accounts.</li>
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
                        <img class="prev-icon" src="../images/prev.webp" alt="next-icon">
                    </span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="" aria-hidden="true">
                        <img class="next-icon" src="../images/next.webp" alt="next-icon">
                    </span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <br>

        <!-- BLIP Cards -->
        <section class="step-section h-100">
            <div class="container h-100">
                <div class="row align-items-center justify-content-center">
                    <h1 class="step-title text-center">Become a part of BLIP in 3 steps</h1>
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="blinc-steps">
                            <h4 class="blinc-step">01</h4>
                            <h5 class="head">Submit</h5>
                            <br>
                            <p class="bod">Email us the following requirements:</p>
                            <p class="bod">1. Updated Resume</p>
                            <p class="bod">2. School ID</p>
                            <p class="bod">3. School Endorsement Form</p>
                            <p class="bod">4. MOA</p>
                            <br>
                            <a class="bod intern-email">internship@bitshareslabs.com</a>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="blinc-steps">
                            <h4 class="blinc-step">02</h4>
                            <h5 class="head">Interview</h5>
                            <br>
                            <p class="bod">Wait for confirmation and the schedule of your interview.</p>
                            <br>
                            <p class="bod">Make sure you are prepared and have a strong connection before the interview to avoid inconvenience.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="blinc-steps">
                            <h4 class="blinc-step">03</h4>
                            <h5 class="head">Deployment</h5>
                            <br>
                            <p class="bod">After reviewing, you will be notified thru your email for your deployment and orientation.</p>
                            <br>
                            <p class="bod">Make sure to listen carefully and take down some notes too.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include('../includes/cta.php'); ?>
        <?php include('../includes/footer.php'); ?>
    </div>
    </div>
    </div>

    </div>
    <script type="text/javascript" src="../js/global.js"></script>
    <!-- ANIMATION -->
    <script type="text/javascript">
        AOS.init();
    </script>
</body>

</html>