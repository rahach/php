<?php
$file = 'first1k.txt';
$text = <<<'START'
Text text text text text
text text text text text
text text text text text.
START

$fp = fopen($file, "w");
if ($fp) {

  if (stream_set_write_buffer($fp, 1024) !== 0) {
	stream_set_write_buffer($fp, 1);
  }
  fwrite($fp, $text);
  fclose($fp);
}
?>