<<<<<<< HEAD
<?php
include 'Config.php';
require('fpdf185/fpdf.php');

$successMessage = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$tableNo = $_POST["table_no"];
	$fullname = $_POST["fullname"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$inputDate = $_POST["date"];
	$people = $_POST["people"];

	$date = date('Y-m-d', strtotime(str_replace('-', '/', $inputDate)));

	// Insert the data into the database
	$sql = "INSERT INTO booking_details (fullname, table_no, email, phone, date, people) VALUES ('$fullname', '$tableNo', '$email', '$phone', '$date', $people)";

	$res = mysqli_query($lk, $sql);
	if ($res == 1) {
		$successMessage = "Thank You " . $fullname . "! You have Reserved Your Spot at DineTime successfully!";
		header("Refresh: 1; url=pdfg.php?data=$tableNo");
	}
}


=======
<?php 
	include 'Config.php';
	require('fpdf185/fpdf.php');

    $successMessage = "";

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tableNo = $_POST["table_no"];
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $inputDate = $_POST["date"];
        $people = $_POST["people"];

		$date = date('Y-m-d', strtotime(str_replace('-', '/', $inputDate)));

        // Insert the data into the database
        $sql = "INSERT INTO booking_details (fullname, table_no, email, phone, date, people) VALUES ('$fullname', '$tableNo', '$email', '$phone', '$date', $people)";

        $res=mysqli_query($lk,$sql);
        if($res == 1)
		{
			$successMessage = "Thank You ". $fullname . "! You have Reserved Your Spot at DineTime successfully!";
			header("Refresh: 1; url=pdfg.php");
        }
    }
>>>>>>> 33f117aa3e6129f4ee2c0d30987a370565f8a2af
?>

<!DOCTYPE HTML>
<html>
<<<<<<< HEAD

<head>
=======
	<head>
>>>>>>> 33f117aa3e6129f4ee2c0d30987a370565f8a2af
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Table Bookings</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

<<<<<<< HEAD
	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
=======
  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
>>>>>>> 33f117aa3e6129f4ee2c0d30987a370565f8a2af
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<<<<<<< HEAD

=======
	
>>>>>>> 33f117aa3e6129f4ee2c0d30987a370565f8a2af
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
<<<<<<< HEAD

=======
	
>>>>>>> 33f117aa3e6129f4ee2c0d30987a370565f8a2af
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

<<<<<<< HEAD
</head>

<body>

=======
	</head>
	<body>
		
>>>>>>> 33f117aa3e6129f4ee2c0d30987a370565f8a2af
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-10 text-right menu-1">
<<<<<<< HEAD
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

=======
						<div class="logo">
                            <a href="index.php">
                                <img src="imgs/logo-no-background.png" width="180" height="60"></a>
							</div>
						<ul>
                                <li class="active"><a href="index.php">Home</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                      <li class="limenu"><a href="#">Indian</a></li>
                                      <li class="limenu"><a href="#">Mexican</a></li>
                                      <li class="limenu"><a href="#">Italian</a></li>
                                      <li class="limenu"><a href="#">Chinese</a></li>
                                    </ul>
                                  </li>
                                <li><a href="aboutus.php">About Us</a></li>
                                <li><a href="#">Table Booking</a></li>
                                <div class="login">
                                <a href="login.php" class="login-link">
                                    <img src="imgs/login.png" width="20" height="20" class="user-image" alt="User Image">
                                    <a class="hidden-xs" href="login.php">Login</a>
                                  </a>
                                </div>
                                <!-- <li><a href="#">Login</a></li> -->
								<!-- <li><a href="payment.html">Payment</a></li> -->
								
