<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> DineTime</title>
  <link rel="icon" type="image/x-icon" href="imgs/favicon.ico">
  <link rel="stylesheet" href="css/project1.css " type="text/css">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content="" />
  <meta property="og:image" content="" />
  <meta property="og:url" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">

  <!-- Flexslider  -->
  <link rel="stylesheet" href="css/flexslider.css">

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <!-- Date Picker -->
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <!-- Flaticons  -->
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>


</head>

<body>
  <div class="colorlib-loader"></div>

  <div id="page">
    <nav class="colorlib-nav" role="navigation">
      <div class="top-menu">
        <div class="container-fluid">
          <div class="row">

            <div class="col-xs-10 text-right menu-1">

              <ul>
                <li class="active"><a href="index.php">Home</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li class="limenu"><a href="indian.php">Indian</a></li>
                    <li class="limenu"><a href="mexican.php">Mexican</a></li>
                    <li class="limenu"><a href="italian.php">Italian</a></li>
                    <li class="limenu"><a href="chinese.php">Chinese</a></li>
                  </ul>
                </li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="tablebooking.php">Table Booking</a></li>
                <div class="login">
                  <a href="login.php" class="login-link">
                    <img src="imgs/login.png" width="20" height="20" class="user-image" alt="User Image">
                    <a class="hidden-xs" href="login.php">Login</a>
                  </a>
                </div>
                <!-- <li><a href="#">Login</a></li> -->
                <!-- <li><a href="payment.html">Payment</a></li> -->

              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <main>
      <div class="aboutimage"></div>

      <h1>Contact US</h1>
      <p class="contectp" style="margin-left:30px; margin-right:20px">"At DineTime, we value every connection and
        believe that great experiences start with a conversation. Whether you have a question, a special request, or
        simply want to share your thoughts with us, we're here to listen. Our dedicated team is just a message away,
        ready to assist you. We look forward to hearing from you and providing the assistance you need. Your feedback
        and inquiries are invaluable in our quest to continually enhance your dining experience. Feel free to reach out
        and let us know how we can make your time at DineTime even more memorable."</p>

    </main>
    <br>

    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div>
    </div>
    <br>
    <div class="container" data-aos="fade-up">

      <div class="row mt-5">



        <div class="col-lg-6 mt-5 mt-lg-0">

          <form action="addcontact.php" method="post" name="formCont" class="php-all">
            <div class="form-row">
              <div class="col-lg-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                  data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-lg-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                  data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="8" data-rule="required"
                data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <!-- <div class="mb-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your message has been sent. Thank you!</div>
      </div> -->
            <div class="text-center" style="background-color: #FF5733; padding: 10px 20px; border-radius: 5px;">
              <button name="ConBtnSubmit" type="submit"
                style="background-color: transparent; color: #ffffff; border: none; cursor: pointer;">Send
                Message</button>
            </div>

          </form>

        </div>

        <div class="col-lg-6" style="border-radius: 25px;">
          <div data-aos="fade-up">
            <iframe style="border:0; width: 100%; height: 350px;"
              src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Conestoga college Doon Campus &amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
              frameborder="0" allowfullscreen></iframe>
          </div>
        </div>

      </div>

    </div>
    <br>


    <div id="colorlib-subscribe" style="background-image: url(imgs/cat-1.jpg);" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
            <h2>Sign Up for a Newsletter</h2>
            <p>Sign up for our mailing list to get latest updates and offers.</p>
            <form class="form-inline qbstp-header-subscribe">
              <div class="row">
                <div class="col-md-12 col-md-offset-0">
                  <div class="form-group">
                    <input type="text" class="form-control" id="email1" placeholder="Enter your email">
                    <button type="submit" class="btn btn-primary" onclick="validate()">Subscribe</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    </main>
    <footer id="colorlib-footer" role="contentinfo">
      <div class="container">
        <div class="row row-pb-md">
          <div class="col-md-6 colorlib-widget">
            <h4>DineTime</h4>
            <p>Serving our delicious cuisine with great pride and warm hospitality,
              <br> come join us and experience a memorable dining affair.
            </p>
            <p>
            <ul class="colorlib-social-icons">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook"></i></a></li>
              <li><a href="#"><i class="icon-linkedin"></i></a></li>
              <li><a href="#"><i class="icon-dribbble"></i></a></li>
            </ul>
            </p>
          </div>
          <div class="col-md-2 colorlib-widget">
            <h4>Menu</h4>
            <p>
            <ul class="colorlib-footer-links">
              <li><a href="#">Indian</a></li>
              <li><a href="#">Mexican</a></li>
              <li><a href="#">Italian</a></li>
              <li><a href="#">Chinese</a></li>
            </ul>
            </p>
          </div>

          <div class="col-md-4 col-md-push-1">
            <h4>Contact Information</h4>
            <ul class="colorlib-footer-links">
              <li>299 Doon Valley Dr, <br> Kitchener ON N2G 4M4</li>
              <li><a href="tel://1234567920">+ 226 987 5434</a></li>
              <li><a href="mailto:info@yoursite.com">Dinetime@google.com</a></li>
              <li><a href="#">DineTime.com</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p> Copyright &copy; 2023 DineTime
          </div>
        </div>
      </div>
    </footer>

  </div>
  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
  </div>

  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Flexslider -->
  <script src="js/jquery.flexslider-min.js"></script>
  <!-- Owl carousel -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- Magnific Popup -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/magnific-popup-options.js"></script>
  <!-- Date Picker -->
  <script src="js/bootstrap-datepicker.js"></script>
  <!-- Stellar Parallax -->
  <script src="js/jquery.stellar.min.js"></script>

  <!-- Main -->
  <script src="js/main.js"></script>
  <script src="./js/home.js"></script>

</body>

</html>
</body>

</html>