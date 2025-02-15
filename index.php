<?php

$name = "bro";
$food = "pizza";

$quantity = 21;
$price = 21.99;
$total = null;
$total = $quantity * $price;





echo "I like {$food} <br>";
echo "{$name} it is really good <br>";
echo "you order {$quantity} pizza <br>";
echo "the price of the pizza is \${$price}<br>";
echo "the price of all pizza is \${$total}<br>";
//this is a comment
/* this is a multiline comment*/

//the following way you can choose one of them
echo " {$_GET["username"]} <br>";
echo $_GET["password"] . "<br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button>order a pizza</button><br>

    <form action="index.php" method="get">

        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="log in">

    </form>


</body>

</html>