<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <meta name= "keywords" content = "HTML, CSS, JavaScript">
		<meta name = "description" content = "Newsletters Page">
        <meta name = "author" content = "Janeise Davis">
        <meta name= "viewport" content= "width=device-width, initial-scale=1">
        <title>Ticket Booking </title>
        <link rel= "stylesheet" href= "css\style.css">
        <link rel= "stylesheet" href= "css\bourbon\restyle.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&family=Overpass&display=swap">
        <script src="js/headerandfooter.js"></script>
    </head>
    <body >
    <img src="logo.png" style="width:15%">
    <br/>
   

    <div class="container" style="margin-left: 30%;margin-top: 5%;">
        <h2 style="text-align: center;font-weight: bold;">Ticket Booking</h2>
        <form action="Ticket.php" method="POST" class="form">

            <div class="form-group">
                <label for="eventname" class="form-label">Event Name</label>
                <input type="text" class="form-control" id="eventname" 
                name="eventname" placeholder="Enter Event name*" tabindex="1" required>
            </div>
           
            <div class="form-group">
                <label for="ticketnumber" class="form-label">Ticket Number</label>
                <input type="text" class="form-control" id="ticketnumber" 
                name="ticket_number" placeholder="Enter Ticket Number*" tabindex="2" required>
            </div>
         
        
          
            <div style="margin-left: 25%;">
                <button type="submit" name="submit" class="btn">Book Ticket</button>
            </div><br/>
            <div style="margin-left: 30%;">
                <p ><a href="admineventdetails.php" class="btn btn-secondary" >Back</a></p>
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

		$eventname = $_POST['eventname'];
        $ticketnumber = $_POST['ticket_number'];
      

		$sql=mysqli_query($db, "INSERT INTO ticket (eventname, ticket_number) VALUES ('$eventname', '$ticketnumber')");
        if($sql==1)  
        {  
          echo'<script>alert("Ticket Booked")</script>';
          $count=$count+1;
        
        }  
        else  
        {  
          echo'<script>alert("Error while booking ticket")</script>';  
        }   
        
    
    }
}
else{
    echo'<script>alert("Capacity Full")</script>';
}

?>