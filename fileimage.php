<?php

$filename = fopen("himeko.avif", "rb");
$contents = fread($filename, filesize("himeko.avif"));
fclose($filename);
header('content-type:image/avif');
echo $contents;
