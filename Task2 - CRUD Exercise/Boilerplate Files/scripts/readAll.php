<?php

//include database connection script
include 'scripts/db_connection.php';


//select all users
$sql = "SELECT * FROM users;"; //Note: use of semi-colons

//store
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($results); //counts number of rows

if($resultCheck > 0){
    //loop through array
    while($row = mysqli_fetch_assoc($result)){ //storing result in row variable (format of array)
        echo "
            <div class='row_item'>
                <p><strong>Name:</strong>" . $row['name'] . "</p>
                <p><strong>Age:</strong>" . $row['age'] . "</p>
                <p><strong>Occupation:</strong>" . $row['occupation'] . "</p>
            </div>
        ";

    }

} else{
    echo "<h1>No Fata Found on DB</h1>"; //outputs if there isn't anything in db
}

?>