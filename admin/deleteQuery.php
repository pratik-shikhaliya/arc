<?php
	
	session_start();
	include '../DBConfig.php';

	//delete movie

	if(isset($_GET['movieId'])){

        extract($_GET);

		$sql = "DELETE FROM movie WHERE m_id = $movieId";

		mysqli_query($con,$sql);

		if(mysqli_errno($con)){
			$_SESSION['err'] = "Opps... some error occurrerd when deleting the Movie";
			header("Location: listMovie.php");
		}
		else{
			$_SESSION['msg'] = "Movie deleted successfully";
			header("Location: listMovie.php");
		}
	}

	//delete current movie

	if(isset($_GET['cmovieId'])){

        extract($_GET);

		$sql = "DELETE FROM current_movie WHERE m_id = $cmovieId";

		mysqli_query($con,$sql);

		if(mysqli_errno($con)){
			$_SESSION['err'] = "Opps... some error occurrerd when deleting the current Movie";
			header("Location: listcMovie.php");
		}
		else{
			$_SESSION['msg'] = "Movie deleted successfully";
			header("Location: listcMovie.php");
		}
	}

	// delete user


	if(isset($_GET['userId'])){

        extract($_GET);

		$sql = "DELETE FROM user WHERE uid = $userId";

		mysqli_query($con,$sql);

		if(mysqli_errno($con)){
			$_SESSION['err'] = "Opps... some error occurrerd when deleting the User";
			header("Location: listUser.php");
		}
		else{
			$_SESSION['msg'] = "User deleted successfully";
			header("Location: listUser.php");
		}
	}



	//delete feedback

	if(isset($_GET['feedbackId'])){

        extract($_GET);

		$sql = "DELETE FROM feedback WHERE f_id = $feedbackId";

		mysqli_query($con,$sql);

		if(mysqli_errno($con)){
			$_SESSION['err'] = "Opps... some error occurrerd when deleting the feedback";
			header("Location: feedback.php");
		}
		else{
			$_SESSION['msg'] = "feedback deleted successfully";
			header("Location: feedback.php");
		}
	}

	// delete booking record


	if(isset($_GET['bookId'])){

        extract($_GET);

		$sql = "DELETE FROM booking WHERE bookId = $bookId";

		mysqli_query($con,$sql);

		if(mysqli_errno($con)){
			$_SESSION['err'] = "Opps... some error occurrerd when deleting the Record";
			header("Location: listUser.php");
		}
		else{
			$_SESSION['msg'] = " deleted successfully";
			header("Location: listbooking.php");
		}
	}

?>