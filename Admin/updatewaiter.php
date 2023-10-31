<?php  

    include 'Config.php';

    $ewid = $_POST["id"];
    $ewfname = $_POST["fname"];
    $ewlname = $_POST["lname"];
    $ewemail = $_POST["email"];
    $ewpasswd = $_POST["passwd"];
    $ewadd = $_POST["add"];
    $ewgen = $_POST["gender"];
    $ewage = $_POST["age"];
    $ewphone = $_POST["contact"];
    $ewexp = $_POST["exp"];
    $ewhd = $_POST["hdate"];
    $ewsal = $_POST["sal"];

    $sql = "UPDATE STAFF SET FNAME = '{$ewfname}',LNAME = '{$ewlname}',EMAIL='{$ewemail}',PASSWD='{$ewpasswd}',ADDRSS ='{$ewadd}',GENDER = '{$ewgen}',AGE = {$ewage},CONTACT = {$ewphone},EXPIERNCE = '{$ewexp}',SALARY = {$ewsal} WHERE SID = {$ewid}";
    

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
 