<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update-Profile</title>

    <style>

        form{
            border: 3px solid gray;
            border-radius: 5%;
            width: 50%;
            margin-left: 25%;
            text-align: center;
            
            font-family: verdana;
            color: black;
        }

        input[type=text], input[type=password]{
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 3px solid #ccc;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            outline: none;
            border-radius: 5%;
        }

        input[type=text]:focus, input[type=password]:focus {
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

      include './admin_dashboard.php';   
    
    ?>


    <br><br><br>
    <form action="" method="POST">

        
        <br><br>
        <label for="username">Update Username</label> <br>
        <input type="text" name="username" placeholder="Type Here"> <br><br>

        <label for="password">Change Password</label> <br>
        <input type="password" name="password" placeholder="Type Here"> <br><br>

        <input type="submit" name="submit" value="submit">

    </form>
    
</body>
</html>