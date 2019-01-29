<?php
setcookie('name1', 'value1', time() + 60*60*24, '/');
setcookie('name1', 'value2');



var_dump($_COOKIE);