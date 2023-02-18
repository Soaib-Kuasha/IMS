<?php
	require_once '../dbconfig.php';


 
	$query = mysqli_query($con, "SELECT * FROM `activity`");

	while($fetch = mysqli_fetch_array($query)){
		mysqli_query($con, "INSERT INTO `archive` VALUES('', '$fetch[title]', '$fetch[description]', '$fetch[start]', '$fetch[end]')");
		mysqli_query($con, "DELETE FROM `activity` WHERE `activity_id` = '$_REQUEST[activity_id]'");		
	}

	header('location:activity.php');
?>