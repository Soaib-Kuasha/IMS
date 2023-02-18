<?php

if(isset($_POST['signup'])){
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
            
            
    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $emailquery = "select * from uregistration where email = '$email'";
    $query = mysqli_query($con, $emailquery);


    $emailcount = mysqli_num_rows($query);
        if($emailcount>0){      
                ?>
                <script>
                    alert('Email address already Exist!');
                </script>
                <?php
        
            }
            else{
                
                if($password === $cpassword){

                    $insertquery = "INSERT INTO uregistration(username, email, password, cpassword) VALUES ('$username','$email','$pass','$cpass')";


                    $iquery = mysqli_query($con, $insertquery);

                    if($iquery){
                        ?>
                            <script>
                                alert("Registration successfull");
                                location.href = './user_login.php';
                            </script>
                        <?php

                    }
                    else{
                        ?>
                            <script>
                                alert("Something went wrong!");
                            </script>
                        <?php
                    }

                }
            }
        }

?>