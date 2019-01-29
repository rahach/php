<?php
echo '$_POST: ';
echo PHP_EOL;
var_dump($_POST);
echo PHP_EOL;
echo '$_GET: ';
echo PHP_EOL;
var_dump($_GET);
echo PHP_EOL;
echo '$_SERVER: ';
echo PHP_EOL;
var_dump($_SERVER);
echo PHP_EOL;
echo '$GLOBALS: ';
echo PHP_EOL;
var_dump($GLOBALS);
echo PHP_EOL;
?>
<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8" />
		<title>Übung </title>
	</head>
	<body>
		<h3>POST</h3>
		<div>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<input type="text" id="thepost" name="thepost" required="required" />
			<button type="submit">Send Post</button>
		</form>

		<h3>GET</h3>
		<div>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
			<input type="text" id="theget" name="theget" required="required" />
			<button type="submit">Send Get</button>
		</form>

	<script src="../js/jquery/jquery-3.3.1.min.js"></script>
	<script>



		
	</script>
	</body>
</html>