<!DOCTYPE html>
<html>
<head>
	<title>FeedBack</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="feedback">
	<?php include('header.php');?>
	<div class="center">
		<form action="query.php" method="POST">
			<h1><p>Send Your Feedback</p></h1>
				<div class="txt">
					Enter your name<br>
					<input type="text" name="name" placeholder="Write Here..." required autocomplete="off">
				</div>
				<div class="txt">
					What was your Experince!<br>
					<input class="rb" type="radio" name="experince" required="" value="BAD">BAD
					<input class="rb" type="radio" name="experince" required="" value="NICE">NICE
					<input class="rb" type="radio" name="experince" required="" value="GREAT">GREAT
				</div>
				<div class="txt">
					Do you have any suggestion for us?<br>
					<textarea cols="40" rows="3" placeholder="Type Something..." name="suggestion" required></textarea>
				</div>
				<div class="btn">
					<button type="submit" name="feedback">Submit</button>
					<button type="reset">Reset</button>
				</div>
		</form>		
	</div>
	<div class="feedback_footer">
		<?php include('footer.php');?>
	</div>
</body>
</html>