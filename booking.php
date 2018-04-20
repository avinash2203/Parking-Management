<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<p style="text-transform: uppercase; border: 3px solid #298594; width: 600px; margin: 0 auto; text-align: center;"l><?php echo $_GET['var'] ;?></p>
<br>
<br>

<div style="border: 5px solid #298594; width:900px; margin: auto; background-color: #8fd648">
		<form  align="center" style="margin-top: 70px; font-size: 42px; color: #fff" method="POST">
		Vehicle No: <input type="text" name="vehicleNo" style="width: 370px;text-transform:uppercase" required>
		<br>
		<input type="radio" name="wheel" value="2" class="radio" required>2-Wheeler
		<input type="radio" name="wheel" value="4" class="radio" required>4-Wheeler
		<br>
		<br>
		<button name="book" style="width: 170px;color: green">BOOK</button>
		<br>
		<br>
	</form>
</div>

</body>
</html>
<?php
include 'reservation.php';
if(isset($_POST['book']))
{
	$username = $_GET['var'];
	reservation($_POST['vehicleNo'],$_POST['wheel'],$username);
	//echo "<script>alert('Reservation Successful');</script>";
}

?>