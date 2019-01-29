<?php

/*
header('WWW-Authenticate: NTLM');
header('WWW-Authenticate: Negotiate',false);
*/

/* setcookie() fügt für sich einen eigenen Response Header ein */
setcookie('foo', 'bar');

/* Einen eigenen Response Header definieren
   Dieser wird von den meisten Clients ignoriert */
//header("X-Sample-Test: foo");

/* Specify plain text content in our response */
//header('Content-type: text/plain');

//header('Content-type: text/plain', false);
/* Welche Header wurden gesendet? */

//header("HTTP/1.0 200 OK");
//header("HTTP/1.0 404 Not Found", false, 404);


header("X-Sample-Test: foo");
header("X-Sample-Test: foo", false);


var_dump(headers_list());


?>