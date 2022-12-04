<?php

	session_start();

	include_once '../DBConfig.php';

	extract($_POST);

	$s_img = $_FILES['s_img']['name'];

	if(isset($s_id))
	{
			
			$sql = "UPDATE slider SET s_img='$s_img' WHERE s_id=$s_id";
		
	}

	mysqli_query($con,$sql);

	if(mysqli_errno($con))
	{
		$_SESSION['err'] = "Opps... some error occurrerd when Editing the slider";
		header("Location: listslider.php");
	}
	else{
		move_uploaded_file($_FILES['s_img']['tmp_name'], "../img/$s_img");
		$_SESSION['msg'] = "slider Edited successfully";
		header("Location: listslider.php");
		
	}

?>