<?php

  echo 'instrução <br>';

 
  echo mostra_pares(5);

  function mostra_pares($valor){
    $teste = true;
    $numero = 0;
    $result = '';

    while ($teste) {
    
      if($numero % 2 === 0){
        $result = $result . ' ' . $numero;
      }
  
      $numero++;
      if($numero > $valor){
        $teste = false;
      }
    }
    return $result;
  }

?>