>>>>>>> 33f117aa3e6129f4ee2c0d30987a370565f8a2af
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
<<<<<<< HEAD
					<li style="background-image: url(imgs/private-dining.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">

								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner text-center">
										<h1>Book Your Spot</h1>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>

			</div>
			<h2 id="tablebook">"Make Every Meal an Occasion"</h2><br>
			<h3 class="success">
				<?php
				if (!empty($successMessage)) {
					echo "<p>{$successMessage}</p>";
				}
				?>
			</h3>
		</aside>

		<!-- The Modal -->
		<div id="myModal" class="modal">

			<!-- Modal content -->
			<div class="modal-content">
				<span class="close">&times;</span>
				<h2 class="spot">Make a Reservation</h3>
					<form method="post" class="colorlib-form" action="tableBooking.php">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="fullname">Full Name:</label>
									<div class="form-field">
										<input type="text" id="fullname" class="form-control" name="fullname"
											placeholder="Full Name" required>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-field">
										<label for="email">Email Address:</label>
										<i class="icon icon-mail"></i>
										<input type="email" id="email" class="form-control" name="email"
											placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
											required>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-field">
										<label for="phone">Phone Number:</label>
										<i class="icon icon-phone"></i>
										<input type="tel" id="phone" class="form-control" name="phone" maxlength="10"
											placeholder="Your Phone" pattern="[0-9]{10}"
											title="Please enter a 10-digit phone number">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="date">Date:</label>
									<div class="form-field">
										<i class="icon icon-calendar2" style="top: 50%;"></i>
										<input type="text" id="date" class="form-control date" name="date"
											placeholder="Date" required>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="people">Members</label>
									<div class="form-field">
										<i class="icon icon-arrow-down3" style="top: 50%;"></i>
										<select name="people" id="people" class="form-control" required>
											<option value="1" style="background-color: #2C2E3E;">1</option>
											<option value="2" style="background-color: #2C2E3E;">2</option>
											<option value="3" style="background-color: #2C2E3E;">3</option>
											<option value="4" style="background-color: #2C2E3E;">4</option>
											<option value="5" style="background-color: #2C2E3E;">5+</option>
										</select>
									</div>
								</div>
							</div>
							<input type="hidden" name="table_no" id="table_no" value="">
							<div class="col-md-12">
								<input type="submit" name="submit" id="submit" value="Book Now"
									class="btn btn-primary btn-block">
							</div>
						</div>
					</form>
=======
			   	<li style="background-image: url(imgs/private-dining.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
							
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
								   <h1>Book Your Spot</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
				
		  	</div>
				<h2 id="tablebook">"Make Every Meal an Occasion"</h2><br>
				<h3 class="success">
					<?php
					if (!empty($successMessage)) {
						echo "<p>{$successMessage}</p>";
					}
					?>
    			</h3>
		</aside>
										
		<!-- The Modal -->
		<div id="myModal" class="modal">

		<!-- Modal content -->
			<div class="modal-content">
				<span class="close">&times;</span>
				<h2 class="spot">Make a Reservation</h3>
				<form method="post" class="colorlib-form" action="tableBooking.php">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="fullname">Full Name:</label>
								<div class="form-field">
									<input type="text" id="fullname" class="form-control" name="fullname" placeholder="Full Name" required>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<div class="form-field">
									<label for="email">Email Address:</label>
									<i class="icon icon-mail"></i>
									<input type="email" id="email" class="form-control" name="email" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<div class="form-field">
									<label for="phone">Phone Number:</label>
									<i class="icon icon-phone"></i>
									<input type="tel" id="phone" class="form-control" name="phone" maxlength="10" placeholder="Your Phone" pattern="[0-9]{10}" title="Please enter a 10-digit phone number">
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="date">Date:</label>
								<div class="form-field">
									<i class="icon icon-calendar2" style="top: 50%;"></i>
									<input type="text" id="date" class="form-control date" name="date" placeholder="Date" required>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label for="people">Members</label>
								<div class="form-field">
									<i class="icon icon-arrow-down3" style="top: 50%;"></i>
									<select name="people" id="people" class="form-control" required>
										<option value="1" style="background-color: #2C2E3E;">1</option>
										<option value="2" style="background-color: #2C2E3E;">2</option>
										<option value="3" style="background-color: #2C2E3E;">3</option>
										<option value="4" style="background-color: #2C2E3E;">4</option>
										<option value="5" style="background-color: #2C2E3E;">5+</option>
									</select>
								</div>
							</div>
						</div>
						<input type="hidden" name="table_no" id="table_no" value="">
						<div class="col-md-12">
							<input type="submit" name="submit" id="submit" value="Book Now" class="btn btn-primary btn-block">
						</div>
					</div>
				</form>
