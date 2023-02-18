<?php
	require_once '../dbconfig.php';


	mysqli_query($con, "DELETE FROM `archive` WHERE `ID` = '$_REQUEST[ID]'");		


	header('location:archive_institution.php');
?>