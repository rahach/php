<?php


$doc = new DOMDocument();


$string = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>+++++++++++++ This is the title ###############</title></head></html>';

$doc->loadHTML($string);

var_dump($doc);

?>