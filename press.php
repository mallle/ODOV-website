<?php
 include_once 'view/header.php';

 include_once 'view/navbar.php';

?>
<div class="wrapper">


  <div class="welcomeJuwellery" id="overview">
      <div class="container jumbotron">
          <h2 class="pressText">P R E SS</h2>
          <div class="row">
            <div class="col-xs-12 col-md-4">
                <a href="#elle"><h4 class="text-center">E LL E <br> P L U S</h4></a>
            </div>
            <div class="col-xs-12 col-md-4">
                  <a href="#europa"><h4>E U R O P A</h4></a>
            </div>
            <div class="col-xs-12 col-md-4">
                  <a href="#inStyle"><h4>I N<br>S T Y L E</h4></a>
            </div>
          </div>
      </div>
  </div>

  <div id="elle">
  </div>
  <div class="leather">
      <div class="headlineDoubleName">
          <h2 class="text-center">E LL E <br> P L U S</h2>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                  <img class="imgPress img-responsive" src="img/press/ELLE_Plus_October_2007_1.jpg" alt="pressElle">
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                  <img class="imgPress img-responsive" src="img/press/ELLE Plus_October 2007_2.jpg" alt="pressElle">
              </div>
          </div>
      </div>
  </div>

  <div id="europa">
  </div>
  <div class="leather">
      <div class="headline">
          <h2 class="text-center">E U R O P A</h2>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-sm-4 col-md-4">
                  <img class="imgPress img-responsive" src="img/press/EUROPA_April 2007_1.jpg" alt="pressEuropa">
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                  <img class="imgPress img-responsive" src="img/press/EUROPA_April 2007_2.jpg" alt="pressEuropa">
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                  <img class="imgPress img-responsive" src="img/press/EUROPA_April 2007_3.jpg" alt="pressEuropa">
              </div>
          </div>
      </div>
  </div>

  <div id="inStyle">
  </div>
  <div class="leather">
      <div class="headlineDoubleName">
          <h2 class="text-center">I N<br>S T Y L E</h2>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                  <img class="imgPress img-responsive" src="img/press/InStyle_March 2007_1.jpg" alt="pressInStyle">
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                  <img class="imgPress img-responsive" src="img/press/InStyle_March 2007_2.jpg" alt="pressInStyle">
              </div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                  <img class="imgPress img-responsive" src="img/press/InStyle_April 2006_1.jpg" alt="pressInStyle">
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                  <img class="imgPress img-responsive" src="img/press/InStyle_April 2006_2.jpg" alt="pressInStyle">
              </div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                  <img class="imgPress img-responsive" src="img/press/InStyle_Mai 2006_1.jpg" alt="pressInStyle">
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                  <img class="imgPress img-responsive" src="img/press/InStyle_Mai 2006_2.jpg" alt="pressInStyle">
              </div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                  <img class="imgPress img-responsive" src="img/press/InStyle_December 2006_1.jpg" alt="pressInStyle">
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                  <img class="imgPress img-responsive" src="img/press/InStyle_December 2006_2.jpg" alt="pressInStyle">
              </div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                  <img class="imgPress img-responsive" src="img/press/InStyle_January 2007_1.jpg" alt="pressInStyle">
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                  <img class="imgPress img-responsive" src="img/press/InStyle_January 2007_2.jpg" alt="pressInStyle">
              </div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                  <img class="imgPress img-responsive" src="img/press/InStyle_February 2007_1.jpg" alt="pressInStyle">
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                  <img class="imgPress img-responsive" src="img/press/InStyle_February 2007_2.jpg" alt="pressInStyle">
              </div>
          </div>
          <div class="row">
              <div class="col-xs-12 col-sm-6 col-md-6">
                  <img class="imgPress img-responsive" src="img/press/InStyle_August 2007_1.jpg" alt="pressInStyle">
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                  <img class="imgPress img-responsive" src="img/press/InStyle_August 2007_2.jpg" alt="pressInStyle">
              </div>
          </div>
      </div>
  </div>

<button onclick="topFunction()" id="topBtn" title="Go to top"><span class="glyphicon glyphicon glyphicon-menu-up" aria-hidden="true"></span></button>

<script>
    
    // When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
        document.getElementById("topBtn").style.display = "block";
    } else {
        document.getElementById("topFunctionBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera 
    document.documentElement.scrollTop = 0; // For IE and Firefox
}

</script>

</div>

<?php

  include_once 'view/footer.php';

?>
