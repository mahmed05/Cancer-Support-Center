
<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <meta name= "keywords" content = "HTML, CSS, JavaScript">
		<meta name = "description" content = "Newsletters Page">
        <meta name = "author" content = "Janeise Davis">
        <meta name= "viewport" content= "width=device-width, initial-scale=1">
        <title>ADMIN LOGIN</title>
        <link rel= "stylesheet" href= "css\style.css">
        <link rel= "stylesheet" href= "css\bourbon\restyle.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&family=Overpass&display=swap">
        <script src="js/headerandfooter.js"></script>
    </head>
    <body >
    <img src="logo.png" style="width:15%">
    <br/>
    <div class="container" style="margin-left: 30%;margin-top:3%">
        <h2 style="text-align: center;font-weight: bold;"> ADMIN LOGIN</h2>
        <form action="Admin.php" method="POST" class="form">
            <div class="form-group">
                <label for="name" class="form-label">User Name</label>
                <input type="text" class="form-control" id="name" 
                name="name" placeholder="Your Name*" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" 
                name="email" placeholder="Your Email*" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" 
                name="password" placeholder="password*" tabindex="3" required>
            </div>
            <div style="margin-left: 32%;">
                <button type="submit" name="submit" class="btn">LOGIN</button>
            </div>
            <div style="margin-left: 32%;">
                <p ><a href="index.html" class="btn btn-secondary" >Back</a></p>

            </div>
            <div style="margin-left: 32%;">

                <a href="adminforgot.html" style="margin-left:1%;">Forgot your Password?</a>
            </div>
        </form>
    </div>
    
    </body>
</html>

<?php
session_start();
if (isset($_POST['submit'])) {
$db = mysqli_connect('localhost', 'root', '', 'mydatabase');
$Name = $_POST['name'];
$Email = $_POST['email'];
$Password = $_POST['password'];
$q = "select * from adminregistration where Email = '$Email' && Password='$Password' && Name='$Name'";

$R = $db->query($q);

if($R->num_rows==0)
{
    echo'<script>alert("Email or Password is Incorrect")</script>'; 
}
else
{
    echo'<script>alert("Admin Login Successfully")</script>'; 
$row = $R->fetch_assoc();
   // echo $row['urole']
    $_SESSION['role'] = $row['urole'];
    $_SESSION['email'] = $row['Email'];

    header("location:AdminMenu.php");

}}

?>