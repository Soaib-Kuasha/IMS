
<?php

include "../dbconfig.php";

 
$con->query("INSERT INTO fill_details (company_name, Location, why_join, email, gender)
VALUES
( '$_POST[company_name]','$_POST[location]','$_POST[description]','$_POST[email]','$_POST[gender]')");

header('location:./notify.php');

?>