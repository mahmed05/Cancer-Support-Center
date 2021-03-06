<?php 
$sql='';
	if (isset($_POST['submit'])) {

        $db = mysqli_connect('localhost', 'root', '', 'mydatabase');

		$name = $_POST['name'];
		$email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $human = $_POST['human'];

        if($human=='4'){

		$sql=mysqli_query($db, "INSERT INTO contact (name, email,subject,message,human) VALUES ('$name', '$email','$subject','$message','$human')");
        if($sql==1)  
        {  
          echo'<script>alert("Your Request has been sent")</script>';  
        }  
        else  
        {  
          echo'<script>alert("Failed To Request")</script>';  
        }   
        
    }
    else{
        echo'<script>alert("2+2 wrong answer, please correct and fill again")</script>';
    }
    }

?>

<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <meta name= "keywords" content = "HTML, CSS, JavaScript, PHP">
		<meta name = "description" content = "Contact Us Page">
        <meta name = "author" content = "Janeise Davis">
        <meta name= "viewport" content= "width=device-width, initial-scale=1">
        <title>Contact Us</title>
        <link rel= "stylesheet" href= "css\style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&family=Overpass&display=swap">
        <script src="js/headerandfooter.js"></script>
    </head>
    <body>
    <?php
    if($sql):
    ?>

        <h3>Thanks, we'll be in touch</h3>

    <?php
    else:
    ?> 
    <main-header></main-header>
        <div class="center-text">
        <h1>Contact Form</h1>
        <p>Have any questions or comments you'd like to send us? Feel free to contact us through the contact form below.<br><br>
            Fields with a * are required to be filled out<br>
            <p>Also feel free to email <a href="mailto:csc@cancersupportcenter.org">csc@cancersupportcenter.org</a> 
                with any program questions you have may.<br></p>
        </div>        

    <div class = "body-info">
    <div class="container">
            <form action="contact.php" method="POST" class="form">
                <div class="form-group">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" 
                    name="name" placeholder="Your Name*" tabindex="1" required>
                    
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" 
                    name="email" placeholder="Your Email*" tabindex="2" required>
                </div>
                <div class="form-group">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" 
                    name="subject" placeholder="Subject*" tabindex="3" required>
                </div>
                <div class="form-group">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" rows="5" cols="50" id="message" 
                    name="message" placeholder="Enter Message...*" tabindex="4" required></textarea>
                </div>
                <div class="form-group">
                <label for="human" class="form-label">Enter the answer</label>
                <input type="text" class="form-control" id="human" 
                name="human" placeholder="What is 2+2?*" tabindex="5" required>
            </div>
                <div>
                    <button type="submit" name="submit" class="btn">Send Message!</button>
                </div>
            </form>
        </div>
    </div>
    <main-footer></main-footer>
    <?php
    endif;
    ?>  
    </body>
</html>