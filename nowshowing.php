<!DOCTYPE html>
<html>
<head>
	<title>Now Showing</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="booking">
	<?php include('header.php');?>		


	<div class="movie">
		<?php   

				include_once 'DBConfig.php';

				$sql = " SELECT * FROM current_movie ";

            	$result = mysqli_query($con,$sql);

            	while ($row = mysqli_fetch_assoc($result)) {

			?>
			<a href="single.php?mid=<?php echo $row['m_id'] ?>"><img src="poster/<?php echo($row['m_img']) ?>"></a>
		<?php

				}

			?>
	</div>

	<?php include('footer.php'); ?>
</body>
</html>