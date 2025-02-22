<?php

$filename = fopen("test.txt", "w+");
if (flock($filename, LOCK_EX | LOCK_NB)) {
    fwrite($filename, "This is new content!!!");
    flock($filename, LOCK_UN);
} else {
    echo "error! this file has been used";
}

fclose($filename);
echo "file write successfully, the content as below:<br>";
readfile("test.txt");
