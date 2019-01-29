<?php
echo '$_POST: ';
echo "<br />" . PHP_EOL;
var_dump($_POST);
echo "<br />" . PHP_EOL;
echo '$_GET: ';
echo "<br />" . PHP_EOL;
var_dump($_GET);
echo "<br />" . PHP_EOL;
echo '$_REQUEST: ';
echo "<br />" . PHP_EOL;
var_dump($_REQUEST);
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
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>?arg=5" method="post">
			<input type="text" id="thepost" name="arg" required="required" />
			<input type="text" id="thepost" name="arg2" required="required" />
			<button type="submit">Send Post</button>
		</form>

	<script src="../js/jquery/jquery-3.3.1.min.js"></script>
	<script>



		
	</script>
	</body>
</html>