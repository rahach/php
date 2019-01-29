<?php


$filename = 'test.txt';

$handle = fopen($filename, 'r');

$content = '';

while(!feof($handle)){
	$content .= fread($handle, filesize($filename));
}

fclose($handle);

echo filesize($filename);
var_dump($content);




$filename = 'testpic.jpg';

$handle = fopen($filename, "rb");

$contents = fread($handle, filesize($filename));

fclose($handle);

echo filesize($filename);
var_dump($contents);





?>