>>>>>>> 33f117aa3e6129f4ee2c0d30987a370565f8a2af

			</div>

		</div>

		<div class="colorlib-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row">
							<div class="wrap-division">
								<div class="col-md-6 col-sm-6 animate-box">
<<<<<<< HEAD
									<?php
									$tableNumber = 101; // Change this to the table number you want to check
									// Query the database to check if the table number is reserved
									$sql = "SELECT * FROM booking_details WHERE table_no = $tableNumber";
									$result = mysqli_query($lk, $sql);
									$reserved = mysqli_num_rows($result) > 0;

									?>
									<div class="tour" data-value='101' <?php if ($reserved): ?> id="reserve" <?php else: ?> id="myBtn" <?php endif; ?>>
										<div class="tour-img" style="background-image: url(imgs/table1.jpg);">
											<p class="price"><span>Private</span> <small>/ 4 Members</small></p>
											<?php if ($reserved): ?>
												<!-- Add the reserved line -->
												<div class="reserved-line">Not Available</div>
=======
										<?php 
											$tableNumber = 101; // Change this to the table number you want to check
											// Query the database to check if the table number is reserved
											$sql = "SELECT * FROM booking_details WHERE table_no = $tableNumber";
											$result = mysqli_query($lk, $sql);
											$reserved = mysqli_num_rows($result) > 0;

										?>
									<div class="tour" data-value='101' <?php if ($reserved): ?> id="reserve" <?php else: ?> id="myBtn" <?php  endif; ?>>
										<div class="tour-img" style="background-image: url(imgs/table1.jpg);">
											<p class="price"><span>Private</span> <small>/ 4 Members</small></p>
											<?php if ($reserved): ?>
											<!-- Add the reserved line -->
											<div class="reserved-line">Not Available</div>
>>>>>>> 33f117aa3e6129f4ee2c0d30987a370565f8a2af
											<?php endif; ?>
										</div>
										<span class="desc">
											<h2>Private Table for Family</h2>
											<span class="city">In-House Dining</span>
										</span>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
<<<<<<< HEAD
									<?php
									$tableNumber = 102; // Change this to the table number you want to check
									// Query the database to check if the table number is reserved
									$sql = "SELECT * FROM booking_details WHERE table_no = $tableNumber";
									$result = mysqli_query($lk, $sql);
									$reserved = mysqli_num_rows($result) > 0;

									?>
									<div class="tour" data-value='102' <?php if ($reserved): ?> id="reserve" <?php else: ?> id="myBtn" <?php endif; ?>>
										<a class="tour-img" style="background-image: url(imgs/table2.jpg);">
											<p class="price"><span>Private</span> <small>/ 2 Members</small></p>
											<?php if ($reserved): ?>
												<!-- Add the reserved line -->
												<div class="reserved-line">Not Available</div>
=======
								<?php 
											$tableNumber = 102; // Change this to the table number you want to check
											// Query the database to check if the table number is reserved
											$sql = "SELECT * FROM booking_details WHERE table_no = $tableNumber";
											$result = mysqli_query($lk, $sql);
											$reserved = mysqli_num_rows($result) > 0;

										?>
									<div class="tour" data-value='102' <?php if ($reserved): ?> id="reserve" <?php else: ?> id="myBtn" <?php  endif; ?>>
										<a class="tour-img" style="background-image: url(imgs/table2.jpg);">
											<p class="price"><span>Private</span> <small>/ 2 Members</small></p>
											<?php if ($reserved): ?>
											<!-- Add the reserved line -->
											<div class="reserved-line">Not Available</div>
