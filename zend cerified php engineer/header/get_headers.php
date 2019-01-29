<?php
$url = 'http://www.maxigarten.de';

print_r(get_headers($url));

print_r(get_headers($url, 10));
?>
