<?php
	
	$host = "localhost";
	$user = "root";
	$pw = "1234";
	$dbname = "TEST";

	$dbconnect = new mysqli($host, $user, $pw, $dbname);
	$dbconnect->set_charset("utf8");

	if(mysqli_connect_errno()){
		echo "connect fail";
		echo mysqli_connect_errno();
	}
?>