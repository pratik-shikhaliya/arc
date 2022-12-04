<?php

    session_start();
	include("DBConfig.php");
	//REGISTER

		    if(isset ($_POST['signup']))
			{
				$name =mysqli_real_escape_string($con, $_POST['name']);

				$email =mysqli_real_escape_string($con, $_POST['email']);

				$phno =mysqli_real_escape_string($con, $_POST['phno']);

				$pass =mysqli_real_escape_string($con, $_POST['pass']);

				$cpass =mysqli_real_escape_string($con, $_POST['cpass']);

				$sql = "select * from user where email='$email'";

				$result = mysqli_query($con,$sql);

				$row = mysqli_fetch_assoc($result);

				if($row)
				{
					echo "<script>alert('Email Id is Alredy Taken. Try Another Email Id!');window.location.href='signup.php'</script>";
				}
				else
				{
					if(strlen($pass) >= 6)
					{
						if($pass==$cpass)
						{
							if(is_numeric($phno) && strlen($phno)==10)
							{
								$sql = "insert into user values(null, '$name', '$phno', '$email', '$pass')";

								$result = mysqli_query($con,$sql);

								echo "<script>alert('Congratulations !! you are register to my website');window.location.href='login.php'</script>";
							}		
							else
							{
								echo "<script>alert('Phone Number Should be Numeric and must be 10');window.location.href='signup.php'</script>";
							}
						}
						else
						{
							echo "<script>alert('password should be match');window.location.href='signup.php'</script>";
						}
					}
					else
					{
						echo "<script>alert('password should be more than 6 character');window.location.href='signup.php'</script>";
					}
				}
			}

	// LOGIN
			else if(isset ($_POST['login'])) 
			{
				$e =mysqli_real_escape_string($con, $_POST['email']);

				$p =mysqli_real_escape_string($con, $_POST['pass']);

				$sql = "select * from user where email='$e' and binary pass='$p'";

				$result = mysqli_query($con,$sql);

				$row = mysqli_fetch_assoc($result);

				if($row){

					$_SESSION['un'] = $row['name'];
					$_SESSION['ue'] = $row['email'];
					echo "<script>alert('welcome to our site');window.location.href='index.php' </script>";
				}
				else{
					echo "<script>alert('Email or Password does not match.');window.location.href='login.php' </script>";
				}
			}

	// ADMIN LOGIN

			else if(isset ($_POST['adminLogin'])) 
			{
				$e =mysqli_real_escape_string($con, $_POST['email']);

				$p =mysqli_real_escape_string($con, $_POST['pass']);

				$sql = "select * from admin where a_email='$e' and binary a_pass='$p'";

				$result = mysqli_query($con,$sql);

				$row = mysqli_fetch_assoc($result);

				if($row){

					
					$_SESSION['aue'] = $row['a_email'];
					echo "<script>alert('welcome to the admin site');window.location.href='admin/index.php' </script>";
				}
				else{
					echo "<script>alert('Email or Password does not match.');window.location.href='admin/alogin.php' </script>";
				}
			}

	//ADMIN REGISTER


			elseif (isset ($_POST['addAdmin'])) {
				
				$e =mysqli_real_escape_string($con, $_POST['a_email']);

				$p =mysqli_real_escape_string($con, $_POST['a_pass']);

				$sql = "select * from admin where a_email='$e' and binary a_pass='$p'";

				$result = mysqli_query($con,$sql);	

				$row = mysqli_fetch_assoc($result);

				if($row)
				{
					echo "<script>alert('Email Id is Alredy Taken. Try Another Email Id!');window.location.href='admin/index.php'</script>";
					
				}
				else
				{
					$sql = "insert into admin values(null, '$e', '$p')";

					$result = mysqli_query($con,$sql);

					echo "<script>alert('Congratulations !! you created new admin for this website.');window.location.href='admin/index.php'</script>";
				}
			}			


	//feedback insert into database


			elseif (isset ($_POST['feedback'])) {
				
				extract($_POST);

				$sql = "INSERT INTO feedback (f_id, name, experince, suggestion) VALUES (NULL, '$name', '$experince', '$suggestion')";

				$result = mysqli_query($con,$sql);

				echo "<script>alert('Thanks for submit your feedback.');window.location.href='feedback.php'</script>";

			}
			

?>