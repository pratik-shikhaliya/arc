<?php

	include('sidebar.php');

	if (isset($_GET['s_id'])) {

    include_once '../DBConfig.php';

    extract($_GET);

    $sql = "select * from slider where s_id=$s_id";

    $result = mysqli_query($con,$sql);

    $row = mysqli_fetch_assoc($result);

    if(!$row){
      	$_SESSION['err'] = "No record found to edit";
      	header("Location: listslider.php");
    }
  }
?>

<div class="add_movie" align="center">
	<form action="con_editslider.php" enctype="multipart/form-data" method="POST">
		<table>
			<tr>
				<h1 align="center">Edit slider image</h1>
			</tr>
				<?php 
					if(isset($_GET['s_id'])){ 

				?>
                	<input type="hidden" name="s_id" value="<?php echo($row['s_id']); ?>" >
            	<?php 
            	
            		} 

            	?>
			<tr align="center">
				<td>Choose Slider Image:</td><td><input type="file" name="s_img" required></td>
			</tr>

		</table>
		<input class="btn" type="submit" name="submit" value="SUBMIT">
	</form>
</div>