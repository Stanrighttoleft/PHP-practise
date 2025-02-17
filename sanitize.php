<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="sanitize.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        age:<br>
        <input type="text" name="age"><br>
        email:<br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="login">

    </form>

</body>

</html>
<?php

/*filter sanitize


if (isset($_POST["login"])) {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    echo "Hello {$username}<br>";
    echo "your are {$age} years old<br>";
    echo "your email is: {$email}<br>";
}

*/

if (isset($_POST["login"])) {

    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if (empty($age)) {
        echo "that number wasnot valid<br>";
    } else {
        echo "you are $age years old<br>";
    };

    if (empty($email)) {
        echo "that email wasnot valid";
    } else {
        echo "{$email}";
    };
}
