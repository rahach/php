<?php
//remove all headers
header("X-Foo: Bar");
header("X-Bar: Baz");
header_remove(); 

//remove defined header
/*
header("X-Foo: Bar");
header("X-Bar: Baz");
header_remove("X-Bar"); 
*/
?>