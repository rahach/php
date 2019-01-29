
<?php
// $ds contains the total number of bytes available on "/"
$ds = disk_total_space("/var/www/html/kurs/php_zend_zert/uebungen/");
$dfs = disk_free_space("/var/www/html/kurs/php_zend_zert/uebungen/");
echo $ds;
echo PHP_EOL;
echo $dfs;
echo PHP_EOL;
?>
