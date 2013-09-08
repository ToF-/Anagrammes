<?php
require './public_html/dictionnaire.php';

class AnagrammesTests extends PHPUnit_Framework_TestCase
{
	public function setUp()
	{
		$this->dictionnaire = new Dictionnaire();
	}

    public function test_dictionnaire_vide_alors_aucun_anagramme()
    {
    	$this->assertEquals(array(), $this->dictionnaire->anagrammes("TRUC"));
    }

    public function test_une_entree_peut_etre_un_anagramme()
    {
    	$this->dictionnaire->ajoute("TURC");
    	$resultat = array("TURC");
    	$this->assertEquals($resultat, $this->dictionnaire->anagrammes("TRUC"));
    }

    public function test_deux_entrees_non_anagrammes()
    {
    	$this->dictionnaire->ajoute("TURC");
    	$this->dictionnaire->ajoute("CHAT");

    	$resultat = array("TURC");
    	$this->assertEquals($resultat, $this->dictionnaire->anagrammes("TRUC"));
    }
}
?>