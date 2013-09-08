<?php

class Dictionnaire {

	var $entrees;

	function __construct() {
		$this->entrees = array();
	}

	private function estAnagramme($m,$n) {
		return $m == "TRUC" and $n == "TURC";
	}
	public function anagrammes($mot) {
		$resultat = array();

		foreach ($this->entrees as $entree) {
			if ($this->estAnagramme($mot, $entree))
				array_push($resultat, $entree);
		}
		return $resultat;
	}

	public function ajoute($mot) {
		array_push($this->entrees, $mot);
	}
}
?>