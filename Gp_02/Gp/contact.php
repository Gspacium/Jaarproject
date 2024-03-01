<?php
            if((isset($_POST["Verzenden"])) && (isset($_POST["name"]))&&($_POST["name"]!="")&& isset($_POST["email"])&& $_POST["email"]!=""){
              $mysqli = new MySQLi("localhost","root","","voetbalclubphp");
              if(mysqli_connect_errno()){
                trigger_error("Fout bij de verbinding: ".$mysqli->error);
              }else{
                $sql = "INSERT INTO tblberichten(naam, email,	onderwerp, bericht) VALUES(?,?,?,?)";
                if($stmt=$mysqli->prepare($sql)){
                  $stmt->bind_param("ssss",$naam,$email,$onderwerp,$bericht);
                  $naam = $mysqli->real_escape_string($_POST["name"]);
                  $email = $mysqli->real_escape_string($_POST["email"]);
                  $onderwerp = $mysqli->real_escape_string($_POST["subject"]);
                  $bericht = $mysqli->real_escape_string($_POST["message"]);
                  if(!$stmt->execute()){
                    echo "Het uitvoeren van de query is mislukt";
                  }else{
                    echo'<meta http-equiv="refresh" content="0;url=index.php">';
             
                  }
                  $stmt->close();
                } 
                else{
                  echo "Er zit een fout in de query";
                }
              }
            }
          ?>   


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KVVE contact</title>
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
  <link href="assets/css/styleinschrijven.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Gp
  * Updated: Nov 25 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
<!--<script> 
  function wijzig()
  var ok = true;
  if (document.getElementById("name").value == "") {
      document.getElementById("naamVerplicht").innerHTML = "Gelieve een naam in te vullen";
        ok = false;
    } 
    else {
      document.getElementById("naamVerplicht").innerHTML = "";
    }
</script>-->
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
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
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
          <li><a class="nav-link scrollto active" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="aangemeld.php" class="get-started-btn scrollto">Admin only</a>

    </div>
  </header><!-- End Header -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contacteer ons</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2511.681149780149!2d3.86214915460614!3d50.985083975986285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c39fae30ef7727%3A0x5e84336dd663cc7!2sKVV%20Eendracht%20Massemen!5e0!3m2!1snl!2sbe!4v1701613710922!5m2!1snl!2sbe" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Locatie:</h4>
                <p>Kapellekouter 1/Z, 9230 Wetteren</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>gert.debondt@telenet.be</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Tel:</h4>
                <p>+32 478/327564</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
           
            <form method="post" class="" action=" <?php echo $_SERVER["PHP_SELF"];?>">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Uw naam" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Uw Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Onderwerp" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Bericht" required></textarea>
              </div>
              <div class="my-3">                
              </div>
              <div class="text-center"><input type="submit" id="Verzenden" name="Verzenden" value="Versturen" style="background-color: #ffc451"></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

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