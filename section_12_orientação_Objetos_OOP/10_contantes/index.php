<?php

// constantes não precisam de cifrão para serem declaradas
// constantes ficam maiusculas
// para acessá-las precisa colocar dois pontos

// para acessá-la dentro da classe usa-se a palavra reservada self
// self::CONSTANTE

class Humano{
  public const OLHOS = 2;
  public const PERNAS = 2;
  public const BRACOS = 2;


  function getBracos(){
    return self::BRACOS;
  }
}

$helberte = new Humano;

echo "Helberte tem: " . $helberte::BRACOS . " braços, " 
      . $helberte::PERNAS . " pernas e " . $helberte::OLHOS 
      . " olhos.";

echo "<br>";
echo $helberte->getBracos() . " braços.";
?>