<?php



include '../dbconfig.php';
include './user_dashboard.php';


?>

<html>
<head>
    <title></title>

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


<form name="frmRegistration" method="post" action="./insert_fill_details.php">
    
    


    
    <label for="">Company Name</label> <br>
    <input type="text" class="demoInputBox" name="company_name" minlength="3" maxlength="16" value=" <?php if(isset($_POST['company_name'])) echo $_POST['company_name']; ?>" required >
    <br>

    
    <label for="">Location</label> <br>
    <input type="text" class="demoInputBox" name="location"minlength="3" maxlength="16"  value="<?php if(isset($_POST['first_name'])) echo $_POST['first_name']; ?>" required >
    <br>

    
    <label for="">Why Interested?</label> <br>
	<textarea name = "description" style = "height:100px; resize:none;" class = "form-control" required = "required"></textarea>
    <br>
    
    
    <label for="">email</label> <br>
    <input type="email" class="demoInputBox" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" required >
    <br>

    
    <label for="">Gender</label> <br>
    <input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") { ?>checked<?php  } ?> required > Male <br>
    <input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") { ?>checked<?php  } ?> required > Female <br>
    <br>
    

    
     <input type="submit" name="insert_button" value="Apply" class="btnRegister" required >
    
    
</form>

    </body>



</html>