<!DOCTYPE html>
<?php
	require_once '../dbconfig.php';
	include './admin_dashboard.php';
?>
<html lang = "eng">
	<head>
		<title></title>
		<meta charset = "UTF-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />

		<style>
			#x{
				text-decoration: none;
				border: none;
				background-color: black;
				color: white;
				padding: 10px;
				margin-left: 5%;
				
			}

			form{
				margin-left: 5%;
				font-weight: bold;
				font-family: monospace;
				font-size: large;
			}

			

			button{
				text-decoration: none;
				border: none;
				background-color: teal;
				color: white;
				padding: 10px;
				
			}
		</style>
	</head>
<body>

	<br><br><br>
	<a href = "student.php" id="x"> Back</a> <br><br><br><br>
	
	<?php
		$q_activity = $con->query("SELECT * FROM `uregistration` WHERE `ID` = '$_REQUEST[ID]'");
		$f_activity = $q_activity->fetch_array();
	?>

	<form method = "POST" action = "edit_student_query.php?ID=<?php echo $f_activity['ID']?>">	
		
		<label>Username</label>
		<input type = "text" value = "<?php echo $f_activity['username']?>" class = "form-control" name = "username" />
		<br><br><br>
	
		<label>Email</label><br>
		<input type = "email" value = "<?php echo $f_activity['email']?>" class = "form-control" name = "email" />
        <br><br><br>

		<label>Password</label>
		<input type = "password" value = "<?php echo $f_activity['password']?>" style = "width:41%;" class = "form-control"  name = "password"/>
		<br><br><br>
		<label>Confirm Password</label>
		<input type = "password" value = "<?php echo $f_activity['cpassword']?>" style = "width:41%;" class = "form-control"  name = "password"/>
		<br><br><br>

	
		<button name = "update_activity">Save Changes</button>
	
	</form>	

</body>	

</html>