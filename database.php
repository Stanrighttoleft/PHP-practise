<?php

$db_server = "*****";
$db_user = "***";
$db_pass = "*****";
$db_name = "****";
$conn = "";

try {
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
} catch (mysqli_sql_exception) {
    echo "could not connected!";
}


if ($conn) {
    echo "you are connected";
}
