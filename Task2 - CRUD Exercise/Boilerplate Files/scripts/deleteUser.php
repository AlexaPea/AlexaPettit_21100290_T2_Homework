<?php 

//include database connection script
include 'scripts/db_connection.php';

$selectedUser = $_POST['delUser'];

$sql = "DELETE FROM users WHERE name = '$selectedUser';";
$result  = mysqli_query($conn, $sql);
header("Location: http://localhost:8888/phpIntro");

//write an alert - "Are you sure you want to delete?" for assignment

?>  