<?php

// For PHP 5 and up

$handle = fopen("http://www.example.com/", "rb");
$contents = stream_get_contents($handle);
fclose($handle);

var_dump(htmlentities($contents));


$handle = fopen("http://www.example.com/", "rb");

if($handle === FALSE){
	exit("failed to open stream");
}

$contents = "";

while(!feof($handle)){
	$contents .= fread($handle, 2);
}

fclose($handle);

var_dump(htmlentities($contents));

?>