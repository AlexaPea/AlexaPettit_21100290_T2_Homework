<?php

//include database connection script
include 'scripts/db_connection.php';


//select all users
$sql = "SELECT name FROM users;"; //Note: use of semi-colons

//store
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($results); //counts number of rows

if($resultCheck > 0){
    //loop through array
    while($row = mysqli_fetch_assoc($result)){ //storing result in row variable (format of array)
        echo "
            <option>" . $row['name'] . "</option>            
        ";

    }

} else{
    echo "<option>There are no users</option>"; //outputs if there isn't anything in db
}

?>