<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gp Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp
  * Updated: Nov 25 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php"><img src="assets/img/favicon.jpg"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto active" href="about.php">About</a></li>
          <li class="dropdown"><a href="#"><span>Ploegen</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Eerste elftallen</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="ploegen.php" value="<?php $ploegid=23 ?>">A-ploeg</A-ploeg></a></li>
                  <li><a href="ploegen.php" value="<?php $ploegid=24 ?>">B-ploeg</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Reserven</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                  <li><a href="ploegen.php" value="<?php $ploegid=19 ?>">Reserven-A</a></li>
                  <li><a href="ploegen.php" value="<?php $ploegid=20 ?>">Reserven-B</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Jeugd</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
              <li><a href="ploegen.php?ploegnr=1">U6</a></li>
              <li><a href="ploegen.php" value="<?php $ploegid=1 ?>">U6</a></li>
                  <li><a href="ploegen.php" value="<?php $ploegid=2 ?>">U7</a></li>
                  <li><a href="ploegen.php" value="<?php $ploegid=3 ?>">U8A</a></li>
                  <li><a href="ploegen.php" value="<?php $ploegid=4 ?>">U8B</a></li>
                  <li><a href="ploegen.php" value="<?php $ploegid=5 ?>">U9A</a></li>
                  <li><a href="ploegen.php" value="<?php $ploegid=6 ?>">U9B</a></li>
                  <li><a href="ploegen.php" value="<?php $ploegid=7 ?>">U10A</a></li>
                  <li><a href="ploegen.php" value="<?php $ploegid=8 ?>">U10B</a></li>
                  <li><a href="ploegen.php" value="<?php $ploegid=9 ?>">U11A</a></li>
                  <li><a href="ploegen.php" value="<?php $ploegid=10 ?>">U11B</a></li>
                  <li><a href="ploegen.php" value="<?php $ploegid=11 ?>">U12A</a></li>
                  <li><a href="ploegen.php" value="<?php $ploegid=12 ?>">U12B</a></li>
                  <li><a href="ploegen.php" value="<?php $ploegid=13 ?>">U13A</a></li>
                  <li><a href="ploegen.php" value="<?php $ploegid=14 ?>">U13B</a></li>
                  <li><a href="ploegen.php" value="<?php $ploegid=15 ?>">U15A</a></li>
                  <li><a href="ploegen.php" value="<?php $ploegid=16 ?>">U15B</a></li>
                  <li><a href="ploegen.php" value="<?php $ploegid=17 ?>">U17</a></li>
                  <li><a href="ploegen.php" value="<?php $ploegid=18 ?>">U21</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>G-ploegen</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                  <li><a href="ploegen.phpp" value="<?php $ploegid=21 ?>">G-kids</a></li>
                  <li><a href="ploegen.php" value="<?php $ploegid=22 ?>">G-senioren</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="aangemeld.php" class="get-started-btn scrollto">Admin only</a>

    </div>
  </header><!-- End Header -->


  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Welkom bij KVVE Massemen admin pagina<span>.</span></h1>
        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line"></i>
            <h3><a href="zoeken.php">Zoeken</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a href="overzichtspelers.php">Overzicht spelers</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a href="overzichtbericht.php">Overzicht berichten</a></h3>
          </div>
        </div>
      </div>
  </section>
    
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Gp<span>.</span></h3>
              <p>
                Kapellekouter 1/Z<br>
                9230 Wetteren, BE<br><br>
                <strong>Tel:</strong> +32 478/327564<br>
                <strong>Email:</strong> gert.debondt@telenet.be<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://www.facebook.com/massemenkvve?fref=ts" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/kvve_massemen/" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Nuttige links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Over ons</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Diensten</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Onze diensten</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tussenstanden</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Ploegen</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Speeldagen</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Wedstrijden</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Evenementen</a></li>
            </ul>
          </div>

          

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Gp</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>