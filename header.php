<header>
	<a href="index.php" class="logo"><img src="img/logo.png"> </a>
	<ul class="navigation">
		<li><a href="index.php">HOME</a></li>
		<li><a href="about.php">ABOUT</a></li>
		<li><a href="movie.php">MOVIE</a></li>
		<li><a href="contact.php">CONTACT</a></li>
		<li><a href="nowshowing.php">NOW SHOWING</a></li>
		<li><a href="feedback.php">FEEDBACK</a></li>
	</ul>
	
	
	<?php

		session_start();

		if (isset($_SESSION['un'])) 
		{
	?>
			<div class="login"><a href="logout.php" onclick="return confirmLogout()">Logout</a></div>

	<?php

		}
		else
		{
	?>
			<div class="login"><a href="login.php" >Login</a></div>

	<?php
		}
	?>
	<script type="text/javascript">
    function confirmLogout(){
      return confirm("Are you sure you want to Logout from this Website?");
    }
  </script>
</header>