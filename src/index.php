<?php
include("connect/session_check.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('includes/header.php'); ?>
</head>

<body>
  <div class="wrapall hero-wrap">
    <header>
      <?php include('includes/header_nav.php'); ?>
      <!-- HERO SECTION -->
      <section class="hero-section">
        <div class="container h-100 w-100 d-flex align-items-center justify-content-center">
          <div class="row align-items-center justify-content-center">
            <div class="hero-content text-center d-flex flex-column">
              <h2 class="hero-title hero-title-lt">We Disrupt the Web towards a Better Financial Future</h2>
              <p class="hero-text hero-text-lt">Bring your website vision to life with stunning designs or captivating graphics that truly reflects your brand and impresses your customers. </p>
              <div class="btn-box">
                <a class="works-btn" href="project/">See our works</a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </header>
    <!-- SECTION SERVICES -->

    <!-- <div class="button-container-1">
      <span class="mas">MASK1</span>
      <button id='work' type="button" name="Hover">MASK1</button>
    </div> -->

    <section class="services-section">
      <div class="container">
        <div class="service-title-txt d-flex flex-column align-items-center">
          <h2 class="services-title">
            Services we offer
          </h2>
          <p class="services-text-desc">
            Helping businesses establish their digital presence and thrive in the online world with our team of developers, designers, and digital strategists.
          </p>
        </div>
        <div class="row flex-column">
          <div class="feature-mobile">
            <ul class="nav nav-tabs services-nav-mobile d-flex mx-auto justify-content-center" id="myTab" role="tablist">
              <li class="nav-item service-tab-item" role="presentation">
                <button class="nav-link service-link d-flex flex-column active" id="webDev" data-bs-toggle="tab" data-bs-target="#web" type="button" role="tab" aria-controls="web" aria-selected="true">
                  <img src="images/icons/web-svg.svg" alt="" class="services-icon">
                  <span class="services-icon-txt">Web Dev</span>
                </button>
              </li>
              <li class="nav-item service-tab-item" role="presentation">
                <button class="nav-link service-link d-flex flex-column" id="mobileDev" data-bs-toggle="tab" data-bs-target="#mobile" type="button" role="tab" aria-controls="mobile" aria-selected="false">
                  <img src="images/icons/mobile-svg.svg" alt="" class="services-icon">
                  <span class="services-icon-txt">Mobile Dev</span>
                </button>
              </li>
              <li class="nav-item service-tab-item" role="presentation">
                <button class="nav-link service-link d-flex flex-column" id="graphicsDesign" data-bs-toggle="tab" data-bs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="false">
                  <img src="images/icons/graphics-icon.png" alt="" class="services-icon">
                  <span class="services-icon-txt">Graphics</span>
                </button>
              </li>
              <li class="nav-item service-tab-item" role="presentation">
                <button class="nav-link service-link d-flex flex-column" id="otherServices" data-bs-toggle="tab" data-bs-target="#other" type="button" role="tab" aria-controls="other" aria-selected="false">
                  <img src="images/icons/other-service-svg.webp" alt="" class="services-icon">
                  <span class="services-icon-txt">Other</span>
                </button>
              </li>
            </ul>
          </div>
          <ul class="nav nav-tabs services-nav d-flex  align-items-center justify-content-center" id="myTab" role="tablist">
            <li class="nav-item service-tab-item" role="presentation">
              <button class="nav-link service-link d-flex flex-column active" id="webDev" data-bs-toggle="tab" data-bs-target="#web" type="button" role="tab" aria-controls="web" aria-selected="true">
                <img src="images/icons/web-svg.svg" alt="" class="services-icon">
                <span class="services-icon-txt">Web <br class="first-word">Development</span>
              </button>
            </li>
            <li class="nav-item service-tab-item" role="presentation">
              <button class="nav-link service-link d-flex flex-column" id="mobileDev" data-bs-toggle="tab" data-bs-target="#mobile" type="button" role="tab" aria-controls="mobile" aria-selected="false">
                <img src="images/icons/mobile-svg.svg" alt="" class="services-icon">
                <span class="services-icon-txt">Mobile<br class="first-word"> Development</span>
              </button>
            </li>
            <li class="nav-item service-tab-item" role="presentation">
              <button class="nav-link service-link d-flex flex-column" id="graphicsDesign" data-bs-toggle="tab" data-bs-target="#services" type="button" role="tab" aria-controls="services" aria-selected="false">
                <img src="images/icons/graphics-svg.svg" alt="" class="services-icon">
                <span class="services-icon-txt">Graphics<br class="first-word"> Design</span>
              </button>
            </li>
            <li class="nav-item service-tab-item" role="presentation">
              <button class="nav-link service-link d-flex flex-column" id="otherServices" data-bs-toggle="tab" data-bs-target="#other" type="button" role="tab" aria-controls="other" aria-selected="false">
                <img src="images/icons/other-service-svg.svg" alt="" class="services-icon">
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
                    <a href="#" class="services-btn">Learn more</a>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="services-content">
                    <img src="images/s-web.webp" alt="" class="img-fluid">
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
                    <a href="#" class="services-btn">Learn more</a>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="services-content">
                    <img src="images/s-mobile.webp" alt="" class="img-fluid">
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
                    <a href="#" class="services-btn">Learn more</a>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="services-content">
                    <img src="images/s-design.webp" alt="" class="img-fluid">
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
                    <a href="#" class="services-btn">Learn more</a>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="services-content">
                    <img src="images/s-others.webp" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION WORKS -->
    <section class="works-section">
      <div class="container">
        <div class="works-title-txt d-flex flex-column align-items-center mx-auto w-75 text-center">
          <h2 class="works-title">
            Our works
          </h2>
          <p class="work-desc">
            Get inspired and see how we can help bring your ideas to life with our customized services.
          </p>
        </div>
        <div class="row align-items-center">
          <div class="col-sm-4">
            <div class="works-box">
              <div class="card text-white one">
                <img src="images/projects/web-design/compumatrix_2.webp" alt="" class="card-img drop1-img">
                <img src="images/projects/web-design/compumatrix.webp" alt="" class="card-img drop2-img">
                <div class="card-img-overlay">
                  <h5 class="card-title">Compumatrix</h5>
                  <a href="project/" class="more-btn">Learn more &#62;&#62;</a>
                  <div class="bg-overlay"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="works-box">
              <div class="card text-white two">
                <img src="images/projects/web-design/fullpagecsc_1.webp" alt="" class="card-img csc1-img">
                <img src="images/projects/web-design/csc_valentines.webp" alt="" class="card-img csc2-img">
                <div class="card-img-overlay">
                  <h5 class="card-title">Cryptosavers Club</h5>
                  <a href="project/" class="more-btn">Learn more &#62;&#62;</a>
                  <div class="bg-overlay"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="works-box ">
              <div class="card text-white three">
                <img src="images/projects/web-design/Home1.webp" alt="" class="card-img axie1-img">
                <img src="images/projects/web-design/axie-archipelago-logo.webp" alt="" class="card-img axie2-img">
                <img src="images/projects/web-design/axie_02.webp" alt="" class="card-img axie3-img">
                <div class="card-img-overlay">
                  <h5 class="card-title">Axie Archepelago</h5>
                  <a href="project/" class="more-btn">Learn more &#62;&#62;</a>
                  <div class="bg-overlay"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION FEATURED -->
    <section class="featured-section">
      <div class="container">
        <div class="d-flex flex-column align-items-center">
          <h2 class="featured-title"> Featured On</h2>
        </div>
        <div class="feature-container">
          <div class="row align-items-center justify-content-center">
            <img src="images/features/manitimes.webp" alt="" class="feature-img">
            <img src="images/features/tribunelogo.webp" alt="" class="feature-img">
            <img src="images/features/manilabulletin.webp" alt="" class="feature-img">
          </div>
        </div>

        <div id="carouselFeature" class="carousel carousel-feature carousel-dark slide" data-bs-ride="carousel">
          <!-- <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselFeature" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselFeature" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselFeature" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div> -->
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
              <div class="d-flex justify-content-center align-items-center">
                <img src="images/features/manitimes.webp" alt="" class="feature-img">
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <div class="d-flex justify-content-center align-items-center">
                <img src="images/features/tribunelogo.webp" alt="" class="feature-img">
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <div class="d-flex justify-content-center align-items-center">
                <img src="images/features/manilabulletin.webp" alt="" class="feature-img">
              </div>
            </div>
          </div>
        </div>
      </div> <!-- end container -->
    </section>

    <!-- SECTION REVIEWED -->
    <section class="reviews-section">
      <div class="container">
        <div id="carouselReviews" class="carousel carousel-reviews carousel-dark slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselReviews" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselReviews" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselReviews" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="50000">
              <!-- <img src="images/axie_02.webp" class="d-block w-100" alt="..."> -->
              <div class="reviews-content d-flex justify-content-center align-items-center flex-column">
                <svg class="quote-icon-1" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <style type="text/css">
                    quote-icon-1 {
                      fill: url(#Gradient-1)
                    }
                  </style>
                  <defs>
                    <linearGradient id="Gradient-1" x2="0" y2="1">
                      <stop offset="5%" stop-color="#4c519f" />
                      <stop offset="95%" stop-color="#f7053f" />
                    </linearGradient>
                  </defs>
                  <path d="m20.622 4c.76 0 1.378.608 1.378 1.355 0 .531-.315 1.018-.843 1.302-1.212.645-2.614 2.735-2.983 4.286 2.38.538 3.8 2.394 3.8 4.564 0 2.169-1.859 4.493-4.627 4.493-3.501 0-5.096-2.882-5.096-5.561 0-5.742 6.32-10.439 8.371-10.439zm-10.251 0c.76 0 1.378.608 1.378 1.355 0 .531-.315 1.018-.843 1.302-1.212.645-2.614 2.735-2.983 4.286 2.38.538 3.8 2.394 3.8 4.564 0 2.169-1.859 4.493-4.627 4.493-3.501 0-5.096-2.882-5.096-5.561 0-5.742 6.32-10.439 8.371-10.439zm6.21 8.428c-.112-3 1.984-5.754 3.649-6.966-1.911.782-6.479 4.857-6.479 8.977 0 1.869.942 4.051 3.596 4.051 1.871 0 3.127-1.542 3.127-2.983 0-1.453-.862-3.166-3.893-3.079zm-10.251 0c-.112-3 1.984-5.754 3.649-6.966-1.911.782-6.479 4.857-6.479 8.977 0 1.869.942 4.051 3.596 4.051 1.871 0 3.127-1.542 3.127-2.983 0-1.453-.862-3.166-3.893-3.079z" fill-rule="nonzero" />
                </svg>
                <h3 class="client-review">
                  Everything about Bitshares Labs Inc. is convenient. They developed my awesome portfolio
                  which I liked very much. Glad I found this company.
                </h3>
                <div class="client-box d-flex justify-content-center align-items-center">
                  <div class="client-img-box">
                    <img src="images/user-profile.webp" alt="" class="client-img">
                  </div>
                  <div class="client-info d-flex flex-column">
                    <p class="client-name">
                      Juan Dela Cruz
                    </p>
                    <p class="client-position">
                      Student
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <!-- <img src="images/axie_02.webp" class="d-block w-100" alt="..."> -->
              <div class="reviews-content d-flex justify-content-center align-items-center flex-column">
                <svg class="quote-icon-2" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <style type="text/css">
                    quote-icon-2 {
                      fill: url(#Gradient-2)
                    }
                  </style>
                  <defs>
                    <linearGradient id="Gradient-2" x2="0" y2="1">
                      <stop offset="5%" stop-color="#4c519f" />
                      <stop offset="95%" stop-color="#f7053f" />
                    </linearGradient>
                  </defs>
                  <path d="m20.622 4c.76 0 1.378.608 1.378 1.355 0 .531-.315 1.018-.843 1.302-1.212.645-2.614 2.735-2.983 4.286 2.38.538 3.8 2.394 3.8 4.564 0 2.169-1.859 4.493-4.627 4.493-3.501 0-5.096-2.882-5.096-5.561 0-5.742 6.32-10.439 8.371-10.439zm-10.251 0c.76 0 1.378.608 1.378 1.355 0 .531-.315 1.018-.843 1.302-1.212.645-2.614 2.735-2.983 4.286 2.38.538 3.8 2.394 3.8 4.564 0 2.169-1.859 4.493-4.627 4.493-3.501 0-5.096-2.882-5.096-5.561 0-5.742 6.32-10.439 8.371-10.439zm6.21 8.428c-.112-3 1.984-5.754 3.649-6.966-1.911.782-6.479 4.857-6.479 8.977 0 1.869.942 4.051 3.596 4.051 1.871 0 3.127-1.542 3.127-2.983 0-1.453-.862-3.166-3.893-3.079zm-10.251 0c-.112-3 1.984-5.754 3.649-6.966-1.911.782-6.479 4.857-6.479 8.977 0 1.869.942 4.051 3.596 4.051 1.871 0 3.127-1.542 3.127-2.983 0-1.453-.862-3.166-3.893-3.079z" fill-rule="nonzero" />
                </svg>
                <h3 class="client-review">
                  Everything about Bitshares Labs Inc. is convenient. They developed my awesome portfolio
                  which I liked very much. Glad I found this company.
                </h3>
                <div class="client-box d-flex justify-content-center align-items-center">
                  <div class="client-img-box">
                    <img src="images/user-profile.webp" alt="" class="client-img">
                  </div>
                  <div class="client-info d-flex flex-column">
                    <p class="client-name">
                      Juan Dela Cruz
                    </p>
                    <p class="client-position">
                      Student
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <!-- <img src="images/axie_02.webp" class="d-block w-100" alt="..."> -->
              <div class="reviews-content d-flex justify-content-center align-items-center flex-column">
                <svg class="quote-icon-3" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <style type="text/css">
                    quote-icon-3 {
                      fill: url(#Gradient-3)
                    }
                  </style>
                  <defs>
                    <linearGradient id="Gradient-3" x2="0" y2="1">
                      <stop offset="5%" stop-color="#4c519f" />
                      <stop offset="95%" stop-color="#f7053f" />
                    </linearGradient>
                  </defs>
                  <path d="m20.622 4c.76 0 1.378.608 1.378 1.355 0 .531-.315 1.018-.843 1.302-1.212.645-2.614 2.735-2.983 4.286 2.38.538 3.8 2.394 3.8 4.564 0 2.169-1.859 4.493-4.627 4.493-3.501 0-5.096-2.882-5.096-5.561 0-5.742 6.32-10.439 8.371-10.439zm-10.251 0c.76 0 1.378.608 1.378 1.355 0 .531-.315 1.018-.843 1.302-1.212.645-2.614 2.735-2.983 4.286 2.38.538 3.8 2.394 3.8 4.564 0 2.169-1.859 4.493-4.627 4.493-3.501 0-5.096-2.882-5.096-5.561 0-5.742 6.32-10.439 8.371-10.439zm6.21 8.428c-.112-3 1.984-5.754 3.649-6.966-1.911.782-6.479 4.857-6.479 8.977 0 1.869.942 4.051 3.596 4.051 1.871 0 3.127-1.542 3.127-2.983 0-1.453-.862-3.166-3.893-3.079zm-10.251 0c-.112-3 1.984-5.754 3.649-6.966-1.911.782-6.479 4.857-6.479 8.977 0 1.869.942 4.051 3.596 4.051 1.871 0 3.127-1.542 3.127-2.983 0-1.453-.862-3.166-3.893-3.079z" fill-rule="nonzero" />
                </svg>
                <h3 class="client-review">
                  Everything about Bitshares Labs Inc. is convenient. They developed my awesome portfolio
                  which I liked very much. Glad I found this company.
                </h3>
                <div class="client-box d-flex justify-content-center align-items-center">
                  <div class="client-img-box">
                    <img src="images/user-profile.webp" alt="" class="client-img">
                  </div>
                  <div class="client-info d-flex flex-column">
                    <p class="client-name">
                      Juan Dela Cruz
                    </p>
                    <p class="client-position">
                      Student
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="reviews-header d-flex align-items-center justify-content-center">
            <button class="carousel-control-prev d-block" type="button" data-bs-target="#carouselReviews" data-bs-slide="prev">
              <ion-icon size="large" name="chevron-back-outline" class="icon-nav"></ion-icon>
              <span class="visually-hidden">Previous</span>
            </button>
            <h2 class="reviews-title section-title">Reviews about our company</h2>
            <button class="carousel-control-next d-block" type="button" data-bs-target="#carouselReviews" data-bs-slide="next">
              <ion-icon size="large" name="chevron-forward-outline" class="icon-nav"></ion-icon>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- SECTION PARTNERS -->
    <section class="partners-section">
      <h2 class="partners-title section-title">Our Partners</h2>
      <div class="container-fluid">
        <div class="marquee">
          <div class="marquee-box-1">
            <img src="images/partners/globe_icon.webp" alt="" class="partners-img">
            <img src="images/partners/FoodPanda-logo.webp" alt="" class="partners-img">
            <img src="images/partners/Cryptoguild.webp" alt="" class="partners-img">
            <img src="images/partners/virtual-internship.webp" alt="" class="partners-img">
            <img src="images/partners/cryptosaversclub.webp" alt="" class="partners-img">
            <img src="images/partners/compumatrix-logo.webp" alt="" class="partners-img">

            <img src="images/partners/globe_icon.webp" alt="" class="partners-img">
            <img src="images/partners/FoodPanda-logo.webp" alt="" class="partners-img">
            <img src="images/partners/Cryptoguild.webp" alt="" class="partners-img">
            <img src="images/partners/virtual-internship.webp" alt="" class="partners-img">
            <img src="images/partners/cryptosaversclub.webp" alt="" class="partners-img">
            <img src="images/partners/compumatrix-logo.webp" alt="" class="partners-img">

            <img src="images/partners/globe_icon.webp" alt="" class="partners-img">
            <img src="images/partners/FoodPanda-logo.webp" alt="" class="partners-img">
            <img src="images/partners/Cryptoguild.webp" alt="" class="partners-img">
            <img src="images/partners/virtual-internship.webp" alt="" class="partners-img">
            <img src="images/partners/cryptosaversclub.webp" alt="" class="partners-img">
            <img src="images/partners/compumatrix-logo.webp" alt="" class="partners-img">
          </div>
        </div>
      </div>
    </section>
    <?php include('includes/cta.php'); ?>
    <?php include('includes/footer.php'); ?>
  </div>
  <script type="text/javascript" src="js/global.js"></script>
  <!-- ANIMATION -->
  <script type="text/javascript">
    AOS.init();
  </script>
</body>

</html>