>>>>>>> 33f117aa3e6129f4ee2c0d30987a370565f8a2af
											<?php endif; ?>
										</a>
										<span class="desc">
											<h2>Romantic Table for Couples</h2>
											<span class="city">Candle Light Dining</span>
										</span>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
<<<<<<< HEAD
									<?php
									$tableNumber = 103; // Change this to the table number you want to check
									// Query the database to check if the table number is reserved
									$sql = "SELECT * FROM booking_details WHERE table_no = $tableNumber";
									$result = mysqli_query($lk, $sql);
									$reserved = mysqli_num_rows($result) > 0;

									?>
									<div class="tour" data-value='103' <?php if ($reserved): ?> id="reserve" <?php else: ?> id="myBtn" <?php endif; ?>>
										<a class="tour-img" style="background-image: url(imgs/table3.jpg);">
											<p class="price"><span>Private</span> <small>/ 8 Members</small></p>
											<?php if ($reserved): ?>
												<!-- Add the reserved line -->
												<div class="reserved-line">Not Available</div>
=======
									<?php 
										$tableNumber = 103; // Change this to the table number you want to check
										// Query the database to check if the table number is reserved
										$sql = "SELECT * FROM booking_details WHERE table_no = $tableNumber";
										$result = mysqli_query($lk, $sql);
										$reserved = mysqli_num_rows($result) > 0;

									?>
									<div class="tour" data-value='103' <?php if ($reserved): ?> id="reserve" <?php else: ?> id="myBtn" <?php  endif; ?>>
										<a class="tour-img" style="background-image: url(imgs/table3.jpg);">
											<p class="price"><span>Private</span> <small>/ 8 Members</small></p>
											<?php if ($reserved): ?>
											<!-- Add the reserved line -->
											<div class="reserved-line">Not Available</div>
>>>>>>> 33f117aa3e6129f4ee2c0d30987a370565f8a2af
											<?php endif; ?>
										</a>
										<span class="desc">
											<h2>Private Table for Family Events</h2>
											<span class="city">Outdoor Bistro</span>
										</span>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
<<<<<<< HEAD
									<?php
									$tableNumber = 104; // Change this to the table number you want to check
									// Query the database to check if the table number is reserved
									$sql = "SELECT * FROM booking_details WHERE table_no = $tableNumber";
									$result = mysqli_query($lk, $sql);
									$reserved = mysqli_num_rows($result) > 0;

									?>
									<div class="tour" data-value='104' <?php if ($reserved): ?> id="reserve" <?php else: ?> id="myBtn" <?php endif; ?>>
										<a class="tour-img" style="background-image: url(imgs/table5.jpg);">
											<p class="price"><span>Private</span> <small>/ 4 Members</small></p>
											<?php if ($reserved): ?>
												<!-- Add the reserved line -->
												<div class="reserved-line">Not Available</div>
=======
								<?php 
											$tableNumber = 104; // Change this to the table number you want to check
											// Query the database to check if the table number is reserved
											$sql = "SELECT * FROM booking_details WHERE table_no = $tableNumber";
											$result = mysqli_query($lk, $sql);
											$reserved = mysqli_num_rows($result) > 0;

										?>
									<div class="tour" data-value='104' <?php if ($reserved): ?> id="reserve" <?php else: ?> id="myBtn" <?php  endif; ?>>
										<a class="tour-img" style="background-image: url(imgs/table5.jpg);">
											<p class="price"><span>Private</span> <small>/ 4 Members</small></p>
											<?php if ($reserved): ?>
											<!-- Add the reserved line -->
											<div class="reserved-line">Not Available</div>
