<?php

// primeiramente criaremos uma class somente para teste
class Pessoa{

  public function falar(){}
}

$eu = new Pessoa;

var_dump(is_object($eu)); // verifica se a variável é um objeto
echo "<br>";

echo get_class($eu); // retorna a classe do objeto;
echo "<br>";

var_dump(method_exists($eu, "falar")); // retorna se o metodo existe ou não

?>