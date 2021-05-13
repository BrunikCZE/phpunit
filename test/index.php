<?php 
use khal\khakulacka;
require __DIR__ . "/vendor/autoload.php";
$c = new khakulacka\khakulacka();
$c -> setx(9);
$c -> sety(9);
var_dump($c -> minus());

