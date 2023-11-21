<?php  

    include 'Config.php';

    $id = $_REQUEST["tableId"];
    $st = $_REQUEST["status"];
    
    
    
    $sql = "UPDATE TABLES SET STATUS = '{$st}' WHERE TID = {$id}";
    
    $res = mysqli_query($lk, $sql);

    // if($res)
    // {
    //    echo 1;
    // }
    // else
    // {
    //     echo 0;
    // }    

 ?>