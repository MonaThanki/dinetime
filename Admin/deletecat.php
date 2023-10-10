<?php

	include("Config.php");

	$no=$_REQUEST['delcatid'];

	$sql="delete from CATEGORY where ct_id=$no";
   
	mysqli_query($lk,$sql);

	header("Location: category.php");

?>