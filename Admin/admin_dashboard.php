<?php

session_start();

if(!isset($_SESSION['username'])){
    echo "You are logged out";
    header('location:./admin_login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <style>

            *{
                margin: 0%;
                padding: 0%;
            }

            ul {
            list-style-type: none;
            margin: 10px;
            /* padding: 5px; */
            overflow: visible;  
            /* background-color: rgb(91, 166, 158, 0.1); */
            font-weight: bold;
            font-family: monospace;
            font-size: large;
            }

            li {
            float: left;
            border-right: 2px solid black;
            border-left: 2px solid black;
            padding-left: 5px;
            padding-right: 5px;
            margin-right: 2%;
            text-align: center;
            }

            li a {
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            }

            li a:hover:not(.active) {
            background-color: black;
            color: #f3f3f3;
            }

            li a.active {
            color: white;
            background-color: black;
            }

            .x, .y{
                border-top: 3px solid black;
                border-radius: 10%;
                border-bottom: 3px solid black;         

            }
            
            div{
                float: right;margin-right: 2%; 
                /* background-color: rgb(52, 235, 201, 0.1);        */
            }

            img{
                border-radius: 100%;
                width: 10%;
                float: left;
                
            }


            li.dropdown {
                display: inline-block;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            }

            .dropdown-content a:hover {
                background-color: #f1f1f1;
            }

            .dropdown:hover .dropdown-content {
                display: block;
            }

            hr{
                border: 0;
                border-bottom: 3px solid black;
            }

        </style>

    </head>
    <body>   


        <ul>
            <li><a href="./_admin_home.php">Home</a></li>
            
            <!-- <li><a href="#">Student List</a></li> -->
            
            <!-- <li><a href="#">Inst. Info</a></li> -->
            
            <li class="dropdown">   
            
                <a href="#" class="dropbtn">   
                ADD/DELETE  
                </a>
                <div class="dropdown-content">
                    <a href="./activity.php">Institutions</a>
                    <a href="./student.php">Students</a>
                    <a href="./research.php">Research paper</a>
                </div>
        
            </li>

            <li class="dropdown">   
            
            <a href="#" class="dropbtn">   
            Notifications
            </a>
            <div class="dropdown-content">
                <a href="./admin_notification.php">INBOX</a>
                <a href="#">Not Added Yet!</a>
                <a href="#">Not Added Yet!</a>
            </div>

            </li>

            
            <li class="dropdown">   
            
            <a href="#" class="dropbtn">   
            Others 
            </a>
            <div class="dropdown-content">
                <a href="./archive_institution.php">Archive Institution</a>
                <a href="./archive_student.php">Archive Student</a>
                <a href="./view.php">Applied Candidates</a>
                <a href="#">Not Added Yet!</a>
                <a href="#">Not Added Yet!</a>
            </div>

            </li>


            

            
                <li style="float: right;"><a class="y" href="./admin_logout.php">LogOut</a></li>
           

           
                <li style="float: right;"><a class="x" href="./_update_profile.php">
                <?php echo $_SESSION['username']; ?></a>
                </li>
            
        </ul>

        <br><br><br>


    </body>
</html>