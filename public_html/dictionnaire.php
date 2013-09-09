<?php

class Dictionnaire {

	var $entrees;

	function __construct() {
		$this->entrees = array();
	}

	public function estAnagramme($m,$n) {
		$s = str_split($m);
		$t = str_split($n);
		sort($s);
		sort($t);
		return implode('',$s) == implode('',$t);
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