<?php
session_start();

// include 'dbh.php';

$user_id = $_POST['user_id'];
$password = $_POST['password'];

$sql = "SELECT * FROM entries WHERE user_id='$user_id' AND password='$password'";
$result = $conn->project_userlogin($sql);

if(!$row = $result->fetch_assoc()) {
	echo "
	<p><center>Your Username or Password is incorrect!<br><br> <a href ='http://localhost/Project_Login.php'>Back</a></center></p>";

} else{
	header("Location: Homepage.php");

} 

?>