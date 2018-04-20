<?php
include 'increment.php';
include 'handlepayment.php';
function exiting($vehicle_no,$wheel,$username)
{
	date_default_timezone_set('Asia/Kolkata');
	$date = date('Y-m-d H:i:s');
	if($vehicle_no && $wheel)
	{
		$connect = mysqli_connect("localhost","root","","parking") or die("couldn't connect");
		$sql = "SELECT * from PARKING WHERE vehicle_no='$vehicle_no'";
		$query = mysqli_query($connect,$sql);
		while($rs = mysqli_fetch_assoc($query))
		{
    		$oldtime = $rs['in_time'];
   		}
   		$datetime1 = strtotime($date);
		$datetime2 = strtotime($oldtime);

		$secs = $datetime1 - $datetime2;// == <seconds between the two times>
		$hours = $secs / 3600;
		$charge = calcharge($wheel,$hours,$username);
		
		$query1 = "UPDATE PARKING SET out_time = '$date' where vehicle_no = '$vehicle_no';UPDATE PARKING SET charge = '$charge' where vehicle_no = '$vehicle_no'";
		$result = mysqli_multi_query($connect,$query1);
		if($result==true)
		{
 			increment($wheel,$username);
		}
		else
		{
			echo "<script>alert('Error in writing into database')</script>";
		}
	}
}
?>