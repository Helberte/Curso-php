<?php


interface ICaracteristicas{

  const nome = "Helberte";
  public function falar();

}

class Humano implements ICaracteristicas{

  public function falar(){
    echo "olá pessoal";
  }

  public function dizerNome(){
    echo "Meu nome é: " . self::nome  . "<br>";
  }
}

$pessoa = new Humano;

$pessoa->falar();
echo "<br>";
echo $pessoa->dizerNome();
?>