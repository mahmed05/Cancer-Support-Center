<!doctype html>
<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <meta name= "keywords" content = "HTML, CSS, JavaScript">
		<meta name = "description" content = "Participant Forms Page">
        <meta name = "author" content = "Janeise Davis">
        <meta name= "viewport" content= "width=device-width, initial-scale=1">
        <title>Donations</title>
        <link rel= "stylesheet" href= "css\style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&family=Overpass&display=swap">
        <script src="js/headerandfooter.js"></script>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
    </head>
    <body>
    <main-header></main-header>
    <div class = "center-text">
        <h1 style= "color:#008998;">Donation Form</h1>
        <form action="Donate.php" method="POST" id="Donate">
            <div class = "participant-form-section-1">
                
                <p>Fields with a * are required</p>
                <fieldset>
                    <legend>Personal Information</legend>
                    <div class="Row">
                        <div class="input-group">
                            <input type="text" name="name" class="" placeholder="Name*" required />
                        </div>
                        <div class="input-group">
                            <input type="email" name="email" class="" placeholder="Email*" required />
                        </div>
                    </div>
                    
                    <div class="Row">
                        <div class="input-group">
                            <input type="text" name="address" class="" placeholder="Address*" required />
                        </div>
                        <div class="input-group">
                            <input type="text" name="comment" class="" placeholder="Comments*" required />
                        </div>
                    </div>
                </fieldset>
            </div>

            <div class = "participant-form-section-1">
               
                <fieldset>
                    <legend>Payment Details</legend>
                    <ul>
                        <li>
                            <input type="text" name="cardno" class="field-style field-split align-left" placeholder="Enter Card Number"/>
                            <input type="text" name="nameoncard" class="field-style field-split align-right" 
                            placeholder="Enter name on card"/>
                        
                        </li>
                        <li>
                            <input type="text" name="country" class="field-style field-split align-left" placeholder="Enter Country" />
                            <input type="text" name="region" class="field-style field-split align-right" placeholder="Enter Region"/>
                        </li>
                        <li>
                            <input type="text" name="city" class="field-style field-split align-left" placeholder="Enter City" />
                            <input type="text" name="state" class="field-style field-split align-right" placeholder="Enter State"/>
                        </li>
                        <li>
                        <input type="text" name="amount" class="field-style field-split align-left" placeholder="Enter amount to donate"/>
                            <input type="text" name="zip" class="field-style field-split align-right" placeholder="Zip"/>
                            
                        </li>
                    </ul>
                </fieldset>
            </div>
            
                            <input type="submit" name="submit" value="Donate"/>   
                        
                       
        </form>
<br/>
        <main-footer></main-footer>

        
    </body>
</html>

<?php 



	if (isset($_POST['submit'])) {

        $db = mysqli_connect('localhost', 'root', '', 'mydatabase');

        $name = $_POST['name'];
        $email = $_POST['email'];
		$address = $_POST['address'];
        $comment = $_POST['comment'];
        $cardno = $_POST['cardno'];
        $nameoncard = $_POST['nameoncard'];
        $country = $_POST['country'];
        $region = $_POST['region'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $amount = $_POST['amount'];


		$sql=mysqli_query($db, "INSERT INTO donate (name,email,address,comment,cardno,nameoncard,country,region,city,state,zip,amount) VALUES ('$name','$email','$address','$comment','$cardno','$nameoncard','$country','$region','$city','$state','$zip','$amount')"); 
   	  
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
          }
          
          if($sql==1)  
          {  
            echo'<script>alert("Donation Successfull Thanks for Donation!!")</script>';  
          }  
          else  
          {  
            echo'<script>alert("Failed to Donate")</script>';  
          }   
	}

?>
