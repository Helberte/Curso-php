<?php


class Pessoa{
  public function falar($frase){
    echo $frase;
  }
}


$pessoa = new Pessoa();
$outra_pessoa = new Pessoa();

$pessoa->falar("Olá, eu sou a pessoa 1 <br>");
$outra_pessoa->falar('E eu sou a pessoa 2<br>');
// criando atributos

$pessoa->nome = 'Helberte';
$pessoa->idade = 24;
$pessoa->altura = 1.65;

echo $pessoa->altura;

?>