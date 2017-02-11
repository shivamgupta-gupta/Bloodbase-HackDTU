<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$conn = mysqli_connect($db_host,$db_user,$db_pass);
$sql = "CREATE DATABASE Blood";
mysqli_query($conn,$sql);
mysqli_select_db($conn,'Blood');
$queri = "CREATE TABLE User (
name VARCHAR(30), 
bg VARCHAR(30),
gender VARCHAR(30),
disease VARCHAR(30),
mob INT(13),
location VARCHAR(50),
user VARCHAR(30),
pass VARCHAR(30),
)";
mysqli_query($conn,$queri);
$name = $_POST['name'];
$bg = $_POST['bg'];
$gender = $_POST['gender'];
$disease = $_POST['disease'];
$mob = $_POST['mob'];
$location = $_POST['location'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$querii = "INSERT INTO User(name,bg,gender,disease,mob,location,user,pass) VALUES ('$name','$bg','$gender','$disease','$mob','$location','$user','$pass')";
if(!mysqli_query($conn,$querii)){
	echo "Could not create your account. Please try again." . mysqli_error($conn);
}else{
	echo "<script>var a = confirm('Account created successfully.');
	if (a == true) {
		window.open('index.html');
	}</script>";
}
//echo "<script>window.close();</script>";

<?php
          if ($row = mysql_fetch_assoc( $result))
          {
          	echo $row['name'];
          	# code...
          }

mysqli_close($conn);

?>
 