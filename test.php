<?php

	include_once "dbconnect.php";

	$id = $_POST[s_id];
	$pw = $_POST[s_pw];

	echo "$id , $pw";

	$sql = "INSERT INTO member_info(u_id, u_pw) VALUES('{$id}', '{$pw}')";

	$result = $dbconnect -> query($sql);

	if(!$result)
		die("mysql query error");
	else{
		echo "insert success";
	}

?>