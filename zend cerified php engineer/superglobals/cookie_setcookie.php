<?php
setcookie("user['nam$%&/e']", "Erwin$%%&");
setcookie("user['email']", "erwin.lottermann@gmail.com");

//var_dump($_COOKIE);

echo "<pre>";
var_dump(headers_list());
echo "</pre>";

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