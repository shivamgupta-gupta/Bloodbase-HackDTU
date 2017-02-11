<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "Blood";
mysql_connect($host, $user, $pass);
mysql_select_db($db);
if (isset($_POST['uid']))
{
	$username = $_POST['uid'];
	$password = $_POST['pass'];
	$sql = "SELECT * FROM User WHERE user='".$username."' AND pass='".$password."' LIMIT 1";
	$res = mysql_query($sql);
	if (mysql_num_rows($res) == 1)
	{ 
		header('Location: user.html'); 
		exit();
	} 
	else 
	{
		echo "Invalid credentials";
		exit();
	}
}
?>