<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>

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

        include '../dbconfig.php';

        if(isset($_POST['submit'])){

            if(isset($_GET['token'])){

                $token = $_GET['token'];

                $password = mysqli_real_escape_string($con, $_POST['password']);
                $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
                        
                $pass = password_hash($password, PASSWORD_BCRYPT);
                $cpass = password_hash($cpassword, PASSWORD_BCRYPT);
    
                    $updatequery = " update aregistration set password='$pass' where token='$token' ";        
                            if($password === $cpassword){
                                if (strlen($password) < 6) {
                                    echo "Should have atleast SIX character!";
            
                                }else{
                                    
                                    $iquery = mysqli_query($con, $updatequery);
    
                                    if($iquery){
                                        
                                        ?> 
                                        <script>
                                            alert("Your Password has been updated");
                                            header('location:admin_login.php');
                                        </script>
                                        
                                        <?php
                                    }else{
                                        ?> 
                                        <script>
                                            alert("Password not updated!");
                                            header('location:reset_password.php');
                                        </script>
                                        
                                        <?php
                                    }
                                        
                                }
    
                }else{
                    ?> 
                    <script>
                        alert("Password did not match!");
            
                    </script>
                    
                    <?php
                }
                                
            }
        
        
        }
    
    ?>


    <br><br><br>
    <form action="" method="POST">

        <h1>PASSWORD RESET</h1>
        <br><br>
        <label for="password">New Password</label> <br>
        <input type="password" name="password" id="password" placeholder="Type Here"> <br><br>

        <label for="cpassword">Repeat Password</label> <br>
        <input type="password" name="cpassword" id="cpassword" placeholder="Type Here"> <br><br>

        <input type="submit" name="submit" value="submit">

    </form>
    
</body>
</html>