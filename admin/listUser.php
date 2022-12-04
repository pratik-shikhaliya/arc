<?php
	 include('sidebar.php'); 
?>


<div class="add_movie" align="center">
	<form>
		<table border="1">
			<tr>
				<h1 align="center">List User</h1>

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
				<th>User id</th>
				<th>User Name</th>
				<th>User PhoneNo</th>
				<th>User Email</th>
				<th>Action</th>
			</tr>

			<?php

				include_once '../DBConfig.php';

				$sql = "select * from user";

                $result = mysqli_query($con,$sql);

                while($row = mysqli_fetch_assoc($result)){

			?>
			<tr>
				<td align="center"><?php echo($row['uid']); ?></td>
				<td align="center"><?php echo($row['name']); ?></td>
				<td align="center"><?php echo($row['phno']); ?></td>				
				<td align="center"><?php echo($row['email']); ?></td>
				<td align="center"><a href="deleteQuery.php?userId=<?php echo($row['uid']); ?>"  > <font color="#00a2ef">Delete </font></a> </td>
			</tr>

			<?php

				}
			?>
		</table>
		
	</form>
</div>