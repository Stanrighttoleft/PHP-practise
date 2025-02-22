<?php
$i = count($_FILES["fileupload"]["name"]);
for ($j = 0; $j < $i; $j++) {
    if ($_FILES["fileupload"]["error"][$j] == 0) {
        if (move_uploaded_file($_FILES["fileupload"]["tmp_name"][$j], "./" . $_FILES["fileupload"]["name"][$j])) {
            echo $_FILES["fileupload"]["name"][$j] . "upload successfully!<br>";
        } else {
            echo $_FILES["fileupload"]["name"][$j] . "upload failed!<br>";
        }
    }
}
