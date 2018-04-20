<?php
function entry($vehicle_no,$wheel,$username)
{
	date_default_timezone_set('Asia/Kolkata');
	$date = date('Y-m-d H:i:s');
	if($vehicle_no && $wheel)
	{
		
		$connect = mysqli_connect("localhost","root","","parking") or die("couldn't connect");
		$query = "INSERT INTO PARKING(vehicle_no,parking_name,wheel,in_time) VALUES('$vehicle_no','$username','$wheel','$date')";
		$result = $connect->query($query);
		if($result == true)
		{
			
			if($wheel == '2')
				$subquery = "update parkinglot set slot2 = slot2-1 where name = '$username'";
			if($wheel =='4')
				$subquery = "update parkinglot set slot4 = slot4-1 where name = '$username'";
			$result = $connect->query($subquery);
			echo "<script>alert('Succefully Recorded');</script>";
			header('location:guard.php');
		}
		else
		{
			echo "<script>alert('record already exists')</script>";
		}
	}
	else
		die("please enter vehicle number and select vehicle type");
}

?>