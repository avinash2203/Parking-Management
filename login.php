<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
<!--<meta name=viewport content="width=1000, initial-scale=1.0">-->
</head>
<body>
<header>
	<nav align="center">
	<div class="main-wrapper">
	<div class="nav-login">
	<form method="POST" id="form1" >
	<p style="color: #fff;border: 5px solid #8fd648;font-size: 54px">Efficient Parking Space Management</p>
		<input type="text" name="uid" placeholder="Username" required>
		</br>
		</br>
		<input type="password" name="password" placeholder="Password" required>
		</br>
		</br>
		<button type="submit" name="submit" style="color: #298594">Login</button>
		<p id="error">Invalid UserId/Password</p>
	</form>
	</div>
	</div>
	</nav>
	<!--<img src="img/1.jpg">-->
</header>
</body>
</html>
<?php
session_start();
if(isset($_POST['submit'])){
	$username = $_POST['uid'];
	$_SESSION['uid'] = $username;
	$password = $_POST['password'];
	if($username && $password)
	{
		$connect = mysqli_connect("localhost","root","","parking") or die("couldn't connect");
		$query = "SELECT * FROM USERS WHERE UID='$username' and PASSWORD='$password'";
		$result = $connect->query($query);
		if($result->num_rows!=0)
		{
			if($username=='admin')
				header('location:admin.html');
			else
				header('location:guard.php');
		}
		else
		{
			echo "<script>document.getElementById('error').style.display='block';</script>";
		}	
	}
	else
			echo "<script>alert('Please enter Username and Password');</script>";
}

?>