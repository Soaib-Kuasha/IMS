<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>



<?php

include "./papers_view.php";

?>

<center>
<h1>Thanks for purchasing!</h1>
</center>

<?php
        $sql="SELECT * FROM research";
    $result_set=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result_set))
    {
    ?>
       
      <center><a href="../Admin/uploads/<?php echo $row['file'] ?> " target="_blank">Click Here to View/Download the File!</a></center>

   <?php
    }
?>


   
</body>
</html>