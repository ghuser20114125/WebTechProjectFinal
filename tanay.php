<html>

<link rel="stylesheet" type="text/css" href="project1.css">
<body class="studs">
<ul class="navul">
  <li class="logo"><a href="project.html" style="float:left" id="home"><img src="secf.jpg" height="30" width="30"></a></li>
  <li class="logotxt"><a href="project.html" style="float:left" id="home">Section 3F</a></li>
  <li class="navli"><a href="project.html" style="float:left" id="home">Home</a></li>
  <li class="navli"><a href="students.php" style="float:left" id="stud">Students</a></li>
  <li class="navli"><a href="teachers.php" style="float:left" id="teach">Teachers</a></li>
    <li class="navli"><a href="timetable.html" style="float:left" id="tt">Time Table</a></li>
  <li class="navli"><a href="login_r.php" style="float:right" id="login">Login</a></li>
  <li class="navli"><a href="signup.php" style="float:right"  id="signup">Sign Up</a></li>
  <li class="navli"></li>
</ul>
<h2>
<div class="studs">
<?php
$nm="Tanay Gangey";
$email="tanay.gangey@gmail.com";
$srn="PES1201700144";
$hobby="Cricket and Basketball";
$interest="Machine Learning and Aerospace";
$link="https://github.com/ghuser20114125";
echo"<center><h1>$nm</h1></center>";
echo"<center><img src=\"uploads/tanay.jpg\" height=\"200px\" width=\"200px\"></center>";
echo "<style>
		div.studs{
			padding-left:2em;
			color:white;
		}
	</style>";
echo "<br>";
echo"Email:       $email<br><br>";
echo"SRN:         $srn<br><br>";
echo"Hobbies:     $hobby<br><br>";
echo"Interests:   $interest<br><br>";
echo"Links:       <a href=\"$link\">$link</a><br><br>";
?>
</div>
</h2>
</body>
</html>