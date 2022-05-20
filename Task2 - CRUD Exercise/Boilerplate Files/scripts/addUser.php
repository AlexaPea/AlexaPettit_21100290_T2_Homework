<?php 

//include database connection script
include 'scripts/db_connection.php';

//Recieve info from form

//Validation to check if somethings there
if(empty($_POST['name'] && $_POST['age'] && $_POST['occupation'])){
    //outputs if fields are empty
    echo "You need to enter in all the data please!";
}else{
    //make into standard php variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $occupation = $_POST['occupation'];

    $sql = "INSERT INTO users(id, name, age, occupation) VALUES (NULL,'$name','$age','$occupation');"; //Note: semi-colons
    $result = mysqli_query($conn, $sql);
    header("Location: http://localhost:8888/phpIntro");

    
}

?>