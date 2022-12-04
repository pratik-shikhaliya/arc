<?php
	session_start();
	include("DBConfig.php");

	$sql1 = " select * from current_movie WHERE m_id= '" . $_SESSION['m_id'] . "' "  ;
	$result = mysqli_query($con,$sql1);

	$row = mysqli_fetch_assoc($result);		

	if(isset($_REQUEST['submit'])){
		
		if(!$row['seats']==0 && $row['seats']>=$_SESSION['seatBooking']){
			extract($_POST);

			$sql = "INSERT INTO booking(bookId, movieName, userName, phoNo, cardNo, moviePrice, seatBooking, date, total) VALUES (NULL,'$movieName','$userName','$phoNo','$cardNo','$moviePrice','$seatBooking','$date','$total')";

			$temp = (int)$row['seats'] - (int)$_SESSION['seatBooking'] ;

			$sql2 = "UPDATE current_movie SET seats='$temp' WHERE m_id='" . $_SESSION['m_id'] . "' ";

   			mysqli_query($con,$sql2);

			mysqli_query($con,$sql);

			if(mysqli_errno($con)){

				$_SESSION['err'] = "Opps... some error occurrerd ";
					header("Location: checkout.php");
			}
			else{

				$_SESSION['msg'] = "Ticket booked successfully";

				$sql4 = "SELECT bookId FROM booking ORDER BY bookId DESC LIMIT 1;";

				$result4 = mysqli_query($con,$sql4);

				$row4 = mysqli_fetch_assoc($result4); 

				$_SESSION['bookId'] = $row4['bookId'];
				header("Location: success.php");
			}

		}
		
	}

	


?>