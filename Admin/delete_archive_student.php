<?php
	require_once '../dbconfig.php';


	mysqli_query($con, "DELETE FROM `archive_student` WHERE `ID` = '$_REQUEST[ID]'");		


	header('location:archive_student.php');
?>