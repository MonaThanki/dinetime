<?php
include_once 'Config.php';
	// start session
	session_start();

	// initializing variables
	
	$username   = "";
	$email      = "";
	$errors     = array();

	// connect to the database
		include_once 'Config.php';

	// login user
	if (isset($_POST['login_user'])) {
		$email = mysqli_real_escape_string($lk, $_POST['email']);
		$password = mysqli_real_escape_string($lk, $_POST['password']);

		// empty file email and password
		if (empty($email)) {
			array_push($errors, '<div class="alert alert-danger" role="alert">email is required</div>');
		}

		if (empty($password)) {
			array_push($errors, '<div class="alert alert-danger" role="alert">password is required</div>');
		}

		if (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$%^&!*_])[A-Za-z\d@#$%^&!*_]{8,}$/", $password)) 
		{
			array_push($errors, '<div class="alert alert-danger" role="alert">Password is only contain number.</div>');
		}


		if (count($errors) == 0) {
			// $password = md5($password);
			$query = "SELECT * FROM staff WHERE EMAIL='$email' and PASSWD='$password'";
			$results = mysqli_query($lk, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['EMMail'] = $email;
				$_SESSION['success'] = '<h4 class="text-center">You are now logged in<h4>';
				header('location: index.php');
			}else {
				array_push($errors,'<div class="alert alert-danger" role="alert">Wrong email/password, Please login again.</div>');
			}
		}
	}

?>


