
<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <meta name= "keywords" content = "HTML, CSS, JavaScript">
		<meta name = "description" content = "Newsletters Page">
        <meta name = "author" content = "Janeise Davis">
        <meta name= "viewport" content= "width=device-width, initial-scale=1">
        <title>ADDING USER </title>
        <link rel= "stylesheet" href= "css\style.css">
        <link rel= "stylesheet" href= "css\bourbon\restyle.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&family=Overpass&display=swap">
        <script src="js/headerandfooter.js"></script>
    </head>
    <body >

    <div class="container" style="margin-left: 30%;margin-top: 5%;">
        <h2 style="text-align: center;font-weight: bold;">ADD USER</h2>
        <form action="create.php" method="POST" class="form">
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
                <label for="JobTitle" class="form-label">Job Title</label>
                <input type="text" class="form-control" id="JobTitle" 
                name="JobTitle" placeholder="JobTitle*" tabindex="1" required>
            </div>
            <div style="margin-left: 25%;">
                <button type="submit" name="submit" class="btn">Add User</button>
               
            </div>
            <br/>
            <div style="margin-left: 30%;">
                
                <p ><a href="AdminMenu.php" class="btn btn-secondary" >Back</a></p>
            </div>
            
        </form>
    </div>
  
    </div>
    </body>
</html>

<?php 
session_start();
$sql='';
	if (isset($_POST['submit'])) {

        $db = mysqli_connect('localhost', 'root', '', 'mydatabase');

		$Name = $_POST['Name'];
		$Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $JobTitle = $_POST['JobTitle'];

		$sql=mysqli_query($db, "INSERT INTO adminregistration (Name, Email,Password,JobTitle) VALUES ('$Name', '$Email','$Password','$JobTitle')");
        if($sql==1)  
        {  
          echo'<script>alert("Super User Added Successfully")</script>';  
        }  
        else  
        {  
          echo'<script>alert("Error while adding user")</script>';  
        }   
        
    
    }

?>