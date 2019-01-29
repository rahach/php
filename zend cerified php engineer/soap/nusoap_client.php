<?php
require_once 'lib/nusoap.php';
$client = new nusoap_client('http://localhost/zend/uebungen/soap/server.php?wsdl', true);
$a = 48;
$ergebnis = $client->call('quadrat', array('a' => $a), 'http://www.arrabiata.de/nusoap/');
$fehler = $client->fault;
if ($fehler) {
	print 'Fehler: ' . $client->faultcode . ' ' . $client->faultstring . ' ' . $client->faultdetail;
}
else {
	print 'Das Quadrat von $a ist ' . $ergebnis;
}

?>