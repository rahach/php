
<?php
$opts = array(
  'http'=>array(
  	'user_agent' => "my browser",
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n"
  )
);

$context = stream_context_create($opts);

/* Sends an http request to www.example.com
   with additional headers shown above */
$fp = fopen('http://www.example.com', 'r', false, $context);

var_dump(stream_get_contents($fp));
var_dump(stream_get_meta_data($fp));
var_dump(http_response_header());
fclose($fp);
?>
