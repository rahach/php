<?php
$server = new SoapServer('http://localhost/php_zend_zert/uebungen/soap/quadrat.wsdl', array('uri'=> 'http://www.arrabiata.de/PHP-SOAP/'));
class Methoden {
	function quadrat($a) {
		if ($a != null && trim($a) != '') {
			$quadrat = $a * $a;
			return $quadrat;
		} else {
			throw new SoapFault('Client', 'Kein Parameter');
		}
	}
}

$server->setClass('Methoden');
$server->handle();
?>