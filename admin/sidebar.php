<?php
	session_start();
	if(!isset($_SESSION['aue'])){
		header("location:alogin.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ARC || ADMIN PANEL</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>

	<header>
		<a href="../logout.php"><img src="img/logout.png"></a>
	</header>
		
	<div class="dashboard">
		<img src="img/logo.png">
		<div class="column">
			<a href="index.php"><span>DashBoard</span></a>
			<a href="listslider.php"><span>Slider</span></a>
			<a href="listMovie.php"><span>Movie</span></a>
			<a href="listcMovie.php"><span>Now Showing</span></a>
			<a href="listbooking.php"><span>Booking</span></a>
			<a href="listUser.php"><span>Users</span></a>
			<a href="feedback.php"><span>Feedback</span></a>
		</div>
	</div>
	
</body>
</html>