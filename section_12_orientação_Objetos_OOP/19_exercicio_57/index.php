<?php

class Cachorro{

  public $nome;
  public $idade;
  public $raca;
  public $cor;

  function __construct($nome, $idade, $raca, $cor)
  {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->raca = $raca;
    $this->cor = $cor;
  }


  public function getInformacoes(){
    return "Nome: $this->nome,
            idade: $this->idade,
            raca: $this->raca,
            cor: $this->cor";
  }
}

$dog = new Cachorro("Rex", 3, "buldogue", "preta");

echo $dog->getInformacoes();

?>