<?php
	require_once '../dbconfig.php';

	$query = mysqli_query($con, "SELECT * FROM `uregistration`");

	while($fetch = mysqli_fetch_array($query)){
		mysqli_query($con, "INSERT INTO `archive_student` VALUES('', '$fetch[username]', '$fetch[email]', '$fetch[password]')");
		mysqli_query($con, "DELETE FROM `uregistration` WHERE `ID` = '$_REQUEST[ID]'");			
	}
 
	

	header('location:student.php');
?>