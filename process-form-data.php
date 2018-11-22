<html>
<link rel="stylesheet" type="text/css" href="project.css">
<body class="studs">
<ul class="navul">
  <li class="logo"><a href="project.html" style="float:left" id="home"><img src="secf.jpg" height="30" width="30"></a></li>
  <li class="logotxt"><a href="project.html" style="float:left" id="home">Section 3F</a></li>
  <li class="navli"><a href="project.html" style="float:left" id="home">Home</a></li>
  <li class="navli"><a href="students.php" style="float:left" id="stud">Students</a></li>
  <li class="navli"><a href="teachers.php" style="float:left" id="teach">Teachers</a></li>
  <li class="navli"><a href="login.php" style="float:right" id="login">Login</a></li>
  <li class="navli"><a href="testformsave.php" style="float:right"  id="signup">Sign Up</a></li>
  <li class="navli"></li>
</ul>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$fp = fopen("formdata.txt", "a");
$savestring = "name: ".$name . ", email: " . $email;
fwrite($fp, $savestring);
fwrite($fp, "\r\n");
fclose($fp);
echo "<h1>You data has been saved in a text file!</h1>";
?>
</body>
</html>
