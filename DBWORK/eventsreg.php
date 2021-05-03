
<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <meta name= "keywords" content = "HTML, CSS, JavaScript">
		<meta name = "description" content = "Newsletters Page">
        <meta name = "author" content = "Janeise Davis">
        <meta name= "viewport" content= "width=device-width, initial-scale=1">
        <title>Event REGISTRATION </title>
        <link rel= "stylesheet" href= "css\style.css">
        <link rel= "stylesheet" href= "css\bourbon\restyle.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&family=Overpass&display=swap">
        <script src="js/headerandfooter.js"></script>
    </head>
    <body >

    <div class="container" style="margin-left: 30%;margin-top: 5%;">
        <h2 style="text-align: center;font-weight: bold;">EVENT REGISTRATION</h2>
        <form action="eventsreg.php" method="POST" class="form">
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="Name" 
                name="Name" placeholder="Your Name*" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="contact" class="form-label">contact</label>
                <input type="text" class="form-control" id="Contact" 
                name="Contact" placeholder="Your Contact*" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="Email" 
                name="Email" placeholder="Your Email*" tabindex="2" required>
            </div>
            <div class="form-group">
            <select id="eventname" class="form-control" name="eventname">                      
            <option value="0">--Select Event--</option>
            <option value="Event A">Event A</option>
            <option value="Event B">Event B</option>
            <option value="Event C">Event C</option>
            <option value="Event D">Event D</option>
            <option value="Event E">Event E</option>
            </select>
            </div>
            <div class="form-group">
            <select id="upcomingevent" class="form-control" name="upcomingevent">                      
            <option value="0">--Upcoming Event--</option>
            <option value="Fun">Event Fun</option>
            <option value="Donate">Event Donate</option>
            <option value="Volunteer">Event Voulnteer</option>
            <option value="Participation">Event Participation</option>
            <option value="Cancer">Event Cancer</option>
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

		$Name = $_POST['Name'];
		$Contact = $_POST['Contact'];
        $Email = $_POST['Email'];
        $eventname = $_POST['eventname'];
        $upcomingevent = $_POST['upcomingevent'];

		$sql=mysqli_query($db, "INSERT INTO eventsregistration (Name, Contact, Email,eventname,upcomingevent) VALUES ('$Name', '$Contact', '$Email','$eventname','$upcomingevent')");
        if($sql==1)  
        {  
          
          $count=$count+1;
   
          echo'<script>alert("Event Registered Successfully")</script>';  
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