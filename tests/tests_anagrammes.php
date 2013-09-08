<?php
require './public_html/dictionnaire.php';

class AnagrammesTests extends PHPUnit_Framework_TestCase
{
    public function test_dictionnaire_vide_alors_aucun_anagramme()
    {
    	$dictionnaire = new Dictionnaire();
    	$this->assertEquals(array(), $dictionnaire->anagrammes("TRUC"));
    }

    public function test_une_entree_peut_etre_un_anagramme()
    {
    	$dictionnaire = new Dictionnaire();
    	$dictionnaire->ajoute("TURC");
    	$resultat = array("TURC");
    	$this->assertEquals($resultat, $dictionnaire->anagrammes("TRUC"));
    }
}
?>