<?php
  if(isset($_GET["spelerid"])){
    $id = $_GET["spelerid"];
  }
  $mysqli = new MySQLi("localhost","root","","voetbalclubphp");
  if(mysqli_connect_errno()){
    trigger_error("fout bij verbinding: ".$mysqli->error);
  }else{
    $sql="SELECT * FROM tblspelers WHERE spelernr = ?";
    if($stmt = $mysqli->prepare($sql)){
      $stmt->bind_param("i",$id);
      if(!$stmt->execute()){
        echo "Het uitvoeren van de query is mislukt:".$stmt->error."in query".$sql;
      }else{
        $stmt->bind_result($spelersnr, $naam, $voornaam, $datum, $adres1, $postcode1, $email1, $tel1, $adres2, $postcode2, $email2, $tel2, $adres3, $postcode3, $email3, $tel3, $contactfirst, $medische_toelichting, $bondsnummer, $toelichting,$actief);
        $stmt->fetch();
        $id = $spelersnr;
      }
      $stmt->close();
    }else{
        echo"er zit een fout in de query: ".$mysqli->error;
    }
  }
  function fetchGemeente($postcode, $mysqli){
    $query = "SELECT gemeente FROM tblpostcode WHERE postcode = ?";
    if ($stmt = $mysqli->prepare($query)) {
    $stmt->bind_param("s", $postcode);
        $stmt->execute();
        $stmt->bind_result($gemeente);
        $stmt->fetch();
        $stmt->close();
        return $gemeente;
  }else{
    return "Error fetching gemeente";
  }
}
?>
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
  <link href="assets/css/styleinschrijving.css" rel="stylesheet">
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
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="aangemeld.php" class="get-started-btn scrollto">Admin only</a>

    </div>
  </header><!-- End Header -->
 
  <section>
  <div class="container">
   <form id="inschrijven" name="inschrijven" method="post" action='updatepage.php?actieverander&spelerid=<?php echo $id;?>'>
    <table class="mx-auto">
        <!-- Persoonlijke gegevens speler -->
        
        <tr>
            <th colspan="2">Persoonlijke gegevens speler</th>
        </tr>
        <tr>
            <td><label>Naam:</label></td>
            <td><input type="text" name="naam" id="naam" value="<?php echo $naam;?>" readonly>
            <label id="naamVerplicht" class="fout"></label></td>
        </tr>
        <tr>
            <td><label>Voornaam:</label></td>
            <td><input type="text" name="voornaam" id="voornaam" value="<?php echo $voornaam ;?> " readonly>
            <label id="voornaamVerplicht" class="fout"></label></td>
        </tr>
        <tr>
            <td><label>Geboortedatum:</label></td>
            <td><input type="date" name="datum" id="datum" value="<?php echo (new DateTime($datum))->format('Y-m-d'); ?>" readonly>
            <label id="datumVerplicht" class="fout"></label></td>
        </tr>
        <tr>
            <td><label>Adres speler:</label></td>
            <td><input type="text" name="adres1" id="adres1" value="<?php echo $adres1;?>"readonly>
            <label id="adres1Verplicht" class="fout"></label></td>
        </tr>
        <tr>
            <td><label>postcode speler:</label></td>
            <td><input type="text" name="postcode1" id="postcode1" value="<?php echo $postcode1;?>"readonly>
            <label id="postcode1Verplicht" class="fout"></label></td>
        </tr>
        <tr>
            <td><label>gemeente speler:</label></td>
            <td>
              <?php
                $gemeente_speler = fetchGemeente($postcode1, $mysqli);
              ?>
              <input type="text" name="gemeente_speler" id="gemeente_speler" value="<?php echo $gemeente_speler;?>" readonly>
              <label id="gemeenteVerplicht" class="fout"></label>
            </td>
        </tr>
        <!-- Contactgegevens speler -->
        <tr>
            <th colspan="2">Contactgegevens speler</th>
        </tr>
        <tr>
            <td><label>E-mail speler:</label></td>
            <td><input type="email" name="email1" id="email1" value="<?php echo $email1;?>"readonly>
            <label id="email1Verplicht" class="fout"></label></td>
        </tr>
        <tr>
            <td><label>Telefoonnummer speler:</label></td>
            <td><input type="tel" name="tel1" id="tel1" value="<?php echo $tel1;?>"readonly>
            <label id="tel1Verplicht" class="fout"></label></td>
        </tr>
        <!-- Contactgegevens ouders -->
        <tr>
            <th colspan="2">Contactgegevens ouders</th>
        </tr>
        <tr>
            <td><label>Wie eerst contacteren:</label></td>
            <td><input type="text" name="contactfirst" id="contactfirst" value="<?php echo $contactfirst;?>"readonly>
            <label id="contactVerplicht" class="fout"></label></td>
        </tr>
        <tr>
            <th colspan="2">Moeder</th>
        </tr>
        <tr>
            <td><label>E-mail moeder:</label></td>
            <td><input type="email" name="email2" id="email2" value="<?php echo $email2;?>"readonly>
            <label id="email2Verplicht" class="fout"></label></td>
        </tr>
        <tr>
            <td><label>Telefoonnummer moeder:</label></td>
            <td><input type="tel" name="tel2" id="tel2" value="<?php echo $tel2;?>"readonly>
            <label id="tel2Verplicht" class="fout"></label></td>
        </tr>
        <tr>
            <td><label>Adres moeder:</label></td>
            <td><input type="text" name="adres2" id="adres2" value="<?php echo $adres2;?>"readonly>
            <label id="adres2Verplicht" class="fout"></label></td>
        </tr>
        <tr>
            <td><label>postcode moeder:</label></td>
            <td><input type="text" name="postcode2" id="postcode2" value="<?php echo $postcode2;?>"readonly>
            <label id="postcode2Verplicht" class="fout"></label></td>
        </tr>
        <tr>
            <td><label>gemeente moeder:</label></td>
            <td>
              <?php
                $gemeente_moeder = fetchGemeente($postcode2, $mysqli);
              ?>
              <input type="text" name="gemeente_moeder" id="gemeente_moeder" value="<?php echo $gemeente_moeder;?>" readonly>
              <label id="gemeenteVerplicht" class="fout"></label>
            </td>
        </tr>
        <tr>
            <th colspan="2">Vader</th>
        </tr>
        <tr>
            <td><label>E-mail vader:</label></td>
            <td><input type="email" name="email3" id="email3" value="<?php echo $email3;?>"readonly>
            <label id="email3Verplicht" class="fout"></label></td>
        </tr>
        
        <tr>
            <td><label>Telefoonnummer vader:</label></td>
            <td><input type="tel" name="tel3" id="tel3" value="<?php echo $tel3;?>"readonly>
            <label id="tel3Verplicht" class="fout"></label></td>
        </tr>
        <tr>
            <td><label>Adres vader:</label></td>
            <td><input type="text" name="adres3" id="adres3" value="<?php echo $adres3;?>" readonly>
            <label id="adres3Verplicht" class="fout"></label></td>
        </tr>
        <tr>
            <td><label>postcode vader:</label></td>
            <td><input type="text" name="postcode3" id="postcode3" value="<?php echo $postcode3;?>"readonly></td>
            <label id="postcode3Verplicht" class="fout"></label>
        </tr>
        <tr>
            <td><label>gemeente vader:</label></td>
            <td>
              <?php
                $gemeente_vader = fetchGemeente($postcode3, $mysqli);
              ?>
              <input type="text" name="gemeente_vader" id="gemeente_vader" value="<?php echo $gemeente_vader;?>" readonly>
              <label id="gemeenteVerplicht" class="fout"></label>
            </td>
        </tr>
        <!-- Voeg hier de overige velden toe -->
        <tr>
            <th colspan="2">Andere</th>
        </tr>
        <tr>
            <td><label for="medische_toelichting">Medische toelichting:<br>Indien geen type "geen"</label></td>
            <td><textarea class="center"id="medische_toelichting" name="medische_toelichting" rows="4" readonly><?php echo $medische_toelichting;?></textarea></td>

        </tr>
        <tr>
            <td><label for="toelichting">Toelichting:</label></td>
            <td><textarea class="center"id="toelichting" name="toelichting" rows="4" readonly><?php echo $toelichting;?></textarea></td>
        </tr>
        <tr>
          <td colspan="2" style="text-align: center;">
            <input style="margin: 0;" type='submit' name='update' id='update' value='Wijzig'>
          </td>
        </tr>
    </table>
  </section>
  </form> 
  

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