<?php
$handle = fopen("http://www.example.com/", "rb");
if (FALSE === $handle) {
    exit("Failed to open stream to URL");
}

$contents = '';

$contents .= fread($handle, 1);

fclose($handle);

var_dump($contents);
?>
