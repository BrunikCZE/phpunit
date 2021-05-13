<?php
namespace khal\khakulacka;
class khakulacka{
    private $x;
    private $y;
    public function setx($x){
        $this->x = $x;
        return $this;
    }
    public function getx(){
        return $this->x;
    }
    public function sety($y){
        $this->y = $y;
        return $this;
    }
    public function gety(){
        return $this->y;
    }
    public function plus(){
        $vysledek = $this -> x + $this -> y;
        return $vysledek;  
    }
    public function minus(){
        $vysledek = $this -> x - $this -> y;
        return $vysledek;  
    }
}
