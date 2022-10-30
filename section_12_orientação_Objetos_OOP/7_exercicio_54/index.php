<?php


class Pessoa{
  public $nome;
  public $idade;


  function andar($m){
    return "andou $m metros";
  }
}


$helberte = new Pessoa;

$helberte->nome = "Helberte";
$helberte->idade = 24;

echo $helberte->nome . " " . $helberte->andar(500) . " ele tem " . $helberte->idade;

?>