
<?php
 include_once 'view/header.php';
?>


<!--Welcome-->

<div class="header" id="head">
  <div class="sides">
  <a class="navbar-brand brand" href="./index.php">J E W E LL E R Y <br> by <br> O L G A <br> D A V I D O W</a>
  </div>
  <div class="sides">
<!--    <button class="frontButtonDown"><span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></button>  -->
  </div>
        <section id="section05" class="demo">
        <a href="#welcome"><span></span></a>
</section>
</div>


<?php
include_once 'view/navbarIndex.php';
?>

<!-- Logo -->
<div class="welcomeJuwellery" id="welcome">
  <div class="container">
      <img id="welcomeLogo" src="img/index/Logo_Davidow.jpg" alt="logo" class="img-responsive">
  </div>
</div>

<!--ing for collection -->
<div class="wrapper">
  <div class="welcomeJuwellery">
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-4">
                  <a href="collection.php#leather">
                     <img src="img/index/Leder_Silber_Turkis_Koralle_Index.jpg" alt="leather" class="img-responsive imgFront" name="leather"
                          onMouseover = "Wechseln('leather','Tauschbild01b')"
                          onmouseout = "Wechseln('leather','Tauschbild01a')">
                  </a>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                  <img src="img/model/modelPerls_Front.jpg" alt="logo" class="img-responsive imgFront" name="logo">
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                  <a href="collection.php#magicNoir">
                      <img src="img/index/Magic_Noir_Halsband_Silber_Onyx_Seide_Index.jpg" alt="magicNoir" class="img-responsive imgFrontRight" name="magicNoir"
                            onMouseover = "Wechseln('magicNoir','Tauschbild02b')"
                            onmouseout = "Wechseln('magicNoir','Tauschbild02a')">
                  </a>
              </div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-3 col-md-3">
                     <a href="collection.php#zodiac">
                        <img src="img/index/Zodiac_fische_I.jpg" alt="zodiac" class="img-responsive imgFront" name="zodiac"
                               OnMouseover = "Wechseln('zodiac','Tauschbild04b')"
                               OnMouseout = "Wechseln('zodiac','Tauschbild04a')">
                      </a>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                  <a href="collection.php#pearls">
                     <img src="img/index/perls_Silber_Onyx_Index.jpg" alt="pearls" class="img-responsive imgFront" name="pearls"
                          onMouseover = "Wechseln('pearls','Tauschbild03b')"
                          onmouseout = "Wechseln('pearls','Tauschbild03a')">
                  </a>
                    <img src="img/index/logoCat.jpg" class="imgLogo img-responsive" alt="logo">
              </div>
              <div class="col-xs-12 col-sm-3 col-md-3">
                  <a href="collection.php#saintTropez">
                     <img src="img/index/Saint_Tropez_25_Silber_Perlen_Chrysoplas_Onyx_Kette_I.jpg" alt="saintTropez" class="img-responsive imgFront" name="saintTropez"
                        onMouseover = "Wechseln('saintTropez','Tauschbild05b')"
                        onmouseout = "Wechseln('saintTropez','Tauschbild05a')">
                  </a>
              </div>
          </div>
        </div>
    </div>
</div>

<script language="javascript" type="text/javascript">

Tauschbild01a = new Image();
Tauschbild01a.src = "img/index/Leder_Silber_Turkis_Koralle_Index.jpg";
Tauschbild01b = new Image();
Tauschbild01b.src = "img/index/Leder_Text.jpg"; /* Highlight-Grafik */

Tauschbild02a = new Image();
Tauschbild02a.src = "img/index/Magic_Noir_Halsband_Silber_Onyx_Seide_Index.jpg";
Tauschbild02b = new Image();
Tauschbild02b.src = "img/index/MagicNoir_Text.jpg"; /* Highlight-Grafik */

Tauschbild03a = new Image();
Tauschbild03a.src = "img/index/perls_Silber_Onyx_Index.jpg";
Tauschbild03b = new Image();
Tauschbild03b.src = "img/index/pearls_text.jpg"; /* Highlight-Grafik */

Tauschbild04a = new Image();
Tauschbild04a.src = "img/index/Zodiac_fische_I.jpg";
Tauschbild04b = new Image();
Tauschbild04b.src = "img/index/Zodiac_text.jpg"; /* Highlight-Grafik */

Tauschbild05a = new Image();
Tauschbild05a.src = "img/index/Saint_Tropez_25_Silber_Perlen_Chrysoplas_Onyx_Kette_I.jpg";
Tauschbild05b = new Image();
Tauschbild05b.src = "img/index/SaintTropez_text.jpg"; /* Highlight-Grafik */

function Wechseln(name,Tauschbildname) {
  document.images[name].src = eval(Tauschbildname + ".src")
}

//Navbar fixed on the top after the Head dosent show anymore
window.onload = function() {
  var menuTog = document.getElementById('menuToggle');
  var navBar = document.getElementById('navBar');

  if (menuTog !== null) {
    menuTog.addEventListener('click', togNav);
  }

  if (navBar !== null) {
    window.addEventListener('scroll', fixNav);
  }
};

function fixNav() {
  var head = document.getElementById('head');
  var pushBack = document.getElementById('pushBack');
  var headBot;

  if (head !== null) {
    headBot = head.getBoundingClientRect().bottom;
  }

  if (pushBack !== null) {
    if (headBot > 0) {
      navBar.style.position = 'static';
      pushBack.style.height = '0em';
    } else {
      navBar.style.position = 'fixed';
      pushBack.style.height = '3em';
    }
  }
}

function togNav() {
  var navMenu = document.getElementById('menu');

  if (navMenu !== null) {
    if (navMenu.className === "showing") {
      navMenu.className = "";
    } else {
      navMenu.className = "showing";
    }
  }
}

</script>


<?php

  include_once 'view/footer.php';

?>
