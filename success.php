<!DOCTYPE html>
<html>
<head>
	<title>Ticket Summary</title>
	 <link rel="stylesheet" type="text/css" href="css/checkout.css">
</head>
<body class="success">
	<table class="headtable1" border="1" align="center">
                <tr>
                    <th colspan="6"><h1>TICKET SUMMARY</h1></th>
                </tr>
		<tr>
			<td><p>Id</p></td>
			<td><p>Name</p></td>
			<td><p>Movie Name</p></td>
			<td><p>Ticket Price</p></td>
			<td><p>Ticket Quantity</p></td>
			<td><p>Total</p></td>
		</tr>
		
		<?php

		session_start();

		include_once 'DBConfig.php';

		$sql = "select * from booking where bookId= '" . $_SESSION['bookId'] . "' "  ;

		$result = mysqli_query($con,$sql);

   		while ($row = mysqli_fetch_assoc($result)) {
		?>

		<tr class="body">
			<td><p><?php echo $_SESSION['bookId'];?></p></td>
			<td><p><?php echo $row['userName'];?></p></td>
			<td><p><?php echo $row['movieName'];?></p></td>
			<td><p><?php echo $row['moviePrice'];?></p></td>
			<td><p><?php echo $row['seatBooking'];?></p></td>
			<td><p><?php echo $row['total'];?></p></td>
		</tr>
		<?php

			}
		?>

	</table>
		<h2 align="center">Go back to Home page<br><a href="index.php">HOME</a></h2>

</body>
</html>