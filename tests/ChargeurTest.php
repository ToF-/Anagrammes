<?php
require './public_html/chargeur.php';

class ChargeurTests extends PHPUnit_Framework_TestCase
{
	public function test_chargeur_remplit_le_dictionnaire() {
		$data = "TURC\n";
		file_put_contents("dictionnaire.txt", $data);
		$chargeur = new Chargeur();
		$dictionnaire = new dictionnaire();
		$chargeur->charge("dictionnaire.txt", $dictionnaire);
		$resultat = array("TURC");
    	$this->assertEquals($resultat, $dictionnaire->anagrammes("TRUC"));
	}
}
?>