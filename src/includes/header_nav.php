<?php
$fileName = explode(".php", basename($_SERVER['PHP_SELF']))[0];
$dirName = $dirFileName;
?>

<?php if ($in_concat == true) { ?>
  <nav class="navbar nav-container navbar-default fixed-top navbar-expand-lg" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand d-flex justify-content-center align-items-center" href="#">
        <div>
          <img src="images/blinc/blinc-logo-light.webp" class="blinc-logo blinc-logo-dark" alt="logo dark">
          <img src="images/blinc-logo-light.webp" class="blinc-logo blinc-logo-light" alt="logo light">
        </div>
        <p class="bitshares-txt text-uppercase my-auto d-flex justify-content-center">
          Bitshares Labs
        </p>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <ion-icon name="menu-outline" class="toggler-icon"></ion-icon>
        <ion-icon name="close-outline" class="toggler-icon"></ion-icon>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav  mb-2 mb-lg-0 me-auto align-items-start" id="nav-link-box">
          <li class="nav-item">
            <a class="nav-link link-nav active" aria-current="page" href="">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-nav" href="project/">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-nav" href="services/">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-nav" href="about/">About us</a>
          </li>
        </ul>
        <span class="navbar-text">
          <a href="contact/" class="contact-btn">Work with us</a>
        </span>
      </div>
    </div>
  </nav>
<!-- else if page hero bg is white/light -->
<?php } else if (($in_concat == false && $dirFileName == "project") || ($in_concat == false && $dirFileName == "services") || ($in_concat == false && $dirFileName == "contact")) { ?>
  <nav class="navbar nav-container navbar-default light fixed-top navbar-expand-lg" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand d-flex justify-content-center align-items-center" href="#">
        <div>
          <img src="../images/blinc/blinc-logo-light.webp" class="blinc-logo blinc-logo-light" alt="logo light">
          <img src="../images/blinc/BLINC-03.webp" class="blinc-logo blinc-logo-gradient" alt="logo light">
        </div>
        <p class="bitshares-txt text-uppercase my-auto d-flex justify-content-center">
          Bitshares Labs
        </p>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <ion-icon name="menu-outline" class="toggler-icon"></ion-icon>
        <ion-icon name="close-outline" class="toggler-icon"></ion-icon>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav  mb-2 mb-lg-0 me-auto align-items-start">
          <li class="nav-item">
            <a class="nav-link link-nav " href="../">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-nav active" aria-current="page" href="../project/">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-nav" href="../services/">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-nav" href="../about/">About us</a>
          </li>
        </ul>
        <span class="navbar-text">
          <a href="../contact/" class="contact-btn">Work with us</a>
        </span>
      </div>
    </div>
  </nav>
<!-- if page is inside a file and doesn't have white/light bg in its hero page-->
<?php } else if ($in_concat == false && $dirFileName == "about") { ?>
  <nav class="navbar nav-container navbar-default fixed-top navbar-expand-lg" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand d-flex justify-content-center align-items-center" href="#">
        <div>
          <img src="../images/blinc/blinc-logo-light.webp" class="blinc-logo blinc-logo-dark" alt="logo dark">
          <img src="../images/blinc-logo-light.webp" class="blinc-logo blinc-logo-light" alt="logo light">
        </div>
        <p class="bitshares-txt text-uppercase my-auto d-flex justify-content-center">
          Bitshares Labs
        </p>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <ion-icon name="menu-outline" class="toggler-icon"></ion-icon>
        <ion-icon name="close-outline" class="toggler-icon"></ion-icon>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav  mb-2 mb-lg-0 me-auto align-items-start" id="nav-link-box">
          <li class="nav-item">
            <a class="nav-link link-nav" aria-current="page" href="../">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-nav" href="../project/">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-nav" href="../services/">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-nav active" aria-current="page" href="../">About us</a>
          </li>
        </ul>
        <span class="navbar-text">
          <a href="../contact/" class="contact-btn">Work with us</a>
        </span>
      </div>
    </div>
  </nav>
<?php } else if (($in_concat == false && $dirFileName == "terms") || ($in_concat == false && $dirFileName == "cookie") || ($in_concat == false && $dirFileName == "privacy")) { ?>
  <nav class="navbar nav-container navbar-default light fixed-top navbar-expand-lg" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand d-flex justify-content-center align-items-center" href="#">
        <div>
          <img src="../images/blinc/blinc-logo-light.webp" class="blinc-logo blinc-logo-light" alt="logo light">
          <img src="../images/blinc/BLINC-03.webp" class="blinc-logo blinc-logo-gradient" alt="logo light">
        </div>
        <p class="bitshares-txt text-uppercase my-auto d-flex justify-content-center">
          Bitshares Labs
        </p>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <ion-icon name="menu-outline" class="toggler-icon"></ion-icon>
        <ion-icon name="close-outline" class="toggler-icon"></ion-icon>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav  mb-2 mb-lg-0 me-auto align-items-start">
          <li class="nav-item">
            <a class="nav-link link-nav" href="../">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-nav" href="../project/">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-nav" href="../services/">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-nav" href="../about/">About us</a>
          </li>
        </ul>
        <span class="navbar-text">
          <a href="../contact/" class="contact-btn">Work with us</a>
        </span>
      </div>
    </div>
  </nav>
<?php } else { ?>
  <nav class="navbar nav-container navbar-default fixed-top navbar-expand-lg" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand d-flex justify-content-center align-items-center" href="#">
        <div>
          <img src="../images/blinc/blinc-logo-light.webp" class="blinc-logo blinc-logo-dark" alt="logo dark">
          <img src="../images/blinc-logo-light.webp" class="blinc-logo blinc-logo-light" alt="logo light">
        </div>
        <p class="bitshares-txt text-uppercase my-auto d-flex justify-content-center">
          Bitshares Labs
        </p>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <ion-icon name="menu-outline" class="toggler-icon"></ion-icon>
        <ion-icon name="close-outline" class="toggler-icon"></ion-icon>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav  mb-2 mb-lg-0 me-auto align-items-start" id="nav-link-box">
          <li class="nav-item">
            <a class="nav-link link-nav" href="../">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-nav" href="../project/">Projects</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-nav" href="../services/">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-nav" href="../about">About us</a>
          </li>
        </ul>
        <span class="navbar-text">
          <a href="../contact/" class="contact-btn">Work with us</a>
        </span>
      </div>
    </div>
  </nav>
<?php } ?>