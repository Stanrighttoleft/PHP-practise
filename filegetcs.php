<?php

$filename = fopen("fileuploadm.html", "r");

while ($line = fgets($filename)) {
    echo $line;
}

fclose($filename);
