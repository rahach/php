<?php
namespace myapp3;

use App\Lib2 as Another;

use const App\Lib1\MYCONST as THECONST;

use function App\Lib1\MyFunction as func;

require_once('../lib1.php');
require_once('../lib2.php');

const MYCONST = 'myapp2';

header('Content-type: text/plain');
echo Another\MYCONST . "\n";
echo \myapp3\MYCONST . "\n";
echo Another\MyFunction() . "\n";
echo Another\MyClass::WhoAmI() . "\n";
echo THECONST . "\n";
echo func() . "\n";
?>