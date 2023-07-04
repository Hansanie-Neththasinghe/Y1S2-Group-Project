
<?php

	//Linking the configuration file
	require 'config.php';
	
	if(isset($_POST["btnLogin"]) and $_POST["checkvalid"]){
	
		$email = $_POST["E-mail"];
		$pass = $_POST["p_word"];
		
		$sql_query = "INSERT INTO logindetails(Email, Password) VALUES ('$email', '$pass')";
		
		if($conn->query($sql_query)){
			echo "<script>alert('Inserted Successfully')</script>";
			echo "<script>window.location.replace('../Login.html')</script>";
		}
		else{
			echo "Error.".$conn->error;
		}
		
	}
	else
	{
		echo "<script>alert('Not Inserted Data!')</script>";
		
	}
	
$conn->close();

?>