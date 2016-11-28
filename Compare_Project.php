<html>
<head>
	<meta charset="utf-8">
	<Title>Compare</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel ="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Styles_Project.css">
	<!--Optional Bootstrap theme -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
</head>



<!-- Navigation Bar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
		 <img alt="Brand" style="max-width:250px;"  src="logo1.png">
      </a>
	</div>
	<div class = "navbar-collapse collapse">
		<ul class = "nav navbar-nav navbar-right">
			<li><a href="http://localhost/homepage.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
			<li><a href="http://localhost/Profile_Project.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
			<li class = "active"><a href="http://localhost/Compare_Project.php"><span class="glyphicon glyphicon-screenshot"></span> Compare</a></li>
			<li><a href="http://localhost/Login_Project.php"><span class="glyphicon glyphicon-off"></span> Log Out</a></li>
		</ul>
	</div>	
   </div>
  </div>
</nav>

<body>

<?php

$cm = $_POST['cm'];
$year = $_POST['year'];
$mk = $_POST['mk'];
$cc = $_POST['cc'];
$mph = $_POST['mph'];
$price = $_POST['price'];
$comment = nl2br($_POST['comment']);


print "<div><table border='1' cellspacing='0' cellpadding='10' align='center'>
<tr><td>Car Model</td><td>$cm</td></tr>
<tr><td>Year</td><td>$year</td></tr>
<tr><td>Make</td><td>$mk</td></tr>
<tr><td>Engine (CC)</td><td>$cc</td></tr>
<tr><td>0-60mph</td><td>$mph</td></tr>
<tr><td>Price</td><td>$price</td></tr>
<tr><td>Comments</td><td>$comment</td></tr></div>";
?>
</body>
</html>