<?php
namespace test; 
	define(__NAMESPACE__ .'foo1','111');
	define(__NAMESPACE__ .'\foo2','222');
	define('foo2','mmm');

namespace blabla; 
	define(__NAMESPACE__ .'\foo2','333');

namespace abc; 
#	define(__NAMESPACE__ .'foo2','444');
	define(__NAMESPACE__ .'\foo2','444');

echo "Zeile 4 : ".\test\foo2."<br> \n";
echo "Zeile 5 : ".\foo2 ."<br> \n";
echo "Zeile 12 : ".foo2 ."<br> \n";
echo "Zeile 8 : ".\blabla\foo2 ."<br> \n";
?>