
<?php


$original_text = "This is a test.\nThis is only a test.\nThis is not an important string.\n";
echo "The original text is " . strlen($original_text) . " characters long.\n";

$fp = fopen('test.deflated', 'w');
/* Here "6" indicates compression level 6 */
stream_filter_append($fp, 'zlib.deflate', STREAM_FILTER_WRITE, 6);
fwrite($fp, $original_text);
fclose($fp);

echo "The compressed file is " . filesize('test.deflated') . " bytes long.\n";

/* Generates output:

The original text is 70 characters long.
The compressed file is 56 bytes long.

 */



echo "<br /><br />";









$str = file_get_contents('php://input');

parse_str($str, $str);

var_dump($str); 


$fp = fopen('php://output', 'w');
stream_filter_append($fp, 'string.toupper');
fwrite($fp, 'Hello World!'); //User will see Hello World!
var_dump(stream_context_get_params($fp));
fclose($fp);



if($_SERVER['REQUEST_METHOD']=='GET') {
	if(isset($_GET['versteckt'])) {
		$ausgabe_get = $_GET['versteckt'];
	}
} elseif($_SERVER['REQUEST_METHOD']=='POST') {

	if(isset($_POST['versteckt']) && strlen($_POST['versteckt']) > 3) {
		$ausgabe_post = $_POST['versteckt'];
	}
}
?>
<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8" />
		<title>Übung </title>

<!--		<link href="../css/basic_style.css?ts=<?php echo time();?>" rel="stylesheet" type="text/css" /> -->
		<style>
			div {
				width: 45%;
				float: left;
				margin-right: 15px;
			}
			p { clear: both; text-align: center;}
		</style>
	</head>
	<body>
		<h3>Formulardaten senden</h3>
		<div>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<input type="text" id="postID" name="versteckt1" value="" />
			<input type="text" id="postID" name="versteckt2" value="" />			
			<button type="submit">Formular senden POST</button>
		</form>
		<p><?php echo "\n".$ausgabe_post; ?></p>
		</div>
		
		<div>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
			<input type="text" id="getID" name="versteckt" value="" />
			<button type="submit">Formular senden GET</button>
		</form>
		<p><?php echo $ausgabe_get; ?></p>
		</div>
		
		
		
		<?php
//			foreach ($_SERVER as $index => $wert) {
//print $index . ": " . $wert . "<br />";
//}
		?>
	

<!--	<script src="../js/jquery/jquery-3.3.1.min.js"></script> -->
	<script>
		
	</script>
	</body>
</html>