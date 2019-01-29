<?php
header_remove();

if (!headers_sent()) {
    header('Location: http://localhost/kurs/php_zend_zert/uebungen/header/200.php');
}
// An example using the optional file and line parameters
// Note that $filename and $linenum are passed in for later use.
// Do not assign them values beforehand.
if (!headers_sent($filename, $linenum)) {
    header('Location: http://example.com');
    exit;

// You would most likely trigger an error here.
} else {

    echo "Headers already sent in $filename on line $linenum\n" .
          "Cannot redirect, for now please click this <a " .
          "href=\"http://localhost/kurs/php_zend_zert/uebungen/header/\">link pointing to 'header' folder</a> instead\n";
    exit;
}



?>