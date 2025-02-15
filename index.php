<?php

$name = "bro";
$food = "pizza";

$quantity = $_POST["quantity"];
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
/*  $_GET data is appended to the url not secure, char limit, bookmark is possible with values, GET requests can be cached, better for a search page
    $_POST data is packaged inside the body of the HTTP request more secure, not data limit cannot bookmark GET requests are not cached, Better for submitting 
*/

//the following way you can choose one of them
//the POST can change to GET depend on what you are doing
/*
echo " {$_POST["username"]} <br>";
echo $_POST["password"] . "<br>";
*/

echo "you have ordered {$quantity} x {$food}/s <br>";
echo "your total is \${$total}";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <!--
    <form action="index.php" method="post">

        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="log in">

    </form>
-->

    <form action="index.php" method="post">
        <label>quantity: </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>

</body>

</html>