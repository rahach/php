<?php


$data = ["fan" => "Ron"];
$curlResource = curl_init();
$options = [
	CURLOPT_URL => 'http://localhost/php_zend_zert/uebungen/superglobals/',
	CURLOPT_CUSTOMREQUEST => 'PUT',
	CURLOPT_POSTFIELDS => $data
];
curl_setopt_array($curlResource, $options);
$response = curl_exec($curlResource);

var_dump($response);


$putVariables = [];
parse_str(file_get_contents("php://input"), $putVariables);

echo 'php://input: ';
echo "<br />" . PHP_EOL;
var_dump($putVariables);


?>
<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8" />
		<title>Übung </title>
	</head>
	<body>

		<script src="../js/jquery/jquery-3.3.1.min.js"></script>
		<script>
			
		</script>
	</body>
</html>