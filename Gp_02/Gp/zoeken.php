
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
  <link href="assets/css/stylezoeken.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Gp
  * Updated: Nov 25 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</script>
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
          <li class="dropdown"><a href="#"><span>COMING SOON</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="aangemeld.php" class="get-started-btn scrollto">Admin only</a>

    </div>
  </header><!-- End Header -->
    <div class="container">
      <br><br><br>
      <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="categorie">
                <h1>Zoeken naar speler</h1><br>
                <select id="categorie" name="categorie">
                    <option value="spelernr">Spelersnummer</option>
                    <option value="voornaam">Voornaam</option>
                    <option value="naam">Naam</option>          
                    <option value="geboortedatum">Geboorte datum</option>
                    <option value="adres_speler">adres</option>
                    <option value="postcode_speler">postcode</option>
                    <option value="email">email</option>
                    <option value="telefoonnummer_speler">Telefoonnummer</option>
                </select>
                <input type="text" class="form-control" id="zoekterm" name="zoekterm" list="search" placeholder="..." value="<?php echo isset($_GET['zoekterm']) ? htmlspecialchars($_GET['zoekterm']) : ''; ?>">
                <input type="submit" name="zoek" id="zoek" value="zoek" onclick='redirect()'>
            </form>
            <?php
        $mysqli = new MySQLi("localhost", "root", "", "voetbalclubphp");
        if (isset($_GET["zoek"])) {
            if ((isset($_GET["zoekterm"])) && ($_GET["zoekterm"] != "")) {
                $zoekterm = "%" . $_GET["zoekterm"] . "%";
                $categorie = $_GET["categorie"];
                $sql = "SELECT * FROM tblspelers WHERE $categorie LIKE ?";
                $stmt = $mysqli->prepare($sql);
                if (!$stmt) {
                    die('Error in SQL query: ' . $mysqli->error);
                };
                $stmt->bind_param("s", $zoekterm);
                $stmt->execute();
                $stmt->bind_result($spelersnr, $naam, $voornaam, $datum, $adres1, $postcode1, $email1, $tel1, $adres2, $postcode2, $email2, $tel2, $adres3, $postcode3, $email3, $tel3, $contactfirst, $medische_toelichting, $bondsnummer, $toelichting);
                echo "<div style='overflow-x:auto;'><table border='1' class='table-responsive'> <tr><th>Spelernummer</th><th>Voornaam</th><th>Naam</th><th>Geboorte Datum</th><th>Adres</th><th>Postcode</th><th>Email</th><th>Telefoonnummer</th><th>Meer</th><th>Update</th>
                </tr>";
                while ($stmt->fetch()) {
                  $id = $spelersnr;
                    echo "<tr><td>" . $spelersnr . "</td><td>" . $voornaam . "</td><td>" . $naam . "</td><td>" . $datum . "</td><td>" . $adres1 . "</td><td>" . $postcode1 . "</td><td>" . $email1 . "</td><td>" . $tel1 . "</td><td>";
                    ?>
                    <form name='form1' method='post' action='meer_info.php?actiemeerinfo&spelerid=<?php echo $id;?>'><input type='submit' name='Meer' id='Meer' value='Meer'></form>
                    <?php echo "</td><td>";
                    ?>
                      <form name='form1' method='post' action='update.php.php?actieverander&spelerid=<?php echo $id;?>'><input type='submit' name='update' id='update' value='Update'></form>
                    <?php echo "</td></tr>";
                }
                echo "</table></div>";
                $stmt->close();
            } else {
                if (mysqli_connect_errno()) {
                    trigger_error('Fout bij verbinding: ' . $mysqli->error);
                } else {
                    $sql = "SELECT * from tblspelers";
                    if ($stmt = $mysqli->prepare($sql)) {
                        if (!$stmt->execute()) {
                            echo "Het uitvoeren van de query is mislukt: ' . $stmt->error . ' in query: " . $sql;
                        } else {
                            $stmt->bind_result($spelersnr, $naam, $voornaam, $datum, $adres1, $postcode1, $email1, $tel1, $adres2, $postcode2, $email2, $tel2, $adres3, $postcode3, $email3, $tel3, $contactfirst, $medische_toelichting, $bondsnummer, $toelichting);
                            echo "<div style='overflow-x:auto;'><table border='1' class='table-responsive'> <tr><th>Spelernummer</th><th>Voornaam</th><th>Naam</th><th>Geboorte  Datum</th><th>Adres</th><th>Postcode</th><th>Email</th><th>Telefoonnummer</th><th>Meer</th><th>Update</th>
                            </tr>";
                            while ($stmt->fetch()) {
                              $id = $spelersnr;
                                echo "<tr><td>" . $spelersnr . "</td><td>" . $voornaam . "</td><td>" . $naam . "</td><td>" . $datum . "</td><td>" . $adres1 . "</td><td>" . $postcode1 . "</td><td>" . $email1 . "</td><td>" . $tel1 . "</td><td>";
                                ?> 
                                <form name='form1' method='post' action='meer_info.php?actiemeerinfo&spelerid=<?php echo $id;?>'><input type='submit' name='Meer' id='Meer' value='Meer'></form>
                                <?php echo "</td><td>";
                                ?>
                                   <form name='form1' method='post' action='updatepage.php?actieverander&spelerid=<?php echo $id;?>'><input type='submit' name='update' id='update' value='Update'></form>
                                <?php "</td></tr>";
                            }
                            echo "</table></div>";
                            echo "</form>";
                        }
                    }
                }
            }
        } 
        ?>
    </div>
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