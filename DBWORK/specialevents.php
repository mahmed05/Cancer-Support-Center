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

		$sql=mysqli_query($db, "INSERT INTO specialevents(name, email,subject,message,human) VALUES ('$name', '$email','$subject','$message','$human')");
        if($sql==1)  
        {  
          echo'<script>alert("Thanks, we will be in touch")</script>';  
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
		<meta name = "description" content = "Contact Us Form on Special Events Page">
        <meta name = "author" content = "Janeise Davis">
        <meta name= "viewport" content= "width=device-width, initial-scale=1">
        <title>Special events</title>
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
    <header>
        <div class="header-logo">
            <a href="index.html"><img src="css/Cancer_Support_Center.png" alt="Cancer Support Center"></a>
        </div>
        
        <div class="navbar">
            <div class="dropdown">
            <a href="programs-and-activities.html" target="_blank">
            <button class="dropbtn">Programs and Activities</a>
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="kickItCancer.html" target="_blank">Kick It Cancer</a>
                <a href="zoomProgramming.html" target="_blank">Zoom Programming</a>
                <a href="onDemandProgramming.html" target="_blank">On Demand Programming</a>
                <a href="CSC5.html" target="_blank">CSC 5 Point Model</a>
                <a href="education&Networking.html" target="_blank">Education and Networking</a>
                <a href="family-and-children.html" target="_blank">Family and Children</a>
                <a href="fitness-physical-wellness.html" target="_blank">Fitness and Physical Wellness</a>
                <a href="body-image.html" target="_blank">Body Image</a>
                <a href="nutrition-and-diet.html" target="_blank">Nutrition and Diet</a>
                <a href="nutrition-popup-recipes.html" target="_blank">Nutrition Pop Up Recipes</a>               
                <a href="#">Calendar Grid and Zoom Registration</a>
                <a href="participant_forms.php" target="_blank">Participant Forms</a>
                <a href="newsletters.php" target="_blank">Newsletters</a>
            </div>
            </div>

            <div class="dropdown">
            <a href="info-and-resources.html">  
            <button class="dropbtn">Information and Resources</a>
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
            <a href="hospitalPartnerships.html" target="_blank">Hospital Partnerships</a>
            <a href="cancerSupportLinks.html" target="_blank">Cancer Support Links</a>
            <a href="libraryResourceCenter.html" target="_blank">Library Resource Center</a>
            <a href="financial.html" target="_blank">Financial</a>
            <a href="transportation.html" target="_blank">Transportation Services</a>
            </div>
            </div>

            <div class="dropdown">
            <a href="about-center.html"> 
            <button class="dropbtn">About the Center</a>
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
            <a href="staff.html" target="_blank">Staff</a>
            <a href="board.html" target="_blank">Board of Directors</a>
            <a href="ancillary-boards.html" target="_blank">Ancillary Boards</a>
            <a href="news.html" target="_blank">In the News</a>
            <a href="annual-report.html" target="_blank">CSC Annual Report</a>
            <a href="contact.php" target="_blank">Contact Us</a>
            </div>
            </div>

            <div class="dropdown">
            <a href="support-center.html"> 
            <button class="dropbtn">Support the Center</a>
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
            <a href="volunteer.html" target="_blank">Volunteer Opportunities</a>
            <a href="http://www.villagedoor.com/" target="_blank">Consignment Shop</a>
            <a href="https://www.classy.org/give/123486/#!/donation/checkout" target="_blank">Donate</a>
            </div>
            </div>

            <div class="dropdown">
            <a href="specialevents.php"> 
            <button class="dropbtn">Special Events</a>
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
            <a href="annualGolfOuting.html" target="_blank">Annual Golf Outing</a>
            <a href="2020VirtualFallWalkofHope.html" target="_blank">2020 Virtual FALL Walk of Hope</a>
            <a href="2020FallUnGala.html" target="_blank">2020 Fall Un-Gala</a>
            <a href="thirdPartyEvents.html" target="_blank">Third Party Community Events</a>
            <a href="takeABiteOutOfCancer.html" target="_blank">Take a Bite Out of Cancer</a>
            </div>
            </div>
            <div class="dropdown">
                <a href="index.html" target="_blank">
                <button class="dropbtn">Registration</a>
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="Adminregistration.php" target="_blank">Admin</a>
                    <a href="Registration.php" target="_blank">User</a>
                </div>
                </div>
                <br/><br/>
                <div class="dropdown">
                    <a href="index.html" target="_blank">
                    <button class="dropbtn">Login</a>
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="Admin.php" target="_blank">Admin</a>
                        <a href="Login.php" target="_blank">User</a>
                    </div>
                    </div>
                    <div class="dropdown">
                        <a href="index.html" target="_blank">
                        <button class="dropbtn">Donate</a>
                          <i class="fa fa-caret-down"></i>
                        </button>
                        <div class="dropdown-content">
                            <a href="Donate.php" target="_blank">Donate For Cancers</a>
                           
                        </div>
                        </div>
        </div>
        </header>
    <div class = "center-text">
        <p>If you have a program question, please email <a href="mailto:csc@cancersupportcenter.org">csc@cancersupportcenter.org</a> or use the form below.</p>
    </div>      

    <div class = "body-info">
    <div class="container">
    <p style= "color:#FF0000;">Fields with a * are required to be filled out</p>
            <form action="specialevents.php" method="POST" class="form">
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
                    name="message" placeholder="Enter Message...*" tabindex="4"></textarea>
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