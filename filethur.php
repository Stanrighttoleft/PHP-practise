<?php

$filename = fopen("filewrite.html", "r");
echo "<b>use fpassthru() read file:</b><br>";

fpassthru($filename);
$filename = fopen("filewrite.html", "r");

echo "<br><b> use stream_get_contents() read file:</b><br>";
echo stream_get_contents($filename);
fclose($filename);
