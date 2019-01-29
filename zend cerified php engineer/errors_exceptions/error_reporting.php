<?php

// Error Reporting komplett abschalten
error_reporting(0);

// Nur einfache Fehler melden
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// E_NOTICE ist sinnvoll um uninitialisierte oder
// falsch geschriebene Variablen zu entdecken
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// Melde alle Fehler außer E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

// Melde alle PHP Fehler (siehe Changelog)
error_reporting(E_ALL);

// Melde alle PHP Fehler
error_reporting(-1);

// Dies entspricht error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

?>
