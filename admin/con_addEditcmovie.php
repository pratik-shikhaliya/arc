<?php

	session_start();

	include_once '../DBConfig.php';

	extract($_POST);

	$m_img = $_FILES['m_img']['name'];

	if(isset($m_id))
	{

		if (!empty($m_img)) 
		{
			
			$sql = "UPDATE current_movie SET m_name = '$m_name', m_desc = '$m_desc', seats = '$seats', price = '$price', m_img = '$m_img', date = '$date' WHERE m_id = $m_id" ;
		}
		else
		{

			$sql = "UPDATE current_movie SET m_name = '$m_name', m_desc = '$m_desc', seats = '$seats', price = '$price', m_img = '$m_img', date = '$date' WHERE m_id = $m_id" ; 
		}

	}
	else
	{

		$sql = "INSERT INTO current_movie (m_id, m_name, m_desc, seats, price,  m_img, date) VALUES (NULL, '$m_name', '$m_desc', '$seats', '$price', '$m_img', '$date' )";

	}


	mysqli_query($con,$sql);

	if(mysqli_errno($con))
	{

		if(isset($m_id))
		{
			$_SESSION['err'] = "Opps... some error occurrerd when Editing the Movie";
			header("Location: listcMovie.php");
		}
		else
		{
			$_SESSION['err'] = "Opps... some error occurrerd when adding the Movie";
			header("Location: listcMovie.php");
		}
	}
	else{
		if(isset($m_id))
		{
			move_uploaded_file($_FILES['m_img']['tmp_name'], "../poster/$m_img");
			$_SESSION['msg'] = "Movie Edited successfully";
			header("Location: listcMovie.php");
		}
		else
		{
			move_uploaded_file($_FILES['m_img']['tmp_name'], "../poster/$m_img");
			$_SESSION['msg'] = "Movie added successfully";
			header("Location: listcMovie.php");
		}
	}





?>