<?php
	require_once '../dbconfig.php';
	if(ISSET($_POST['save_activity'])){
		$rname = $_POST['rname'];
		$topic = $_POST['title'];
		$description = $_POST['description'];
		$start = $_POST['start'];

        $file = rand(1000,100000)."-".$_FILES['file']['name'];
        $file_loc = $_FILES['file']['tmp_name'];

        $folder="./uploads/";
        move_uploaded_file($file_loc,$folder.$file);


		$con->query("INSERT INTO `research` VALUES('', '$rname', '$topic', '$description', '$start', '$file')");
		header('location: research.php');
	}
?>