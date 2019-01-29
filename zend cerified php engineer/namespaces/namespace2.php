<?php

    namespace test;

    define(__NAMESPACE__ .'\foo','111');
    define('foo','222');

include('head.php');
	
	
    echo foo."<br> \n";  // 111.
    echo \foo."<br> \n";  // 222.
    echo \test\foo."<br> \n";  // 111.
#    echo test\foo."<br> \n";  // fatal error. assumes \NS\NS\foo.
    echo __NAMESPACE__."<br> \n";  // 111.
    echo __NAMESPACE__.foo."<br> \n";  // 222.


?>