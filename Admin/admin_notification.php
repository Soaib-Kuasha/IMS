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
            width: 50%;
            float: left;
            margin-left: 10%;

        /* #table{
            margin-left: 20%;
            margin-right: 20%;
        } */
    }
        .container {
  border: 2px solid #ccc;
  padding: 10px;
  width: 50em;
}
			
		</style>
	</head>
<body>
    
	<br><br><br><br><br>

		<table id = "table" class = "table table-bordered"  style="background-color: white; float:left;">
			<thead>
				
					<th>Name</th>
					<th>Messages</th>
					<th>Recieved In</th>
			
			</thead>

			<tbody>
				<?php
				$act_query = $con->query("SELECT * FROM `contactus`");
				while($act_fetch = $act_query->fetch_array()){
				?>
				<tr>
                
					<td><a href="#" title="CLICK TO REPLY"><?php echo $act_fetch['name']?></a></td>
					<td>
                   

                    <p class="container" ><?php echo $act_fetch['message']?></p>



                    </td>
					<td><?php echo "<label class = 'text-info'>".date("M d, Y", strtotime($act_fetch['created_date']))."</label>"?></td>
			
	
				</tr>
				<?php
					}
				?>
			</tbody>

		</table>
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