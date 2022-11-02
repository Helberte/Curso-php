<?php


class Car{
  public $portas;
  public $cor;
  public $marca;

  function __construct($portas, $cor, $marca = "bmw")
  {
    $this->portas = $portas;
    $this->cor = $cor;
    $this->marca = $marca;
  }
}

$bmw = new Car(4, "vermelho");
echo $bmw->cor . "<br>";
echo $bmw->marca . "<br>";
echo $bmw->portas . "<br>";


?>