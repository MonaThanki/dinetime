<?php  

    include 'Config.php';

    $id = $_POST["id"];
    $name = $_POST["name"];
    
    $sql = "UPDATE CATEGORY SET C_NAME = '{$name}' WHERE CT_ID = {$id}";
    
    $res = mysqli_query($lk, $sql);

    if($res)
    {
       echo 1;
    }
    else
    {
        echo 0;
    }    

 ?>
 