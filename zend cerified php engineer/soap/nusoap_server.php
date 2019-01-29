<?php
function quadrat($a) {
	if ($a != null && trim($a) != '') {
		$quadrat = $a * $a;
		return $quadrat;
	} else {
		return new soap_fault('Client', '', 'Kein Parameter');
	}
}
require_once 'lib/nusoap.php';
$server = new nusoap_server();
$server->configureWSDL('Quadrat', 'http://www.arrabiata.de/nusoap/');
$server->wsdl->schemaTargetNamespace = 'http://soapinterop.org/xsd/';

$server->register('quadrat',
	array('a' => 'xsd:int'),
	array('quadrat' => 'xsd:int'),
	'http://soapinterop.org/'
);

$daten = file_get_contents('php://input') !== null ? file_get_contents('php://input') : '';

$server->service($daten);
exit();
?>