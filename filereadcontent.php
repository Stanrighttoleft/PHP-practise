<?php

$contents = file_get_contents('fileread.html');
echo strip_tags($contents);
