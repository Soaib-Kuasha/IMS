<?php 

session_start();
ob_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>User-Log-In</title>

        <link rel="stylesheet" href="../css/user_login.css">
 
 
    </head>

    <body>

        <?php 
        
        include '../dbconfig.php';

        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $username_search = "select * from uregistration where username='$username' ";
            $query = mysqli_query($con, $username_search);

            $username_count = mysqli_num_rows($query);

            if($username_count){
                $username_pass = mysqli_fetch_assoc($query);

                $db_pass = $username_pass['password'];

                $_SESSION['username'] = $username_pass['username'];

                $pass_decode = password_verify($password, $db_pass);

                if($pass_decode){

                    if(isset($_POST['rememberme'])){

                        setcookie('usernamecookie', $username,time()+86400);
                        setcookie('passwordcookie', $password ,time()+86400);
                        ?>

                        <script>
                            location.replace("./_user_home.php");
                        </script>
                        
                        <?php
                    }else{
                        ?>

                        <script>
                            location.replace("./_user_home.php");
                        </script>
                        
                        <?php
                    }

                }else{  
                    
                    ?>
                        <script>
                            alert("Password incorrect");
                        </script>
                    <?php
                    
                }
            }else{
        
                ?>
                <script>
                    alert("Invalid username");
                </script>
            <?php
            }
        }
        
        ?>

        <h2 class="heading">USER LOG IN INTERFACE</h2>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            
            <img src="../img/avater.png" alt="" srcset="">

            <h2>SIGN IN</h2>

            <label for="username">Username</label><br>
            <input type="text" name="username" id="username" value="<?php if(isset($_COOKIE['usernamecookie'])) { echo $_COOKIE['usernamecookie']; }  ?>" placeholder="Type Here" required> <br><br>

            <label for="password">Password</label><br>
            <input type="password" name="password" id="password" value="<?php if(isset($_COOKIE['passwordcookie'])) { echo $_COOKIE['passwordcookie']; }  ?>" placeholder="Place Here" required> <br><br>


            <div id="sign-in">
                <input type="submit" name="submit" value="Log In">
            </div>
            
            <br><br>

            <div id="foot">
                <input type="checkbox" id="check" name="rememberme">    

                <span>Remember me</span>    

                <br>    

                <a href="./forgot.php">Forgot Password</a>
                <br><br>
                
                <div>
                    <a href="./user_register.php">Register</a>
                </div>
            </div>

            <br>

            <a href="../index.php" id="home">Back to Homepage</a>
        </form>
    </body>
</html>