<?php
require_once './public_html/entree.php';
require_once './public_html/dictionnaire.php';
require_once './public_html/chargeur.php';


class ChargeurTests extends PHPUnit_Framework_TestCase
{
	public function test_chargeur_remplit_le_dictionnaire_avec_un_mot() {
		$data = "TURC\n";
		file_put_contents("dictionnaire.txt", $data);
		$chargeur = new Chargeur();
		$dictionnaire = new dictionnaire();
		$chargeur->charge("dictionnaire.txt", $dictionnaire);
		$resultat = array("TURC");
    	$this->assertEquals($resultat, $dictionnaire->anagrammes("TRUC"));
	}
	public function test_chargeur_remplit_le_dictionnaire_avec_N_mots() {
		$data = "TURC\nCRUT\n";
		file_put_contents("dictionnaire.txt", $data);
		$chargeur = new Chargeur();
		$dictionnaire = new dictionnaire();
		$chargeur->charge("dictionnaire.txt", $dictionnaire);
		$resultat = array("TURC","CRUT");
    	$this->assertEquals($resultat, $dictionnaire->anagrammes("TRUC"));
	}
}
?>