>>>>>>> 33f117aa3e6129f4ee2c0d30987a370565f8a2af
											<?php endif; ?>
										</a>
										<span class="desc">
											<h2><a href="tour-place.html">Custom Table</a></h2>
											<span class="city">Open-Air Dining</span>
										</span>
									</div>
								</div>

								<div class="col-md-6 col-sm-6 animate-box">
<<<<<<< HEAD
									<?php
									$tableNumber = 105; // Change this to the table number you want to check
									// Query the database to check if the table number is reserved
									$sql = "SELECT * FROM booking_details WHERE table_no = $tableNumber";
									$result = mysqli_query($lk, $sql);
									$reserved = mysqli_num_rows($result) > 0;

									?>
									<div class="tour" data-value='105' <?php if ($reserved): ?> id="reserve" <?php else: ?> id="myBtn" <?php endif; ?>>
										<a class="tour-img" style="background-image: url(imgs/table4.jpg);">
											<p class="price"><span>Private</span> <small>/ 4 Members</small></p>
											<?php if ($reserved): ?>
												<!-- Add the reserved line -->
												<div class="reserved-line">Not Available</div>
=======
								<?php 
											$tableNumber = 105; // Change this to the table number you want to check
											// Query the database to check if the table number is reserved
											$sql = "SELECT * FROM booking_details WHERE table_no = $tableNumber";
											$result = mysqli_query($lk, $sql);
											$reserved = mysqli_num_rows($result) > 0;

										?>
									<div class="tour" data-value='105' <?php if ($reserved): ?> id="reserve" <?php else: ?> id="myBtn" <?php  endif; ?>>
										<a class="tour-img" style="background-image: url(imgs/table4.jpg);">
											<p class="price"><span>Private</span> <small>/ 4 Members</small></p>
											<?php if ($reserved): ?>
											<!-- Add the reserved line -->
											<div class="reserved-line">Not Available</div>
>>>>>>> 33f117aa3e6129f4ee2c0d30987a370565f8a2af
											<?php endif; ?>
										</a>
										<span class="desc">
											<h2><a href="tour-place.html">Fun With Friends</a></h2>
											<span class="city">Patio Dining</span>
										</span>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 text-center">
								<ul class="pagination">
									<li class="disabled"><a href="#">&laquo;</a></li>
									<li class="active"><a href="#">1</a></li>
<<<<<<< HEAD
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
=======
>>>>>>> 33f117aa3e6129f4ee2c0d30987a370565f8a2af
									<li><a href="#">&raquo;</a></li>
								</ul>
							</div>
						</div>
					</div>

					<!-- SIDEBAR-->
					<div class="col-md-3">
						<div class="sidebar-wrap">
							<div class="side search-wrap animate-box">
								<h3 class="sidebar-heading">Find Us On Social Media</h3>
								<ul class="colorlib-social-icons">
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-facebook"></i></a></li>
									<li><a href="#"><i class="icon-linkedin"></i></a></li>
									<li><a href="#"><i class="icon-dribbble"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<<<<<<< HEAD

		<div id="colorlib-subscribe" style="background-image: url(imgs/img_bg_2.jpg);"
			data-stellar-background-ratio="0.5">
=======
	
		<div id="colorlib-subscribe" style="background-image: url(imgs/cat-1.jpg);" data-stellar-background-ratio="0.5">
>>>>>>> 33f117aa3e6129f4ee2c0d30987a370565f8a2af
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
<<<<<<< HEAD
										<input type="text" class="form-control" id="email1"
											placeholder="Enter your email">
										<button type="submit" class="btn btn-primary"
											onclick="validate()">Subscribe</button>
=======
										<input type="text" class="form-control" id="email1" placeholder="Enter your email">
										<button type="submit" class="btn btn-primary" onclick="validate()">Subscribe</button>
