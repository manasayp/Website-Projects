<?php
error_reporting(0);
// mysqli
$email =$_POST['email'];
$password =$_POST['password'];


$mysqli = new mysqli("localhost", "dbscu", "desi123", "desi");


if (!$mysqli)
{
	die('Could not connect:'.mysql_error());
}

$sql = $mysqli->query("SELECT passwd FROM customers WHERE email=$email");

if(!mysql_query($mysqli,$sql))
{
	die('Error:'.mysql_error());
}
echo "1 record added";

mysql_close($mysqli)

	
?>