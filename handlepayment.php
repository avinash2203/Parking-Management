<?php
function calcharge($wheel,$hours,$username)
{
		$connect = mysqli_connect("localhost","root","","parking") or die("couldn't connect");
		$chargequery = "select * from parkinglot where name = '$username'";
		$res = mysqli_query($connect,$chargequery);
		$rescharge = mysqli_fetch_assoc($res);

	if($wheel == '2' )
			$perhour = $rescharge['slot2'];
	else if($wheel == '4')
			$perhour = $rescharge['slot4'];
	$charge = $hours * $perhour;
	$charge = round($charge);
	session_start();
	$_SESSION['charge'] = $charge;
	//echo $charge;
	return $charge;
}



?>