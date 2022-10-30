<?php


class Car{
  
  private $portas;
  protected $teste;
}

class CarPasseio extends Car{
  
}

$bmw = new Car;
$bmw->teste = "outro teste";
//$bmw->portas = 4;

$uno  = new CarPasseio;
$uno->portas = 6;

echo "Uno com " . $uno->portas . " portas.";

?>