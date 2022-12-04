<?php
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Booking</title>
	<link rel="stylesheet" type="text/css" href="css/single.css">
</head>

<body>
	<a href="nowshowing.php"><img src="img/close.png"></a>
	<section>
		<form action="checkout.php" method="POST">
		<?php
				include("DBConfig.php");

				extract($_GET);

				$sql = "select * from current_movie where m_id=$mid";

   				$result = mysqli_query($con,$sql);

   				while ($row = mysqli_fetch_assoc($result)) {

		?>	
		
			<div class="content">
				<img src="poster/<?php echo $row['m_img'];?>">
			</div>


			<div class="text">
			<h1><br></h1>


			<table align="center">
				<tr>
					<td><td><input type="hidden" name="m_id" value="<?php echo($row['m_id']); ?>" ></td></td>
					<?php $_SESSION['m_id'] = $row['m_id'] ?>
				</tr>


				<tr>
					<td><h2>Movie Name:</h2></td>
					<td><p><?php echo $row['m_name'];?></p></td>
				</tr>



				<tr>
					<td><h2>Time:</h2></td>
					<td><p><?php echo $row['date'];?></p></td>
				</tr>




				<tr>
					<td><h2>Price:</h2></td>
					<td><p>Rs. <?php echo $row['price'];?></p></td>
				</tr>


				<tr>
					<td><h2>Description:</h2></td>
					<td><p><?php echo $row['m_desc'];?></p></td>
				</tr>


				<tr>
					<td><h2>Tickets Quantity:</h2></td>
					<td align="center"><input type="text" name="seatBooking" required="" value="1"></td>
				</tr>


				<tr>
					<td><h2>Available Seats:</h2></td>
					<td><p><?php echo $row['seats'];?></p></td>
				</tr>

		
			</table>
			<input class="bookbtn" type="submit" name="submit" value="Book Show">

			<?php

				}

			?>
		</form>
		</div>
	</section>
</body>