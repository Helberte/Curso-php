<?php

class Humano{
  public $idade = 24;
  public $nome = "Helberte";
  public $profissao = "desenvolvedor de software";

  public function falar($teste){
    echo "estou dizendo alguma coisa $teste";
  }
}

var_dump(class_exists("Humano")); // verifica se a classe existe
echo "<br>";
var_dump(get_class_vars("Humano")); // retorna um array nomeado com todas as propriedades e valores 
echo "<br>";
print_r(get_class_methods("Humano")); // retorna um array com os nomes dos metodos

?>