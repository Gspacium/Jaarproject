<?php
print_r($_POST);

  if((isset($_POST["verzenden"]))&&(isset($_POST["naam"]))&& ($_POST["naam"]!= "")&&
    (isset($_POST["voornaam"]))&&($_POST["voornaam"]!="")&&
    (isset($_POST["datum"]))&&($_POST["datum"]!="")&&
    (isset($_POST["adres1"]))&&($_POST["adres1"]!="")&&
    (isset($_POST["postcode1"]))&&($_POST["postcode1"]!="")&&
    (isset($_POST["email1"]))&&($_POST["email1"]!="")&&
    (isset($_POST["tel1"]))&&($_POST["tel1"]!="")&&
    (isset($_POST["contactfirst"]))&&($_POST["contactfirst"]!="")&&
    (isset($_POST["email2"]))&&($_POST["email2"]!="")&&
    (isset($_POST["tel2"]))&&($_POST["tel2"]!="")&&
    (isset($_POST["adres2"]))&&($_POST["adres2"]!="")&&
    (isset($_POST["postcode2"]))&&($_POST["postcode2"]!="")&&
    (isset($_POST["email3"]))&&($_POST["email3"]!="")&&
    (isset($_POST["tel3"]))&&($_POST["tel3"]!="")&&
    (isset($_POST["adres3"]))&&($_POST["adres3"]!="")&&
    (isset($_POST["postcode3"]))&&($_POST["postcode3"]!="")&&
    (isset($_POST["medische_toelichting"]))&&($_POST["medische_toelichting"]!="")
    ){

      $mysqli = new MySQLi ("localhost","root","","voetbalclubphp");
      if(mysqli_connect_errno()){trigger_error("fout my verbinden: ".$mysqli->error);}
      else{

       
        $sqlpostcode= "SELECT postcode, gemeente FROM tblpostcode WHERE postcode=?";

        $postcode1 = null;
        if($stmt1 = $mysqli->prepare($sqlpostcode)){
           $stmt1->bind_param('s',$_POST["postcode1"]);
          if(!$stmt1->execute()){
                echo "Het uitvoeren van de query is mislukt: '.$stmt1->error.' in query: ".$sqlpostcode;
            }else{
               $stmt1->bind_result($postcode, $gemeente);
               if($stmt1->fetch()){
                $postcode1 = $postcode;
               }
            }
          $stmt1->close();                
        }
        $postcode2 = null;
        if($stmt2 = $mysqli->prepare($sqlpostcode)){
          $stmt2->bind_param('s',$_POST["postcode2"]);
         if(!$stmt2->execute()){
               echo "Het uitvoeren van de query is mislukt: '.$stmt2->error.' in query: ".$sqlpostcode;
           }else{
               $stmt2->bind_result($postcode, $gemeente);
               if($stmt2->fetch()){
                $postcode2 = $postcode; 
               }               
            }
          $stmt2->close();                
        }
        $postcode3 = null;
        if($stmt3 = $mysqli->prepare($sqlpostcode)){
          $stmt3->bind_param('s',$_POST["postcode3"]);
        if(!$stmt3->execute()){
              echo "Het uitvoeren van de query is mislukt: '.$stmt3->error.' in query: ".$sqlpostcode;
          }else{
              $stmt3->bind_result($postcode, $gemeente);
              if($stmt3->fetch()){
                $postcode3 = $postcode; 
              }        
          }
              $stmt3->close();                
        }  

        $sql = "INSERT INTO tblspelers(naam, voornaam, geboortedatum, adres_speler, postcode_speler, email, telefoonnummer_speler, wie_eerst_te_verwittigen,email_moeder, telefoonnummer_moeder, adres_moeder, postcode_moeder,email_vader,telefoonnummer_vader, adres_vader, postcode_vader, medische_toelichting, toelichting) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        if($stmt = $mysqli->prepare($sql)){
          
          $naam = $mysqli->real_escape_string($_POST["naam"]);
          $voornaam = $mysqli->real_escape_string($_POST["voornaam"]);
          $datum = $mysqli->real_escape_string($_POST["datum"]);
          $adres1 = $mysqli->real_escape_string($_POST["adres1"]);
          $postcode1 =  $postcode1;
          $email1 = $mysqli->real_escape_string($_POST["email1"]);
          $tel1 = $mysqli->real_escape_string($_POST["tel1"]);
          $contactfirst = $mysqli->real_escape_string($_POST["contactfirst"]);
          $email2 = $mysqli->real_escape_string($_POST["email2"]);
          $tel2 = $mysqli->real_escape_string($_POST["tel2"]);
          $adres2 = $mysqli->real_escape_string($_POST["adres2"]);
          $postcode2 = $postcode2;
          $email3 = $mysqli->real_escape_string($_POST["email3"]);
          $tel3 = $mysqli->real_escape_string($_POST["tel3"]);
          $adres3 = $mysqli->real_escape_string($_POST["adres3"]);
          $postcode3 = $postcode3;
          $medische_toelichting = $mysqli->real_escape_string($_POST["medische_toelichting"]);
          $toelichting = $mysqli->real_escape_string($_POST["toelichting"]);
          $stmt ->bind_param("ssssissssssisssiss", $naam,$voornaam,$datum,$adres1,$postcode1,$email1,$tel1,$contactfirst,$email2,$tel2, $adres2, $postcode2, $email3,$tel3, $adres3, $postcode3, $medische_toelichting, $toelichting);
            if(!$stmt->execute()){
              echo "het uitvoeren van de query is mislukt";
            }else{
               echo'<meta http-equiv="refresh" content="0;url=index.php">';
            }
            $stmt->close();
        }
        else{
          echo "Er is een fout in de query: " . $mysqli->error;
        }
       
      }
  }
  
  
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
<script type="text/javascript">
  
        function wijzig() {
            var ok = true;

            if (document.getElementById("naam").value == "") {
                document.getElementById("naamVerplicht").innerHTML = "Gelieve een naam in te vullen";
                ok = false;
            } else {
                document.getElementById("naamVerplicht").innerHTML = "";
            }

            if (document.getElementById("voornaam").value == "") {
                document.getElementById("voornaamVerplicht").innerHTML = "Gelieve een voornaam in te vullen";
                ok = false;
            } else {
                document.getElementById("voornaamVerplicht").innerHTML = "";
            }
            if (document.getElementById("datum").value == "") {
                document.getElementById("datumVerplicht").innerHTML = "Gelieve een geboortedatum in te vullen";
                ok = false;
            } else {
                document.getElementById("datumVerplicht").innerHTML = "";
            }

            if (document.getElementById("adres1").value == "") {
                document.getElementById("adres1Verplicht").innerHTML = "Gelieve een adres in te vullen";
                ok = false;
            } else {
                document.getElementById("adres1Verplicht").innerHTML = "";
            }
            if (isNaN(document.getElementById("postcode1").value)) {
                document.getElementById("postcode1Verplicht").innerHTML = "Gelieve een nummer in te vullen";
                ok = false;
            } else {
                document.getElementById("postcode1Verplicht").innerHTML = "";
            }
            if (document.getElementById("email1").value != "") 
            {
              var string=document.getElementById("email1").value;
              var filter= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
              if ( filter.test(string))
              {
                document.getElementById("email1Verplicht").innerHTML="";
              }
              else
              {
                document.getElementById("email1Verplicht").innerHTML="Ongeldig email";
                ok=false;
              }
            }

            if (tel1!=""&& !geldigtelefoon(document.getElementById("tel1").value)) {
                document.getElementById("tel1Verplicht").innerHTML = "Gelieve een telefoonnummer in te vullen in te vullen";
                ok = false;
            } else {
                document.getElementById("tel1Verplicht").innerHTML = "";
            }
            if (document.getElementById("contactfirst").value == "") {
                document.getElementById("contactVerplicht").innerHTML = "Gelieve een ouder in te vullen";
                ok = false;
            } else {
                document.getElementById("contactVerplicht").innerHTML = "";
            }
            if (document.getElementById("email2").value != "") 
            {
              var string=document.getElementById("email2").value;
              var filter= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
              if ( filter.test(string))
              {
                document.getElementById("email2Verplicht").innerHTML="";
              }
              else
              {
                document.getElementById("email2Verplicht").innerHTML="Ongeldig email";
                ok=false;
              }
            }
            if (tel2!=""&& !geldigtelefoon(document.getElementById("tel2").value)) {
                document.getElementById("tel2Verplicht").innerHTML = "Gelieve een telefoonnummer in te vullen in te vullen";
                ok = false;
            } else {
                document.getElementById("tel2Verplicht").innerHTML = "";
            }
            if (document.getElementById("adres2").value == "") {
                document.getElementById("adres2Verplicht").innerHTML = "Gelieve een adres in te vullen";
                ok = false;
            } else {
                document.getElementById("adres2Verplicht").innerHTML = "";
            }
            if (isNaN(document.getElementById("postcode2").value)) {
                document.getElementById("postcode2Verplicht").innerHTML = "Gelieve een postcode in te vullen";
                ok = false;
            } else {
                document.getElementById("postcode2Verplicht").innerHTML = "";
            }
            if (document.getElementById("email3").value != "") 
            {
              var string=document.getElementById("email3").value;
              var filter= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
              if ( filter.test(string))
              {
                document.getElementById("email3Verplicht").innerHTML="";
              }
              else
              {
                document.getElementById("email3Verplicht").innerHTML="Ongeldig email";
                ok=false;
              }
            }
            if (tel3!=""&& !geldigtelefoon(document.getElementById("tel3").value)) {
                document.getElementById("tel3Verplicht").innerHTML = "Gelieve een telefoonnummer in te vullen in te vullen";
                ok = false;
            } else {
                document.getElementById("tel3Verplicht").innerHTML = "";
            }
            if (document.getElementById("adres3").value == "") {
                document.getElementById("adres3Verplicht").innerHTML = "Gelieve een adres in te vullen";
                ok = false;
            } else {
                document.getElementById("adres3Verplicht").innerHTML = "";
            }
            if (isNaN(document.getElementById("postcode3").value)) {
                document.getElementById("postcode3Verplicht").innerHTML = "Gelieve een postcode in te vullen";
                ok = false;
            } else {
                document.getElementById("postcode3Verplicht").innerHTML = "";
            }
            
            if (ok==true) {
                document.inschrijven.submit();
            }
        }
        function geldigtelefoon(telefoonnummer) {
            // Belgian phone numbers can start with +32 or 0, followed by 1 to 9 and then 8 more digits.
            var patroon = /^(?:\+32|0)[1-9][0-9]{8}$/;
            return patroon.test(telefoonnummer);
        }
    </script>
 
      
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
   <form id="inschrijven" name="inschrijven" method="post" action=" <?php echo $_SERVER["PHP_SELF"];?>">
    <table class="mx-auto">
        <!-- Persoonlijke gegevens speler -->
        
        <tr>
            <th colspan="2">Persoonlijke gegevens speler</th>
        </tr>
        <tr>
            <td><label>Naam:</label></td>
            <td><input type="text" name="naam" id="naam" required>
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
            <td><select name="postcode1" id="postcode1" class="form-control">
              <?php
                $mysqli = new mysqli("localhost","root","","voetbalclubphp");
                $sql = "SELECT postcode, gemeente FROM tblpostcode  ORDER BY postcode";
                if ($stmt = $mysqli -> prepare($sql)) {
                  if (!$stmt -> execute()) {
                    echo 'Het uitvoeren van de query is mislukt: ' . $stmt -> error . ' in query: ' . $sql;
                  } else {
                    $stmt -> bind_result($postcode, $gemeente);
                    while ($stmt -> fetch()) {
                      $gem=htmlspecialchars($gemeente);
                      $gem=stripslashes($gemeente);
                      echo '<option value="'. $postcode .'">' . $postcode."&nbsp;".$gem .  '</option>';
                    }
                  }
                    $stmt -> close();
                } 
                  else {
                    echo 'Er zit een fout in de query: ' . $mysqli->error;
                }
              ?>
            </select>
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
            <td> <select name="contactfirst" id="contactfirst">
                  <option value="moeder" selected>Moeder</option>
                  <option value="vader" >Vader</option>
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
            <td><select name="postcode2" id="postcode2" class="form-control">
              <?php

                $sql = "SELECT postcode, gemeente FROM tblpostcode  ORDER BY postcode";
                if ($stmt = $mysqli -> prepare($sql)) {
                  if (!$stmt -> execute()) {
                    echo 'Het uitvoeren van de query is mislukt: ' . $stmt -> error . ' in query: ' . $sql;
                  } else {
                    $stmt -> bind_result($postcode, $gemeente);
                    while ($stmt -> fetch()) {
                      $gem=htmlspecialchars($gemeente);
                      $gem=stripslashes($gemeente);
                      echo '<option value="'. $postcode .'">' . $postcode."&nbsp;".$gem .  '</option>';
                    }
                  }
                    $stmt -> close();
                } 
                  else {
                    echo 'Er zit een fout in de query: ' . $mysqli->error;
                }
              ?>
            </select>
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
            <td><select name="postcode3" id="postcode3" class="form-control">
              <?php

                $sql = "SELECT postcode, gemeente FROM tblpostcode  ORDER BY postcode";
                if ($stmt = $mysqli -> prepare($sql)) {
                  if (!$stmt -> execute()) {
                    echo 'Het uitvoeren van de query is mislukt: ' . $stmt -> error . ' in query: ' . $sql;
                  } else {
                    $stmt -> bind_result($postcode, $gemeente);
                    while ($stmt -> fetch()) {
                      $gem=htmlspecialchars($gemeente);
                      $gem=stripslashes($gemeente);
                      echo '<option value="'. $postcode .'">' . $postcode."&nbsp;".$gem .  '</option>';
                    }
                  }
                    $stmt -> close();
                } 
                  else {
                    echo 'Er zit een fout in de query: ' . $mysqli->error;
                }
              ?>
            </select></td>
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
        <tr>
          <td colspan="2" style="text-align: center;">
            <!-- Submit knop -->
            <input style="margin: 0;"class="" type="submit" value="Inschrijven" id="verzenden" name="verzenden" onclick="wijzig()">
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