
<?php
$handle = @fopen("sample.txt", "r");
if ($handle) {
    	echo ftell($handle);	
	$buffer = fgets($handle, -1);
	var_dump($buffer);
    	echo ftell($handle);
}