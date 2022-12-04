<?php include('sidebar.php'); ?>

<div class="add_movie" align="center">
	<form>
		<table class="listtable" id="tablespace" border="1" width="1000">
			<tr>
				<h1 align="center">Now Showing</h1>
				<a href="addEditcMovie.php" class="btn btn-success" style="float: center;">Add Current Movie</a>

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
				<th>Movie id</th>
				<th>Movie Name</th>
				<th>Description</th>
				<th>Seats</th>
				<th>Price</th>
				<th>Image</th>
				<th colspan="2">Action</th>
			</tr>

			<?php

				include_once '../DBConfig.php';

				$sql = "select * from current_movie";

                $result = mysqli_query($con,$sql);

                while($row = mysqli_fetch_assoc($result)){

			?>
			<tr>
				<td align="center"><?php echo($row['m_id']); ?></td>
				<td align="center"><?php echo($row['m_name']); ?></td>
				<td align="center"><?php echo($row['m_desc']); ?></td>			
				<td align="center"><?php echo($row['seats']); ?></td>		
				<td align="center"><?php echo($row['price']); ?></td>				
				<td align="center"><img src='../poster/<?php echo($row['m_img'])  ?>' width=100px height=100px></td>
				<td align="center"><a href="addEditcMovie.php?id=<?php echo($row['m_id']); ?>" ><font color="#00a2ef">Edit</font></a> </td>
				<td align="center"><a href="deleteQuery.php?cmovieId=<?php echo($row['m_id']); ?>" ><font color="#00a2ef"> Delete</font></a> </td>
			</tr>

			<?php

				}
			?>
		</table>
		
	</form>
</div>