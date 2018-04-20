<?php
function reservation($vehicle_no,$wheel,$username)
{
	date_default_timezone_set('Asia/Kolkata');
	$date = date('Y-m-d H:i:s');
	$connect = mysqli_connect("localhost","root","","parking") or die("couldn't connect");

	$qu = "SELECT * FROM PARKINGLOT WHERE NAME = '$username'";   
	$query = mysqli_query($connect,$qu);
	while($rs = mysqli_fetch_assoc($query))
		{
    		$slot2 = $rs['slot2'];
    		$slot4 = $rs['slot4'];
   		}
   	$flag = 0;
   	if(($wheel == '2' && $slot2 > '0') || ($wheel == '4' && $slot4 > '0') )
   		$flag=1;


   	if($flag==1)
   	{
   		$sql = "INSERT INTO RESERVE VALUES('$vehicle_no','$username','$wheel','$date')";
		$result = $connect->query($sql);
		echo "<script>alert('Successful');</script>";
   	}
	
	else
		{
			echo "<script>alert('Slots full');</script>";
		}
}
?>