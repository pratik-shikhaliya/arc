<?php

	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<a href="index.php"><img src="img/close.png"></a>
	<div class="center">

		<h1>Login</h1>
		<form action="query.php" method="POST">
				<div class="txt">
					<input type="email" name="email" required placeholder="Enter Your Email" autocomplete="off" autofocus>
				</div>

				<div class="txt">
					<input type="password"  name="pass" required placeholder="Enter Your Password">
				</div>
				<div class="btn">
					<input type="submit" name="login" value="Login">
					<input type="reset" value="Reset">
				</div>
				<div class="signup">
					Not a member?<a href="signup.php">Signup</a>
				</div>
		</form>
	</div>
</body>	
