<?php

class Humano{

  public $idade = 29;

  public function falar(){
    echo "Olá pessoal! <br>";
  }

  private function gritar(){
    echo "ESTOU GRITANDO <br>";
  }
  protected function berrar(){
    echo "berrando";
  }
}

class Programador extends Humano{

  public function meuDeus(){
    $this->berrar();
  }

}

$helberte = new Humano;
$helberte->falar();

$programmer = new Programador;
$programmer->falar();

$programmer->meuDeus();


?>