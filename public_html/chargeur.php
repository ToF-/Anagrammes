<?php
class Chargeur {
	public function charge($fichier, $dictionnaire) {
		$data = file_get_contents($fichier);
		$mots = explode("\n",$data);
		foreach ($mots as $mot) {
			$dictionnaire->ajoute($mot);
		}
	} 
}

?>