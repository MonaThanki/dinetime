<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dine Time</title>
  <link rel="icon" type="image/x-icon" href="imgs/favicon.ico">
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

            $NAME = "";
            $PASS = "";
            $error_message = "";

            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $NAME = test_input($_POST["email"]);
                $PASS = test_input($_POST["password"]);

                $q1 = "SELECT * FROM `userregister` WHERE u_email='$NAME' and Password ='$PASS'";
                $results = mysqli_query($lk, $q1);

                if (!$results) {
                    die("Query failed: " . mysqli_error($lk));
                }

                if (mysqli_num_rows($results) > 0) {
                    // Start session
                    session_start();
                    $_SESSION['user1'] = $NAME;
                    header('Location: index.php?succ=succ');
                } else {
                    $error_message = "Invalid username or password.";
                }
            }
            ?>

          <?php
            if (!empty($error_message)) {
                echo '<div class="alert alert-danger">' . $error_message . '</div>';
            }
            ?>

          <div class="edit edit1">
            <form style="width: 23rem;" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form form1">
              <div class="heading">
                <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">LOG IN</h3>
              </div>
              <div class="form-outline mb-4">
              <span class="span"><i style="line-height:2.2" class="fa fa-user-o" aria-hidden="true"></i></span>
                <input type="email" id="email" name="email" class="form-control form-control-lg"
                  placeholder="Email Address" />
              </div>
              <div class="form-outline mb-4">
              <span class="span"><i style="line-height:2.2" class="fa fa-envelope-open" aria-hidden="true"></i></span>
                <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" />
              </div>
              <div class="pt-1 mb-4">
                <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
              </div>
              <p class="small mb-1"><a class="text-muted" href="#!">Forgot password?</a></p>
              <p>Don't have an account? <a href="register.php" class="link-info">Register here</a></p>
            </form>
          </div>
        </div>
        <div class="col-sm-8 px-0 d-none d-sm-block">
          <img src="imgs/image 7.jpg" alt="Login image" class="w-100 vh-100"
            style="object-fit: cover; object-position: right;">
        </div>
      </div>
    </div>
  </section>
</body>

</html>
