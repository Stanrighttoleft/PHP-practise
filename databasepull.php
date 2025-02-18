<?php

include("database.php");

//if WHERE is not there the select will select all users

$sql = "SELECT*FROM users WHERE username='superman'";
$result = mysqli_query($conn, $sql);


//this can run thorough all the row selected
if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<br>" . $row["id"] . "<br>";
        echo $row["username"] . "<br>";
        echo $row["reg_date"] . "<br>";
    };
} else {
    echo "no user found";
}


mysqli_close($conn);
