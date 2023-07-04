<?php

	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "celonsafari";
	
	$conn = new mysqli($server,$username,$password,$database);
	
	//Check conncetion
	
	if($conn->connect_error)
	{
		die("Connection Failed:" . $conn->connect_error);
	}
	else
	{
		
	}

?>          


