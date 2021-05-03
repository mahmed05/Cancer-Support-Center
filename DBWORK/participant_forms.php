<!doctype html>
<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <meta name= "keywords" content = "HTML, CSS, JavaScript">
		<meta name = "description" content = "Participant Forms Page">
        <meta name = "author" content = "Janeise Davis">
        <meta name= "viewport" content= "width=device-width, initial-scale=1">
        <title>Participant Forms</title>
        <link rel= "stylesheet" href= "css\style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&family=Overpass&display=swap">
        <script src="js/headerandfooter.js"></script>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
    </head>
    <body>
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
        <h1 style= "color:#008998;">Participant Forms</h1>
        <form action="participant_forms.php" method="POST" id="participant_form">
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
                            <input type="text" name="phone" class="" placeholder="Phone*" required />
                        </div>
                        <div class="input-group">
                            <input type="text" name="program" class="" placeholder="Program Attending*" required />
                        </div>
                    </div>
                </fieldset>
            </div>

            <div class = "participant-form-section-1">
                <b>If you are new to The Cancer Support Center please fill out the questions below (existing participants can skip to the next section)</b><br/><br/>
                <fieldset>
                    <legend>Personal Information</legend>
                    <ul>
                        <li>
                            <input type="text" name="address" class="field-style field-split align-left" placeholder="Address"/>
                            <input type="text" name="participant" class="field-style field-split align-right" 
                            placeholder="Participant Type (Survivor, Caregiver, Bereaved)"/>
                        
                        </li>
                        <li>
                            <input type="text" name="cancertype" class="field-style field-split align-left" placeholder="Cancer Type" />
                            <input type="text" name="hospital" class="field-style field-split align-right" placeholder="Hospital for Treatment"/>
                        </li>
                    </ul>
                </fieldset>
            </div>

            <h4>
                Please check each box below to acknowledge your consent for each of the following:<br/>(By submitting your registration you agree to The Cancer Support Center's Use of Service Agreement for any programs offered on-site or online)</h4>
            <div class = "participant-form-section-1">
                <fieldset>
                    <legend>Use of Services Agreement</legend>
                    <ul class = "participant-checkboxes">
                        <li>
                            <input type="checkbox" id="checkbox1" name="s[ ]" value="Use of Services" required />
                            <label for="checkbox1">Use of Services* – Cancer Support Center programs are offered at no charge to any participant.<br/>
                                Our intent is to provide a safe environment and programming that is beneficial to those involved. We expect
                                participants to discuss concerns with appropriate staff and to hold all associated with the Center
                                harmless in their work to provide programming along professional and ethical guidelines. The Cancer Support Center
                                reserves the right to refuse or to discontinue the privileges of these services to any person.
                            </label>
                            <br/><br/>

                            <input type="checkbox" id="checkbox2" name="s[ ]" value="Wellness Classes" required />
                            <label for="checkbox2">Wellness Classes* – I understand that wellness classes by The Cancer Support Center (including yoga,
                                fitness and massage) include physical movements and that the risk of injury, even serious or disabling, is 
                                always present and cannot be entirely eliminated. If I experience any pain or discomfort, I will listen to my 
                                body and ask for support from the staff.
                            </label>
                            <br/><br/>

                            <input type="checkbox" id="checkbox3" name="s[ ]" value="Medical Assistance/Advice" required />
                            <label for="checkbox3">Medical Assistance/Advice* – The Cancer Support Center and its staff members do not provide medical
                                advice or assistance. None of our programs are a substitute for medical attention, examination, diagnosis,
                                or treatment. They may not be recommended and safe under certain medical conditions. I affirm that I
                                alone am responsible to decide whether to practice wellness classes and will discuss my choices with my
                                physician if I am unsure about my safety. I hereby agree to irrevocably release and waive any claims that I
                                have now or hereafter may have against The Cancer Support Center and staff. 
                            </label>
                            <br/><br/>

                            <input type="checkbox" id="checkbox4" name="s[ ]" value="Nutrition Pop-Up Station" required />
                            <label for="checkbox4">Nutrition Pop-Up Station* – I understand that I alone am responsible for my participation in any Nutrition
                                Pop-Up Station at The Cancer Support Center. I hereby release The Cancer Support Center and Center for
                                Food Equity in Medicine from any liability should I become ill as a result of my participation in this program.
                            </label>           
                        </li>
                        <li>
                            <br/>
                            <input type="submit" name="submit" value="Send Registration"/>   
                        </li>
                    </ul>
                </fieldset>
            </div>
        </form>

        <main-footer></main-footer>

        
    </body>
</html>

<?php 



	if (isset($_POST['submit'])) {

        $db = mysqli_connect('localhost', 'root', '', 'mydatabase');

		$name = $_POST['name'];
		$email = $_POST['email'];
        $phone = $_POST['phone'];
        $program = $_POST['program'];
        $address = $_POST['address'];
        $participant = $_POST['participant'];
        $cancertype = $_POST['cancertype'];
        $hospital = $_POST['hospital'];
        $checkbox1= $_POST['s']; 
        $chk="";  
        foreach($checkbox1 as $chk1)  
        {  
          $chk .= $chk1.",";  
        }  

		$sql=mysqli_query($db, "INSERT INTO participants (name, email,phone,program,address,participant,cancertype,hospital,Checkboxvalue) VALUES ('$name', '$email','$phone','$program','$address','$participant','$cancertype','$hospital','$chk')"); 
   	  
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
          }
          
          if($sql==1)  
          {  
            echo'<script>alert("Participant added")</script>';  
          }  
          else  
          {  
            echo'<script>alert("Failed To add participants")</script>';  
          }   
	}

?>
