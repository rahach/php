<?php

// For PHP 5 and up

$handle = fopen("http://www.example.com/", "rb");

if($handle === FALSE){
	exit("failed to open stream");
}

$contents = "";

while(!feof($handle)){
	$contents .= fread($handle,  8192);
}

fclose($handle);

$handle = fopen("local_file.txt", "wb");

if(fwrite($handle, $contents) === FALSE){
	echo "failed writing file";
}

fclose($handle);


?>