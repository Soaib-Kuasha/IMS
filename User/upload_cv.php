<!DOCTYPE html>
<html>
<head>
<title>File Upload and view With PHP and MySql</title>

<style>
form{
            border: 3px solid gray;
            border-radius: 2%;
            width: 50%;
            margin-left: 25%;
            text-align: center;
            
            font-family: verdana;
            color: black;
            /* height: 70vh; */
        }

        input[type=text], input[type=email], textarea{
            width: auto;
            padding: 12px 20%;
            margin: 8px 0;
            box-sizing: border-box;
            border: 3px solid #ccc;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            outline: none;
            border-radius: 2%;
        }

        input[type=text]:focus, input[type=email]:focus {
            border: 3px solid #555;
            border-radius: 5%;
        }

        input[type=submit]{
            padding: 3%;
            margin-bottom: 5px;
            font-weight: 600; 
            background-color: black;
            color: white;  
            border: none; 
        }
    </style>
</head>
<body>

<?php
// include "../dbconfig.php";
// include "./user_dashboard.php";

// $act_query = $con->query("SELECT * FROM `activity`");

// while($act_fetch = $act_query->fetch_array()){

//     ?> 
<!-- //     <h1 style="text-align: center;">You are applying for </h1> -->
//     <?php
//     echo '<br><br><h2 style="text-align: center;color:green">'.$act_fetch['title'].'<h2><br><br>';

// }

?>




<h2 style="text-align: center;font-family:monospace">UPLOAD YOUR CV</h2>
<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" />
<button type="submit" name="btn-upload">upload</button>
</form>
</body>
</html>