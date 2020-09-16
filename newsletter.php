<?php
session_start();
include('./admin/includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Official Website Of ISTE TKMCE Chapter</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-152957826-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'UA-152957826-1');
  </script>

    <link rel="stylesheet" href="admin/css/styles.css">
    <link rel="stylesheet" href="admin/css/trial.css" />
	<!-- <link rel="stylesheet" href="css/style.css"> -->
	<link rel="stylesheet" href="admin/css/fileinput.min.css">
    <link rel="stylesheet" href="admin/css/font-awesome.min.css" />
    <link rel="stylesheet" href="admin/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" href="admin/css/bootstrap-social.css" />
    <link rel="stylesheet" href="admin/css/bootstrap-select.css" />
    <link rel="stylesheet" href="admin/css/awesome-bootstrap-checkbox.css" />


  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

  <!-- Custom CSS for previous events animation -->
  <link rel="stylesheet" href="css/pe.css">

</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <div class="site-navbar-wrap js-site-navbar bg-white">

      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="index.html"><img src="images/iste.png" alt="ISTE TKMCE" width="80"
                      height="80"></a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <!-- d-lg-none -->
                    <div class="d-inline-block  ml-md-0 mr-auto py-3"><a href="#"
                        class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                    <!-- d-lg-block -->
                    <ul class="site-menu js-clone-nav d-none">
                      <li class="active">
                        <a href="index.php">Home</a>
                      </li>
                      <li><a href="event.php">Events</a></li>
                      <li><a href="about.php">About</a></li>
                      <li><a href="contact.php">Contact</a></li>
                      <li><a href="newsletter.php">News Letter</a></li>
                      <li><a href="login.php">Student Portal</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="slide-one-item home-slider owl-carousel">

<div class="site-blocks-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade"
  data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-7 text-center" data-aos="fade">
        <!-- <span class="caption mb-3">Official Website Of ISTE TKMCE</span> -->
        <h1 class="mb-4">ISTE<br> Newsletter</h1>
        <!-- <p><a href="#" class="text-white py-3 px-4">Official Website Of ISTE TKMCE</a></p> -->
      </div>
    </div>
  </div>
</div>

<div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade"
  data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-7 text-center" data-aos="fade">
        <!-- <span class="caption mb-3">Official Website Of ISTE TKMCE</span> -->
        <h1 class="mb-4">ISTE<br> Newsletter</h1>
        <!-- <p><a href="#" class="text-white py-3 px-4">Official Website Of ISTE TKMCE</a></p> -->
      </div>
    </div>
  </div>
</div>

</div>
    <br><br>
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2>Newsletters</h2>
          </div>
        </div>
    <!-- Carousel Start -->
    <div id="cards_landscape_wrap-2">
      <div class="container">
        <div class="row">
        <?php 
      $sql = "SELECT * FROM `newsletter`";
      $query = $dbh -> prepare($sql);
      $query->execute();
      $results=$query->fetchAll(PDO::FETCH_OBJ);
      if($query->rowCount() > 0)
      {
      foreach($results as $result)
      {	?>
          <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
              <div class="card-flyer">
                <div class="text-box">
                  <div class="text-container">
                    <h6><?php echo htmlentities($result->month,$result->year) ?></h6>
                    <div class="text">
                    <div class="form-group">
	                    <div class="col-sm-8 col-sm-offset-2">
                            <li><a href="<?php echo htmlentities($result->link) ?>"><i class="fa fa-eye"></i> &nbsp;View Newsletter</a></li>
	                    </div>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <?php }}?>
          </div>
          </div>
          </div>
  <footer class="site-footer">
    <div class="container">
      <div class="row">

        <div class="col-md-6 text-center  ml-auto">


          <h2 class="footer-heading  pr-3  ml-5 mb-4">Follow Us </h2>
          <a href="#about-section" class="smoothscroll pl-0 pr-3 fb"><span class="icon-facebook"></span></a>
          <a href="#" class="pl-3 pr-3  twtr"><span class="icon-twitter"></span></a>
          <a href="#" class="pl-3 pr-3 insta"><span class="icon-instagram"></span></a>
          <a href="#" class="pl-3 pr-3  lkdin"><span class="icon-linkedin"></span></a>
          </form>
        </div>

        <div class="col-md-6 text-center  ml-auto">
          <h2 class="footer-heading  pr-3  ml-5 mb-4">Features </h2>
          <a href="#">Home</a>
          <a href="#">Events</a>
          <a href="#">About</a>
          <a href="#">Contact</a>
        </div>

      </div>
      <div class="row pt-3 mt-3 text-center">
        <div class="col-md-12">
          <div class="border-top pt-3">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved | Devoloped by 404 ISTE
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>

      </div>
    </div>
  </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>


  <script src="js/mediaelement-and-player.min.js"></script>

  <script src="js/main.js"></script>


  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

      for (var i = 0; i < total; i++) {
        new MediaElementPlayer(mediaElements[i], {
          pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
          shimScriptAccess: 'always',
          success: function () {
            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
            for (var j = 0; j < targetTotal; j++) {
              target[j].style.visibility = 'visible';
            }
          }
        });
      }
    });

    // Owl Carousel options
    var owl = $('#execomm-carousel');
    owl.owlCarousel({
      loop: true,
      autoplay: true,
      margin: 10,
      autoplayTimeout: 1000,
      autoplayHoverPause: true
    });

    // Upcoming Events JS Code
    var eventList = ['Event One', 'Event Two', 'Event Three', 'Event four'];
    var i = 1;
    function changeEvent() {

      $('#event').animate({ marginLeft: "-=250px" }, () => {
        $('#event').animate({ marginLeft: "+=250px" }, () => {
          $('#event').text(eventList[i]);
        });
      });
      i++;
      if (i >= eventList.length)
        i = 0;
    }
    setInterval(changeEvent, 3000);
  </script>

</body>

</html>