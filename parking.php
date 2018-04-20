
<?php
include 'entry.php';
include 'exiting.php';
session_start();
$username = $_SESSION['uid'];
$vehicle_no = $_POST['vehicleNo'];
$vehicle_no = strtoupper($vehicle_no);
$wheel = $_POST['wheel'];

//echo $username;
//echo "<script>document.getElementByTagName('h1').value='$username';</script>";

if(isset($_POST['in'])){
	entry($vehicle_no,$wheel,$username);
	
}

if(isset($_POST['out']))
{
	exiting($vehicle_no,$wheel,$username);
}
?>