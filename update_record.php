<?php
$EmpID=$_GET['EmpID'];
$Employee_name=$_GET['Employee_name'];
$DeptID=$_GET['DeptID'];
$salary=$_GET['salary'];
$state=$_GET['state'];
$MaritalDesc=$_GET['MaritalDesc'];
$Position=$_GET['Position'];
$Zip=$_GET['Zip'];
$Absences=$_GET['Absences'];
$Department=$_GET['Department'];
$ManagerName=$_GET['ManagerName'];


$user = 'root';
$password = 'root';

$database = 'legends';
$servername='localhost';
$mysqli = new mysqli($servername, $user,$password, $database);

if ($mysqli->connect_error) 
{
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}
$sql = "UPDATE EMPLOYEE set DeptID='$DeptID',salary='$salary',state='$state',MaritalDesc='$MaritalDesc',Position='$Position',Zip='$Zip',Absences='$Absences',Department='$Department',ManagerName='$ManagerName' where EmpID='$EmpID' and Employee_name='$Employee_name'" ;
$res=$mysqli->query($sql);
if( $res === TRUE)
{
	echo 'success';
}
else
{
	echo 'FAILED';
}
$mysqli->close();
header('location: edit.php');
?>
