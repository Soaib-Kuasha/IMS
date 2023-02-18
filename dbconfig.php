<?php 

    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "ims";

    $con = mysqli_connect($server, $user, $password, $db);

    if($con){
        ?>
            <script>
                // alert("Database connection working Fine!");
            </script>
        <?php
    }else{
        ?>
            <script>
                alert("No Connection with the Database!");
            </script>
        <?php
    }
?>