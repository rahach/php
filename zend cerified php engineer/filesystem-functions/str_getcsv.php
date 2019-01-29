<?php


$Data = str_getcsv(file_get_contents('data.csv'), "\n"); //parse the rows
foreach($Data as &$Row) $Row = str_getcsv($Row, ";"); //parse the items in rows

foreach($Data as $row){
	foreach($row as $key=>$value){
		if($key === 0){
			echo $key . "=>" . $value . "\n";
		}	
	}	
}

?> 