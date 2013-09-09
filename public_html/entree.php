<?php

class Entree {

	function __construct($string) {
		$this->mot = $string;
		$this->clef = $this->calcule_clef();
	}
	
	private function calcule_clef() {
		$a = str_split($this->mot);
		sort($a);
		return implode('',$a);

	}
	public function clef() {
		return $this->clef;
	}

	public function mot() {
		return $this->mot;
	}
}
?>