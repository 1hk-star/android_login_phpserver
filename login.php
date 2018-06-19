<?php

	include_once "dbconnect.php";

	$id = $_POST[s_id];
	$pw = $_POST[s_pw];

	$sql = "SELECT * FROM member_info WHERE u_id = '{$id}' AND u_pw = '{$pw}'";
	$result = $dbconnect -> query($sql);
	$row = $result->fetch_array(MYSQLI_ASSOC);

	if($result->num_rows > 0)
		echo "login Succeed";
	else
		echo "login fail";

?>