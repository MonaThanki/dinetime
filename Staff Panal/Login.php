
<?php 
// include file server.php
include('server.php');
include_once 'server.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    

     <!-- Library -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>


    <!-- Font Icon -->
    <link rel="stylesheet" href="./REGISTER/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="./REGISTER/css/style.css">
</head>
<body>

    <Style>
        .container, .form-submit{
            border-radius: 1px;
            padding: 7px 23px;
        }
        .main {
            background: #f8f8f8;
            padding: 50px 0;
        }
    </Style>

    <div class="main">
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="REGISTER/images/WAITER.jpg" alt="sing up image"></figure>
                       <p>Collect username and Password from Admin</p>
                    </div>
                       

                    <div class="signin-form">
                        <h2 class="form-title">Log in</h2>
                        <form action="login.php" method="POST" class="register-form" id="login-form">
                        <?php include('errors.php'); ?>
                        <?php
                            if(isset($_REQUEST['success']))
                            {
                            ?>
                              <div class="alert alert-success"><strong>Your Password Is Updated.<br>Now Login Please.</strong></div>
                            <?php
                            }
                        ?>
                        <!-- Email -->
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" >
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term"/>
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <a href="forgotpass.php">Forgot PassWord</a>
                            <div class="form-group form-button">
                                <input type="submit" name="login_user" id="login_user" class="form-submit" value="Log in"/>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>

        </section>
    </div>

    <!-- JS -->
    <script src="./REGISTER/vendor/jquery/jquery.min.js"></script>
    <script src="./REGISTER/js/main.js"></script>
</body>
</html>