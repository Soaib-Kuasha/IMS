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
	<a href = "activity.php" id="x"> Back</a> <br><br><br><br>
	
	<?php
		$q_activity = $con->query("SELECT * FROM `activity` WHERE `activity_id` = '$_REQUEST[activity_id]'");
		$f_activity = $q_activity->fetch_array();
	?>

	<form method = "POST" action = "edit_activity_query.php?activity_id=<?php echo $f_activity['activity_id']?>">	
		
		<label>Title</label>
		<input type = "text" value = "<?php echo $f_activity['title']?>" class = "form-control" name = "title" />
		<br><br><br>
	
		<label>Description</label><br>
		<textarea name = "description" style = "height:100px; resize:none; width:60%" class = "form-control"><?php echo $f_activity['description']?></textarea>
		<br><br><br>

		<label>Start</label>
		<input type = "date" value = "<?php echo $f_activity['start']?>" style = "width:41%;" class = "form-control"  name = "start"/>
		<br><br><br>
		<label>End</label>
		<input type = "date" value = "<?php echo $f_activity['end']?>" style = "width:41%;" class = "form-control"  name = "end"/>
		<br><br><br>

	
		<button name = "update_activity">Save Changes</button>
	
	</form>	

</body>	

</html>