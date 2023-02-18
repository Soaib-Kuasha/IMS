<?php

include '../dbconfig.php';

$act_query = $con->query("SELECT * FROM `activity`");

while($act_fetch = $act_query->fetch_array()){

    $company_name = $act_fetch['title'];

}

$act_query1 = $con->query("SELECT * FROM `uregistration`");

while($act_fetch1 = $act_query1->fetch_array()){

    $student = $act_fetch1['username'];

}


if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="../Admin/uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);
 $con->query("INSERT INTO tbl_uploads(student_name,Company_name,file,type,size) VALUES('$student','$company_name','$file','$file_type','$file_size')");
   

 header('location:./upload_cv_successfull.php');
}

?>