<?php
	include_once 'include/dbconnect.php';
	$username=$_POST['username'];
	$password=$_POST['password'];

	$sqlun =  mysql_query("SELECT * FROM admin WHERE username ='$username'");
	$rows = mysql_num_rows($sqlun);
	if ($rows >0) {
 
		$sqlps =  mysql_query("SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
		$rowps = mysql_num_rows($sqlps);
		if ($rowps > 0){
			echo "1";
		}

		else{
			echo "2";
		}
	}

	else{
		echo "3";
	}
?>