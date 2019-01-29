<?php

file_put_contents("target1.txt", fopen("sample.txt", "r"));

file_put_contents("target2.txt", file_get_contents("sample.txt"));

$handle = fopen("target3.txt", "w+"); 
fwrite($handle, file_get_contents("sample.txt"));
fclose($handle);

file_put_contents("target4.txt", readfile("sample.txt"));

file_put_contents("target5.txt", join(file("sample.txt"),"\n"));