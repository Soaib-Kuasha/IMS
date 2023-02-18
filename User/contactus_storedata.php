<?php
include "../dbconfig.php";
include "./user_dashboard.php";

extract($_POST);

$name = $_SESSION['username'];


$sql = "INSERT into contactus (name,subject,message,created_date) VALUES('" . $name . "','" . $subject . "','" . $message . "','" . date('Y-m-d') . "')";

$success = $con->query($sql);

if (!$success) {
    die("Couldn't enter data: ".$con->error);
}

echo "Thank You For Contacting Us ";

$con->close();


?>