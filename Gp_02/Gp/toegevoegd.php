<?php
include 'session_check.php';  
if(isset($_GET["spelerid"]) && isset($_GET["ploegnr"])) {
    $spelerId = $_GET["spelerid"];
    $ploegNr = $_GET["ploegnr"];
   
    // Verbinding maken met de database
    $mysqli = new MySQLi("fdb1034.awardspace.net","4480785_kvvemassemen","jaarprojectTimenStef1","4480785_kvvemassemen");

    // Controleren op verbindingsfouten
    if(mysqli_connect_errno()) {
        trigger_error("Fout bij verbinding: ".$mysqli->error);
        
    } else {
      
        // Query om te controleren of de speler al in een andere ploeg zit
        $checkExistingQuery = "SELECT COUNT(*) AS count FROM tblspelersperploeg WHERE spelernr = ?";
        
        if($checkExistingStmt = $mysqli->prepare($checkExistingQuery)) {
            $checkExistingStmt->bind_param("i", $spelerId);
            $checkExistingStmt->execute();
            $checkExistingStmt->bind_result($existingCount);
            $checkExistingStmt->fetch();
            $checkExistingStmt->close();

            if($existingCount > 0) {
                $returntext = "De speler zit al in een ploeg.";
            } else {
                // Query om te controleren of de speler al in deze ploeg zit
                $checkExistingTeamQuery = "SELECT COUNT(*) AS count FROM tblspelersperploeg WHERE ploegID = ? AND spelernr = ?";
        
                if($checkExistingTeamStmt = $mysqli->prepare($checkExistingTeamQuery)) {
                    $checkExistingTeamStmt->bind_param("ii", $ploegNr, $spelerId);
                    $checkExistingTeamStmt->execute();
                    $checkExistingTeamStmt->bind_result($existingTeamCount);
                    $checkExistingTeamStmt->fetch();
                    $checkExistingTeamStmt->close();

                    if($existingTeamCount > 0) {
                      $returntext = "De speler zit al in een ploeg.";
                    } else {
                        // Als de speler niet in een andere ploeg zit, voeg deze dan toe aan de nieuwe ploeg
                        $insertQuery = "INSERT INTO tblspelersperploeg (ploegID, spelernr, begindatum, einddatum) VALUES (?, ?, 2024, 2025)";
                        
                        if($insertStmt = $mysqli->prepare($insertQuery)) {
                            $insertStmt->bind_param("ii", $ploegNr, $spelerId);
                            
                            if($insertStmt->execute()) {
                                $returntext = "De speler is succesvol toegevoegd aan de ploeg";
                            } else {
                              $returntext = "Het toevoegen van de speler is mislukt.";
                            }

                            $insertStmt->close();
                        } else {
                            echo "Er zit een fout in de query: " . $mysqli->error;
                        }
                    }
                } else {
                    echo "Er zit een fout in de query: " . $mysqli->error;
                }
            }
        } else {
            echo "Er zit een fout in de query: " . $mysqli->error;
        }

        // Verbinding met de database sluiten
        $mysqli->close();
    }
} else {
    echo "Niet alle vereiste parameters zijn ingesteld.";
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
<?php
 
    if(mysqli_connect_errno()) {trigger_error('Fout bij verbinding: '.$mysqli->error); }
    else{
        if(isset($_GET["ploegnr"])){
          $ploegnr = $_GET["ploegnr"];
        }
      }
  ?>
<body>
  

             <!-- ======= Header ======= -->
             <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

    <?php if(isset($_SESSION['spelernr'])): ?>
            <h1 class="logo me-auto me-lg-0"><a href="aangemeld.php"><img src="assets/img/favicon.jpg"></a></h1>
          <?php endif; ?>
          <?php if(!isset($_SESSION['spelernr'])): ?>
            <h1 class="logo me-auto me-lg-0"><a href="index.php"><img src="assets/img/favicon.jpg"></a></h1>
          <?php endif; ?>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul> 
        <?php if(isset($_SESSION['spelernr'])): ?>
            <li><a class="nav-link scrollto" href="aangemeld.php">Home</a></li>
          <?php endif; ?>
          <?php if(!isset($_SESSION['spelernr'])): ?>
            <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <?php endif; ?>
        </ul>
        <?php if(!isset($_SESSION['spelernr'])): ?>
          <li><a class="nav-link scrollto" href="inloggen.php">Login</a></li>
          <?php endif; ?>
          <?php if(isset($_SESSION['spelernr'])): ?>
          <li><a class="nav-link scrollto" href="logout.php">Logout</a></li>
          <?php endif; ?>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <?php if(isset($_SESSION['spelernr'])): ?>
        <a href="aangemeld.php" class="get-started-btn scrollto">Admin</a>
        <?php endif; ?>

    </div>
  </header><!-- End Header -->
 
  <section>
  <div class="container">
   <form id="inactief" name="inactief" method="post">
    <table class="mx-auto">
    <tr>
        <td>
           <?php echo $returntext ?>
        </td>
      </tr>  
    <tr>
        <td>
        <a href="ploegen.php?ploegnr=<?php echo $ploegnr; ?>"><input type="button" value="terug" id="terug" name="terug" style="background-color: #ffc451; margin: 0;"></a>
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
