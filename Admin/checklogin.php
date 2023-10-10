<?php
include('Config.php');



$NAME="";
$PASS="";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NAME = test_input($_POST["username"]);
    $PASS = test_input($_POST["pass"]);
}

$q1 = "SELECT * FROM `admin` WHERE Username='$NAME' and Password ='$PASS'";
// echo $q1;

$results = mysqli_query($lk, $q1);

if (!$results) {
    die("Query failed: " . mysqli_error($lk));
}

if (mysqli_num_rows($results) > 0) {
    // start session
	session_start();

    $_SESSION['user'] = $NAME;
// echo $_SESSION['user'];
    // return;
   ?> <script>alert("You are logged in now!");</script>';
   <?php
    header('location: index.php');
} else {
    // echo '<script>alert("Wrong Email or password!");</script>';
    $error_message = "Invalid username or password.";

  
    $encoded_error_message = urlencode($error_message);
    
   
    header('Location: login.php?error=' . $encoded_error_message);
   
}
?>
