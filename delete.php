<?php

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

$sql = "SELECT EmpId,Employee_name,salary,state,DOB,Zip FROM EMPLOYEE";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Details</title>
	<style>
		body{
			background-image: url('images/img1.jpg');
		}
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			background: #FFC300;
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
		.b{
			font-size: 200%;
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
.btn:hover {opacity: 1}
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
	<script>
		function myfun()
		{
			alert("ARE YOU SURE YOU WANT TO DELETE THE DATA");
		}
	</script>
<h1 class="b" text-color="white">EMPLOYEE MANAGEMENT SYSTEM</h1>
<a class="btn" style="float: right;" href="home.html">HOME</a>
<a class="btn" style="float: left;" href="view.php">VIEW DATA</a>
<a class="btn" style="float: left;" href="add.html">ADD DATA</a>
<a class="btn" style="float: left;" href="edit.php">UPDATE DATA</a>
<a class="btn" style="float: left;" href="DELETE.php">DELETE DATA</a><br>
<br>
<br>
<br>
<br>
	<section>
		<table align="center">
			<tr>
				<th>Employee ID</th>
				<th>Employee_name</th>
				<th>salary</th>
				<th>State</th>
				<th>DOB</th>
				<th>Zip</th>
				<th>Update</th>
			</tr>
			<?php 
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<?php 
					  $f=$rows['EmpId'];
					  $a=$rows['Employee_name'];
					  $b=$rows['salary'];
					  $c=$rows['state'];
					  $d=$rows['DOB'];
					  $e=$rows['Zip'];
				?>
				<td><?php echo $f;?></td>
				<td><?php echo $a;?></td>
				<td><?php echo $b;?></td>
				<td><?php echo $c;?></td>
				<td><?php echo $d;?></td>
				<td><?php echo $e;?></td>
				<td><a onclick="myfun()" href="delete_data.php?EmpID=<?php echo $f?>">DELETE</a></td>				
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>
</html>
