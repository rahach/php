<?php
$client = new SoapClient('http://localhost/php_zend_zert/uebungen/soap/quadrat.wsdl', array('location' => 'http://localhost/php_zend_zert/uebungen/soap/soap_server.php', 'uri' => 'http://arrabiata.de/PHP-SOAP/'));
try {
	$a = 112;
	$antwort = $client->quadrat($a);
	print 'Das Quadrat von $a ist: ' . $antwort;
} catch (SoapFault $ex) {
	print 'Fehler-Code: ' . $ex->faultcode . '<br/>';
	print 'Fehler-String: ' . $ex->faultstring;
}

?>