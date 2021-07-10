<?php 

	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "db_coding_test";

	$host = mysqli_connect($server,$username,$password);
	$db = mysqli_select_db($host, $database);
	 


?>

