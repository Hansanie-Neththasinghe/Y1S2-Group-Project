
<?php
		
		//Linking the configuration file
		require 'config.php';
		
		$fname = $_POST['fName'];
		$lname = $_POST['lName'];
		$gender = $_POST['Gender'];
		$email = $_POST['mail'];
		$address = $_POST['Add'];
		$mobNumber = $_POST['m_no'];
		$password =$_POST['pass_word'];
		
		
		$sql_query = "INSERT INTO registration ( FirstName, LastName, Gender, Email, Address, MobileNumber, Password)
		VALUES ('$fname', '$lname', '$gender', '$email', '$address', '$mobNumber', '$password')";
		
		
		if($conn->query($sql_query))
		{
			echo "<script>alert('Inserted Successfully')</script>";
			echo "<script>window.location.replace('../Login.html')</script>";
		}
		else
		{
			echo "<script>alert('Data not Inserted')</script>". $con->error;
		}
	
	$conn->close();

?> 