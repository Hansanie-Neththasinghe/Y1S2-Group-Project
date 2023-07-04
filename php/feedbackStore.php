<?php

	//Linking the configuration file
	require 'config.php';

?>

<?php

	$name = $_POST["fullName"];
	$mail = $_POST["fullEmail"];
	$feedBack = $_POST["feedback"];
	
	$sql_query = "INSERT INTO feedbacks(FullName, Email, Feedback) VALUES('$name', '$mail', '$feedBack')";
	
	if($conn->query($sql_query)){
		echo "<script>alert('Inserted Successfully')</script>";
		echo "<script>window.location.replace('../Login.html')</script>";
	}
	else
	{
		echo "<script>alert('Data not Inserted')</script>";
	}
	
	
	$conn->close();
?>
