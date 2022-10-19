<?php

  $nome = 8;


  if(is_string($nome)){
    echo 'é string';
  }else{
    echo 'não é uma string';
  }

  $valor = 4;
  echo '<br>';
  echo (5 <= $valor) ? "menor que $valor" : "maior que $valor";
  echo '<br>';

  if(0 === false){
    echo '0 é falso';
  }else{
    echo 'tipos diferentes';
  }
  
?>