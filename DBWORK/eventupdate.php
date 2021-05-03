<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $Contact = $Email = $eventname = $upcomingevent = "";
$name_err = $Contact_err = $Email_err = $eventname_err = $upcomingevent_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["ID"]) && !empty($_POST["ID"])){
    // Get hidden input value
    $id = $_POST["ID"];
    
    // Validate name
    $input_name = trim($_POST["Name"]);
    if(empty($input_name)){
        $name_err = "Please enter Name.";
    } else{
        $name = $input_name;
    }

    $input_Contact = trim($_POST["Contact"]);
    if(empty($input_Contact)){
        $Contact_err = "Please enter a Conatct.";
    } else{
        $Contact = $input_Contact;
    }
    
    // Validate email
    $input_email = trim($_POST["Email"]);
    if(empty($input_email)){
        $Email_err = "Please enter an Email.";     
    } else{
        $Email = $input_email;
    }
    
    // Validate password
    $input_eventname = trim($_POST["eventname"]);
    if(empty($input_eventname)){
        $eventname_err = "Please enter the event name.";     
    } else{
        $eventname = $input_eventname;
    }

     $input_upcomingevent = trim($_POST["upcomingevent"]);
     if(empty($input_upcomingevent)){
         $upcomingevent_err = "Please enter the upcomingevent.";     
     } else{
         $upcomingevent = $input_upcomingevent;
     }
    
    // Check input errors before inserting in database
    if(empty($name_err)  && empty($Contact_err) && empty($Email_err) && empty($eventname_err) && empty($upcomingevent_err)){
        // Prepare an update statement
        $sql = "UPDATE eventsregistration SET Name=?, Contact=?, Email=?, eventname=? ,upcomingevent=? WHERE ID=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_name, $param_contact ,$param_email, $param_eventname,$param_upcomingevent,$param_id);
            
            // Set parameters
            $param_name = $Name;
            $param_contact = $Contact;
            $param_email = $Email;
            $param_eventname = $eventname;
            $param_upcomingevent = $upcomingevent;
            $param_id = $ID;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: eventsmanage.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["ID"]) && !empty(trim($_GET["ID"]))){
        // Get URL parameter
        $id =  trim($_GET["ID"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM eventsregistration WHERE ID = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $name = $row["Name"];
                    $Contact = $row["Contact"];
                    $Email = $row["Email"];
                    $eventname = $row["eventname"];
                    $upcomingevent = $row["upcomingevent"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Event</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Event</h2>
                    <p>Please edit the input values and submit to update the Event record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="Name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Contact</label>
                            <input type="Contact" name="Contact" class="form-control <?php echo (!empty($contact_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Contact; ?>">
                            <span class="invalid-feedback"><?php echo $contact_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="Email" class="form-control <?php echo (!empty($Email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Email; ?>">
                            <span class="invalid-feedback"><?php echo $Email_err;?></span>
                        </div>

                        <div class="form-group">
                           <select  name="eventname" class="form-control" >                      
                                <option value="0">--Select Event--</option>
                                <option value="Event A">Event A</option>
                                <option value="Event B">Event B</option>
                                <option value="Event C">Event C</option>
                                <option value="Event D">Event D</option>
                                <option value="Event E">Event E</option>
                            </select>
                        </div>
                        <div class="form-group">
                        <select  name="upcomingevent" class="form-control" >                      
                        <option value="0">--Upcoming Event--</option>
                        <option value="Fun">Event Fun</option>
                        <option value="Donate">Event Donate</option>
                        <option value="Volunteer">Event Voulnteer</option>
                        <option value="Participation">Event Participation</option>
                        <option value="Cancer">Event Cancer</option>
                        </select>
                        </div>
                        <input type="hidden" name="ID" value="<?php echo $ID; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="admineventdetails.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>