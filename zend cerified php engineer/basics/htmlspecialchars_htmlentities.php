<?php

echo "htmlentities" . "<br />\n";

$string = "aü";
echo $string . "<br />\n";
echo htmlentities($string) . "<br />\n";

$string = '< >';
echo $string . "<br />\n";
echo htmlentities($string) . "<br />\n";

$string = "&";
echo $string . "<br />\n";
echo htmlentities($string) . "<br />\n";

$string = '"';
echo $string . "<br />\n";
echo htmlentities($string) . "<br />\n";

$string = "€";
echo $string . "<br />\n";
echo htmlentities($string) . "<br />\n";


echo "htmlspecialchars" . "<br />\n";

$string = "aü";
echo $string . "<br />\n";
echo htmlspecialchars($string) . "<br />\n";

$string = '< >';
echo $string . "<br />\n";
echo htmlspecialchars($string) . "<br />\n";

$string = "&";
echo $string . "<br />\n";
echo htmlspecialchars($string) . "<br />\n";

$string = '"';
echo $string . "<br />\n";
echo htmlspecialchars($string) . "<br />\n";

$string = "€";
echo $string . "<br />\n";
echo htmlspecialchars($string) . "<br />\n";

?>