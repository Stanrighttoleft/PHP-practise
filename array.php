<?php

//this is an example for the associate array

$capitals = array(
    "USA" => "washington",
    "Japan" => "Kyoto",
    "South Korea" => "Seoul",
    "India" => "New Delhi"
);

//$capitals["USA"] = "Las Vegas";
//$capitals["China"]="Beijing";
//array_pop($capitals);
//array_shift($capitals);

//$keys = array_keys($capitals);
//$values = array_values($capitals);

echo $capitals["Japan"] . "<br>";
//$newcapitals = array_flip($capitals);
$newcapitals = array_reverse($capitals);
echo count($capitals) . "<br>";





foreach ($newcapitals as $key => $value) {
    echo "{$key}={$value}<br>";
}
