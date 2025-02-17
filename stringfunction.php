<?php
$username = "David shit";
$phone = "123-456-7890";
$usernamearray = array("David", "Shit");


//$username = strtolower($username);
//$username = strtoupper($username);
//$username = trim($username);
//$username = str_pad($username, 20, "1");
//$username = str_replace("-", "", $phone);
//$username = strrev($username);
//$username = str_shuffle($username);
//$equals = strcmp($username, "stanley");
//$count = strlen($username);
//$index = strpos($username, " ");
//$firstname = substr($username, 0, 5);
//$lastname = substr($username, 6);
//$fullname = explode(" ", $username);
$username = implode(" ", $usernamearray);

//echo $firstname . "<br>";
//echo $lastname;
/*
foreach ($fullname as $name) {
    echo $name . "<br>";
}
*/

echo $username;
