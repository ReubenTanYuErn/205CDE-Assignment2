<html>
<head>
	<meta charset="utf-8">
	<Title>Profile</title>
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
			<li class = "active"><a href="http://localhost/Profile_Project.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
			<li><a href="http://localhost/Compare_Project.php"><span class="glyphicon glyphicon-screenshot"></span> Compare</a></li>
			<li><a href="http://localhost/Login_Project.php"><span class="glyphicon glyphicon-off"></span> Log Out</a></li>
		</ul>
	</div>	
   </div>
  </div>
</nav>

<body>

 <script>
   // function previewFile(){
       // var preview = document.querySelector('img[alt="Insert Photo of Car"]'); //selects the query named img
       // var file    = document.querySelector('input[type=file]').files[0]; //sames as here
       // var reader  = new FileReader();

       // reader.onloadend = function () {
           // preview.src = reader.result;
       // }

       // if (file) {
           // reader.readAsDataURL(file); //reads the data as a URL
       // } 
	   // else {
           // preview.src = "";
       // }
  // }

  // previewFile();  //calls the function named previewFile()
 // </script>
 
 <?php
	$msg = "";
	if(isset($_POST['submit'])){
		$target = "profile/".basename($_FILES['image'],['name']);
		$db = mysqli_connect("localhost","root", "", "project_carupload");
		
		$image = $_FILES['image']['name'];
		$cm = $_POST['cm'];
		$year = $_POST['year'];
		$mk = $_POST['mk'];
		$cc = $_POST['cc'];
		$mph = $_POST['mph'];
		$price = $_POST['price'];
		$comment = $_POST['comment'];
		
		$sql = "INSERT INTO profile(image, cm, year, mk, cc, mph, price, comment) VALUES  ('$image', '$cm', '$year', '$mk', '$cc', '$mph', '$price', '$comment')";
		mysqli_query($db,$sql);
		
		if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
			$msg = "Image uploaded successfully";
		}
		else{
			$msg = "There was a problem uploading the image";
		}
	}
?>
<div id="content">

<?php
	$db = mysqli_connect("localhost","root", "", "project_carupload");
	$sql = "SELECT * FROM profile";
	$result = mysql_query($db, $sql);
		while($row = mysqli_fetch_array($result)){
			echo "<div id = 'img_div'>";
				echo "<img src = 'profile/".$row['image']."'>";
				echo "<p>" .$row['text']."</p>";
			echo "</div>";
		}

?>
<h3>Upload a picture of your ride here!</h3>
<form class = "form-group" name = "details" method = "post" enctype = "multipart/form-data">
	<div class = "container-fluid col-md-8">
		<input type="file" name = "image">
		
	</div>
	
	<div class = "container-fluid col-md-4">
		
		<p>Car Model</p><input type = "text" class = "form-control" name = "cm">
		<p>Year</p>
		<select name = "year" class = "form-control">
		<option value = "">Choose year the car was made</option>
		<?php
			for($y = 1800; $y <= 2016; $y++)
			{
				print "<option value =\"$y\">$y</option>\n";
			}
		?>
		</select>
		<p>Make</p><input type = "text" class = "form-control" name = "mk">
		<p>Engine(cc)</p><input type = "text" class = "form-control" name = "cc">
		<p>0-60mph</p><input type = "text" class = "form-control" name = "mph">
		<p>Price Range</p><input type = "text" class = "form-control" name = "price">
		<p>Comments: </p><textarea rows="3" cols="30" class = "form-control" name = "comment"></textarea><br>
		<button type="submit" name = "submit" class="btn btn-default">Register</button>
		</form>
	</div>


</body>

<footer>
<p align = "center">Website by Reuben Tan (BCTCU) 2016</p>
</footer>
</html>