<?php

	session_start();

		include_once 'DBConfig.php';	

		$sql = " select * from current_movie WHERE m_id= '" . $_SESSION['m_id'] . "' "  ;
		$result = mysqli_query($con,$sql);

		$row = mysqli_fetch_assoc($result);

		$_SESSION['seatBooking'] = $_POST['seatBooking'];

		if(isset($_REQUEST['submit'])){
			if (!isset($_SESSION['un'])) {

				echo "<script>alert('You have to login first.');window.location.href='login.php'</script>";
					
			}
			elseif ($row['seats']==0) {

				echo "<script>alert('Sorry all seats are booked!!');window.location.href='nowshowing.php'</script>";

			}	
			elseif($row['seats']<$_SESSION['seatBooking']){

				echo "<script>alert('insufficient seats!!');window.location.href='nowshowing.php'</script>";
			}
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Checkout page </title>
	<link rel="stylesheet" type="text/css" href="css/checkout.css">
</head>
<body>
	<table class="headtable" border="1" align="center">
		<tr>
			<td><p>Movie Name</p></td>
			<td><p>Ticket Price</p></td>
			<td><p>Ticket Quantity</p></td>
			<td><p>Total</p></td>
		</tr>
		<?php

		include("DBConfig.php");

			extract($_POST);

			$sql = "select * from current_movie where m_id='" . $_SESSION['m_id'] . "'";


   			$result = mysqli_query($con,$sql);

   			while ($row = mysqli_fetch_assoc($result)) {

		?>

		<tr class="body">
			<td><p><?php echo $row['m_name'];?></p></td>
			<td><p><?php echo $row['price'];?></p></td>
			<td><p><?php echo $_SESSION['seatBooking'];?></p></td>
			<td><p><?php echo ($_SESSION['seatBooking'] * $row['price']); ?></p></td>
		</tr>
	</table>
	<form action="saveTicket.php"  method="POST">
		<table class="bodytable" align="center">
			<tr align="center">
				<td><p>Movie Name:</p></td>
				<td><input type="text" name="movieName" value="<?php echo $row['m_name'];?>" autocomplete="off" readonly="readonly"></td>
			</tr>
			
			<tr align="center">
				<td><p>Seat Booking:</p></td>
				<td><input type="text" name="seatBooking" value="<?php echo $_SESSION['seatBooking'];?>" autocomplete="off" readonly="readonly"></td>
			</tr>
			<tr align="center">
				<td><p>Price:</p></td>
				<td><input type="text" name="moviePrice" value="<?php echo $row['price'];?>" autocomplete="off" readonly="readonly"></td>
			</tr>
			<tr align="center">
				<td><p>Date and Time:</p></td>
				<td><input type="text" name="date" value="<?php echo $row['date'];?>" autocomplete="off" readonly="readonly"></td>
			</tr>
			<tr align="center">
				<td><p>Total:</td><td><input type="text" name="total" value="<?php echo ($_SESSION['seatBooking'] * $row['price']); ?>" autocomplete="off" readonly="readonly"></td>
			</tr>
			<tr align="center">
				<td><p>Your Name:</p></td>
				<td><input type="text" name="userName" required autocomplete="off"></td>
			</tr>
			<tr align="center">
				<td><p>Phone No:</p></td>
				<td><input type="text" name="phoNo" required autocomplete="off" maxlength="10" minlength="10"></td>
			</tr>
		</table>
		<table align="center">
			<tr>
				<th colspan="2"><h1>Enter Card Detail:</h1></th>
			</tr>
			<tr align="center">
				<td><p>Card number:</p></td>
				<td><input type="text" name="cardNo" required autocomplete="off" minlength="16" maxlength="16"></td>
			</tr>
			<tr align="center">
				<td><p>Card Expiry Date:</p></td>
				<td class="s">
					<select>
					<option>january</option>
					<option>fabuary</option>
					<option>march</option>
					<option>april</option>
					<option>may</option>
					<option>june</option>
					<option>july</option>
					<option>august</option>
					<option>september</option>
					<option>octomber</option>
					<option>november</option>
					<option>December</option>
				</select>
				<select>
					<option>21</option>
					<option>22</option>
					<option>23</option>
					<option>24</option>
					<option>25</option>
					<option>26</option>
					<option>27</option>
				</select></td>
			</tr>
			<tr align="center">
				<td><p>Cvv:</p></td>
				<td><input type="text" name="cvvNo" required autocomplete="off" minlength="3" maxlength="3"></td>
			</tr>
		</table>
		<div class="link">
			<a href="single.php?mid=<?php echo $row['m_id'] ?>"><p><-Go Back</p></a>
			<input class="btn" type="submit" name="submit" value="Continue Booking">	
		</div>
	</form>

	<?php

		}

	?>

	
</body>
</html>