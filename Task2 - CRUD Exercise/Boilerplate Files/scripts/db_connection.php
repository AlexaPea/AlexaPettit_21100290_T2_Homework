<?php 


//Database credentials
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "root";
$db = "testing";


//connection script - allows us to connect to database with all permissions
$conn = new mysqli($dbhost, $dbuser, $dbpassword , $db);
 

?>