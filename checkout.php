<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="icon" type="image/x-icon" href="imgs/favicon.ico">
    <link rel="stylesheet" href="css/project1.css " type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/css_checkout.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="short icon" href="image/short_icon.png">

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
    <script src="js/cart.js"></script>
</head>


<body>

    <!-- Header -->
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
                            <li class="active"><a href="index.html">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <span
                                        class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="limenu"><a href="#">Indian</a></li>
                                    <li class="limenu"><a href="#">Mexican</a></li>
                                    <li class="limenu"><a href="#">Italian</a></li>
                                    <li class="limenu"><a href="#">Chinese</a></li>
                                </ul>
                            </li>
                            <li><a href="aboutus.html">About Us</a></li>
                            <li><a href="#">Table Booking</a></li>
                            <div class="login">
                                <a href="#" class="login-link">
                                    <img src="imgs/login.png" width="20" height="20" class="user-image"
                                        alt="User Image">
                                    <a class="hidden-xs" href="#">Login</a>
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
                <li style="background-image: url(imgs/slider1.jpg);">
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
    <br><br>

    <!-- Checkout Content -->
    <div class="container mt-5">
        <h2>Checkout</h2>
        <form action="process_order.php" method="post">
            <div class="checkout_color">
            <!-- Shipping Information -->
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Enter your address" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" name="country" id="country" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="province">Province</label>
                    <input type="text" class="form-control" name="province" id="province" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">City</label>
                    <input type="text" class="form-control" name="city" id="city" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="zip">ZIP Code</label>
                    <input type="text" class="form-control" name="zip" id="zip" required>
                </div>
            </div>

            <!-- Payment Information -->
            <h4 class="mt-4">Payment Details</h4>
            <div class="form-group">
                <label for="cardNumber">Card Number</label>
                <input type="text" class="form-control" id="cardNumber" name="cardNumber" placeholder="Enter your card number" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="expiryDate">Expiry Date</label>
                    <input type="text" class="form-control" id="expiryDate" name="expiryDate" placeholder="MM/YY" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="cvv">CVV</label>
                    <input type="text" class="form-control" id="cvv" name="cvv" placeholder="Enter CVV" required>
                </div>
            </div>
        </div>

            <!-- Submit Button -->
            
            <button type="submit" class="button_color" class="btn btn-primary">Place Order</button>
        </form>
    </div>

    <!-- Footer -->
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

    <!-- Bootstrap JS and dependencies -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->

</body>

</html>
