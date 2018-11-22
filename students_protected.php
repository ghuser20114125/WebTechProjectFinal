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
<div id="teaimage">
</div>
<?php
	$link=mysqli_connect("localhost","root","","demo");
	$ctr="SELECT COUNT(*) FROM users";
	$stmt=mysqli_query($link,$ctr);
	if($row=$stmt->fetch_assoc())
	{
		$tot=$row["COUNT(*)"];
	}
	for ($x = 1; $x <=$tot; $x++)
	{
		$b="SELECT username from users WHERE id=$x AND catagory=\"Student\"";
		$stmtnm=mysqli_query($link,$b);
		$a="No name";
		if($row=$stmtnm->fetch_assoc())
		{
			$a=$row["username"];
		}
		$imgnm="SELECT imgname from users WHERE id=$x AND catagory=\"Student\"";
		$imag=mysqli_query($link,$imgnm);
		$img="example13.jpg";
		if($imrow=$imag->fetch_assoc())
		{
			$img=$imrow["imgname"];
		}
		if($a!="No name"){
		echo "
	<script>
	function addfn() {
    var container = document.createElement(\"div\");
	container.setAttribute('class', 'container');
    var img = document.createElement(\"img\");
	img.src=\"$img\";
	img.setAttribute('class', 'image');
	var middle = document.createElement(\"div\");
	middle.setAttribute('class', 'middle');
	var link = document.createElement(\"a\");
	var button = document.createElement(\"button\");
	button.setAttribute('class', 'imgbutton');
	button.setAttribute('onclick','redirect(this.id)');
	button.setAttribute('id','$a');
	var t = document.createTextNode(\"$a\");
	button.appendChild(t);
	link.appendChild(button);
	middle.appendChild(link);
    container.appendChild(img);
	container.appendChild(middle);
    document.getElementById(\"teaimage\").appendChild(container);
	}
	addfn();
	function redirect(cooknm){
		document.cookie = \"buttonid = \" + cooknm;
		window.location.assign(\"profile_protect.php\")
	}
</script>";
	}
	}
?>


</body>
</html>