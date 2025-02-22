<?php

if ($_FILES["fileupload"]["error"] == 0) {
    if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], "./" . $_FILES["fileupload"]["name"])) {
        echo "upload successful<br>";
        echo "file name:" . $_FILES["fileupload"]["name"] . "<br>";
        echo "file type:" . $_FILES["fileupload"]["type"] . "<br>";
        echo "file size:" . $_FILES["fileupload"]["size"] . "<br>";
    } else {
        echo "upload failed";
        echo "<a href='javascript:window.history.back();'>bacck</a>";
    }
}
