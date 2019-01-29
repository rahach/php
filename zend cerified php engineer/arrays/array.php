<?php

$matches = array(true, 0 => 4, "a");
var_dump($matches);

$matches = array(true, '0' => 4, "a");
var_dump($matches);

$matches = array(true, '0' => 4, false, "a");
var_dump($matches);

$matches = array(true, '0' => 4, false => true, "a");
var_dump($matches);

$matches = array(true, '0' => false, "a");
var_dump($matches);



?>