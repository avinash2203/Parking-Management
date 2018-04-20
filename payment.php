<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<p  style="border: 5px solid #298594; margin:auto; color:#298594;text-align: center;width: 500px;background-color: #ccc; font-size: 56px;">Payment Portal</p>
	<br>
	<p style="border: 3px solid #298594; width: 400px; background-color: #ccc;margin-right: auto;margin-left: auto; text-align: center;">Charge:<?php session_start(); echo $_SESSION['charge'].".00";   ?><p>
	<img style="width:320px; height: 500px; margin:0 auto; display: block;" src="img/paytm.jpeg">
</body>
</html>