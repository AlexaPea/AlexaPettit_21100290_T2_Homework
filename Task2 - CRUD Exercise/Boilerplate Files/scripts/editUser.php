<?php

//include database connection script
include 'scripts/db_connection.php';

//Before editing user, create drop downs

//Get row that needs updating
$selectedUser = $_POST['selectedUser']; //gets users name that you want to change

$sql = "SELECT * FROM users WHERE name = '$selectedUser';";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){

    //
    while($row = mysqli_fetch_assoc($result)){

        if(empty($_POST['name'])){
            $name = $row['name']; //if its empty, we're setting it to whatever the name was before
        } else{
            $name = $_POST['name']; //sets it to new input
        }

        if(empty($_POST['age'])){
            $age = $row['age']; //if its empty, we're setting it to whatever the age was before
        } else{
            $age = $_POST['age'];  //sets it to new input
        }

        if(empty($_POST['occupation'])){
            $occupation = $row['occupation']; //if its empty, we're setting it to whatever the name was before
        } else{
            $occupation = $_POST['occupation'];  //sets it to new input
        }

        //update sql
        $sql2 = "UPDATE users SET , name='$name', age='$age', occupation='$occupation' WHERE name = '$selectedUser';";
        $result2 = mysqli_query($conn, $sql2);
        header("Location: http://localhost:8888/phpIntro");


} else{
    echo "There is no user with that name";
}



?>