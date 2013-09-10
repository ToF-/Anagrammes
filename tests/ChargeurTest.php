<?php
require_once './public_html/entree.php';
require_once './public_html/dictionnaire.php';
require_once './public_html/chargeur.php';


class ChargeurTest extends PHPUnit_Framework_TestCase
{
	public function prepareFicher($data) {
		file_put_contents("dictionnaire.txt", $data);
		$this->chargeur = new Chargeur();
		$this->dictionnaire = new dictionnaire();
		$this->chargeur->charge("dictionnaire.txt", $this->dictionnaire);

	}
	public function test_chargeur_remplit_le_dictionnaire_avec_un_mot() {
		$this->prepareFicher("TURC\n");
		$resultat = array("TURC");
    	$this->assertEquals($resultat, $this->dictionnaire->anagrammes("TRUC"));
	}
	public function test_chargeur_remplit_le_dictionnaire_avec_N_mots() {
		$this->prepareFicher("TURC\nCRUT\n");
		$resultat = array("TURC","CRUT");
    	$this->assertEquals($resultat, $this->dictionnaire->anagrammes("TRUC"));
	}
}
?>