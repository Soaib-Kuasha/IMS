<?php
	require_once '../dbconfig.php';
	if(ISSET($_POST['save_activity'])){
		$title = $_POST['title'];
		$description = $_POST['description'];
		$start = $_POST['start'];
		$end = $_POST['end'];
		$month = date("M", strtotime($_POST['start']));
		$year = date("Y", strtotime($_POST['start']));
		$con->query("INSERT INTO `activity` VALUES('', '$title', '$description', '$start', '$end', '$month', '$year')");
		header('location: activity.php');
	}
?>