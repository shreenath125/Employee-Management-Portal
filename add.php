<?php

	$EmpID=$_POST['EmpID'];
	$Employee_name=$_POST['Employee_name'];
	$DeptID=$_POST['DeptID'];
	$salary=$_POST['salary'];
	$state=$_POST['state'];
	$MaritalDesc=$_POST['MaritalDesc'];
	$Position=$_POST['Position'];
	$Zip=$_POST['Zip'];
	$Absences=$_POST['Absences'];
	$Department=$_POST['Department'];
	$ManagerName=$_POST['ManagerName'];
	//database connection
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "legends";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) 
	{
  		die("Connection failed: " . $conn->connect_error);
	}
	else
	{
		$stmt = $conn->prepare("insert into EMPLOYEE(EmpID,Employee_name,DeptID,salary,state,MaritalDesc,Position,Zip,Absences,Department,ManagerName) values (?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("isiissssiss",$EmpID,$Employee_name,$DeptID,$salary,$state,$MaritalDesc,$Position,$Zip,$Absences,$Department,$ManagerName_f);
		$stmt->execute();
		$stmt->close();
		$conn->close();
		header('location:home.html');
	}
?>
