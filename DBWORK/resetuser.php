<?php 
session_start();
$sql='';
	if (isset($_POST['submit'])) {

        $db = mysqli_connect('localhost', 'root', '', 'mydatabase');

		$Name = $_POST['Name'];
		$Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $DateofBirth = $_POST['DateofBirth'];

		$sql=mysqli_query($db, "INSERT INTO registration (Name, Email,Password,DateofBirth) VALUES ('$Name', '$Email','$Password','$DateofBirth')");
        if($sql==1)  
        {  
          echo'<script>alert("Password Reset Successfully")</script>';  
        }  
        else  
        {  
          echo'<script>alert("Error while reseting")</script>';  
        }   
        
    
    }

?>

<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <meta name= "keywords" content = "HTML, CSS, JavaScript">
		<meta name = "description" content = "Newsletters Page">
        <meta name = "author" content = "Janeise Davis">
        <meta name= "viewport" content= "width=device-width, initial-scale=1">
        <title>Reset User </title>
        <link rel= "stylesheet" href= "css\style.css">
        <link rel= "stylesheet" href= "css\bourbon\restyle.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&family=Overpass&display=swap">
        <script src="js/headerandfooter.js"></script>
    </head>
    <body >
    <?php
    if($sql):
    ?>
        <h3 style="text-align:center;font-weight:bold;color:white">Password Successfully reset!!PLease Click on a code below to confrm your email</h3>
        <p style="text-align:center;color:white">Click to procced for login:<a href="Login.php" style="text-align:center;font-weight:bold;color:blue">3 7 9 7 5 3</a></p>
    <?php
    else:
    ?> 
    <div class="container" style="margin-left: 30%;margin-top: 5%;">
        <h2 style="text-align: center;font-weight: bold;">Reset Password</h2>
        <form action="resetuser.php" method="POST" class="form">
            <div class="form-group">
                <label for="name" class="form-label">User Name</label>
                <input type="text" class="form-control" id="Name" 
                name="Name" placeholder="Your Name*" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="Email" 
                name="Email" placeholder="Your Email*" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Password</label>
                <input type="password" class="form-control" id="Password" 
                name="Password" placeholder="password*" tabindex="3" required>
            </div>
            <div class="form-group">
                <label for="DateofBirth" class="form-label">DateofBirth</label>
                <input type="text" class="form-control" id="DateofBirth" 
                name="DateofBirth" placeholder="DateofBirth*" tabindex="1" required>
            </div>
            <div style="margin-left: 33%;">
                <button type="submit" name="submit" class="btn">Reset</button>
            </div><br/>
            <div style="margin-left: 34%;">
                <p ><a href="Login.php" class="btn btn-secondary" >Back</a></p>
            </div>
        </form>
    </div>
  
    </div>
    <?php
    endif;
    ?>  
    </body>
    </body>
</html>

