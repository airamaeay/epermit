<?php
$host    = "localhost"; // Host name
$db_name = "scholar_info";		// Database name
$db_user = "root";		// Database user name
$db_pass = "";		// Database Password
	// Table column from which suggestions will get shown
 $conn =mysqli_connect($host,$db_user,$db_pass)or die(mysqli_error());
 $conn->set_charset("utf8");
         mysqli_select_db($conn,$db_name)or die(mysqli_error());		 
?>