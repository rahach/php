<?php

$doc = new DOMDocument('1.0');
// we want a nice output
$doc->formatOutput = true;

$root = $doc->createElement('book');
$root = $doc->appendChild($root);

$title = $doc->createElement('title');
$title = $root->appendChild($title);

$text = $doc->createTextNode('This is the title');
$text = $title->appendChild($text);

echo 'Wrote: ' . $doc->save("../htdocs/php_zend_zert/uebungen/DOMDocument/save_test.xml") . ' bytes'; // Wrote: 72 bytes

?>
