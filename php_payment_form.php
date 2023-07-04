<html>
<head>
<?php
        require 'payment.php';
        ?>

<link rel="stylesheet" href="./styles/styles1.css">
</head>
<body>

    <center>
        <br>
        <h1>Thank you for your reservation for <?php echo $Place." ".$Days ?></h1>
        <br>
    
    <div class="details">
        Your Name : <?php echo $Fname." ".$Lname?> <br>
        Your contact number : <?php echo $Mobile?> <br>
        Your E-mail : <?php echo $Email?> <br>
        Your Address : <?php echo $Addr?> <br>
        Your reservation is available on  <?php echo $Day?> for <?php echo $Adults?> adults and for <?php echo $Children?> kids. <br>
        <br><br><br><br><br>
    </center>
    </div>
</body>
</html>




    
