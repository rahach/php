<?php
# Funktionen
#
#

	class FlipDate{
		public function flip($datum){
			$dat_arr = explode('.', $datum);
			return implode('.', array_reverse($dat_arr));
		}
	}


	function create_b_date(){
		//Format: jjjjmmtt
		$jahr = range(1960,2000);
		$monat = range(1,12);	
		$tag = range(1,31);

		do{
			$j = $jahr[array_rand($jahr, 1)];
			$m = $monat[array_rand($monat, 1)];	
			$t = $tag[array_rand($tag, 1)];

			$mm = $m < 10 ? '0' . $m : $m;
			$tt = $t < 10 ? '0' . $t : $t;

			$b_datum = $j . '.' . $mm . '.' . $tt;
		} while(!checkdate($mm, $tt, $j));

		return $b_datum;
	}

	function uml_replace($arg){
		$uml = array(' ', 'ä', 'ü', 'ö', 'Ä', 'Ü', 'Ö', 'ß');
		$uml_replace = array('-', 'ae', 'ue', 'oe', 'Ae', 'Ue', 'Oe', 'ss');		
		$erg = str_replace($uml, $uml_replace, $arg);
		return $erg;
	}


?>