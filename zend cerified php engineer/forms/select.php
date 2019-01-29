<form method="post">
	<select name="list">
		<option>1</option>
		<option>two</option>
		<option>drei</option>
	</select>
	<button type="submit"></button>
</form>

<?php
var_dump($_POST['list'])
?>