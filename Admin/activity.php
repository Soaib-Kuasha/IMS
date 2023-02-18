<?php


include '../dbconfig.php';
include './admin_dashboard.php';

?>



<!DOCTYPE html>

<html lang = "eng">
	<head>
		<title></title>
		<meta charset = "UTF-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
	
	
		<style>

		
		#add_activity, #cancel_activity{
			background-color: black;
			border: none;
		
		}
		
		a:hover{
			text-decoration: none;
		}

		#act_form{
			float: left;
			width: 60%;			
		}

		.btn btn-warning{
			background-color: black;
		}
		.panel-default {
    		border: none;
		}

		/* div{
			float: left;
			background-color: white;
			margin-left: 5%;
		} */
		hr{
			background-color: black;
			border: 2px solid black;
			width: 100%;
		}

		div{
			background-color: white;
		}		
			
		</style>
	</head>
<body>

	<br><br>

	<div style="float: left;background-color:white;margin-left:5%">
		<button type = "button" id = "add_activity" class = "btn btn-success"> Add job</button>
		<button style = "display:none;" type = "button" id = "cancel_activity" class = "btn btn-warning"> Cancel</button>
		<br><br>

		<form method = "POST" id = "act_form" style = "display:none;" action = "add_activity.php">	
						
			<label>Title</label>
			<input type = "text" class = "form-control" name = "title" required = "required"/>
		
	
			<label>Description</label>
			<textarea name = "description" style = "height:100px; resize:none;" class = "form-control" required = "required"></textarea>
		
	
			<label>Start</label>
			<input type = "date" style = "width:41%;" class = "form-control"  name = "start" required = "required"/>
			<label>End</label>
			<input type = "date" style = "width:41%;" class = "form-control"  name = "end" required = "required"/>
		
			<br />
	
			<button class = "btn btn-primary form-control" name = "save_activity" style="color: black; background-color:antiquewhite"> Save</button>


			<br><br><hr><br><br>
		</form>	

		
	
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
					<td><a href="./location.php">Click Here</a></td>
					<td><center><a href = "edit_activity.php?activity_id=<?php echo $act_fetch['activity_id']?>" class = "btn btn-warning" style='background-color:black; border:none'> Update</a> <a href = "#" data-toggle = "modal" data-target = "#delete_activity" name = "<?php echo $act_fetch['activity_id']?>" class = "btn btn-danger activity_id" style='background-color:gray; border:none'>Delete</a></center></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>


	

	<div class = "modal fade" id = "delete_activity" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel" style="background-color: white;">
		<center><label class = "text-danger"'>Are you sure you want to delete this record?</label></center>
		<br />
		<center><a class = "btn btn-danger delete_activity" style='background-color:black;color:antiquewhite'> Yes!</a> <button type = "button" class = "btn btn-warning" data-dismiss = "modal" aria-label = "No" style='background-color:green;'> No</button></center>
	</div>

	<?php
	
	
	date_default_timezone_set("Etc/GMT+8");
	$query = mysqli_query($con, "SELECT * FROM `activity`");
	$date = date("Y-m-d");
	while($fetch = mysqli_fetch_array($query)){
		if(strtotime($fetch['end']) < strtotime($date)){
			mysqli_query($con, "INSERT INTO `archive` VALUES('', '$fetch[title]', '$fetch[description]', '$fetch[start]', '$fetch[end]')");
			mysqli_query($con, "DELETE FROM `activity` WHERE `activity_id` = '$fetch[activity_id]'");
		}elseif(strtotime($fetch['start'] > strtotime($fetch['end']))){
			?>
			
			<script>
				alert("Something went wrong!");
			</script>
			
			<?php
		}
	}
	
	
	?>

	
	
</body>	
<script src = "../js/jquery-3.1.1.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/jquery.dataTables.min.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();
	})
</script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('.activity_id').on('click', function(){
			$activity_id = $(this).attr('name');
			$('.delete_activity').on('click', function(){
				window.location = 'delete_activity.php?activity_id=' + $activity_id;
			});
		})
	});
</script>
<script src = "../js/script.js"></script>
</html>