<?php


echo '0:        '.(boolval(0) ? 'true' : 'false')."\n";
echo '0.0:      '.(boolval(0.0) ? 'true' : 'false')."\n";
echo '"0":      '.(boolval("0") ? 'true' : 'false')."\n";
echo '[]:       '.(boolval([]) ? 'true' : 'false')."\n";
echo '"":       '.(boolval("") ? 'true' : 'false')."\n";
echo 'NULL:     '.(boolval(NULL) ? 'true' : 'false')."\n";
echo 'array():  '.(boolval(array()) ? 'true' : 'false')."\n";

echo '42:       '.(boolval(42) ? 'true' : 'false')."\n";
echo '4.2:      '.(boolval(4.2) ? 'true' : 'false')."\n";
echo '"string": '.(boolval("string") ? 'true' : 'false')."\n";
echo '"1":      '.(boolval("1") ? 'true' : 'false')."\n";
echo '[1, 2]:   '.(boolval([1, 2]) ? 'true' : 'false')."\n";
echo 'stdClass: '.(boolval(new stdClass) ? 'true' : 'false')."\n";


echo '0:        '.((bool) 0 ? 'true' : 'false')."\n";
echo '0.0:      '.((bool)0.0 ? 'true' : 'false')."\n";
echo '"0":      '.((bool) "0" ? 'true' : 'false')."\n";
echo '[]:       '.((bool) [] ? 'true' : 'false')."\n";
echo '"":       '.((bool) "" ? 'true' : 'false')."\n";
echo 'NULL:     '.((bool) NULL ? 'true' : 'false')."\n";
echo 'array():  '.((bool) array() ? 'true' : 'false')."\n";

echo '42:       '.((bool)42 ? 'true' : 'false')."\n";
echo '4.2:      '.((bool)4.2 ? 'true' : 'false')."\n";
echo '"string": '.((bool)"string" ? 'true' : 'false')."\n";
echo '"1":      '.((bool) "1" ? 'true' : 'false')."\n";
echo '[1, 2]:   '.((bool)[1, 2] ? 'true' : 'false')."\n";
echo 'stdClass: '.((bool)new stdClass() ? 'true' : 'false')."\n";


$a = new stdClass();
var_dump($a);


?>