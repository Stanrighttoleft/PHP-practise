<?php

$filename = "filewrite.html";
if (is_readable($filename)) {
    readfile($filename);
}
