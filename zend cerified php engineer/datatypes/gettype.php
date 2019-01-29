<?php

$f = function(){ return "hello"; };



echo gettype($f);

var_dump(gettype($f));


function f2(){ return "hello"; };

var_dump(gettype(f2()));

?>