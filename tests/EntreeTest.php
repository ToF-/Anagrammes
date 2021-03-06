<?php
require_once './public_html/entree.php';

class EntreeTest extends PHPUnit_Framework_TestCase
{
	public function test_entree_possede_une_clef()
    {
    	$e = new Entree("CHAT");
    	$this->assertEquals("ACHT", $e->clef());
    }

	public function test_entree_de_longueur_differente_possede_une_clef_differente()
    {
    	$e = new Entree("CHAT");
    	$this->assertEquals("ACHT", $e->clef());
    	$f = new Entree("CHIEN");
    	$this->assertEquals("CEHIN", $f->clef());
    }

    public function test_entree_possede_un_mot() {
        $e = new Entree("CHAT");
        $this->assertEquals("CHAT",$e->mot());
    }
}
	