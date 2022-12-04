<?php include('sidebar.php'); ?>

<div class="add_movie" align="center">
	<form>
		<table class="listtable" border="1" width="900">
			<tr>
				<h1 align="center">Slider</h1>
				

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
				<th>Slider id</th>
				<th>Slider Image</th>
				<th>Action</th>
			</tr>

			<?php

				include_once '../DBConfig.php';

				$sql = "select * from slider";

                $result = mysqli_query($con,$sql);

                while($row = mysqli_fetch_assoc($result)){

			?>
			<tr>
				<td align="center"><?php echo($row['s_id']); ?></td>				
				<td align="center"><img src='../img/<?php echo($row['s_img'])  ?>' width=100px height=100px></td>
				<td align="center"><a href="editslider.php?s_id=<?php echo($row['s_id']); ?>" ><font color="#00a2ef">Edit</font></a> </td>
			</tr>

			<?php

				}
			?>
		</table>
		
	</form>
</div>