<?php 
	include('sidebar.php');
 ?>
<form action="../query.php" method="POST">
<div class="table" id="dashboard">
<table align="center">
	<tr>
		<h1 align="center"> New Admin User <h1>
	</tr>
	<tr>
		<td>User Email :</td>
		<td><input type="text" name="a_email" required autocomplete="off"></td>
	</tr>
	<tr>
		<td>Password :</td>
		<td><input type="password" name="a_pass" required autocomplete="off"></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input class="btn" type="submit" name="addAdmin" value="Add New Admin">
	</tr>
</table>
</div>
</form>