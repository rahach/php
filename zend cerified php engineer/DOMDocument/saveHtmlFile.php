<?php

$doc = new DOMDocument('1.0');
// we want a nice output
$doc->formatOutput = true;

$root = $doc->createElement('html');
$root = $doc->appendChild($root);

$head = $doc->createElement('head');
$head = $root->appendChild($head);

$title = $doc->createElement('title');
$title = $head->appendChild($title);

$text = $doc->createTextNode('This is the title');
$text = $title->appendChild($text);

echo 'Wrote: ' . $doc->saveHTMLFile("../htdocs/php_zend_zert/uebungen/DOMDocument/saveHtmlFile_test.html") . ' bytes'; // Wrote: 129 bytes
?>
