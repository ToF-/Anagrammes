<?php

class Dictionnaire {

	var $entrees;

	function __construct() {
		$this->entrees = array();
	}

	function anagrammes($mot) {
		return $this->entrees;
	}

	function ajoute($mot) {
		array_push($this->entrees, $mot);
	}
}
?>