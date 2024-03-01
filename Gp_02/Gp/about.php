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

  
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Met passie op het veld en in een hechte gemeenschap, stimuleert onze voetbalclub talent, eenheid en liefde voor het mooie spel.</h3>
            <p class="fst-italic">
              KVVE Massemen streeft naar ambitieuze doelen met een gezonde financiële basis en een jeugdbeleid. De club wil jeugdspelers bevorderen tot het eerste elftal en betrekt iedereen, ook voormalige leden, bij de club. Jeugdvoetbal wordt gezien als meer dan alleen competitiesport, met de nadruk op leren, plezier, karaktervorming, en sociale vaardigheden. De club heeft een maatschappelijke missie en hanteert normen zoals teamgeest, respect, ambitie, passie, vooruitgang, en bescheidenheid. KVVE Massemen focust op kwaliteitsvolle begeleiding van alle spelers en ambieert dat jeugdspelers de ruggengraat van het eerste elftal vormen. De club staat open voor jongeren uit alle gemeenten en benadrukt diversiteit. Het jeugdbeleid wordt geleid door een jeugdopleidingsplan dat de visie van de KBVB volgt. Plezier in training en wedstrijd staat centraal, met een warme en familiale sfeer. De waarden van betrokkenheid, lokale verankering, familiaal gevoel, diversiteit, en autonomie dragen bij aan het realiseren van de clubmissie.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-9.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-10.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-11.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-12.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-13.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-14.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-15.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/client-16.png" class="img-fluid" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Clients Section -->
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">
  
          <div class="row">
            <div class="image col-lg-6" style="background-image: url('assets/img/features.jpg');" data-aos="fade-right"></div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
              <div class="icon-box mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                <i class="bx bx-receipt"></i>
                <h4>Missie</h4>
                <p>KVVE Massemen koestert een ambitieuze missie, waarbij het streven naar gezonde financiën en een gedreven jeugdbeleid hand in hand gaan, met als doel alle spelers, ongeacht hun traject, blijvend te engageren en te inspireren, en zo niet alleen sportieve, maar ook maatschappelijke waarden te bevorderen.</p>
              </div>
              <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                <i class="bx bx-cube-alt"></i>
                <h4>Visie</h4>
                <p>Bij KVVE Massemen ligt de focus op hoogwaardige begeleiding en ontwikkeling van alle spelers, met een kwaliteitsvolle jeugdopleiding als fundament; we streven ernaar jongeren uit diverse achtergronden te verwelkomen, zonder enige uitsluiting, en leggen de nadruk op plezier, waarbij het kind centraal staat in een warme, familiaire omgeving.</p>
              </div>
              <div class="icon-box mt-5" data-aos="zoom-in" data-aos-delay="150">
                <i class="bx bx-images"></i>
                <h4>Waarden</h4>
                <p>"De waarden van KVVE Massemen, zoals engagement, lokale verankering, familiaal gevoel, diversiteit en autonomie van het dagelijkse bestuur, vormen het essentiële DNA van de club en dragen bij aan het huidige succes en de toekomstige realisatie van doelstellingen."</p>
              </div>
            </div>
          </div>
  
        </div>
      </section><!-- End Features Section -->
    
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