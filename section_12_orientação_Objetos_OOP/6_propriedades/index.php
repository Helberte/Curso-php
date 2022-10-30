<?php


class Carro {
  public $rodas = 4;
  public $aro = 21;
  private $chassi = 12325545454544;

  function GetRodas(){
    return $this->rodas;
  }

  function GetAro(){
    return $this->aro;
  }

  function SetChassi($valor){
    $this->chassi = $valor;
    return $this->chassi;
  }

}

$bmw = new Carro;

echo $bmw->SetChassi(15555555);
echo "<br>";

$bmw->cor = "Vermelho";

echo $bmw->cor;
?>