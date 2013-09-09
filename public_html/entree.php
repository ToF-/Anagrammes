<?php

class Entree {

	function __construct($string) {
		$this->mot = $string;
	}
	
	public function clef() {
		$a = str_split($this->mot);
		sort($a);
		return implode('',$a);
	}
}
?>