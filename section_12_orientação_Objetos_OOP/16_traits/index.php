<?php

// a palavra reservada traits significa que podemos chamar especificamentte
// aquela classe dentro de outra usando a palavra use
// desta forma fica muito claro que estamos utilizando
// os metodos de uma classe especifica

trait Objeto{

  public $y = 10;

  public function teste(){
    echo "testando traits de objeto <br>";
  }
}

trait Testando{
  public function traitTeste(){
    return "este metodo está retornando string";
  }
}

class Central{
  use Objeto;
  use Testando;
}

$x = new Central;

$x->teste();
echo $x->traitTeste();
echo "<br>";
echo $x->y;
?>