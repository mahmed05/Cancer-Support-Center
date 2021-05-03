
<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <meta name= "keywords" content = "HTML, CSS, JavaScript">
		<meta name = "description" content = "Newsletters Page">
        <meta name = "author" content = "Janeise Davis">
        <meta name= "viewport" content= "width=device-width, initial-scale=1">
        <title>CLASS REGISTRATION </title>
        <link rel= "stylesheet" href= "css\style.css">
        <link rel= "stylesheet" href= "css\bourbon\restyle.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&family=Overpass&display=swap">
        <script src="js/headerandfooter.js"></script>
    </head>
    <body >

    <div class="container" style="margin-left: 30%;margin-top: 5%;">
        <h2 style="text-align: center;font-weight: bold;">CLASS REGISTRATION</h2>
        <form action="classesreg.php" method="POST" class="form">

            <div class="form-group">
                <label for="classcode" class="form-label">Class Code</label>
                <input type="text" class="form-control" id="classcode" 
                name="classcode" placeholder="Class Code*" tabindex="1" required>
            </div>
           
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="Email" 
                name="Email" placeholder="Your Email*" tabindex="2" required>
            </div>
         
            <div class="form-group">
            <select id="classselection" class="form-control" name="classselection">                      
            <option value="0">--Select Class--</option>
            <option value="Class A">Class A</option>
            <option value="Class B">Class B</option>
            <option value="Class C">Class C</option>
            <option value="Class D">Class D</option>
            <option value="Class E">Class E</option>
            </select>
            </div>
          
            <div style="margin-left: 25%;">
                <button type="submit" name="submit" class="btn">REGISTER</button>
            </div><br/>
            <div style="margin-left: 30%;">
                <p ><a href="Menu.php" class="btn btn-secondary" >Back</a></p>
            </div>
        </form>
    </div>
  
    </div>
    </body>
</html>

<?php 
session_start();
$sql='';
$count=0;
if($count<10){
	if (isset($_POST['submit'])) {

        $db = mysqli_connect('localhost', 'root', '', 'mydatabase');

		$classcode = $_POST['classcode'];
        $Email = $_POST['Email'];
        $classselection = $_POST['classselection'];

		$sql=mysqli_query($db, "INSERT INTO classesregistration (classcode, Email,classselection) VALUES ('$classcode', '$Email', '$classselection')");
        if($sql==1)  
        {  
          echo'<script>alert("Class Registered Successfully")</script>';
          $count=$count+1;
   
        }  
        else  
        {  
          echo'<script>alert("Error while registration")</script>';  
        }   
        
    
    }
}
else{
    echo'<script>alert("Capacity Full")</script>';
}

?>