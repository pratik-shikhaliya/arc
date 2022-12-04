<?php

	include('sidebar.php');

	if (isset($_GET['id'])) {

    include_once '../DBConfig.php';

    extract($_GET);

    $sql = "select * from movie where m_id=$id";

    $result = mysqli_query($con,$sql);

    $row = mysqli_fetch_assoc($result);

    if(!$row){
      	$_SESSION['err'] = "No record found to edit";
      	header("Location: listMovie.php");
    }
  }
?>

<div class="add_movie" align="center">
	<form action="con_addEditMovie.php" enctype="multipart/form-data" method="POST">
		<table>
			<tr>
				<h1 align="center">Add Movie</h1>
			</tr>
			<tr>
				<?php     

              		if(isset($_GET['id'])){

              	?>

            	<td>
                	<input type="hidden" name="m_id" value="<?php echo($row['m_id']); ?>" >
              	</td>
            	<?php

              		}
 
	            ?>
			</tr>
			<tr align="center">
				<td>Movie Name:</td><td><input type="text" name="m_name" required value="<?php if(isset($_GET['id'])){echo($row['m_name']);} ?>" autocomplete="off"><br></td>
			</tr>
			<tr align="center">
				<td>Description:</td><td><textarea name="m_des" required><?php if(isset($_GET['id'])){echo($row['m_des']);} ?></textarea><br></td>
			</tr>
			<tr align="center">
				<td>Movie Poster:</td><td><input type="file" name="m_img" required></td>
			</tr>

		</table>
		<input class="btn" type="submit" name="" value="SUBMIT">
	</form>
</div>