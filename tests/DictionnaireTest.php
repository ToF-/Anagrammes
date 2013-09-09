<?php
require_once './public_html/dictionnaire.php';

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
    public function test_deux_entrees_anagrammes()
    {
    	$this->dictionnaire->ajoute("TURC");
    	$this->dictionnaire->ajoute("CRUT");

    	$resultat = array("TURC","CRUT");
    	$this->assertEquals($resultat, $this->dictionnaire->anagrammes("TRUC"));
    }

	public function test_split()
	{
		$a = str_split("TRUC");
		sort($a);
		$this->assertEquals("CRTU",implode('',$a));
		
	}
    public function test_sortString()
    {
        $string = "bac";
        $stringParts = str_split($string);
        sort($stringParts);
        $this->assertEquals("abc", implode('',$stringParts));
    }
}
?>