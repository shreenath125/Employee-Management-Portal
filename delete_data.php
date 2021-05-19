<?php
$a=$_GET['EmpID'];
$user = 'root';
$password = 'root';

// Database name is legends
$database = 'legends';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

if ($mysqli->connect_error) 
{
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = "DELETE  FROM EMPLOYEE where EmpID='$a'";
$result = $mysqli->query($sql);
$mysqli->close();

header('location: home.html')
?>