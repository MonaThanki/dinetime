<?php
// Include your database connection code here
include 'Config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullName = $_POST["fullName"];
    $address = $_POST["address"];
    $country = $_POST["country"];
    $province = $_POST["province"];
    $city = $_POST["city"];
    $zip = $_POST["zip"];
    $cardNumber = $_POST["cardNumber"];
    $expiryDate = $_POST["expiryDate"];
    $cvv = $_POST["cvv"];

    // Insert the data into the database (modify this part based on your database structure)
    // For example:
    $sql = "INSERT INTO orders (fullName, address, country, province, city, zip, cardNumber, expiryDate, cvv) VALUES ('$fullName', '$address', '$country', '$province', '$city', '$zip', '$cardNumber', '$expiryDate', '$cvv')";
    mysqli_query($lk, $sql);

    // Assuming the database insertion is successful, redirect to the success page
    header("Location: success.php");
    exit();
}
?>
