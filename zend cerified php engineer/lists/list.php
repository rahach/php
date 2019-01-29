<?php



$array = array(1, 2, 3);

while(list(,$v) = each($array)){
	echo "v: " . $v . "\n";
	var_dump(current($array));
}




$info = array('Kaffee', 'braun', 'Koffein');

// Auflisten aller Variablen
list($drink, $color, $power) = $info;
echo "$drink ist $color und $power macht es zu etwas besonderem.\n";

// Ein paar davon auflisten
list($drink, , $power) = $info;
echo "$drink hat $power.\n";

// Oder nur die dritte ausgeben
list( , , $power) = $info;
echo "Ich brauche $power!\n";

// Oder nur die dritte ausgeben
list( , $power) = $info;
echo "Ich brauche $power!\n";


// list() funktioniert nicht mit Zeichenketten
list($bar) = "abcde";
var_dump($bar); // NULL


?>