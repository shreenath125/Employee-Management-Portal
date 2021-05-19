<?php

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
$a=$_GET['Employee_name'];
$sql = "SELECT Employee_name,EmpID,DeptID,salary,state,MaritalDesc,Position,Zip,Absences,Department,ManagerName FROM EMPLOYEE where Employee_name='$a'";
$result = $mysqli->query($sql);
$rows=$result->fetch_assoc();
$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
<style>
body{
	background-image: url('images/img1.jpg');
	margin: 0;
	padding: 0;
	font-family: sans-serif;
}
.box{
	background: black;
	color: white;
	font-size: 20px;
	text-align: left;
    height: 200px;
    width: 400px;
    background: none;
    position: fixed;
    top: 50%;
    left: 50%;
    margin-top: -100px;
    margin-left: -200px;
}
.btn {
  background-color: green;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
}	
.btn:hover {opacity: 1}{
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border:none;
	border-radius: 20px;
	cursor: auto;
}
.b{
	font-size: 200%;
}
h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}
</style>
</head>
<body>
<h1 class="b">EMPLOYEE MANAGEMENT SYSTEM</h1>
<a class="btn" style="float: right;" href="home.html">HOME</a>
<a class="btn" style="float: left;" href="view.php">VIEW DATA</a>
<a class="btn" style="float: left;" href="add.html">ADD DATA</a>
<a class="btn" style="float: left;" href="edit.php">UPDATE DATA</a>
<a class="btn" style="float: left;" href="DELETE.PHP">DELETE DATA</a><br>
<br>
<div  class="box">
	<form name="update" action="update_record.php" method="GET">
		<div class="box">
		<table>
		</tr>
			<label for="EmpID"><td><b>Employee ID</b></td></label>
			<td><input value="<?php echo $rows['EmpID']?>" type="num" name="EmpID"></td>
		 <tr>
		 <tr>	
			<label for="Employee_name"><td><b>Employee Name</b></td>
			<td><input value="<?php echo $rows['Employee_name']?>" type="text" name="Employee_name"></td>
		 </tr>
		 </tr>
			<label for="DeptID"><td><b>Department ID</b></td></label>
			<td><input value="<?php echo $rows['DeptID']?>" type="text" name="DeptID"></td>
		 <tr>
		 <tr>
			<label for="salary"><td><b>Salary</b></td></label>
			<td><input value="<?php echo $rows['salary']?>" type="num" name="salary"></td>
		</tr>
		<tr>
			<label for="state"><td><b>State</b></td></label>
			<td><input value="<?php echo $rows['state']?>" type="text" name="state"></td>
		 </tr>
		 <tr>	
			<label for="MaritalDesc"><td><b>Marital Description</b></td>
			<td><input value="<?php echo $rows['MaritalDesc']?>" type="text" name="MaritalDesc"></td>
		 </tr>
		 <tr>
			<label for="Position"><td><b>Position</b></td></label>
			<td><input value="<?php echo $rows['Position']?>" type="text" name="Position"></td>
		 </tr>
		 <tr>
			<label for="Zip"><td><b>Zip</b></td></label>
			<td><input value="<?php echo $rows['Zip']?>" type="num" name="Zip"></td>
		</tr>
			<label for="Absences"><td><b>Absences</b></td></label>
			<td><input value="<?php echo $rows['Absences']?>" type="num" name="Absences"></td>
		 <tr>
			<label for="Department"><td><b>Department</b></td></label>
			<td><input value="<?php echo $rows['Department']?>" type="text" name="Department"></td>
		 </tr>
		 <tr>
			<label for="ManagerName"><td><b>Manager Name</b></td></label>
			<td><input value="<?php echo $rows['ManagerName']?>" type="text" name="ManagerName"></td>
		 </tr>
		 <tr>
		 	<td></td>
			<td><input class="btn" type="submit" name="create" value="UPDATE"></td><br>
		 </tr> 
		 	</table>
		</div>
	</form>
</div>
</body>
</html>
