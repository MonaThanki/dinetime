<?php

    include('Config.php');

    if(isset($_POST['waiter_submit'])) 
	{

        $wfname = $_REQUEST['wfname'];
        $wlname = $_REQUEST['wlname'];
        $Email = $_REQUEST['email'];
        $PASSWD = $_REQUEST['passwd'];
        $addr = $_REQUEST['wadd'];
        $gen = $_REQUEST['gender'];
        $age = $_REQUEST['wage'];
        $contact = $_REQUEST['phone'];
        $exp = $_REQUEST['wexp'];
        $hiredate = $_REQUEST['whdate'];
        $salary = $_REQUEST['wsal'];

        $sql="insert into Staff(FNAME,LNAME,EMAIL,PASSWD,ADDRSS,GENDER,AGE,CONTACT,EXPIERNCE,HIREDATE,SALARY) values('$wfname','$wlname','$Email','$PASSWD','$addr','$gen',$age,'$contact','$exp','$hiredate',$salary)";
        echo $sql;
        $res=mysqli_query($lk,$sql);

		if($res == 1) 
		{
            header("Location: staff.php?staffw=stt"); 
        }
        else
        {
            header("Location: staff.php?stafw=st"); 
        }
    }

?>