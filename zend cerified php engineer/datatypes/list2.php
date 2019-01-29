<?php

$info = array('coffee', 'brown', 'caffeine');

// Listing all the variables
//list($drink, $color, $power) = $info;
//echo "$drink is $color and $power makes it special.\n";

//echo "<br />";


var_dump(list($a,$b,$c)=$info);

var_dump(each(list($a,$b,$c)=$info));
//var_dump(list($power)=each($info));

// Listing all the variables
//while(list($power) = each($info)){

//var_dump($info);

//}
//echo "<br />";

// Listing some of them
//list($drink, , $power) = $info;
//echo "$drink has $power.\n";

// Or let's skip to only the third one
//list( , , $power) = $info;
//echo "I need $power!\n";

// list() doesn't work with strings
//list($bar) = "abcde";
//var_dump($bar); // NULL
?>