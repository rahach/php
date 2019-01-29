<?php

$path = "/var/www/html/kurs/php_zend_zert/uebungen/strings/myFile.php";

echo dirname($path, 5);
echo PHP_EOL;

echo basename($path);
echo PHP_EOL;

echo pathinfo($path, PATHINFO_EXTENSION);
echo PHP_EOL;

$path2 = "../../";
echo realpath($path2);
echo PHP_EOL;

$url = 'http://username:password@maxigarten.de:9090/path?arg=value#anchor';

var_dump(parse_url($url));
var_dump(parse_url($url, PHP_URL_SCHEME));
var_dump(parse_url($url, PHP_URL_USER));
var_dump(parse_url($url, PHP_URL_PASS));
var_dump(parse_url($url, PHP_URL_HOST));
var_dump(parse_url($url, PHP_URL_PORT));
var_dump(parse_url($url, PHP_URL_PATH));
var_dump(parse_url($url, PHP_URL_QUERY));
var_dump(parse_url($url, PHP_URL_FRAGMENT));
