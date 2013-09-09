<?php

class Dictionnaire {

	var $entrees;

	function __construct() {
		$this->entrees = array();
	}

	public function estAnagramme($mot,$entree) {
		$autreEntree = new Entree($mot);
		return $autreEntree->clef() == $entree->clef();
	}
	public function anagrammes($mot) {
		$resultat = array();

		foreach ($this->entrees as $entree) {
			if ($this->estAnagramme($mot, $entree))
				array_push($resultat, $entree->mot());
		}
		return $resultat;
	}

	public function ajoute($mot) {
		$entree = new Entree($mot);
		array_push($this->entrees, $entree);
	}
}
?>