<?php

$password = "pizza123";
$hash = password_hash($password, PASSWORD_DEFAULT);

echo $hash . "<br>";

if (password_verify("pizza", $hash)) {
    echo "you are logged in!";
} else {
    echo "Incorrect password!";
}
