<html>
<link rel="stylesheet" type="text/css" href="project1.css">
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

<?php
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: signup.php");
    exit;
}

$nm=$_SESSION["username"];
$link=mysqli_connect("localhost","root","","demo");
	$ctr="SELECT catagory FROM users WHERE username=\"$nm\"";
	$stmt=mysqli_query($link,$ctr);
	if($row=$stmt->fetch_assoc())
	{
		$tot=$row["catagory"];
	}
if($tot=="Teacher"){
	header("location: welcome_t.php");
}
else{
	header("location: welcome_s.php");
}
?>
<!-- insert rajath and pranavs code to store to DB here
Have a seperate table for teachers and students
-->
</body>
</html>