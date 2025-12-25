<?php

use PHPUnit\Framework\TestCase;
require "src/Panier.php";
class PanierTest extends TestCase{
    public function testcalculerPrixTTC(){

        //Arrange : preparation l'objet
        Panier::$TauxTaxe=1.2;
        $p1=new Panier(100);
  
        //Act : Agir sur l'objet => execution de la methode a tester
        $prixTTC=$p1->calculerPrixTTC();
        //Assert : Verification du resultat
        $this->assertEquals(120,$prixTTC );
    }
    /*
    public function testgetPrix(){
        $p1=new Panier(100);
        $pr=$p1->getPrix();
        $this->assertTrue($pr==100);
    }
    public function testAppliquerRemise() {
    $p1 = new Panier(200);

    $p1->appliquerRemise(10); // 10% de remise
    $this->assertEquals(180, $p1->getPrix());

    $p1->appliquerRemise(50); // 50% de remise sur 180
    $this->assertEquals(90, $p1->getPrix());
}*/
}
#vendor/bin/phpunit tests/PanierTest.php --colors