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
		<button type = "button" id = "add_activity" class = "btn btn-success"> Add Paper</button>
		<button style = "display:none;" type = "button" id = "cancel_activity" class = "btn btn-warning"> Cancel</button>
		<br><br>

		<form method = "POST" id = "act_form" style = "display:none;" action = "add_research.php" enctype="multipart/form-data">	
						
			<label>Writter name</label>
			<input type = "text" class = "form-control" name = "rname" required = "required"/>

			<label>Researched On</label>
			<input type = "text" class = "form-control" name = "title" required = "required"/>
		
	
			<label>Description</label>
			<textarea name = "description" style = "height:100px; resize:none;" class = "form-control" required = "required"></textarea>
		
	
			<label>Published on</label>
			<input type = "date" style = "width:41%;" class = "form-control"  name = "start" required = "required"/>


            <label>File upload</label>
            <input type="file" class = "form-control" name="file"/>
	
		
			<br />
	
			<button class = "btn btn-primary form-control" name = "save_activity" style="color: black; background-color:antiquewhite"> Save</button>


			<br><br><hr><br><br>
		</form>	

		
	
		<table id = "table" class = "table table-bordered"  style="background-color: white; float:left">
			<thead>
				<tr>
					<th>Written By</th>
					<th>Researched On</th>
					<th>Short description</th>
					<th>Published On</th>
					<th>File</th>
					<!-- <th>Action</th> -->
				</tr>
			</thead>

			<tbody>
				<?php
				$act_query = $con->query("SELECT * FROM `research`");
				while($act_fetch = $act_query->fetch_array()){
				?>
				<tr>
					<td><?php echo $act_fetch['writter']?></td>
					<td><?php echo $act_fetch['topic']?></td>
					<td><?php echo $act_fetch['short_description']?></td>
				

					<td><?php echo "<label class = 'text-info'>".date("M d, Y", strtotime($act_fetch['published_date']))."</label>"?></td>
					
                    <td><?php echo $act_fetch['file']?></td>
	
					<!-- <td><center><a href = "#" data-toggle = "modal" data-target = "#delete_activity" name = "<?php echo $act_fetch['ID']?>" class = "btn btn-danger activity_id" style='background-color:gray; border:none'>Delete</a></center></td> -->
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


	
</body>	
<script src = "../js/jquery-3.1.1.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/jquery.dataTables.min.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		$('#table').DataTable();
	})
</script>

<script src = "../js/script.js"></script>
</html>