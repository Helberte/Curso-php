<?php

// classes abstratas não criam objetos, instanciadas
// pode ter metodos abstratos que se herdada a classe abstrata, ele devem ser implementados obrigatoriamente


// classe abstrata não se instancia
// pode ter metodos nomais, porém será impossível invoca-los
// metodos abstratos de implementação obrigatoria
// metodos abstratos implementados somente nas classes que herdam a abstrata

abstract class Teste{

  public static function testeClassAbstract(){

    echo "este metodo é de uma classe abstrata cuja implementação não é obrigatória <br>";
  }

  abstract public function metodoAbstrato();
  // metodos abstratos são de implementação obrigatoria nas classes que herdam a classe abstrata, porém não se implementa na classe abstrata, apanenas na classe que herdar 
}

class Helberte extends Teste{
  public function metodoAbstrato()
  {
    echo "este metodo é abstrado";
  }
}

Teste::testeClassAbstract();
$hbt = new Helberte;
$hbt->metodoAbstrato();
?>