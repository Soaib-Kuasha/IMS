<?php

include '../dbconfig.php';
include './admin_dashboard.php';

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
				<th>Student username</th>
				<th>Applied In</th>
				<th>CV</th>
				<th>CV Type</th>
				<th>CV Size(KB)</th>
				<th>View</th>
			</tr>
		</thead>

		<tbody>
            <?php
        $sql="SELECT * FROM tbl_uploads";
    $result_set=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result_set))
    {
    ?>
        <tr>
        <td><?php echo $row['student_name'] ?></td>
        <td><?php echo $row['Company_name'] ?></td>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="./uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
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