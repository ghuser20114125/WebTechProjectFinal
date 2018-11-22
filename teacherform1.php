<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
	 if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM t WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }
	
   

    // Validate password
    if(4>5){
        $password_err = "Please enter a password.";
    } elseif(4>5){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        
    }

    // Validate confirm password
    if(4>5){
        $confirm_password_err = "Please confirm password.";
    } else{
        
        if(4>5){
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        // Prepare an insert statement
        $sql = "INSERT INTO t ( username,email,links,subject,project,time,place,qualification) VALUES (?,?,?,?,?,?,?,?)";
		
		
		  
		
        if(   $stmt = mysqli_prepare($link, $sql) ){
			
			
            // Bind variables to the prepared statement as parameters
            if(mysqli_stmt_bind_param($stmt, "ssssssss", $param_username,$param_email,$param_link, $param_subject,$param_project,$param_time,$param_place,$param_qualification))
			{
			}
			else{
			echo ("error");}
			
            // Set parameters
			$param_username = trim($_POST["username"]);
			$param_email=trim($_POST["email"]);
		$param_subject=trim($_POST["subject"]);
		$param_qualification=trim($_POST["qualification"]);
		$param_project=trim($_POST["project"]);
		$param_time=trim($_POST["time"]);
		$param_place=trim($_POST["place"]);
		$param_link=trim($_POST["link"]);
          
            //$param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)  ){
                // Redirect to login page
				
               // header("location: login.php");
            } else{
                echo "Something went wrong in uploding into teachers. Please try again later.";
				
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
		
    }

    // Close connection
   
	
    mysqli_close($link);


    

}
?>

<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="project1.css">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="project1.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 700px; padding: 20px; color:white;}
    </style>
</head>
<body class="studs">
<ul class="navul">
  <li class="logo"><a href="welcome.php" style="float:left" id="home"><img src="secf.jpg" height="30" width="30"></a></li>
  <li class="logotxt"><a href="welcome.php" style="float:left" id="home">Section 3F</a></li>
  <li class="navli"><a href="welcome.php" style="float:left" id="home">Home</a></li>
  <li class="navli"><a href="students_protected.php" style="float:left" id="stud">Students</a></li>
  <li class="navli"><a href="teachers_protected.php" style="float:left" id="teach">Teachers</a></li>
    <li class="navli"><a href="timetable_p.html" style="float:left" id="tt">Time Table</a></li>
  <li class="navli"><a href="logout.php" style="float:right" id="login">Logout</a></li>
  <li class="navli"><a href="loggedin_enter_details.php" style="float:right" id="login">Enter Details</a></li>
  <li class="navli"></li>
</ul>
	<div class="padsig">
    <div class="wrapper">
	<div class="sigcon">
        <h2>Enter Details</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
           
            
			<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="text" name="email" class="form-control" >
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
			<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Subject</label>
                <input type="text" name="subject" class="form-control" >
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
			<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Link</label>
                <input type="text" name="link" class="form-control" >
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
			<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Place</label>
                <input type="text" name="place" class="form-control" >
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
			<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Time</label>
                <input type="text" name="time" class="form-control" >
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
			<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Project</label>
                <input type="text" name="project" class="form-control" >
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
			<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Qualification</label>
                <input type="text" name="qualification" class="form-control" >
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>
	</div>
	</div>
</body>
</html>


