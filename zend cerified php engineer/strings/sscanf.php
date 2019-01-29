<?php

$year = "2015";
$month = "12";
$day = "22";

sscanf("2005-11-02", '%d-%d-%d', $year, $month, $day);
echo $year, "-",$month, "-",$day;
echo PHP_EOL;


// getting the serial number
list($serial) = sscanf("SN/2350001", "SN/%d");
// and the date of manufacturing
$mandate = "January 01 2000";
list($month, $day, $year) = sscanf($mandate, "%s %d %d");
echo "Item $serial was manufactured on: $year-" . substr($month, 0, 3) . "-$day\n";
echo PHP_EOL;

$out = sscanf('file_name.gif', 'file_%[^.].%s', $fpart1, $fpart2);

echo '<pre>';
print_r($fpart1);
echo '<hr />';
print_r($fpart2);
echo '</pre>';

echo PHP_EOL;

// get author info and generate DocBook entry
$auth = "24\tLewis Carroll";
$n = sscanf($auth, "%d\t%s %s", $id, $first, $last);
echo "<author id='$id'>
    <firstname>$first</firstname>
    <surname>$last</surname>
</author>\n";

echo PHP_EOL;