<?php

    include "Config.php";

    session_start();
    session_unset();
    session_destroy();
    echo $_SESSION['user'];
    // return;
    header("Location: login.php");

?>