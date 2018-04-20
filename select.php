<!DOCTYPE html>
<html>
<head>
	<title>Select parkinglot</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		table,th,tr,td{
			margin:0 auto;
			padding: 10px;
			background-color: #8fd648;
			font-family: sans-serif;
			font-size: 30px;
			text-transform: uppercase;
			color: #fff;
			border-radius: 10px;
		}
		p{
			border: 3px solid #8fd648;
			width: 700px;

			margin-left:auto;
			margin-right: auto;
			color: #fff;
		}
	</style>
</head>
<body style="background-color: #ccc">
	<p align="center">Areas Available</p>
</body>
</html>
<?php
session_start();
$area = $_SESSION['area'];
$connect = mysqli_connect("localhost","root","","parking") or die("couldn't connect");

		$sql = "SELECT * from parkinglot WHERE area='$area'";
		$query = mysqli_query($connect,$sql);
		echo "<table border=1> 
		<tr>
		<th>Name</th>
		<th>Slot2</th>
		<th>Charge2</th>
		<th>Slot4</th>
		<th>Charge4</th>
		</tr>";
		
		while($rs = mysqli_fetch_assoc($query))
		{
    		$name = $rs['name'];
			$slot2 = $rs['slot2'];
			$charge2 = $rs['charge2'];
			$charge4 = $rs['charge4'];
			$slot4 = $rs['slot4'];
			echo "<tr>";
			echo "<td><a href=\"booking.php?var=".$name."\">".$name."</a></td>";
			echo "<td>".$slot2."</td>";
			echo "<td>".$charge2."</td>";
			echo "<td>".$slot4."</td>";
			echo "<td>".$charge4."</td>";
			echo "</tr>";
			
   		}
		echo "</table>";
		mysqli_close($connect);




?>
