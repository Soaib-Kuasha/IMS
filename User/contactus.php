<!DOCTYPE html>
<html>
<head>
    <title>PHP MySQL contact us form with validation using Bootstrap</title>
    <!-- <link rel="stylesheet" href="../css/bootstrap.css"> -->
    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

            <style>

form{
    border: 3px solid gray;
    border-radius: 2%;
    width: auto;
    margin-left: 25%;
    margin-right: 25%;
    text-align: center;
    
    font-family: verdana;
    color: black;
    /* height: 70vh; */
}

input[type=text], textarea{
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

textarea{
    height: 200px;
}

input[type=text]:focus, textarea:focus{
    border: 3px solid #555;
    border-radius: 5%;
}

button{
    padding: 3%;
    margin-bottom: 5px;
    font-weight: 600; 
    background-color: black;
    color: white;  
    border: none; 
}

h3{
    text-align: center;
    margin-bottom: 15px;
}
</style>
    </style>
</head>
<body>

<?php

include './user_dashboard.php';


?>

    <h3>Send Your Query!</h3>
    <form action="./contactus_storedata.php" method="POST">

            <label>Subject</label><br>
            <input type="text" name="subject"  required> <br><br>

            <label>Message</label><br>
            <textarea name="message" style="width: auto;"' required></textarea> <br><br>

            <button class="btn btn-success" type="submit">Submit</button>

    </form>

</body>
</html>