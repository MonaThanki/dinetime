<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dine Time</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="userStyle.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7a4737b300.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 text-black">
                <?php
                include('Config.php');

                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }

                if (isset($_POST['userSubmit'])) {
                    $fname = test_input($_POST['fname']);
                    $lname = test_input($_POST['lname']);
                    $email = test_input($_POST['email']);
                    $mobile = test_input($_POST['pnumber']);
                    $pass = test_input($_POST['password']);
                    $compass = test_input($_POST['repassword']);

                    // Check if the email already exists
                    $dup = "SELECT * FROM userregister WHERE u_email = '$email'";
                    $des = mysqli_query($lk, $dup);

                    if (mysqli_num_rows($des) > 0) {
                        echo '<div class="alert alert-danger">Email already exists. Please use a different email address.</div>';
                        
                    } else {
                        // Password and Re-Password match
                        if ($pass === $compass) {
                            $sql = "INSERT INTO userregister(fname, lname, u_email, mobile, password, compass) VALUES ('$fname', '$lname', '$email', '$mobile', '$pass', '$compass')";
                            $res = mysqli_query($lk, $sql);
                         
                            if ($res) {
                                header("Location: login.php?succ=sc");
                            } else {
                                echo '<div class="alert alert-danger">Something went wrong!</div>';
                            }
                        } else {
                            echo '<div class="alert alert-danger">Password and Re-Password do not match.</div>';
                        }
                    }
                }
                ?>



                    <div class="edit">
                        <form style="width: 23rem;" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"
                            class="form">
                            <div class="heading">
                                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">SIGN UP</h3>
                            </div>
                            <div class="form-outline mb-4">
                                <span class="span"><i style="line-height:2.2" class="fa fa-user-o" aria-hidden="true"></i></span>
                                <input type="text" id="fname" name="fname" class="form-control form-control-lg"
                                    placeholder="First Name" required />
                            </div>
                            <div class="form-outline mb-4">
                            <span class="span"><i style="line-height:2.2" class="fa fa-user-o" aria-hidden="true"></i></span>
                                <input type="text" id="lname" name="lname" class="form-control form-control-lg"
                                    placeholder="Last Name" required />
                            </div>
                            <div class="form-outline mb-4">
                            <span class="span"><i style="line-height:2.2" class="fa fa-envelope-open" aria-hidden="true"></i></span>
                                <input type="email" id="email" name="email" class="form-control form-control-lg"
                                    placeholder="Email Address" required />
                            </div>
                            <div class="form-outline mb-4">
                            <span class="span"><i style="line-height:2.2" class="fa fa-mobile" aria-hidden="true"></i></span>
                                <input type="text" id="pnumber" name="pnumber" class="form-control form-control-lg"
                                    placeholder="Mobile Number" />
                            </div>
                            <div class="form-outline mb-4">
                            <span class="span"><i style="line-height:2.2" class="fas fa-lock" aria-hidden="true"></i></span>
                                <input type="password" id="password" name="password"
                                    class="form-control form-control-lg" placeholder="Password" />
                            </div>
                            <div class="form-outline mb-4">
                            <span class="span"><i style="line-height:2.2" class="fas fa-lock" aria-hidden="true"></i></span>
                                <input type="password" id="repassword" name="repassword"
                                    class="form-control form-control-lg" placeholder="Re-Password" />
                            </div>
                            <div class="pt-3 mb-4" style="text-align: center;">
                                <button class="btn btn-info btn-lg" name="userSubmit" type="submit">Sign
                                    Up</button>
                                <button onclick="location.href='index.html'" class="btn btn-cancle btn-lg">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-8 px-0 d-none d-sm-block">
                    <img src="imgs/image 5.jpg" alt="Login image" class="w-100 vh-100">
                </div>
            </div>
        </div>
    </section>
</body>

</html>
