<html>
<head>
<title>Short Tag</title>	
</head>
<body>
<?php $variable = "Hello World!" ?>
<?php if(!empty($variable)): ?>
<h1><?= $variable?></h1>
<?php else: ?>
<h1>Good Night!</h1>	
<?php endif; ?>
</body>	
</html>