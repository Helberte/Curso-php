<?php

// basicamente estas classes não tem nome, elas são declaradas dentro de uma variável



$pessoa = new class(){

  public $nome = "helberte";

  public function getNome(){
    echo "meu nome é $this->nome";
  }
};

echo $pessoa->nome . "<br>";
$pessoa->getNome();

?>