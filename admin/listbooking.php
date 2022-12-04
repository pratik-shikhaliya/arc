<?php
	 include('sidebar.php'); 
?>


<div class="add_movie" align="center">
	<form>
		<table border="1" id="tablespace">
			<tr>
				<h1 align="center">Booking Record</h1>

				<!-- to print error msg -->
				<?php
                      if(isset($_SESSION['err'])){
                        ?>  
                        <span style="color: red"><?php echo($_SESSION['err']); ?></span>
                        <?php
                        unset($_SESSION['err']);
                      }
                      else if(isset($_SESSION['msg'])){
                        ?>  
                        <span style="color: green"><?php echo($_SESSION['msg']); ?></span>
                        <?php
                        unset($_SESSION['msg']);
                      }
              	?>
              	<!-- end print error msg -->

			</tr>
			<tr>
				<th>Booking id</th>
				<th>Movie Name</th>
				<th>User Name</th>
				<th>Phone No</th>
				<th>Card No</th>
				<th>Price</th>
				<th>Seats</th>
				<th>Date</th>
				<th>Total</th>
				<th>Action</th>
			</tr>

			<?php

				include_once '../DBConfig.php';

				$sql = "select * from booking";

                $result = mysqli_query($con,$sql);

                while($row = mysqli_fetch_assoc($result)){

			?>
			<tr>
				<td align="center"><?php echo($row['bookId']); ?></td>
				<td align="center"><?php echo($row['movieName']); ?></td>
				<td align="center"><?php echo($row['userName']); ?></td>				
				<td align="center"><?php echo($row['phoNo']); ?></td>
				<td align="center"><?php echo($row['cardNo']); ?></td>
				<td align="center"><?php echo($row['moviePrice']); ?></td>
				<td align="center"><?php echo($row['seatBooking']); ?></td>				
				<td align="center"><?php echo($row['date']); ?></td>
				<td align="center"><?php echo($row['total']); ?></td>
				<td align="center"><a href="deleteQuery.php?bookId=<?php echo($row['bookId']); ?>"  > <font color="#00a2ef">Delete </font></a> </td>
			</tr>

			<?php

				}
			?>
		</table>
		
	</form>
</div>