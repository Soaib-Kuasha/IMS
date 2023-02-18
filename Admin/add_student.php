<?php
	require_once '../dbconfig.php';
	if(ISSET($_POST['save_activity'])){
		$id = $_POST['ID'];
		$username = $_POST['username'];
		$email = $_POST['email'];

        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
                
                
        $pass = password_hash($password, PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword, PASSWORD_BCRYPT);


		$con->query("INSERT INTO uregistration(username, email, password, cpassword) VALUES ('$username','$email','$pass','$cpass')");
		header('location: student.php');
	}
?>