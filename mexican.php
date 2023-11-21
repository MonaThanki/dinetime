<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Website</title>
    <link rel="stylesheet" href="css/project1.css " type="text/css">
    <link rel="stylesheet" href="css/style-1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="short icon" href="imgs/short_icon.png">

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
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-10 text-right menu-1">
                        <div class="logo">
                            <a href="index.php">
                                <img src="imgs/logo-no-background.png" width="180" height="60"></a>
                        </div>
                        <ul>
                            <li class="active"><a href="index.php">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="limenu"><a href="indian.php">Indian</a></li>
                                    <li class="limenu"><a href="mexican.php">Mexican</a></li>
                                    <li class="limenu"><a href="italian.php">Italian</a></li>
                                    <li class="limenu"><a href="chinese.php">Chinese</a></li>
                                </ul>
                            </li>
                            <li><a href="aboutus.php">About Us</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="tableBooking.php">Table Booking</a></li>
                            <div class="login">
                                <a href="login.php" class="login-link">
                                    <img src="imgs/login.png" width="20" height="20" class="user-image"
                                        alt="User Image">
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
    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(./imgs/slider1.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluids">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>DineTime</h1>
                                    <h2>A Taste of Tradition</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(imgs/slider2.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>Indulge in Culinary Excellence</h1>
                                    <h2>Welcome to DineTime</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(imgs/slider3.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>Discover the Art of Dining</h1>
                                    <h2>DineTime Awaits You</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li style="background-image: url(imgs/slider1.jpg);">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>Crafting Memories, One Dish at a Time</h1>
                                    <h2>Welcome to DineTime</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
    <div class="menu">

        <h1>Our<span>Mexican Dishes</span></h1>

        <div class="menu_box">

            <div class="menu_card">

                <div class="menu_img">
                    <img src="imgs/mexican_m1.jpg">
                </div>

                <div class="menu_text">

                    <h2>Tacos</h2>
                    <p>
                        Tacos are a quintessential Mexican dish,
                        featuring tortillas filled with various ingredients like grilled meat, salsa, guacamole, and
                        cheese.
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$15.90</p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Add to cart</a>

                </div>

            </div>


            <div class="menu_card">

                <div class="menu_img">
                    <img src="imgs/mexican_m2.jpg">
                </div>

                <div class="menu_text">

                    <h2>Burritos</h2>
                    <p>
                        Burritos are large flour tortillas filled with rice, beans, meat, and toppings like sour cream
                        and salsa.
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$11.99</p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Add to cart</a>

                </div>

            </div>


            <div class="menu_card">

                <div class="menu_img">
                    <img src="imgs/mexican_m3.jpg">
                </div>

                <div class="menu_text">

                    <h2>Guacamole</h2>
                    <p>
                        Guacamole is a creamy avocado dip,
                        often mixed with tomatoes, onions, cilantro, and lime juice, served with tortilla chips.
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$15.99</p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Add to cart</a>

                </div>

            </div>


            <div class="menu_card">

                <div class="menu_img">
                    <img src="imgs/mexican_m4.jpg">
                </div>

                <div class="menu_text">

                    <h2>Enchiladas</h2>
                    <p>
                        Enchiladas are corn tortillas rolled around a filling,
                        typically meat or beans, smothered in chili sauce, and baked with cheese.
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$17.99</p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Add to cart</a>

                </div>

            </div>


            <div class="menu_card">

                <div class="menu_img">
                    <img src="imgs/mexican_m5.jpg">
                </div>

                <div class="menu_text">

                    <h2>Chiles Rellenos</h2>
                    <p>
                        Chiles Rellenos are large, mild chili peppers stuffed with cheese or meat, then battered and
                        fried.
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$23.99</p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Add to cart</a>

                </div>

            </div>


            <div class="menu_card">

                <div class="menu_img">
                    <img src="imgs/mexican_m6.jpg">
                </div>

                <div class="menu_text">

                    <h2>Quesadillas</h2>
                    <p>
                        Quesadillas are tortillas filled with cheese and often additional ingredients like chicken,
                        mushrooms, or vegetables, then grilled.
                    </p>

                    <div class="menu_icon">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                    <p class="price">$7.99</p>

                    <a href="#" class="menu_btn"><i class="fa-solid fa-burger"></i>Add to cart</a>

                </div>

            </div>





        </div>
    </div>


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
                    <p> Copyright &copy; DineTime
                </div>
            </div>
        </div>
    </footer>


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

</body>