<?php

$username = $_POST['uid'];
$password = $_POST['password'];

	if($username && $password)
	{
		$connect = mysqli_connect("localhost","root","","parking") or die("couldn't connect");
		$query = "SELECT * FROM USERS WHERE UID='$username' and PASSWORD='$password'";
		$result = $connect->query($query);
		if($result->num_rows!=0)
		{
			echo "login successful as ".$username." ";
		}
		else
		{
			//die("Enter correct UserID and Password");
			echo "<script>confirm('Invalid');</script>";
			header("location:../login.html");

		}	
	}
	else
		die("please enter UID and password");

?>