<?php

	include("Config.php");

	$no=$_REQUEST['delWID'];

	$sql="delete from staff where SID=$no";
   
	mysqli_query($lk,$sql);

	header("Location: staff.php");

?>