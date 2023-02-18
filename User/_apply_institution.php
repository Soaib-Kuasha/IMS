<?php

include '../dbconfig.php';
include './user_dashboard.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />

	<title>Document</title>

	<style>
		div{
			background-color: white;
			/* float: left; */
			/* margin-left: 10%; */
		}

		th,td{
			border: 1px solid black;
		}

		a:hover{
			text-decoration: none;
		}

		a#v{
			border: none;
			border-radius: 5px;
			padding: 8px;
			margin: 5px;
			background-color: black;
			color: white;
		}
	
	</style>
</head>
<body>

<hr>

<div style="float: left; margin-left: 5%;">

	<table id = "table" class = "table table-bordered"  style="background-color: white; float:left">
		<thead>
			<tr>
				<th>Job_name</th>
				<th>Job_Description</th>
				<th>Start</th>
				<th>End</th>
				<th>Location</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody>
			<?php
			$act_query = $con->query("SELECT * FROM `activity`");
			while($act_fetch = $act_query->fetch_array()){
			?>
			<tr>
				<td><?php echo $act_fetch['title']?></td>
				<td><?php echo $act_fetch['description']?></td>
				<td><?php echo "<label class = 'text-info'>".date("M d, Y", strtotime($act_fetch['start']))."</label>"?></td>
				<td><?php echo "<label class = 'text-info'>".date("M d, Y", strtotime($act_fetch['end']))."</label>"?></td>
				<td><a href="./locationU.php">Click Here</a></td>
				<td><center><a href = "./upload_cv.php"?activity_id=<?php echo $act_fetch['activity_id']?> id="v">Apply</a> </center></td>

			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
</div>


</body>	
<script src = "../js/jquery-3.1.1.js"></script>
<script src = "../js/jquery.dataTables.min.js"></script>
<script type = "text/javascript">
$(document).ready(function(){
	$('#table').DataTable();
})
</script>
	
</body>
</html>