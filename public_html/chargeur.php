<?php
class Chargeur {
	public function charge($fichier, $dictionnaire) {
		$data = file_get_contents($fichier);
		$dictionnaire->ajoute($data);
	} 
}

?>