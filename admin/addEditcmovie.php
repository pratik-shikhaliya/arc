<?php

	include('sidebar.php');

	if (isset($_GET['id'])) {

    include_once '../DBConfig.php';

    extract($_GET);

    $sql = "select * from current_movie where m_id=$id";

    $result = mysqli_query($con,$sql);

    $row = mysqli_fetch_assoc($result);

    if(!$row){
      	$_SESSION['err'] = "No record found to edit";
      	header("Location: listcMovie.php");
    }
  }
?>

<div class="add_movie" align="center">
	<form action="con_addEditcMovie.php" enctype="multipart/form-data" method="POST">
		<table>
			<tr>
				<h1 align="center">Add Current Movie</h1>
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
				<td>Description:</td><td><textarea name="m_desc" required><?php if(isset($_GET['id'])){echo($row['m_desc']);} ?></textarea><br></td>
			</tr>
			<tr align="center">
				<td>Seats:</td><td><input type="text" name="seats" required value="<?php if(isset($_GET['id'])){echo($row['seats']);} ?>" autocomplete="off"><br></td>
			</tr>
			<tr align="center">
				<td>Price:</td><td><input type="text" name="price" required value="<?php if(isset($_GET['id'])){echo($row['price']);} ?>" autocomplete="off"><br></td>
			</tr>
			
			<tr align="center">
				<td>Movie Poster:</td><td><input type="file" name="m_img" required></td>
			</tr>

			<tr align="center">
				<td>Date:</td><td><input type="datetime-local" name="date" required></td>
			</tr>

			

		</table>
		<input class="btn" type="submit" name="" value="SUBMIT">
	</form>
</div>