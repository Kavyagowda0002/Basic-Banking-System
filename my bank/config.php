<?php

	$user='root';
	$pass='';
	$db='safemonii_bank';
	$conn =new mysqli('localhost',$user,$pass,$db);

	if(!$conn){
		die("UNABLE TO CONNECT ".mysqli_connect_error());
	}

?>