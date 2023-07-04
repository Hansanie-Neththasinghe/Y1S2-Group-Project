<!--  Bookings -->

<!DOCTYPE html>
<html>
    <head>
        <?php
        /* Linking the configuration file */
        require 'config.php';
        ?>
     
        
        <title>Ceylon Safari - Yala</title>
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
         
        <div class="container2">
            <center>
                <br><h2 style="color: black; font-size: 60px;">Reserve your Amazing Day!</h2><br>
            </center>
            
            <form method="post" action="php_payment_form.php" onsubmit="return checkPassword()">
                
                <h2>Customer Details</h2> <br>
                First Name : 
                <input type="text" name="firstname"  placeholder="Enter your first name" required><br><br>
                Last Name : 
                <input type="text" name="lastname" placeholder="Enter your last name" required><br><br>
                Gender : 
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female" checked>Female <br><br>
                Mobile Number : 
                <input type="phone" name="mobile" placeholder="017 1234 567" pattern="[0-9]{10}" required><br><br>
                Email : 
                <input type="email" name="email" placeholder="abc@gmail.com" pattern="[a-z0-9.%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required> <br><br>
                Address : 
                <textarea name="address" id="" cols="30" rows="10" required></textarea><br><br>
                <h2>Safari Package Details</h2> <br>
                Select the place :  
                <select name="place" id="s_packages">
                    <option value="Yala">Yala Safari packages</option>
                    <option value="Ridigama">Ridigama Safari packages</option>>
                    <option value="Bird watching">Bird watching packages</option>
                </select> <br><br>
                Select number of days : 
                <select name="days" id="s_package_days">
                    <option value="One day Safari package">One day</option>
                    <option value="Two day Safari package">Two days</option>
                    <option value="Three day Safari package">Three days</option>
                </select> <br><br>
                Preferred date : 
                <input type="date" name="day" required><br><br>
                No of adults : 
                <input type="text" name="adults" required> <br><br>
                No of children : 
                <input type="text" name="children" required> <br><br>
               
    
                <br><br>
                <input type="checkbox" name="" id="checkbox" class="inputStyle" onclick="enableButton()">Accept privacy policy and terms <br><br>
    
                <center>
                    <input type="submit" value="Submit" name="submitBtn" id="submitBtn" disabled><br>
                </center>
    
    
    
            </form>
            <?php

if(isset($_POST['submitBtn'])){
    $Fname = $_POST['firstname'];
    $Lname = $_POST['lastname'];
    $Gender = $_POST['gender'];
    $Mobile = $_POST['mobile'];
    $Email = $_POST['email'];
    $Addr = $_POST['address'];
    $Place = $_POST['place'];
    $Days = $_POST['days'];
    $Day = $_POST['day'];
    $Adults = $_POST['adults'];
    $Children = $_POST['children'];



    $sql = "INSERT INTO reservations(fName,lName,gender,mobile,email,address,place,days,date,adults,children) VALUES ('$Fname','$Lname','$Gender','$Mobile','$Email','$Addr','$Place','$Days','$Day','$Adults','$Children')";
    
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