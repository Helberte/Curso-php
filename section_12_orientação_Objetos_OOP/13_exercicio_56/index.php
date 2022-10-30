<?php


class Humano{
  public $nome;
  public $idade;
  protected $cpf;

  public function falar(){
    echo "Humano falando <br>";
  }
}

class Professor extends Humano{
  public $turma;
  public $escola;

  public function setCPF($cpf){
    $this->cpf = $cpf;
  }

  public function getCPF(){
    return $this->cpf;
  }
}

$helberte = new Humano;
$helberte->falar();

$professor = new Professor;
$professor->setCPF("0125456325");
echo $professor->getCPF();



?>