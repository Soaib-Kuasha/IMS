<?php
	require_once '../dbconfig.php';
	if(ISSET($_POST['update_activity'])){
		$title = $_POST['username'];
		$description = $_POST['email'];
		$start = $_POST['password'];
		$end = $_POST['cpassword'];

		$pass = password_hash($start, PASSWORD_BCRYPT);
        $cpass = password_hash($end, PASSWORD_BCRYPT);

		$con->query("UPDATE `uregistration` SET `username` = '$title', `email` = '$description', `password` = '$pass', `cpassword` = '$cpass'  WHERE `ID` = '$_REQUEST[ID]'");
		header('location:student.php');
	}
?>