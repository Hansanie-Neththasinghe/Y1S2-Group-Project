<?php 

	include_once 'config.php'; 

?>

 <?php 
 
 if(isset($_POST['btnSubmit']))
 {

	$salutation = $_POST["salutation"];
	$first_name = $_POST["first_name"];
	$last_name = $_POST["last_name"];
	$phone = $_POST["phone"];
	$e_mail = $_POST["e_mail"];
	$country = $_POST["country"];
	$any_other_requirements = $_POST["any_other_requirements"];
	
 }
	
 
	$SQL = "insert into ContactUs(SALUTATION, FIRST_NAME, LAST_NAME, PHONE, E_MAIL, COUNTRY, ANY_OTHER_REQUIREMENTS)values
    ('$salutation','$first_name','$last_name ','$phone','$e_mail','$country','$any_other_requirements')";
	
	
	if(mysqli_query($conn,$SQL)){
		echo "<script>alert ('Your message sent successful')</script>";
        echo('<script>window.location.replace("../Contact_us.html");</script>');
	}
	else{
		echo "<script>alert ('Your Data Not Inserted')</script>";
	}
	
	mysqli_close($conn);
	
 ?>