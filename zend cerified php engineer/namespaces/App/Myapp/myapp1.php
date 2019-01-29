<?php
namespace App\Lib1;

require_once('../lib1.php');
require_once('../lib2.php');

const MYCONST1 = 'myapp1';

header('Content-type: text/plain');
echo MYCONST . "\n";
echo MYCONST1 . "\n";
echo MyFunction() . "\n";
echo MyClass::WhoAmI() . "\n";
?>