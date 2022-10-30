<?php


class Animal{
  public $nome;

  function setNome($nome){
    $this->nome = $nome;
  }

  function latir(){
    return "au au";
  }

  function latirForte(){
    return strtoupper($this->latir());
  }
}

$frida = new Animal;
$frida->setNome("Frida");

echo $frida->nome;
echo "<br>" . $frida->latirForte();
?>