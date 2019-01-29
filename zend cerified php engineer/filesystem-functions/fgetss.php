
<?php
$str = <<<EOD
<html><body>
 <p>Welcome! Today is the <?php echo(date('jS')); ?> of <?= date('F'); ?>.</p>
</body></html>
Text outside of the HTML block.\n
EOD;
file_put_contents('sample.txt', $str);

$handle = @fopen("sample.txt", "r");
if ($handle) {
    while (!feof($handle)) {
    	echo ftell($handle);
        $buffer = fgetss($handle, 1024);
        echo $buffer;
    }
    fclose($handle);
}
?>