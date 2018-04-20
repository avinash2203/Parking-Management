<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
<!--<meta name=viewport content="width=1000, initial-scale=1.0">-->
</head>
<body>
<header>
	<nav align="center">
	<div class="main-wrapper">
	<div class="nav-login">
	<form method="POST" id="form1" >
	<p style="color: #fff;  border: 5px double #8fd648;font-size: 54px">PARKING AREAS</p>
		
	<div style="border: 5px solid #8fd648; padding: 10px; background-color: #8fd648;font-size: 56px; color: #fff;">
	<input class="radio" type="radio" name="area" value="sector1" required>Sector1
	<input class="radio" type="radio" name="area" value="sector2" required>Sector2
	<input class="radio" type="radio" name="area" value="sector3" required>Sector3
	<br>
	<br>
	<input class="radio" type="radio" name="area" value="sector4" required>Sector4
	<input class="radio" type="radio" name="area" value="sector5" required>Sector5
	<input class="radio" type="radio" name="area" value="newtown"	required>Newtown
	
	<br>
	<br>
	<button name="submit">Submit</button>
	<div>	
	</form>
	</div>
	</div>
	</nav>
</header>
</body>
</html>
<?php
session_start();
if(isset($_POST['submit']))
{
	$area = $_POST['area'];
	$_SESSION['area'] = $area;
	header('location:select.php');
		$connect = mysqli_connect("localhost","root","","parking") or die("couldn't connect");

		$sql = "SELECT * from parkinglot WHERE area='$area'";
		$query = mysqli_query($connect,$sql);
		while($rs = mysqli_fetch_assoc($query))
		{
    		$slot2 = $rs['slot2'];
			$slot4 = $rs['slot4'];
			echo $slot2;
			echo $slot4;
   		}
}


?>
