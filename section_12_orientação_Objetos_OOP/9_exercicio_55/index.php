<?php

class Carro{
  public $modelo = "bmw";
  public $montadora = "gol";
  public $portas = 4;
  public $velocidadeMax = 0;

  function setVelocidadeMaxima($velocidade){
    $this->velocidadeMax = $velocidade;
  }

  function getVelocidadeMaxima(){
    return $this->velocidadeMax;
  }
}

$carro = new Carro;
$carro->setVelocidadeMaxima(5000);

echo "Velocidade máxima: " . $carro->getVelocidadeMaxima();

?>