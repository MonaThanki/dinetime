<?php
// Include your database connection file (e.g., Config.php)
include "Config.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $user_id = 1; // Set the user ID (you may have a login system to get the actual user ID)
    $product_id = $_POST['id'];
    $quantity = '1';

    // Insert data into the cart table
    $sql = "INSERT INTO cart (user_id, product_id, quantity) VALUES ($user_id, $product_id, $quantity)";

    if (mysqli_query($lk, $sql)) {
        header("Refresh: 1; url=cart.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($lk);
    }

    // Close the database connection
    mysqli_close($lk);
}
?>
