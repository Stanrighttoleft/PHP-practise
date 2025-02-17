<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    session_start();
    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";
    ?>
    This is the member page<br>
    <form action="sessionin.php" method="post">
        <input type="submit" name="logout" value="logout">


    </form>




</body>

</html>


<?php





if (isset($_POST["logout"])) {
    session_destroy();
    header("location:session.php");
}

?>