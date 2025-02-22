<?php

$lines = file('fileread.html');
foreach ($lines as $line_num => $line) {
    echo "#<b>$line_num</b>:" . htmlspecialchars($line) . "<br>\n";
}
