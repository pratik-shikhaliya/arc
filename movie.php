<!DOCTYPE html>
<html>
<head>
	<title>Movie</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php $title="main";?>
	<?php include('header.php');?>

	<section class="s_sec" id="gallery">	
		<div class="small-container">

			<?php   

				include_once 'DBConfig.php';

				$sql = " SELECT * FROM movie ";

            	$result = mysqli_query($con,$sql);

            	while ($row = mysqli_fetch_assoc($result)) {

			?>

				<div class="col-5">
					<div class="img"><img src="poster/<?php echo($row['m_img']) ?>"></div>
					<div class="content"><h4><?php echo($row['m_name']) ?></h4>
					<p><?php echo($row['m_des']) ?></p></div>
				</div>
			
			<?php

				}

			?>

		</div>
	</section>

	<?php include('footer.php');?>
</body>