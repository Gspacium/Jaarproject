<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>KVVE home</title>
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
  <link href="assets/css/styleoverzicht.css" rel="stylesheet">

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
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="about.php">About</a></li>
          <li class="dropdown"><a href="#"><span>Ploegen</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Eerste elftallen</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="ploegen.php?ploegnr=23">A-ploeg</A-ploeg></a></li>
                  <li><a href="ploegen.php?ploegnr=24">B-ploeg</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Reserven</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                  <li><a href="ploegen.php?ploegnr=19">Reserven-A</a></li>
                  <li><a href="ploegen.php?ploegnr=20">Reserven-B</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Jeugd</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                  <li><a href="ploegen.php?ploegnr=1">U6</a></li>
                  <li><a href="ploegen.php?ploegnr=2">U7</a></li>
                  <li><a href="ploegen.php?ploegnr=3">U8A</a></li>
                  <li><a href="ploegen.php?ploegnr=4">U8B</a></li>
                  <li><a href="ploegen.php?ploegnr=5">U9A</a></li>
                  <li><a href="ploegen.php?ploegnr=6">U9B</a></li>
                  <li><a href="ploegen.php?ploegnr=7">U10A</a></li>
                  <li><a href="ploegen.php?ploegnr=8">U10B</a></li>
                  <li><a href="ploegen.php?ploegnr=9">U11A</a></li>
                  <li><a href="ploegen.php?ploegnr=10">U11B</a></li>
                  <li><a href="ploegen.php?ploegnr=11">U12A</a></li>
                  <li><a href="ploegen.php?ploegnr=12">U12B</a></li>
                  <li><a href="ploegen.php?ploegnr=13">U13A</a></li>
                  <li><a href="ploegen.php?ploegnr=14">U13B</a></li>
                  <li><a href="ploegen.php?ploegnr=15">U15A</a></li>
                  <li><a href="ploegen.php?ploegnr=16">U15B</a></li>
                  <li><a href="ploegen.php?ploegnr=17">U17</a></li>
                  <li><a href="ploegen.php?ploegnr=18">U21</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>G-ploegen</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                  <li><a href="ploegen.php?ploegnr=21">G-kids</a></li>
                  <li><a href="ploegen.php?ploegnr=22">G-senioren</a></li>
                </ul>
              </li>
            </ul>
          </li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="aangemeld.php" class="get-started-btn scrollto">Admin Only</a>

    </div>
  </header><!-- End Header -->
  
  <main id="main">
    <div class="container">
      <p>
      <br><br><br><br>
      </p>

      <form method="get" name="searchForm" action="<?php echo $_SERVER['PHP_SELF']; ?>"class="mx-auto text-center"> 
        Order op: <select id="sortBy" name="sortBy">
                      <option value="spelernr">spelersnr 1-9</option>
                      <option value="naam">naam A-Z</option>
                      <option value="voornaam">voornaam A-Z</option>
                      <option value="geboortedatum">geboortedatum</option>
                      <option value="postcode_speler">postcode 1-9</option>
                      <option value="email">email A-Z</option>
                      <option value="telefoonnummer_speler">telefoonnummer 1-9</option>
                    </select>
                    <input type="submit" class="btn btn-primary" style="margin:0;"name="sorteer" id="sorteer" value="Sorteer">
      </form>
  <?php 
    $mysqli= new MySQLi ("localhost","root","","voetbalclubphp");
    if(mysqli_connect_errno()) {trigger_error('Fout bij verbinding: '.$mysqli->error); }
    else{
        if(isset($_GET["ploegnr"])){
          $ploegnr = $_GET["ploegnr"];
        }else{
         echo "er zit geen persoon in deze ploeg";
        }
        $sql= "SELECT s.*,p.gemeente from tblspelers s INNER JOIN tblspelersperploeg ploeg ON s.spelernr = ploeg.spelernr 
               INNER JOIN tblpostcode p ON s.postcode_speler = p.postcode
               and ploeg.ploegID=? ORDER BY ? ASC";
        if($stmt = $mysqli->prepare($sql)){
          $stmt -> bind_param('is',$ploegnr,$sortBy);
          if(isset($_GET['sortBy'])){
            $sortBy = $_GET['sortBy'];
          }else{
            $sortBy = 'spelernr';
          }
          
          
            if(!$stmt->execute()){
                echo "Het uitvoeren van de query is mislukt: '.$stmt->error.' in query: ".$sql;
            }else{
                $stmt->bind_result($spelersnr,$naam,$voornaam,$datum,$adres1,$postcode1,$email1,$tel1,$adres2,$postcode2,$email2, $tel2, $adres3, $postcode3, $email3,$tel3, $contactfirst, $medische_toelichting,$bondsnummer, $toelichting,$actief,$gemeente);

                echo "<div><table border='1' style='margin-left: 50px'> <tr><th>Spelernummer</th><th>Voornaam</th><th>Naam</th><th>Geboortedatum</th><th>Adres</th><th>Postcode</th><th>Gemeente</th><th>Email</th><th>Telefoonnummer</th><th>Meer</th><th>Wijzig</th>
                </tr>";
                while ($stmt->fetch()) {
                  $id = $spelersnr;
                    echo "<tr><td>" . $spelersnr . "</td><td>" . $voornaam . "</td><td>" . $naam . "</td><td>" . $datum . "</td><td>" . $adres1 . "</td><td>" . $postcode1 . "</td><td>".$gemeente."</td><td>".$email1 . "</td><td>" . $tel1 . "</td><td style='text-align: center;'>";
                    ?>
                    <form name='form1' method='post' action='meer_info.php?actiemeerinfo&spelerid=<?php echo $id;?>'><input style="margin: auto;" type='submit' name='Meer' id='Meer' value='Meer'></form>
                    <?php echo "</td><td tyle='text-align: center;'>";
                    ?>
                      <form name='form1' method='post' action='updatepage.php?actieverander&spelerid=<?php echo $id;?>'><input style="margin: auto;"type='submit' name='update' id='update' value='Wijzig'></form>
                    <?php echo "</td></tr>";
                }
                echo "</table></div>"; 
        }
    }
  }
?>
<div>
    <a href="aangemeld.php"><input type="button"  value="terug" id="terug" style="background-color: #ffc451; margin: 0;"></a>
</div>
</div>

</main>




  
  
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