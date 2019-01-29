<?php
$ar1 = array(10, 100, 100, 0);
$ar2 = array(1, 3, 2, 4);
$ar3 = array(109, 53, 2, 48);

var_dump($ar1);
var_dump($ar2);
var_dump($ar3);

echo "----------------------\n";
array_multisort($ar3, SORT_ASC, SORT_NUMERIC, $ar2, $ar1);

var_dump($ar1);
var_dump($ar2);
var_dump($ar3);

echo "----------------------\n";

$data[] = array('Band' => 67, 'Auflage' => 2);
$data[] = array('Band' => 86, 'Auflage' => 1);
$data[] = array('Band' => 85, 'Auflage' => 6);
$data[] = array('Band' => 67, 'Auflage' => 2);
$data[] = array('Band' => 67, 'Auflage' => 6);
$data[] = array('Band' => 67, 'Auflage' => 7);

// Hole eine Liste von Spalten
/*
foreach ($data as $key => $row) {
    $band[$key]    = $row['Band'];
    $auflage[$key] = $row['Auflage'];
}
*/

// von PHP 5.5.0 an kann array_column() statt des obigen Codes verwendet werden
$band  = array_column($data, 'Band');
$auflage = array_column($data, 'Auflage');

// Die Daten mit 'Band' absteigend, die mit 'Auflage' aufsteigend sortieren.
// Geben Sie $data als letzten Parameter an, um nach dem gemeinsamen
// Schlüssel zu sortieren.
array_multisort($band, SORT_ASC,$auflage, SORT_ASC);
// Hole eine Liste von Spalten


$newData = array();

array_push($newData, $band);
array_push($newData, $auflage);

echo "Band | Auflage\n";
echo "---- + -------\n";

for($i = 0; $i<count($newData[0]);$i++){
	echo " " . $newData[0][$i] . "  |  " . $newData[1][$i] . "\n";
}
