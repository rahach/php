<?php
$file = 'http://www.example.com';
$newfile = 'example.txt.bak';

if (!copy($file, $newfile)) {
    echo "failed to copy $file...\n";
}
?>