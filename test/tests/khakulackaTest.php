<?php
use khal\khakulacka\khakulacka;
final class khakulackaTest extends PHPUnit\Framework\TestCase{
    public function testSettersAndGetters(){
        $p = new khakulacka;
        $p -> setx(8);
        $p -> sety(8);
        $this -> assertSame($p -> getx(),8);
        $this -> assertSame($p -> gety(),8);
    }
    public function testplus(){
        $p = new khakulacka;
        $p -> setx(8);
        $p -> sety(8);
        $vysledek = $p -> plus();
        $this -> assertSame(16,$vysledek);

    }
    public function testminus(){
        $p = new khakulacka;
        $p -> setx(8);
        $p -> sety(8);
        $vysledek = $p -> minus();
        $this -> assertSame(0,$vysledek);

    }
}