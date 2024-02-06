<?php
//print_r($_POST);

if (isset($_POST["verzenden"]) && isset($_POST["tezoeken"]) && ($_POST["tezoeken"] != "")) {

    $mysqli = new mysqli("localhost", "root", "", "voetbalclubphp");
    

    if ($mysqli->connect_errno) {
        trigger_error('Fout bij verbinding: ' . $mysqli->error);
    } else {

        $sql = "UPDATE tblspelers
                SET  naam=?,
                     voornaam=?,
                     geboortedatum=?,
                     adres_speler=?,
                     postcode_speler=?,
                     email=?,
                     telefoonnummer_speler=?,
                     wie_eerst_te_verwittigen=?,
                     email_moeder=?,
                     telefoonnummer_moeder=?,
                     adres_moeder=?,
                     postcode_moeder=?,
                     email_vader=?,
                     telefoonnummer_vader=?,
                     adres_vader=?,
                     postcode_vader=?,
                     medische_toelichting=?,
                     toelichting=?
                WHERE spelernr=?";

                    if ($stmt = $mysqli->prepare($sql)) {
                    $naam = $_POST["naam"];
                    $voornaam = $_POST["voornaam"];
                    $datum = $_POST["datum"];
                    $adres1 = $_POST["adres1"];
                    $postcode1 = $_POST["postcode1"];
                    $email1 = $_POST["email1"];
                    $tel1 = $_POST["tel1"];
                    $contactfirst = $_POST["contactfirst"];
                    $email2 = $_POST["email2"];
                    $tel2 = $_POST["tel2"];
                    $adres2 = $_POST["adres2"];
                    $postcode2 = $_POST["postcode2"];
                    $email3 = $_POST["email3"];
                    $tel3 = $_POST["tel3"];
                    $adres3 = $_POST["adres3"];
                    $postcode3 = $_POST["postcode3"];
                    $medische_toelichting = $_POST["medische_toelichting"];
                    $toelichting = $_POST["toelichting"];
                    $spelernr = $_POST["tezoeken"];
                    

                    $stmt->bind_param(
                        "ssssissssssisssisss",
                        $naam,
                        $voornaam,
                        $datum,
                        $adres1,
                        $postcode1,
                        $email1,
                        $tel1,
                        $contactfirst,
                        $email2,
                        $tel2,
                        $adres2,
                        $postcode2,
                        $email3,
                        $tel3,
                        $adres3,
                        $postcode3,
                        $medische_toelichting,
                        $toelichting,
                        $spelernr
                        
                    );

            if ($stmt->execute()) {
              echo '<script>window.location.href = "gelukt.php";</script>';
              
            } else {
                echo 'Het uitvoeren van de query is mislukt: ' . $stmt->error;
            }


            $stmt->close();
        } else {
            echo 'Er zit een fout in de query';
        }


        $mysqli->close();
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
  <link href="assets/css/stylezoeken.css" rel="stylesheet">
  <!-- =======================================================
  * Template Name: Gp
  * Updated: Nov 25 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <script type="text/javascript">
    function openModal() {
      var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
      myModal.show();
  }
</script>
</head>
<?php 
    $mysqli = new MySQLi("localhost","root","","voetbalclubphp");
    if (mysqli_connect_errno()) 
    {
        trigger_error('fout bij verbinding:' . $mysqli->error);
    }
    $sql= "SELECT * FROM tblspelers WHERE spelernr = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("i", $update);
    $stmt->execute();
    $stmt->bind_result($spelersnr,$naam,$voornaam,$datum,$adres1,$postcode1,$email1,$tel1,$adres2,$postcode2,$email2, $tel2, $adres3, $postcode3, $email3,$tel3, $contactfirst,  $medische_toelichting,$bondsnummer, $toelichting);
    $stmt->fetch();
    $stmt->close();
?>
<body>
  <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Wijzigen Gegevens</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="wijzigen" name="wijzigen" method="post" action=" <?php echo $_SERVER["PHP_SELF"];?>">
      <table class="mx-auto">
        <!-- Persoonlijke gegevens speler -->
        
        <tr>
            <th colspan="2">Persoonlijke gegevens speler</th>
        </tr>
        <tr>
            <td><label>Naam:</label></td>
            <td><input type="text" name="naam" id="naam" value="<?php echo $naam;?>" required>
            <label id="naamVerplicht" class="fout"></label></td>
        </tr>
        <tr>
            <td><label>Voornaam:</label></td>
            <td><input type="text" name="voornaam" id="voornaam" required>
            <label id="voornaamVerplicht" class="fout"></label></td>
        </tr>
        <tr>
            <td><label>Geboortedatum:</label></td>
            <td><input type="date" name="datum" id="datum" required>
            <label id="datumVerplicht" class="fout"></label></td>
        </tr>
        <tr>
            <td><label>Adres speler:</label></td>
            <td><input type="text" name="adres1" id="adres1" required>
            <label id="adres1Verplicht" class="fout"></label></td>
        </tr>
        <tr>
            <td><label>postcode speler:</label></td>
            <td><input type="text" name="postcode1" id="postcode1" required>
            <label id="postcode1Verplicht" class="fout"></label></td>
        </tr>
        <!-- Contactgegevens speler -->
        <tr>
            <th colspan="2">Contactgegevens speler</th>
        </tr>
        <tr>
            <td><label>E-mail speler:</label></td>
            <td><input type="email" name="email1" id="email1" required>
            <label id="email1Verplicht" class="fout"></label></td>
        </tr>
        <tr>
            <td><label>Telefoonnummer speler:</label></td>
            <td><input type="tel" name="tel1" id="tel1" required>
            <label id="tel1Verplicht" class="fout"></label></td>
        </tr>
        <!-- Contactgegevens ouders -->
        <tr>
            <th colspan="2">Contactgegevens ouders</th>
        </tr>
        <tr>
            <td><label>Wie eerst contacteren:</label></td>
            <td><input type="text" name="contactfirst" id="contactfirst" action="<?php echo $_SERVER[$contactfirst];?>"required>
            <label id="contactVerplicht" class="fout"></label></td>
        </tr>
        <tr>
            <th colspan="2">Moeder</th>
        </tr>
        <tr>
            <td><label>E-mail moeder:</label></td>
            <td><input type="email" name="email2" id="email2" required>
            <label id="email2Verplicht" class="fout"></label></td>
        </tr>
        <tr>
            <td><label>Telefoonnummer moeder:</label></td>
            <td><input type="tel" name="tel2" id="tel2" required>
            <label id="tel2Verplicht" class="fout"></label></td>
        </tr>
        <tr>
            <td><label>Adres moeder:</label></td>
            <td><input type="text" name="adres2" id="adres2" required>
            <label id="adres2Verplicht" class="fout"></label></td>
        </tr>
        <tr>
            <td><label>postcode moeder:</label></td>
            <td><input type="text" name="postcode2" id="postcode2" required>
            <label id="postcode2Verplicht" class="fout"></label></td>
        </tr>
        <tr>
            <th colspan="2">Vader</th>
        </tr>
        <tr>
            <td><label>E-mail vader:</label></td>
            <td><input type="email" name="email3" id="email3" required>
            <label id="email3Verplicht" class="fout"></label></td>
        </tr>
        
        <tr>
            <td><label>Telefoonnummer vader:</label></td>
            <td><input type="tel" name="tel3" id="tel3" required>
            <label id="tel3Verplicht" class="fout"></label></td>
        </tr>
        <tr>
            <td><label>Adres vader:</label></td>
            <td><input type="text" name="adres3" id="adres3"required >
            <label id="adres3Verplicht" class="fout"></label></td>
        </tr>
        <tr>
            <td><label>postcode vader:</label></td>
            <td><input type="text" name="postcode3" id="postcode3" required></td>
            <label id="postcode3Verplicht" class="fout"></label>
        </tr>
        <!-- Voeg hier de overige velden toe -->
        <tr>
            <th colspan="2">Andere</th>
        </tr>
        <tr>
            <td><label for="medische_toelichting">Medische toelichting:<br>Indien geen type "geen"</label></td>
            <td><textarea class="center"id="medische_toelichting" name="medische_toelichting" rows="4" required></textarea></td>

        </tr>
        <tr>
            <td><label for="toelichting">Toelichting:</label></td>
            <td><textarea class="center"id="toelichting" name="toelichting" rows="4" ></textarea></td>
        </tr>
    </table>
  </section>
  </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Sluiten</button>
        <input  type="submit" class="btn btn-primary" value="Wijzigen" id="wijzigen" name="wijzigen" onclick="wijzig()">
      </div>
    </div>
  </div>  
</div>
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

            <p><br><br><br></p>
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
                <input type="submit" name="zoek" id="zoek" value="zoek">
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
                echo "<div style='overflow-x:auto;'><table border='1' class='table-responsive'> <tr><th>Spelernummer</th><th>Voornaam</th><th>Naam</th><th>Geboorte Datum</th><th>Adres</th><th>Postcode</th><th>Email</th><th>Telefoonnummer</th><th>adres moeder</th><th>poscode moeder</th><th>email moeder</th><th>telefoonnummer moeder</th><th>adres vader</th><th>poscode vader</th><th>email vader</th><th>telefoonnummer vader</th><th>contact persoon</th><th>medische toelichting</th><th>bondsnummer</th><th colspan='2'>toelichting</th>
                </tr>";
                while ($stmt->fetch()) {
                    echo "<tr><td>" . $spelersnr . "</td><td>" . $voornaam . "</td><td>" . $naam . "</td><td>" . $datum . "</td><td>" . $adres1 . "</td><td>" . $postcode1 . "</td><td>" . $email1 . "</td><td>" . $tel1 . "<td>".$adres2."</td><td>".$postcode2."</td><td>".$email2."</td><td>".$tel2."</td><td>".$adres3."</td><td>".$postcode3."</td><td>".$email3."</td><td>".$tel3."</td><td>".$contactfirst."</td><td>".$medische_toelichting."</td><td>".$bondsnummer."</td><td>".$toelichting."</td>
                    <td><button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#staticBackdrop' style='background-color: #ffc451; border-color: black; color: black;'>
                    Wijzigen
                    </button></td></tr>";
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
                            //echo "<form id='overzicht' name='overzicht' method='post' action='" . $_SERVER['PHP_SELF'] . "'>";
                            echo "<div style='overflow-x:auto;'><table border='1' class='table-responsive'> <tr><th>Spelernummer</th><th>Voornaam</th><th>Naam</th><th>Geboorte Datum</th><th>Adres</th><th>Postcode</th><th>Email</th><th>Telefoonnummer</th><th>adres moeder</th><th>poscode moeder</th><th>email moeder</th><th>telefoonnummer moeder</th><th>adres vader</th><th>poscode vader</th><th>email vader</th><th>telefoonnummer vader</th><th>contact persoon</th><th>medische toelichting</th><th>bondsnummer</th><th colspan='2'>toelichting</th>
                            </tr>";
                            while ($stmt->fetch()) {
                                echo "<tr><td>" . $spelersnr . "</td><td>" . $voornaam . "</td><td>" . $naam . "</td><td>" . $datum . "</td><td>" . $adres1 . "</td><td>" . $postcode1 . "</td><td>" . $email1 . "</td><td>" . $tel1 . "<td>".$adres2."</td><td>".$postcode2."</td><td>".$email2."</td><td>".$tel2."</td><td>".$adres3."</td><td>".$postcode3."</td><td>".$email3."</td><td>".$tel3."</td><td>".$contactfirst."</td><td>".$medische_toelichting."</td><td>".$bondsnummer."</td><td>".$toelichting."</td><td>
                              <form name='form2' method='post' action='overzicht.php?actie=verander&artikelid=<?php echo $update; ?>'>
                                  <input type='button' class='btn btn-success' name='update' id='update' value='Update' onclick='openModal()'style='background-color: #ffc451; border-color: black; color: black;'>
                              
                          </td></tr>";
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