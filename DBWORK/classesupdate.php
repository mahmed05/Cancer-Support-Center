<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$classcode = $Email = $classselection ="";
$classcode_err = $Email_err = $classselection_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["ID"]) && !empty($_POST["ID"])){
    // Get hidden input value
    $id = $_POST["ID"];
    
    // Validate name
    $input_classcode = trim($_POST["classcode"]);
    if(empty($input_classcode)){
        $classcode_err = "Please enter class code.";
    } else{
        $classcode = $input_classcode;
    }

    $input_Email = trim($_POST["Email"]);
    if(empty($input_Email)){
        $Email_err = "Please enter Email.";
    } else{
        $Email = $input_Email;
    }
    
   
    $input_classselection = trim($_POST["classselection"]);
    if(empty($input_classselection)){
        $classselection_err = "Please enter the class.";     
    } else{
        $classselection = $input_classselection;
    }


    
    // Check input errors before inserting in database
    if(empty($classcode_err)  && empty($Email_err)){
        // Prepare an update statement
        $sql = "UPDATE classesregistration SET classcode=?,Email=?, classselection=?  WHERE ID=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_classcode, $param_email, $param_classselection,$param_id);
            
            // Set parameters
            $param_classcode = $classcode;
            $param_email = $Email;
            $param_classselection = $classselection;
            
            $param_id = $ID;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: adminclassesdetails.php");
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
        $sql = "SELECT * FROM classesregistration WHERE ID = ?";
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
                    $classcode = $row["classcode"];
                    $Email = $row["Email"];
                    $classselection = $row["classselection"];
   
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
    <title>Update Classes</title>
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
                    <h2 class="mt-5">Update Class</h2>
                    <p>Please edit the input values and submit to update the class record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>Class Code</label>
                            <input type="text" name="classcode" class="form-control <?php echo (!empty($classcode_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $classcode; ?>">
                            <span class="invalid-feedback"><?php echo $classcode_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="Email" class="form-control required<?php echo (!empty($Email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Email; ?>">
                            <span class="invalid-feedback"><?php echo $Email_err;?></span>
                        </div>

                        <div class="form-group">
                           <select  id="classselection" name="classselection" class="form-control">                      
                                <option value="0">--Select Class--</option>
                                <option value="Class A">Class A</option>
                                <option value="Class B">Class B</option>
                                <option value="Class C">Class C</option>
                                <option value="Class D">Class D</option>
                                <option value="Class E">Class E</option>
                            </select>
                        </div>
                   
                        <input type="hidden" name="ID" value="<?php echo $ID; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="adminclassesdetails.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>