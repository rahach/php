<?php
setrawcookie("user['name']", "Erwin", time()+60*60*24*30);
setrawcookie("user['email']", "erwin.lottermann@gmail.com", time()+60*60*24*30);

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