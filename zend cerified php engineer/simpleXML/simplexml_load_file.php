<?php

$xml = simplexml_load_file('C:\xampp\htdocs\php_zend_zert\uebungen\simpleXML\save_test.xml');

var_dump($xml);

echo $xml->asXML();

echo PHP_EOL;

var_dump($xml->xpath("book[@id=2]"));



?>