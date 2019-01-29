<?php
session_start();
//session_regenerate_id();


$cartArray = array(
    123,
    12,
    490
);
 
//Store the array in a session variable called "cart"
$_SESSION['cart'] = $cartArray;


echo '$_SESSION: ';
echo "<br />" . PHP_EOL;
var_dump($_SESSION);

echo "<br />" . PHP_EOL;
echo '$_COOKIE: ';
echo "<br />" . PHP_EOL;
var_dump($_COOKIE);
echo "<br />" . PHP_EOL;
echo "session id: <br />" . PHP_EOL;
var_dump(session_id());
echo "<br />" . PHP_EOL;
echo "session_get_cookie_params: <br />" . PHP_EOL;
var_dump(session_get_cookie_params());
echo "<br />" . PHP_EOL;
echo "session_name: <br />" . PHP_EOL;
var_dump(session_name());
echo "<br />" . PHP_EOL;
session_unset();
echo "session_unset()<br />" . PHP_EOL;
echo '$_SESSION: ';
echo "<br />" . PHP_EOL;
var_dump($_SESSION);

session_destroy();
$_SESSION = array();

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