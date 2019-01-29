<?php
include('../includes/start.microtime.inc.php');

$dbname = 'uebung_wetterdaten';
require_once '../includes/pdo_connect.inc.php';

if(isset($_GET['cont'])) {
	$cont = $_GET['cont'];
} else {
	$cont = '';
}


?>
<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8" />
		<title>Übung</title>
		<link href="../../css/basic_style.css?ts=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
		<link href="../../css/basic_print_style.css" rel="stylesheet" type="text/css" media="print" />				
		<style></style>
	</head>
	<body>
		<nav>
		<ul>
			<li><a href="index.php?cont=ad">1) Alle Daten</a></li>
			<li><a href="index.php?cont=sh">2) Standort, Höhe</a></li>
			<li><a href="index.php?cont=wd">3) Windgeschwindigkeit, Dichte</a></li>
			<li><a href="index.php?cont=cux">4) Cuxhaven</a></li>			
			<li><a href="index.php?cont=wa">5) Welche Ausgabe</a></li>						
			<li><a href="index.php?cont=ab">6) Alle Betreiber</a></li>									
			<li><a href="index.php?cont=aw">7) Anzahl Wetterstationen</a></li>												
			<li><a href="index.php?cont=avg">8) AVG Qualität</a></li>															
			<li><a href="index.php?cont=zs">9) Zugspitze</a></li>																		
			<li><a href="index.php?cont=gb">10) Geo Breite</a></li>																					
			<li><a href="index.php?cont=gw">11) Greifswald</a></li>																								
			<li><a href="index.php?cont=bw">12) Bundeswehr</a></li>																											
			<li><a href="index.php?cont=gl">13) Geo Laenge</a></li>																												
			<li><a href="index.php?cont=mh">14) Max Höhe</a></li>
			<li><a href="index.php?cont=mh">14) Max Höhe</a></li>																												
			<li><a href="index.php?cont=pdo">PDO</a></li>																												
		</ul>
		</nav>
		<main>
		<?php
			switch($cont) {
				case 'ad':
				include('alle_daten.php');
				break;
				case 'pdo':
				include('pdo.php');
				break;				
				case 'sh':
				include('stdo_hoehe.php');
				break;
				case 'wd':
				include('windg_dichte.php');
				break;
				case 'cux':
				include('ws_cuxhaven.php');
				break;				
				case 'wa':
				include('welche_ausgabe.php');
				break;								
				case 'ab':
				include('alle_betreiber.php');
				break;												
				case 'aw':
				include('anz_stdo.php');
				break;																
				case 'avg':
				include('avg_qualitaet.php');
				break;																				
				case 'zs':
				include('zugspitze.php');
				break;																								
				case 'gb':
				include('geo_breite.php');
				break;																												
				case 'gw':
				include('greifswald.php');
				break;																																
				case 'bw':
				include('bundeswehr.php');
				break;	
				case 'gl':
				include('geo_laenge.php');
				break;	
				case 'mh':
				include('hoechst_gelegen_stdo.php');
				break;																																											
				default:
				include('alle_daten.php');
				break;
			}
			
		?>
	
		</main>

		<?php include('../includes/footer.inc.php'); ?>
		<script src="../../js/jquery/jquery-3.3.1.min.js"></script>		
		<script>

		</script>
	</body>
</html>