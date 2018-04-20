<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST">
	<button name="area1">area1</button>
	<button name="area2">area2</button>
	<button name="area3">area3</button>
	<button name="area4">area4</button>
	<button name="area5">area5</button>
	<button name="area6">area6</button>
</form>
</body>
</html>
<?php
$val = "";
if(isset($_POST['area1']))
	$val = 'area1';
if(isset($_POST['area2']))
	$val = 'area2';
if(isset($_POST['area3']))
	$val = 'area3';
if(isset($_POST['area4']))
	$val = 'area4';
if(isset($_POST['area5']))
	$val = 'area5';
echo $val;



?>