<?php

	session_start();

	include_once '../DBConfig.php';

	extract($_POST);

	$m_img = $_FILES['m_img']['name'];

	if(isset($m_id))
	{

		if (!empty($m_img)) 
		{
			
			$sql = "UPDATE movie SET m_name = '$m_name', m_des = '$m_des', m_img = '$m_img' WHERE m_id = $m_id";
		}
		else
		{

			$sql = "UPDATE movie SET m_name = '$m_name', m_des = '$m_des' WHERE m_id = $m_id"; 
		}

	}
	else
	{

		$sql = "INSERT INTO movie (m_id, m_name, m_des, m_img) VALUES (NULL, '$m_name', '$m_des', '$m_img')";

	}


	mysqli_query($con,$sql);

	if(mysqli_errno($con))
	{

		if(isset($m_id))
		{
			$_SESSION['err'] = "Opps... some error occurrerd when Editing the Movie";
			header("Location: listMovie.php");
		}
		else
		{
			$_SESSION['err'] = "Opps... some error occurrerd when adding the Movie";
			header("Location: listMovie.php");
		}
	}
	else{
		if(isset($m_id))
		{
			move_uploaded_file($_FILES['m_img']['tmp_name'], "../poster/$m_img");
			$_SESSION['msg'] = "Movie Edited successfully";
			header("Location: listMovie.php");
		}
		else
		{
			move_uploaded_file($_FILES['m_img']['tmp_name'], "../poster/$m_img");
			$_SESSION['msg'] = "Movie added successfully";
			header("Location: listMovie.php");
		}
	}





?>