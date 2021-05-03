<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $Email = $Password = $Qualification = "";
$name_err = $Email_err = $Password_err = $Qualification_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["ID"]) && !empty($_POST["ID"])){
    // Get hidden input value
    $id = $_POST["ID"];
    
    // Validate name
    $input_name = trim($_POST["Name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } else{
        $name = $input_name;
    }
    
    // Validate email
    $input_email = trim($_POST["Email"]);
    if(empty($input_email)){
        $Email_err = "Please enter an Email.";     
    } else{
        $Email = $input_email;
    }
    
    // Validate password
    $input_password = trim($_POST["Password"]);
    if(empty($input_password)){
        $Password_err = "Please enter the Password.";     
    } else{
        $Password = $input_password;
    }

     // Validate Qualification
     $input_Qualification = trim($_POST["DateofBirth"]);
     if(empty($input_Qualification)){
         $Qualification_err = "Please enter the DateofBirth.";     
     } else{
         $Qualification = $input_Qualification;
     }
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($Email_err) && empty($Password_err) && empty($Qualification_err)){
        // Prepare an update statement
        $sql = "UPDATE registration SET Name=?, Email=?, Password=?, DateofBirth=? WHERE ID=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssi", $param_name, $param_email, $param_password,$param_qualification);
            
            // Set parameters
            $param_name = $Name;
            $param_email = $Email;
            $param_password = $Password;
            $param_qualification = $DateofBirth;
            $param_id = $ID;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: AdminMenu.php");
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
        $sql = "SELECT * FROM registration WHERE ID = ?";
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
                    $Email = $row["Email"];
                    $Password = $row["Password"];
                    $Qualification = $row["DateofBirth"];
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
    <title>Update User</title>
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
                    <h2 class="mt-5">Update User</h2>
                    <p>Please edit the input values and submit to update the User record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="Name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="Email" class="form-control <?php echo (!empty($Email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Email; ?>">
                            <span class="invalid-feedback"><?php echo $Email_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="Password" class="form-control <?php echo (!empty($Password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Password; ?>">
                            <span class="invalid-feedback"><?php echo $Password_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Qualification</label>
                            <input type="text" name="DateofBirth" class="form-control <?php echo (!empty($Qualification_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $Qualification; ?>">
                            <span class="invalid-feedback"><?php echo $Qualification_err;?></span>
                        </div>
                        <input type="hidden" name="ID" value="<?php echo $ID; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="AdminMenu.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>