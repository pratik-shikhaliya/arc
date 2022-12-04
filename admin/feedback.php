<?php
	 include('sidebar.php'); 
?>


<div class="add_movie" align="center">
	<form>
		<table border="1">
			<tr>
				<h1 align="center">List Feedback</h1>

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
				<th>Feedback id</th>
				<th>User Name</th>
				<th>User Experience</th>
				<th>User Suggestion</th>
				<th>Action</th>
			</tr>

			<?php

				include_once '../DBConfig.php';

				$sql = "select * from feedback";

                $result = mysqli_query($con,$sql);

                while($row = mysqli_fetch_assoc($result)){

			?>
			<tr>
				<td align="center"><?php echo($row['f_id']); ?></td>
				<td align="center"><?php echo($row['name']); ?></td>
				<td align="center"><?php echo($row['experince']); ?></td>				
				<td align="center"><?php echo($row['suggestion']); ?></td>
				<td align="center"><a href="deleteQuery.php?feedbackId=<?php echo($row['f_id']); ?>"  ><font color="#00a2ef">Delete </font></a> </td>
			</tr>

			<?php

				}
			?>
		</table>
		
	</form>
</div>