<?php

include("database.php");

$newusername = "david";
$password = "clare111";
$hash = password_hash($password, PASSWORD_DEFAULT);


$sql = "INSERT INTO users(username, password) VALUES ('$newusername', '$hash')";

try {
    mysqli_query($conn, $sql);
    echo "<br>user is now registered";
} catch (mysqli_sql_exception) {
    echo "<br>could not register user";
}



mysqli_close($conn);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br>Hello<br>
</body>

</html>