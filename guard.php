<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<table width="50%" align="center" border="4px solid #3CCF9A">
		<tr>
			<td style="text-align: center;font-size: 80px; color: #fff">Guard Portal</td>
		</tr>
	</table>
	<p align="center" style="font-family: sans-serif; color:#fff; text-transform: uppercase; border: 10px solid #298594; width: 300px; font-size: 42px;text-align: center;margin-left: auto;margin-right: auto;"><?php session_start(); echo $_SESSION['uid'] ?></p>
	<div style="border: 5px solid #298594; width:900px; margin: auto; background-color: #8fd648">
		<form  align="center" style="margin-top: 70px; font-size: 42px; color: #fff" method="POST" action="parking.php">
		Vehicle No: <input type="text" name="vehicleNo" style="width: 370px;text-transform:uppercase" required>
		<br>
		<input type="radio" name="wheel" value="2" class="radio" required>2-Wheeler
		<input type="radio" name="wheel" value="4" class="radio" required>4-Wheeler
		<br>
		<br>
		<button name="in" style="width: 170px;color: green">IN</button>
		<button name="out" style="width: 170px;color:red;margin-left: 200px">OUT</button>
		<br>
		<br>
	</form>
</div>
</body>
</html>
