<form id="add_film" action="save_film.php" method="post">
	<p><label>Titel: </label>
	<input type="text" name="titel" id="titel" value=""  placeholder="Filmtitel" required />
	
	<p><label>Beschreibung: </label>
	<textarea id="descr" name="descr" required></textarea></p>
	
	<p><label>Dauer: </label>
	<input type="number" id="dauer" name="dauer" min="60" max="600" required /></p>
	
	<p><label>Erscheinungsjahr: </label>
	<input type="year" id="release" name="release" required /></p>
	
	<p><label>Genre: </label>
	<select name="genre" id="genre" required>
		<option value=""> ? </option>
		<?php echo $genre_str; ?>
	</select></p>
	
	<p><label>Regisseur: </label>
	<select name="regi" id="regi" required>
		<option value=""> ? </option>
		<?php echo $regi_str; ?>
	</select></p>
	
	<button id="save_termin" type="submit">Speichern</button>
	
</form>



<?php


?>