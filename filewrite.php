

<?php

$content = <<<useHTML

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

this file will put content on a new html file and save it.
    
</body>
</html>

useHTML;

$filesize = file_put_contents("filewrite.html", $content);
echo "write file successfully, the file size is $filesize bytes";
