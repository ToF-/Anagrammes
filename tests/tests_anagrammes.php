<?php
require './public_html/dictionnaire.php';

class AnagrammesTests extends PHPUnit_Framework_TestCase
{
    public function test_dictionnaire_vide_alors_aucun_anagramme()
    {
    	$dictionnaire = new Dictionnaire();
    	$anagrammes = $dictionnaire->anagrammes("TRUC");
    	$this->assertEquals(array(), $anagrammes);
    }
}
?>