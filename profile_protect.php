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
<h2>
<div class="studs">
<?php
echo "<style>
		div.studs{
			padding-left:2em;
			color:white;
		}
	</style>";
$nm=$_COOKIE['buttonid'];
$link=mysqli_connect("localhost","root","","demo");
	$ctr="SELECT * FROM student WHERE username=\"$nm\"";
	$stmt=mysqli_query($link,$ctr);
	echo"<center><h1>$nm</h1></center>";
	$imsrc="example13.jpg";
	$ctrim="SELECT imgname FROM users WHERE username=\"$nm\"";
	$stmtim=mysqli_query($link,$ctrim);
	if($rowim=$stmtim->fetch_assoc())
	{
		$imsrc=$rowim["imgname"];
	}
	echo"<center><img src=\"$imsrc\" height=\"200px\" width=\"200px\"></center>";

	if($row=$stmt->fetch_assoc())
	{
		$email=$row["email"];
		$srn=$row["srn"];
		$hobby=$row["hobby"];
		$interest=$row["intrest"];
		$link=$row["links"];
		$name=$row["username"];
		echo"Email:       $email<br><br>";
		echo"SRN:         $srn<br><br>";
		echo"Hobbies:     $hobby<br><br>";
		echo"Interests:   $interest<br><br>";
		echo"Links:       <a href=\"$link\">$link</a><br><br>";

	}
?>
</div>
</h2>
</body></html>