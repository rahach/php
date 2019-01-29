<?php
$test = " Yaouisget certified";
echo strspn($test, 'Yaeious', 1, 10);

echo PHP_EOL;

$var = "42 is the answer to the 128th question.";
echo strspn($var, "1234567890");

echo PHP_EOL;

// subject does not start with any characters from mask
var_dump(strspn("foloo oooo", "ol", 1));

// examine two characters from subject starting at offset 1
var_dump(strspn("foo", "o", 1, 2));

// examine one character from subject starting at offset 1
var_dump(strspn("foo", "o", 1, 1));