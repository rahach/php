<?php
error_reporting(E_ALL);
header('Access-Control-Allow-Origin: *');
header('Content-Type: text/html; charset=utf-8');

echo "<!DOCTYPE HTML><html lang='de' dir='ltr'> \n";
echo "<head> \n";
echo "<meta charset='utf-8' /> \n";
echo "<link rel='stylesheet' type='text/css' href='style.css' /> \n";
echo "</head> \n";
echo "<body> \n";

session_start();
#print_r(headers_list());
echo "<div class='clear'></div> \n";

header('Access-Control-Allow-Origin: *');
setlocale(LC_ALL, 'de_DE@euro', 'de_DE', 'deu_deu');
?>

<head>
</head>
