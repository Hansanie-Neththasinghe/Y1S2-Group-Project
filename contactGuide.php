<!--  Payments -->

<!DOCTYPE html>
<html>
    <head>
        <?php
        /* Linking the configuration file */
        require 'config.php';
        ?>
     
        
        <title>Contact Tour Guide</title>
        <link rel="stylesheet" href="./styles/paymentStyles.css">
        <link rel="stylesheet" href="./styles/styles1.css">
		<script src="js/payment.js"></script>
    

    </head>
	
	
    <body>
    <ul class="menu">
			<li class="menu"><a href="Yala.html">Yala 1 Day Safari</a></li>
			<li class="menu"><a href="Yala2.html">Yala 2 Days Safari</a></li>
			<li class="menu"><a href="Yala3.html">Yala 3 Day Safari</a></li>
			<li class="menu"><a href="Ridigama1.html">Ridiyagama 1 Day Safari</a></li>
			<li class="menu"><a href="Ridigama2.html">Ridiyagama 2 Day Safari</a></li>
			<li class="menu"><a href="Ridigama3.html">Ridiyagama 3 Day Safari</a></li>
			<li class="menu"><a href="Bird.html">Kumana Bird Watching</a></li>
		</ul>
         
        <div class="container">
            <center>
                <br><h2 style="color: black; font-size: 60px;">Contact tour guide</h2><br>
            </center>
            
            <form method="post"  onsubmit="return checkPassword()">
                
                <h4>Customer Details</h4> <br><br>
                First Name : 
                <input type="text" name="firstname"  placeholder="Enter your first name" required><br><br><br>
                Last Name : 
                <input type="text" name="lastname" placeholder="Enter your last name" required><br><br><br>
                
                Mobile Number : 
                <input type="phone" name="mobile" placeholder="017 1234 567" pattern="[0-9]{10}" required><br><br><br>
                Email : 
                <input type="email" name="email" placeholder="abc@gmail.com" pattern="[a-z0-9.%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required> <br><br><br>
                Message : 
                <textarea name="msg" id="" cols="30" rows="10" required></textarea><br><br><br>
                
    
                <br><br>
                <input type="checkbox" name="" id="checkbox" class="inputStyle" onclick="enableButton()">Accept privacy policy and terms <br><br><br><br>
    
                <center>
                    <input type="submit" value="Send" name="submitBtn" id="submitBtn" disabled><br>
                </center>
    
    
    
            </form>
            <?php

if(isset($_POST['submitBtn'])){
    $Fname = $_POST['firstname'];
    $Lname = $_POST['lastname'];
    $Mobile = $_POST['mobile'];
    $Email = $_POST['email'];
    $Msg = $_POST['msg'];
    



    $sql = "INSERT INTO contact_Guide (fName1,lName1,mobile1,email1,msg) VALUES ('$Fname','$Lname','$Mobile','$Email','$Msg')";

    if($conn->query($sql)){
        echo "<script>alert('Inserted Successfully')</script>";
    }
    else{
        echo "<script>alert('Error !!!')</script>".$conn->error;
    }
}

        $conn->close();
    ?>
        </div>



	</body>
</html>