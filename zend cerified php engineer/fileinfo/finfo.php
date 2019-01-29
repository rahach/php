<?php

$finfo = finfo_open(FILEINFO_MIME);

foreach(glob("../r*/*") as $filename){
	echo finfo_file($finfo, $filename ) . "\n";
}


$finfo = new finfo(FILEINFO_MIME);

foreach(glob("../r*/*") as $filename){
	echo $finfo->file( $filename) . "\n";
}


?>