<?php
$input = "Alien";
echo str_pad($input, 10);                      // produces "Alien     "
echo PHP_EOL;
echo str_pad($input, 10, "-=", STR_PAD_LEFT);  // produces "-=-=-Alien"
echo PHP_EOL;
echo str_pad($input, 10, "_", STR_PAD_BOTH);   // produces "__Alien___"
echo PHP_EOL;
echo str_pad($input,  6, "___");               // produces "Alien_"
echo PHP_EOL;
echo str_pad($input,  3, "*");                 // produces "Alien"
echo PHP_EOL;


echo str_pad("input", 10, "pp", STR_PAD_BOTH ); // ppinputppp
echo PHP_EOL;
echo str_pad("input", 11, "pp", STR_PAD_BOTH ); // ppinputppp
echo PHP_EOL;
echo str_pad("input", 6, "p", STR_PAD_BOTH ); // inputp
echo PHP_EOL;
echo str_pad("input", 7, "p", STR_PAD_BOTH ); // ppinputppp
echo PHP_EOL;
echo str_pad("input", 8, "p", STR_PAD_BOTH ); //pinputpp
echo PHP_EOL;
?>