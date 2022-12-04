<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
	<a href="login.php"><img src="img/close.png"></a>
	<div class="center">
		<h1>Signup</h1>
		<form action="query.php" method="POST">
			<div class="txt">
				<input type="text" name="name" value="" required placeholder="Enter Your Name" autocomplete="off" autofocus>
			</div>
			<div class="txt">
				<input type="text" name="phno" value="" required placeholder="Enter Phone Number" autocomplete="off" maxlength="10">
			</div>
			<div class="txt">
				<input type="email" name="email" value="" required placeholder="Example@gmail.com" autocomplete="off">
			</div>
			<div class="txt">
				<input type="password" name="pass" value="" required placeholder="Enter Password">
			</div>
			<div class="txt">
				<input type="password" name="cpass" value="" required placeholder="Confirm Passwrod">
			</div>

			<div class="btn">
				<input type="submit" name="signup" value="Signup" onclick="chk(this.form)">
				<input type="reset" value="Reset">
			</div>
		</form>
	</div>
</body>
