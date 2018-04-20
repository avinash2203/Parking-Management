<?php
function increment($wheel,$username)
{
	$connect = mysqli_connect("localhost","root","","parking") or die("couldn't connect"); 
			if($wheel == '2')
			{
				
				$sub = "UPDATE PARKINGLOT SET SLOT2=SLOT2+1 WHERE NAME = '$username'";
				$result1 = $connect->query($sub);
			}
			else if($wheel == '4')
			{
				$sub = "UPDATE PARKINGLOT SET SLOT4=SLOT4+1 WHERE NAME = '$username'";
				$result1 = $connect->query($sub);
			}
			
			if($result1==true)
			{
				header('location:payment.php');
			}
			else
			{
				echo "<script>alert('Error writing into database');</script>";
			}
			
}

?>