>>>>>>> 33f117aa3e6129f4ee2c0d30987a370565f8a2af
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
<<<<<<< HEAD
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>Pack Your Bags</h4>
						<p>Stop Scrolling and Pack your Bags to start your Wonderful jourey with us.</p>
						<p>
=======
			<div class="row row-pb-md">
				<div class="col-md-6 colorlib-widget">
					<h4>DineTime</h4>
					<p>Serving our delicious cuisine with great pride and warm hospitality,
						<br> come join us and experience a memorable dining affair.</p>
					<p>
>>>>>>> 33f117aa3e6129f4ee2c0d30987a370565f8a2af
						<ul class="colorlib-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
<<<<<<< HEAD
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Book Now</h4>
						<p>
						<ul class="colorlib-footer-links">
							<li><a href="#">Flight</a></li>
							<li><a href="#">Hotels</a></li>
							<li><a href="#">Tour</a></li>
							<li><a href="#">Beach &amp; Resorts</a></li>
						</ul>
						</p>
					</div>
					<div class="col-md-2 colorlib-widget">
						<h4>Top Deals</h4>
						<p>
						<ul class="colorlib-footer-links">

							<li><a href="#">Kids Stay Play and Eat Free!!!</a></li>
							<li><a href="#">Buy 1 seat,get the second seat for 30% OFF </a></li>
							<li><a href="#">Save upto $1500 per couple on luxury Resorts</a></li>

						</ul>
						</p>
					</div>
					<div class="col-md-2">
						<h4>Blog Post</h4>
						<ul class="colorlib-footer-links">
							<li><a href="#">10 Best things to do in Toronto</a></li>
							<li><a href="#">Travel Essentials</a></li>
							<li><a href="#">Travel Savings Tips</a></li>
						</ul>
					</div>

					<div class="col-md-3 col-md-push-1">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>523 King Street, <br> Toronto ON M1B0B5</li>
							<li><a href="tel://1234567920">+ 999 999 9999</a></li>
							<li><a href="mailto:info@yoursite.com">info@packyourbags.com</a></li>
							<li><a href="#">packyourbags.com</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p> Copyright &copy; Pack Your Bags
					</div>
				</div>
			</div>
		</footer>
=======
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
>>>>>>> 33f117aa3e6129f4ee2c0d30987a370565f8a2af
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<script>
<<<<<<< HEAD
		var tourElements = document.querySelectorAll('.tour[data-value]');
		// Get the modal
		var modal = document.getElementById("myModal");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// Get the table number input element
		var table_no = document.getElementById("table_no");

		// When the user clicks the button, open the modal
		function openModal(value) {
			table_no.value = value;
			modal.style.display = "block";
		}

		// Add a click event listener to each tour element
		tourElements.forEach(function (element) {
			element.addEventListener('click', function () {
				if (!element.classList.contains("reserved-line") && !element.id.includes("reserve")) {
					var value = this.getAttribute('data-value');
					openModal(value);
				}
			});
		});

		// When the user clicks on <span> (x), close the modal
		span.onclick = function () {
			modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function (event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>
=======
    var tourElements = document.querySelectorAll('.tour[data-value]');
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // Get the table number input element
    var table_no = document.getElementById("table_no");

    // When the user clicks the button, open the modal
    function openModal(value) {
        table_no.value = value;
        modal.style.display = "block";
    }

    // Add a click event listener to each tour element
    tourElements.forEach(function (element) {
        element.addEventListener('click', function () {
            if (!element.classList.contains("reserved-line") && !element.id.includes("reserve")) {
                var value = this.getAttribute('data-value');
                openModal(value);
            }
        });
    });

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
>>>>>>> 33f117aa3e6129f4ee2c0d30987a370565f8a2af


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

<<<<<<< HEAD
</body>

</html>
=======
	</body>
</html>

>>>>>>> 33f117aa3e6129f4ee2c0d30987a370565f8a2af
